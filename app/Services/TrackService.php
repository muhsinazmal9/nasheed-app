<?php

namespace App\Services;

use App\Models\Track;
use Illuminate\Support\Str;
use App\Traits\ImageSaveTrait;
use Illuminate\Support\Facades\DB;
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


    public function createTrack(StoreTrackRequest $request)
    {
        $inputs = [];
        $inputs['status'] = (bool) ($request['status'] ?? false);
        $inputs['slug'] = Str::slug($request['title']);

        $count = 1;
        while (Track::where('slug', $inputs['slug'])->exists()) {
            $inputs['slug'] = Str::slug($request['title']) . '-' . $count;
            $count++;
        }

        if ($request->hasFile('cover_image')) {
            $image_name = $this->saveImage('track', $request->file('cover_image'), 400, 400);
            $inputs['cover_image'] = $image_name;
        }

        // if ($request->hasFile('audio_file')) {
        //     $audio_name = $this->saveAudio('track', $request->file('audio_file'));
        //     $inputs['audio_file'] = $audio_name;
        // }

        $request = array_merge($request->except('_token', '_method', 'artist_id'), $inputs);

        dd($request);


        try {
            DB::beginTransaction();

            $track = Track::create($request);

            $artists = $request['artist_id'];
            $track->artists()->attach($artists);

            DB::commit();

            return $track;
        } catch (\Exception $e) {
            DB::rollBack();
            logger()->error('Error creating track: ' . $e->getMessage());
            return null;
        }
    }
}
