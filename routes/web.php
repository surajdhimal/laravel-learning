<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
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

Route::get('/contacts', [ContactController::class, 'show']);

Route::resource('members', MemberController::class);
Route::resource('post', PostController::class);

Route::resource('employees', EmployeeController::class);
Route::resource('roles', RoleController::class);