<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\FeedbackNewController;

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


//products ProductController получаем и выводим все продукты
Route::get('/', [ProductController::class, 'Index'])->name('/');
Route::get('/costums', [ProductController::class, 'costums'])->name('costums');
Route::get('/kurtki', [ProductController::class, 'kurtki'])->name('kurtki');
Route::get('/platya', [ProductController::class, 'platya'])->name('platya');
Route::get('/jempers', [ProductController::class, 'jempers'])->name('jempers');
Route::get('/kardigans', [ProductController::class, 'kardigans'])->name('kardigans');
Route::get('/test', [ProductController::class, 'test'])->name('test');


//auth
Route::get('/signin', [AuthController::class, 'GetSignIn'])->name('signin');
Route::post('/signin', [AuthController::class, 'PostSignIn'])->name('post.signin');
Route::get('/signout', [AuthController::class, 'GetSignOut'])->name('signout');

Route::get('/signup', [AuthController::class, 'GetSignUp'])->name('signup');
Route::post('/signup', [AuthController::class, 'PostSignUp'])->name('post.signup');
//adminka
Route::get('/admin', [AdminPageController::class, 'index'])->name('admin');
Route::post('/admin', [AdminPageController::class, 'store'])->name('post.admin');

//Форма обратной связи
Route::get('/feedbacks', [FeedbackNewController::class, 'index'])->name('feedbacks');
Route::get('/feedbackform', [FeedbackNewController::class, 'feedbackform'])->name('feedbackform');
Route::post('/feedbackform', [FeedbackNewController::class, 'store'])->name('post.feedbackform');

//корзина
Route::post('/cart/add/{id}', [CartController::class, 'add'])->where('id', '[0-9]+')->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/order', [CartController::class, 'order'])->name('cart.order');

Route::get('/welcomeuser', [UserController::class, 'index'])->name('welcomeuser');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
