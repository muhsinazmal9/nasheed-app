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
    public function index()
    {
        $tracks = Track::active()->get();

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
}
