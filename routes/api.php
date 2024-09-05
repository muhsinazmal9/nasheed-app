<?php

use App\Http\Controllers\Api\V1\ArtistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\DedicationController;

// Authentication related APIs (Public)
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Authentication related APIs (Private)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'getAuthenticatedUser']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

/**
 * Public APIs
 */

// dedications
Route::get('/dedications', [DedicationController::class, 'index']);
Route::get('/dedications/{dedication}', [DedicationController::class, 'show']);

// artists
Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/artists/{artist}', [ArtistController::class, 'show']);
