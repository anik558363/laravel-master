<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;



Route::get('/', [FrontendController::class, 'index'])->name('frontend');
Route::get('/resume', [FrontendController::class, 'resume'])->name('resume');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
