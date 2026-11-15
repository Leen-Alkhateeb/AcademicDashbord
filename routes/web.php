<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\LecturerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::resource('lecturers', LecturerController::class);
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/lectures', [LectureController::class, 'index'])->name('lectures.index');