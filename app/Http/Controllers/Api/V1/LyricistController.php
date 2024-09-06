<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Lyricist;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\LyricistResource;

class LyricistController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $lyricists = Lyricist::active()->get();

        return success('Lyricists retrieved successfully', LyricistResource::collection($lyricists));
    }

    /**
     * Display the specified resource.
     * @param  \App\Models\Lyricist  $lyricist
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Lyricist $lyricist): JsonResponse
    {
        if (!$lyricist->status) {
            return error('Lyricist not found', status: 404);
        }
        return success('Lyricist retrieved successfully', new LyricistResource($lyricist));
    }
}
