<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('users', UserController::class)->names([
    'show' => 'users.view'
]);
Route::resource('users.comment', CommentController::class)->shallow();

Route::get('/', [ProfileController::class, 'index']);

Route::resource('students', StudentController::class);