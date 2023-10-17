<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use Monolog\Formatter\GoogleCloudLoggingFormatter;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home',[HomeController::class,'index']);

Route::get('/register',[AuthController::class,'index1']);
Route::post('/register',[AuthController::class,'store']);

Route::get('/login',[AuthController::class,'index1']);
Route::post('/login',[AuthController::class,'validate_login']);

//




Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

