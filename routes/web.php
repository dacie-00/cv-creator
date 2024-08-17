<?php

use App\Http\Controllers\CvController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
});

Route::middleware('auth')->group(function () {
    Route::get('/cvs', [CvController::class, 'index'])->name('cvs.index');
    Route::get('/cvs/create', [CvController::class, 'create'])->name('cvs.create');
    Route::post('/cvs', [CvController::class, 'store'])->name('cvs.store');
    Route::delete('/cvs/{cv}', [CvController::class, 'destroy'])->name('cvs.destroy');
    Route::get('/cvs/{cv}/edit', [CvController::class, 'edit'])->name('cvs.edit');
    Route::patch('/cvs/{cv}', [CvController::class, 'update'])->name('cvs.update');
    Route::get('/cvs/{cv}', [CvController::class, 'show'])->name('cvs.show');
});

require __DIR__.'/auth.php';
