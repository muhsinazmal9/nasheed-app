<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LyricistController;
use App\Http\Controllers\DedicationController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('dashboard');
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

    Route::controller(DedicationController::class)->name('dedications.')->prefix('dedications')->group(function () {
        Route::post('/update-status/{dedication}', 'updateStatus')->name('status.update');
    });
    Route::controller(UserController::class)->name('users.')->prefix('users')->group(function () {
        Route::post('/update-status/{user}', 'updateStatus')->name('status.update');
    });

    Route::resource('/artists', ArtistController::class);
    Route::resource('/lyricists', LyricistController::class);
    Route::resource('/dedications', DedicationController::class);
    Route::resource('/tracks', TrackController::class);
    Route::resource('/users', UserController::class);

});


require __DIR__.'/auth.php';
