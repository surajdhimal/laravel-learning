<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;

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

Route::resource('staff', StaffController::class);

Route::resource('customers', CustomerController::class);
Route::resource('orders', OrderController::class);

Route::resource('country', CountryController::class);
Route::resource('client', ClientController::class);
Route::resource('blog', BlogController::class);

Route::resource('followers', FollowerController::class);
Route::resource('status', StatusController::class);
Route::resource('images', ImageController::class);

Route::resource('video',VideoController::class);
Route::resource('submission',SubmissionController::class);