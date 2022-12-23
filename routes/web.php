<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SigninPageController;
use App\Http\Controllers\SignupPageController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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


//products
Route::get('/', [ProductController::class, 'Index'])->name('/');
Route::get('/costums', [ProductController::class, 'costums'])->name('/costums');
Route::get('/kurtki', [ProductController::class, 'kurtki'])->name('/kurtki');
Route::get('/platya', [ProductController::class, 'platya'])->name('/platya');
Route::get('/jempers', [ProductController::class, 'jempers'])->name('/jempers');
Route::get('/kardigans', [ProductController::class, 'kardigans'])->name('/kardigans');
//auth
Route::get('/signin', [AuthController::class, 'GetSignIn'])->name('/signin');
Route::post('/signin', [AuthController::class, 'PostSignIn'])->name('/signin');

Route::get('/signup', [AuthController::class, 'GetSignUp'])->name('/signup');
Route::post('/signup', [AuthController::class, 'PostSignUp']);
//adminka
Route::get('/admin', [AdminPageController::class, 'index'])->name('/admin');
Route::post('/admin', [AdminPageController::class, 'store'])->name('/admin');

Route::get('/welcomeuser', [UserController::class, 'index'])->name('/welcomeuser');
