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
use App\Http\Controllers\CartController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PageLoadController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WishlistController;


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
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::view('account','user.account')->name('account');
Route::put('upadte',[AuthController::class,'update'])->name('update');
Route::view('contact','user.contact')->name('contact');
Route::post('conect',[FeedbackController::class,'feedback'])->name('conect');
Route::view('aboutus','user.about')->name('about');
Route::post('subscribe',[FeedbackController::class,'subscribe'])->name('subscribe');
Route::view('checkout','user.checkout')->name('checkout');






Route::get('wishlist',[WishlistController::class,'index'])->name('wishlist.index');

Route::get('cart', [CartController::class, 'index'])->name("cart.index");
Route::post('add-item', [CartController::class, 'addItem'])->name("add-item");
Route::put('update-cart/{id}',[CartController::class,'update'])->name('update-cart');
Route::post('/delete-item', [CartController::class, 'deleteItem'])->name('delete-item');

Route::post('/wishlist.add', [WishlistController::class, 'addwish'])->name('wishlist.add');
Route::post('/wishlist.delete', [WishlistController::class, 'deletewish'])->name('wishlist.delete');
Route::put('/wishlist/move-to-cart', [WishlistController::class, 'moveAllToCart'])->name('wishlist.moveToCart');



Route::get('product/{id}',[PageLoadController::class,'product'])->name('product');
Route::post('addfromsingle/{id}',[CartController::class,'addFormSingle'])->name('addFormSingle');
Route::get('addwishSingle/{id}',[WishlistController::class,'addwishSingle'])->name('addwishSingle');


Route::get('checkout',[PaymentController::class,'index'])->name('checkout');
Route::post('order',[PaymentController::class,'order'])->name('order');

Route::get('get-notifications',[AdminController::class,'getNotifications'])
    ->name('get-notifications')
    ->middleware('auth');

