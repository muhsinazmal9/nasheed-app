<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if (!Auth::guard('sanctum')->check()) {
            return error('Not logged in', [], 401);
        }

        $user = $request->user();
        return success('User retrieved successfully', new UserResource($user));
    }
}
