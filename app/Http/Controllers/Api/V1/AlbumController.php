<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Album;
use App\Http\Resources\AlbumResource;

class AlbumController extends Controller
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $albums = Album::active()->get();
        return success('Albums retrieved successfully', AlbumResource::collection($albums));
    }


    /**
     * @param Request $request
     * @param Album $album
     * @return JsonResponse
     */
    public function show(Request $request, Album $album): JsonResponse
    {
        if (!$album->status) {
            return error('Album not found', status: 404);
        }

        return success('Album retrieved successfully', new AlbumResource($album));
    }
}
