<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->validated();

        if (! Auth::attempt($credentials)) {
            return error('Invalid credentials', [], 401);
        }

        $user = User::where('email', $credentials['email'])->first();

        $user->tokens()->delete();

        $token = $user->createToken(User::BEARER);

        $data = [
            'token_type' => User::BEARER,
            'token' => $token->plainTextToken,
            'user' => new UserResource($user),
        ];

        return success('Login successful - token generated', $data);
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        if (Auth::guard('sanctum')->check()) {
            return error('Already logged in', [], 401);
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return success('Account created successfully', new UserResource($user));
    }

    public function logout(Request $request): JsonResponse
    {
        if (!Auth::guard('sanctum')->check()) {
            return error('Not logged in', [], 401);
        }

        $token = $request->user()->currentAccessToken();

        $token->delete();

        return success('Logout successful');
    }


    public function getAuthenticatedUser(Request $request): JsonResponse
    {
        if (!Auth::guard('sanctum')->check()) {
            return error('Not logged in', [], 401);
        }

        $user = $request->user();
        return success('User retrieved successfully', new UserResource($user));
    }
}
