<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Category;
use App\Models\Dedication;
use App\Http\Controllers\Controller;
use App\Http\Resources\DedicationResource;

class DedicationController extends Controller
{
    public function index()
    {
        $dedications = Dedication::all();
        return success('Dedications retrieved successfully', DedicationResource::collection($dedications));
    }
}
