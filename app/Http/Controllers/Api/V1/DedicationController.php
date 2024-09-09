<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\DedicationResource;
use App\Models\Dedication;
use Illuminate\Http\JsonResponse;

class DedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $dedications = Dedication::all();

        return success('Dedications retrieved successfully', DedicationResource::collection($dedications));
    }

    /**
     * Display the specified resource.
     * @param  \App\Models\Dedication  $dedication
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Dedication $dedication): JsonResponse
    {
        return success('Dedication retrieved successfully', new DedicationResource($dedication));
    }
}
