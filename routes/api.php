<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\LoginController;
use App\Http\Controllers\Api\V1\DedicationController;





// Authentication related APIs (Public)
Route::post('/login', [LoginController::class, 'login']);



// Public APIs
Route::get('/dedications', [DedicationController::class, 'index']);




