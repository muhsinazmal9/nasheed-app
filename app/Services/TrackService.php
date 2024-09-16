<?php

namespace App\Services;

use App\Models\Track;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\ImageSaveTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreTrackRequest;

class TrackService
{
    use ImageSaveTrait;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }


    public function createTrack(StoreTrackRequest $request): ?Track
    {
        $inputs = [];
        $inputs['status'] = (bool) ($request['status'] ?? false);
        $inputs['release_date'] = $request['release_date'] ?? now();
        $inputs['slug'] = Str::slug($request['title']);

        $count = 1;
        while (Track::where('slug', $inputs['slug'])->exists()) {
            $inputs['slug'] = Str::slug($request['title']) . '-' . $count;
            $count++;
        }

        if ($request->hasFile('cover_image')) {
            $image_name = $this->saveImage('tracks/cover_images', $request->file('cover_image'), 400, 400);
            $inputs['cover_image'] = $image_name;
        }

        if ($request->hasFile('audio_file')) {
            $audio_name = $this->saveAudio('tracks/audio_files', $request->file('audio_file'));
            $inputs['audio_file'] = $audio_name;
        }

        $artists = $request['artist_id'];
        $request = array_merge($request->except('_token', '_method', 'artist_id'), $inputs);

        try {
            DB::beginTransaction();

            $track = Track::create($request);


            $track->artists()->attach($artists);

            DB::commit();

            return $track;
        } catch (\Exception $e) {
            DB::rollBack();
            logger()->error('Error creating track: ' . $e->getMessage());
            return null;
        }
    }


    public function getDataTablesList(Request $request): JsonResponse
    {
        try {
            $columns = [
                'title',
                'description',
                // 'artist',
                'cover_image',
                'status',
                'actions'
            ];

            $tracks = Track::query();

            $totalData = $tracks->count();
            $totalFiltered = $totalData;

            $limit = $request->input('length');
            $start = $request->input('start');

            $dir = $request->input('order.0.dir') ?? 'desc';
            $order = $columns[$request->input('order.0.column')] ?? 'id';

            if ($order == 'actions') {
                $order = 'name';
            }

            if (empty($request->input('search.value'))) {
                $tracks = $tracks
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
            } else {
                $searchInput = $request->input('search.value');

                $tracks = $tracks
                    ->where('title', 'LIKE', "%{$searchInput}%")
                    ->orWhere(function ($query) use ($searchInput) {

                        if ($searchInput == 'enabled') {
                            $query->where('status', true);
                        }

                        if ($searchInput == 'disabled') {
                            $query->where('status', false);
                        }
                    })
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
                $totalFiltered = $tracks->count();
            }

            $data = [];

            if (! empty($tracks)) {
                foreach ($tracks as $key => $track) {
                    $sl = $key + 1;
                    $status = "<div class=\"form-check form-switch\">
                                    <input class=\"form-check-input\" type=\"checkbox\"
                                        " . ($track->status == 1 ? 'checked' : '') . " name=\"status\"
                                        data-id=\"{$track->id}\" data-status=\"{$track->status}\"
                                        onchange=\"updateTrackStatus(this)\">
                                </div>";

                    $editBtn = "<a class=\"border-0 btn btn-sm\" href=\"" . route('tracks.edit', $track->id) . "\"><i
                    class=\"fa fa-pencil text-secondary fa-xl\"></i></a>";
                    $deleteBtn = "<button class=\"border-0 btn btn-sm\" href=\"#\" onclick=\"deleteTrack(this)\"
                                data-id=\"{$track->id}\"><i
                                class=\"far fa-trash-can text-danger fa-xl\"></i></button>";

                    $trackImage = $track->cover_image ? asset($track->cover_image) : asset('images/no-image.png');
                    $image = "<img class='rounded' src='{$trackImage}' alt='{$track->name}' width='75'>";


                    $nestedData['DT_RowIndex'] = $sl;
                    $nestedData['title'] = $track->title ?? '';
                    $nestedData['description'] = $track->description ?? '';
                    $nestedData['status'] = $status;
                    $nestedData['cover_image'] = $image;
                    $nestedData['actions'] = "<div class='dropdown text-center'>
                        <button class='dropdown-toggle' onclick='toggleActions(this)' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            <i class='fa-solid fa-ellipsis'></i>
                        </button>
                        <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                            {$editBtn}
                            {$deleteBtn}
                        </div>
                    </div>";

                    $data[] = $nestedData;
                }
            }

            $json_data = [
                'draw' => intval($request->input('draw')),
                'recordsTotal' => intval($totalData),
                'recordsFiltered' => intval($totalFiltered),
                'data' => $data,
            ];

            return success('All tracks retrieved successfully', $json_data);
        } catch (\Exception $e) {
            logger()->error($e->getMessage());
            return error('Something went wrong');
        }
    }

    protected function saveAudio($file_destination, $audio_attribute): string
    {
        /**
         * Check and create directory if not exists
         */
        if (!File::isDirectory(public_path('uploads/' . $file_destination))) {
            File::makeDirectory(public_path('uploads/' . $file_destination), 0777, true, true);
        }

        $audio_name = time() . Str::random(10) . '.' . $audio_attribute->extension();
        $path = 'uploads/' . $file_destination . '/' . $audio_name;
        $audio_attribute->move(public_path('uploads/' . $file_destination . '/'), $audio_name);
        return $path;
    }


}
