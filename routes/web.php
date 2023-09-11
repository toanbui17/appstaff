<?php

use Illuminate\Support\Facades\Route;

//use comtroller
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Login\LoginController;
//use middleware
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthStaff;



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

Route::get('/', function () {
    return view('welcome');
});

//home
Route::prefix('home')->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('product',[HomeController::class,'showAllProduct'])->name('homeProduct');
});

//admin
Route::prefix('admin')->middleware('middlewareAuthAdmin')->group(function(){
    Route::get('/', [AdminController::class,'index']);
});

//staff
Route::prefix('staff')->group(function(){
    Route::get('/',[StaffController::class,'index'])->middleware('middlewareAuthLogin')->name('staff');
});

//product
Route::prefix('product')->group(function(){
    Route::get('/',[ProductController::class,'index'])->middleware('middlewareAuthLogin')->name('product');
    Route::get('name',[ProductController::class,'getName'])->name('productName');

    Route::get('add', [ProductController::class,'create'])->middleware('middlewareAuthAdmin')->name('productAdd');
    //Route::post('add',[ProductController::class,'store'])->middleware('middlewareAuthAdmin')->name('addproduct');
    //product request
    Route::post('add',[ProductController::class,'productValidate'])->middleware('middlewareAuthAdmin')->name('productValidate');

    //product edit
    Route::get('edit{id}',[ProductController::class,'edit'])->middleware('middlewareAuthAdmin')->name('productEdit');
    Route::post('edit{id}',[ProductController::class,'update'])->middleware('middlewareAuthAdmin')->name('productUpdate');
});

//login
Route::prefix('login')->group(function(){
    Route::get('/',[LoginController::class,'index'])->name('login');
    Route::post('email',[LoginController::class,'store'])->name('loginGet');
});
