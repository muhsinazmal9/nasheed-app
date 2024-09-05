<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArtistResource;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $artists = Artist::all();

        return success('Artists retrieved successfully', ArtistResource::collection($artists));
    }

    /**
     * Display the specified resource.
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Artist $artist): JsonResponse
    {
        return success('Artist retrieved successfully', new ArtistResource($artist));
    }
}
