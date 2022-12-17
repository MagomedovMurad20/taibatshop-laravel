<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CostumsPageController;
use App\Http\Controllers\KurtkiPageController;
use App\Http\Controllers\PlatyaPageController;
use App\Http\Controllers\JempersPageController;
use App\Http\Controllers\SigninPageController;
use App\Http\Controllers\SignupPageController;
use App\Http\Controllers\AdminPageController;
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



Route::get('/', [HomeController::class, 'index']);
Route::get('/costums', [CostumsPageController::class, 'index']);
Route::get('/kurtki', [KurtkiPageController::class, 'index']);
Route::get('/platya', [PlatyaPageController::class, 'index']);
Route::get('/jempers', [JempersPageController::class, 'index']);
Route::get('/signin', [SigninPageController::class, 'index']);
Route::get('/signup', [SignupPageController::class, 'index']);
Route::get('/admin', [AdminPageController::class, 'index']);
