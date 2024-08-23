<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LyricistController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    Route::controller(ArtistController::class)->name('artists.')->prefix('artists')->group(function () {
        Route::post('/update-status/{artist}', 'updateStatus')->name('status.update');
    });

    Route::controller(LyricistController::class)->name('lyricists.')->prefix('lyricists')->group(function () {
        Route::post('/update-status/{lyricist}', 'updateStatus')->name('status.update');
    });

    Route::resource('/artists', ArtistController::class);
    Route::resource('/lyricists', LyricistController::class);
});

require __DIR__.'/auth.php';
