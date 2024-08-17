<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LyricistController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'verified'])->group(function(){

    Route::controller(HomeController::class)->group(function(){
        Route::get('/dashboard',  'dashboard')->name('dashboard');
    });

    Route::resource('/artists', ArtistController::class);




    Route::post('/lyricistStatus/{id}', [HomeController::class, 'lyricistStatus'])->name('lyricistStatus');
    Route::resource('/lyricists', LyricistController::class);
});









require __DIR__.'/auth.php';
