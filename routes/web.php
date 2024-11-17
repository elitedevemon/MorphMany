<?php

use App\Http\Controllers\MorphManyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('create', [MorphManyController::class, 'index']);
Route::get('student', [MorphManyController::class, 'student']);
Route::get('teacher', [MorphManyController::class, 'teacher']);