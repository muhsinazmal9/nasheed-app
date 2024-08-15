<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\DedicationController;





// Authentication related APIs (Public)
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Authentication related APIs (Private)
Route::middleware('auth:sanctum')->group(function () {
   Route::post('/logout', [AuthController::class, 'logout']); 
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Public APIs
Route::get('/dedications', [DedicationController::class, 'index']);




