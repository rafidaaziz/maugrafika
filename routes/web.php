<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/main', function () {
//     return view('layouts.main');
// });


// Route::get('/role', function () {
//     return view('role', [
//         "page" => "role"
//     ]);
// });
Route::get('/role', [RoleController::class, 'index']);

Route::get('/user', function () {
    return view('user', [
        "page" => "user"
    ]);
});

Route::get('/login', function () {
    return view('login');
});
