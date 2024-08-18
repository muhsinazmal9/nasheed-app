<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\DedicationController;
use Illuminate\Support\Facades\Route;

// Authentication related APIs (Public)
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Authentication related APIs (Private)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

// Public APIs
Route::get('/dedications', [DedicationController::class, 'index']);
