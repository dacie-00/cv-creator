<?php

use App\Http\Controllers\CvController;
use App\Http\Controllers\CvEducationController;
use App\Http\Controllers\CvLanguageController;
use App\Http\Controllers\CvSkillController;
use App\Http\Controllers\CvWorkExperienceController;
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
    Route::put('/cvs/{cv}', [CvController::class, 'update'])->name('cvs.update');
    Route::get('/cvs/{cv}', [CvController::class, 'show'])->name('cvs.show');

    Route::post('cvs/{cv}/work-experiences',
        [CvWorkExperienceController::class, 'store'])
        ->name('cvs.work-experiences.store');
    Route::delete('cvs/{cv}/work-experiences/{work_experience}', [CvWorkExperienceController::class, 'destroy'])
        ->name('cvs.work-experiences.destroy');
    Route::put('cvs/{cv}/work-experiences/{work_experience}', [CvWorkExperienceController::class, 'update'])
        ->name('cvs.work-experiences.update');

    Route::post('cvs/{cv}/educations',
        [CvEducationController::class, 'store'])
        ->name('cvs.educations.store');
    Route::delete('cvs/{cv}/educations/{education}', [CvEducationController::class, 'destroy'])
        ->name('cvs.educations.destroy');
    Route::put('cvs/{cv}/educations/{education}', [CvEducationController::class, 'update'])
        ->name('cvs.educations.update');

    Route::post('cvs/{cv}/languages',
        [CvLanguageController::class, 'store'])
        ->name('cvs.languages.store');
    Route::delete('cvs/{cv}/languages/{language}', [CvLanguageController::class, 'destroy'])
        ->name('cvs.languages.destroy');
    Route::put('cvs/{cv}/languages/{language}', [CvLanguageController::class, 'update'])
        ->name('cvs.languages.update');

    Route::post('cvs/{cv}/skills',
        [CvSkillController::class, 'store'])
        ->name('cvs.skills.store');
    Route::delete('cvs/{cv}/skills/{skill}', [CvSkillController::class, 'destroy'])
        ->name('cvs.skills.destroy');
    Route::put('cvs/{cv}/skills/{skill}', [CvSkillController::class, 'update'])
        ->name('cvs.skills.update');
});

require __DIR__ . '/auth.php';
