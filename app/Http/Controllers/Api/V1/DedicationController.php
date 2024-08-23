<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\DedicationResource;
use App\Models\Dedication;

class DedicationController extends Controller
{
    public function index()
    {
        $dedications = Dedication::all();

        return success('Dedications retrieved successfully', DedicationResource::collection($dedications));
    }
}
