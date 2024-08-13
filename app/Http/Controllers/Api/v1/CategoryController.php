<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(
            [
                'success' => true,
                'message' => 'Categories retrieved successfully.',
                'status' => 200,
                'data' => Category::select('id', 'title', 'slug', 'description')->get()
            ]
        );
    }
}
