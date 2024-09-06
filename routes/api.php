<?php

use App\Http\Controllers\Api\V1\ArtistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\DedicationController;

// Authentication related APIs
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


/**
 * Public APIs
 */

Route::controller(DedicationController::class)->group(function () {
    Route::get('/dedications', 'index');
    Route::get('/dedications/{dedication}', 'show');
});


Route::controller(ArtistController::class)->group(function () {
    Route::get('/artists', 'index');
    Route::get('/artists/{artist}', 'show');
});

/**
 * Private APIs
 */
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'getAuthenticatedUser']);
});