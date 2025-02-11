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
//PostController Route
Route::get('get_post', [PostController::class, 'sendPosts']);

//UserController
Route::get('/sign-up/request', [UserController::class, 'SignUp']);



// Route::get('/hello-blade', function () {
//     return view('hello')
//     ->with('name', 'Tâm')
//     ->with('job', 'Intern IT');
// });
Route::get('/hello-blade', function () {
    return view('hello', ['name' => 'tâm', 'job' => 'IT']);
});

// Route::get('/toform', function () {
//     return view('form',[]);
// });
// 
// Route::get('/user/{id}', function (string $id_user) {
//     return 'User with the id is: ' . $id_user;
// })->where('id','.*');
// });
//

// Route::get(
//     '/user/{user_name?}',
//     [function (?string $username = 'Phạm Ngọc Tâm') {
//         return 'User name is: ' . $username;
//     }]
// )->where('user_name', '[A-Za-z]+');

// Register the route for all method in UserController
Route::controller(UserController::class)->group(function () {
    Route::get('/controller/demo', 'Demo');
    Route::get('/controller/index', 'Index');
});

Route::get('inspect-header', [UserController::class, 'InspectHeader']);

// Route::get('/form/name', [UserController::class, 'GetName']);
// Route::get('/form/name', function (Request $request) {
//     return response()->json([
//         'success' => true,
//         'message' => 'Bạn đã gửi: ' . $request->query('name')
//     ]);
// });
Route::get('form/name', function (Request $request) {
    $name = $request->string('name')->trim();
    return 'Tên sau khi dùng trim(): ' . $name;
});
// Register the route for PhotoController
Route::resource('photos', PhotoController::class);

Route::resources([
    'photos' =>  PhotoController::class
]);
// Redirect route: uri is photos will redirect to /user
Route::redirect('/photos', '/user');

// View Routes
Route::view('//', 'welcome', []);

Route::view('/hello', 'hello', []);

Route::view('/toform', 'form');

Route::view('/sign-up', 'signup');

Route::view('/login', 'login');
