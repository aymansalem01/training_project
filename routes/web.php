<?php

use App\Models\Item;
use App\Models\Coupon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\ItemController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\Admin_userController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PageLoadController;

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

Route::get('/', [PageLoadController::class,'index'])->name('home');

Route::get('/dashboard',[AdminController::class,'index'])->name('admin');
Route::get('/feedback',[AdminController::class,'feedback'])->name('feedback');
Route::resource('user',Admin_userController::class);
Route::resource('coupon',CouponController::class);
Route::resource('item',ItemController::class);
Route::resource('category',CategoryController::class);
Route::get('payment',[AdminController::class,'payment'])->name('payment');
Route::get('paymen/{id}',[AdminController::class,'show_payment'])->name('show_payment');

Route::view('/login','user.login')->name('login');
Route::view('signup','user.signup')->name('signup');
Route::post('sign',[AuthController::class,'signup'])->name('sign');
Route::post('log',[AuthController::class,'login'])->name('log');
Route::view('contact','user.contact')->name('contact');
Route::view('aboutus','user.about')->name('about');
Route::post('subscribe',[FeedbackController::class,'subscribe'])->name('subscribe');
