<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//UserController
Route::post('/sign-up/request', [UserController::class, 'SignUp']);

Route::post('login/request', [UserController::class, 'Login']);

Route::get('/', [UserController::class, 'CheckAuth'])->name('check_auth');

Route::get('/logout', [UserController::class, 'Logout']);

// Route::get('/assign_role',[UserController::class, 'assignRole']);

//Middleware route group to check role
Route::middleware('auth')->controller(UserController::class)->group(function () {
    Route::get('/admin_role', 'checkAdmin');
    Route::get('/user_role', 'checkUser');
    Route::get('/super_admin_role', 'checkSuperAdmin');
});


//Views
Route::view('/auth_fail', 'auth_fail');

Route::view('/sign-up', 'signup');

Route::view('/login', 'login');

Route::view('/home', 'home')->middleware('auth');
