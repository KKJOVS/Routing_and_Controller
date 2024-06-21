<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

Route::get('/about-me', [AboutMeController::class, 'show'])->name('about.me');
Route::get('/skills', [SkillsController::class, 'show'])->name('skills');
Route::get('/hobbies', [HobbiesController::class, 'show'])->name('hobbies');
