<?php

namespace App\Services;

use App\Models\Track;
use Illuminate\Support\Str;
use App\Traits\ImageSaveTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreTrackRequest;
use Illuminate\Support\Facades\File;

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


    public function getTrackList(Request $request) {
        try {
            $columns = [
                'sl',
                'title',
                'description',
                'artist',
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
                foreach ($tracks as $track) {

                    $editLink = route('tracks.edit', $track->id);

                    $trackStatus = $track->status ? __('app.enabled') : __('app.disabled');
                    $trackStatusClass = $track->status ? 'success' : 'danger';
                    $view = 'View';
                    $edit = 'Edit';
                    $delete = 'Delete';

                    $status = "<div class=\"form-check form-switch\">
                                    <input class=\"form-check-input\" type=\"checkbox\"
                                        " . ($track->status == 1 ? 'checked' : '') . " name=\"status\"
                                        data-id=\"{$track->id}\" data-status=\"{$track->status}\"
                                        onchange=\"updateTrackStatus(this)\">
                                </div>";

                    $editBtn = "<a class=\"border-0 btn btn-sm\" href=\"" . route('tracks.edit', $track->id) . "\"><i
                                class=\"fa fa-pencil text-secondary fa-xl\"></i></a>";
                    $deleteBtn = "<button type='button' onclick=deleteCategory('{$category->slug}') class='dropdown-item'>{$delete}</button>";

                    $detailBtn = "<button type='button'  data-bs-toggle='modal' data-bs-target='#detailsModal' class='dropdown-item'
                    onclick='detailsModal({$category})'>{$view}</button>";

                    $categoryImage = asset($category->image);
                    $image = "<img class='rounded' src='{$categoryImage}' alt='{$category->name}' width='75'>";
                    $name = "<a class='text-dark' href='".route('admin.category.edit', $category->slug)."'>".$image.'&nbsp;&nbsp;&nbsp;'.$category->name.'</a>';

                    $nestedData['name'] = $name;
                    $nestedData['status'] = $status;
                    $nestedData['created_at'] = $category->created_at?->format('d/m/y');
                    $nestedData['actions'] = "<div class='dropdown text-center'>
                    <button class='dropdown-toggle' onclick='toggleActions(this)' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <i class='fa-solid fa-ellipsis'></i>
                    </button>
                    <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                        {$detailBtn}
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

            return success(__('app.category_list'), $json_data);
        } catch (\Exception $e) {
            logError('Category List Error ', $e);

            return error(__('app.something_went_wrong'));
        }


        // $tracks = Track::query()->active();
        // if ($request->has('q')) {
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
