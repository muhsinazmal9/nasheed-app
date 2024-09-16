<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Track;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TrackResource;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tracks = Track::query()->active();

        if ($request->has('artist_id')) {
            $tracks = $tracks->whereHas('artists', fn ($q) => $q->where('id', $request->artist_id));
        }

        if ($request->has('lyricist_id')) {
            $tracks = $tracks->where('lyricist_id', $request->lyricist_id);
        }

        if ($request->has('dedication_id')) {
            $tracks = $tracks->where('dedication_id', $request->dedication_id);
        }

        $tracks = $tracks->get();

        return success('Tracks retrieved successfully', TrackResource::collection($tracks));
    }


    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        if (!$track->status) {
            return error('Track not found', status: 404);
        }
        return success('Track retrieved successfully', new TrackResource($track));
    }

    /**
     * audioStream
     */
    public function audioStream(Track $track_id, $audio_base_name)
    {
        if (!$track_id->status) {
            return error('Track not found', status: 404);
        }
        $audio_file = public_path($track_id->audio_file);
        return response()->file($audio_file);
    }
}
