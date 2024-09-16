<?php

use App\Http\Controllers\AlbumController;
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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    Route::controller(ArtistController::class)->name('artists.')->prefix('artists')->group(function () {
        Route::post('/update-status/{artist}', 'updateStatus')->name('status.update');
        Route::get('/search', 'search')->name('search');
    });

    Route::controller(LyricistController::class)->name('lyricists.')->prefix('lyricists')->group(function () {
        Route::post('/update-status/{lyricist}', 'updateStatus')->name('status.update');
        Route::get('/search', 'search')->name('search');
    });

    Route::controller(DedicationController::class)->name('dedications.')->prefix('dedications')->group(function () {
        Route::post('/update-status/{dedication}', 'updateStatus')->name('status.update');
        Route::get('/search', 'search')->name('search');
    });
    Route::controller(UserController::class)->name('users.')->prefix('users')->group(function () {
        Route::post('/update-status/{user}', 'updateStatus')->name('status.update');
    });

    Route::controller(ProfileController::class)->name('profile.')->prefix('profile')->group(function () {
        Route::post('/password-update/{profile}', 'profile_password')->name('password');
    });
    Route::controller(TrackController::class)->name('tracks.')->prefix('tracks')->group(function () {
        Route::get('/search', 'search')->name('search');
    });

    Route::controller(AlbumController::class)->name('albums.')->prefix('albums')->group(function () {
        Route::post('/update-status/{album}', 'updateStatus')->name('status.update');
    });

    Route::controller(TrackController::class)->name('tracks.')->prefix('tracks')->group(function () {
        Route::post('/update-status/{track}', 'updateStatus')->name('status.update');
        Route::get('dataTables/list', 'getDataTablesList')->name('dataTables.list');
    });

    Route::resource('/artists', ArtistController::class);
    Route::resource('/lyricists', LyricistController::class);
    Route::resource('/dedications', DedicationController::class);
    Route::resource('/tracks', TrackController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/profile', ProfileController::class);
    Route::resource('/albums', AlbumController::class);

});


require __DIR__.'/auth.php';
