<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DonationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profileupdate', [PageController::class, 'profileupdate']);
    Route::get('/postachievement', [PageController::class, 'postachievement']);

    Route::get('/myfeed', [PageController::class, 'myfeed']);

    Route::get('/userfeed/{id}', [PageController::class, 'userfeed']);

    Route::post('/donate', [DonationController::class, 'donate']);
});

Route::get('{user}/profile/{id}',[PageController::class,'userprofile']);

require __DIR__.'/auth.php';
