<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CartController;

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

Route::get('/',[FrontendController::class,'index'])->name('home');
Route::get('/dang-nhap',[FrontendController::class,'login'])->name('login');
Route::post('/dang-nhap',[FrontendController::class,'postLogin'])->name('postLogin');
Route::get('/dang-ky',[FrontendController::class,'register'])->name('register');
Route::post('/dang-ky',[FrontendController::class,'postRegister'])->name('postRegister');
Route::get('/dang-xuat',[FrontendController::class,'logout'])->name('logout');
Route::get('/san-pham',[FrontendController::class,'product'])->name('product');
Route::get('/loginAdmin',[AdminController::class,'loginAdmin'])->name('loginAdmin');
Route::post('/loginAdmin',[AdminController::class,'postLoginAdmin'])->name('postLoginAdmin');
Route::get('/add-cart/{id}',[CartController::class,'add'])->name('add-cart');
Route::get('/gio-hang',[CartController::class,'show'])->name('show');
Route::post('/update',[CartController::class,'update'])->name('cartUpdate');
Route::get('/delete/{id}',[CartController::class,'delete'])->name('cartDelete');
Route::get('/chi-tiet-san-pham/{id}',[FrontendController::class,'productDetail'])->name('detail');
Route::get('/san-pham-theo-the-loai/{id}',[FrontendController::class,'proCate'])->name('proCate');
Route::get('/san-pham-theo-hang/{id}',[FrontendController::class,'proBra'])->name('proBra');
Route::get('/thanh-toan',[FrontendController::class,'checkout'])->name('checkout');
Route::post('/thanh-toan',[FrontendController::class,'postCheckout'])->name('postCheckout');
Route::get('/ajax-search-product',[FrontendController::class,'ajaxSearch'])->name('ajax-search-product');


Route::group(['prefix'=>'admin','middleware'=>'loginAdmin'], function() {
    Route::get('/',[AdminController::class,'index'])->name('admin');
    Route::resource('category',CategoryController::class);
    Route::resource('product',ProductController::class);
    Route::resource('brand',BrandController::class);
    Route::get('/order',[OrderController::class,'index'])->name('order');
    Route::get('/showOrder/{id}',[OrderController::class,'show'])->name('showOrder');
    Route::resource('user',UserController::class);
    Route::resource('banner',BannerController::class);
    Route::post('/update-status-order/{id}',[OrderController::class,'updateStt'])->name('postStt');
    Route::post('/delete-order/{id}',[OrderController::class,'delete'])->name('deleteOrder');

});
