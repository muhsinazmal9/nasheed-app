<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\TrackController;
use App\Http\Controllers\Api\V1\ArtistController;
use App\Http\Controllers\Api\V1\LyricistController;
use App\Http\Controllers\Api\V1\DedicationController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\AlbumController;

// Authentication related APIs
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


/**
 * Public APIs
 */
Route::apiResource('dedications', DedicationController::class)->only(['index', 'show']);
Route::apiResource('artists', ArtistController::class)->only(['index', 'show']);
Route::apiResource('lyricists', LyricistController::class)->only(['index', 'show']);
Route::apiResource('tracks', TrackController::class)->only(['index', 'show']);
Route::apiResource('albums', AlbumController::class)->only(['index', 'show']);

/**
 * Private APIs
 */
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', UserController::class);
});