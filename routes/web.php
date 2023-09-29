<?php

use Illuminate\Support\Facades\Route;

//use comtroller
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Auth\AuthController;
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
Route::prefix('admin')->middleware('middlewareAuthLogin')->group(function(){
    Route::get('/', [AdminController::class,'index'])->name('homeAdmin');
    Route::get('id={id}', [AuthController::class,'userJoinPersonnel'])->name('adminInformation');
    Route::get('changepassword', [AuthController::class,'changePassword'])->name('changePassword');
    Route::post('changePassword', [AuthController::class,'updatePassword'])->name('updatePassword');

});

//product
Route::prefix('product')->group(function(){
    Route::get('/',[ProductController::class,'index'])->middleware('middlewareAuthLogin')->name('product');
    Route::get('keyword',[ProductController::class,'getName'])->name('productName');
    Route::get('id={id}',[ProductController::class,'show'])->name('productId');

    Route::get('add', [ProductController::class,'create'])->middleware(['middlewareAuthLogin','middlewareAuthAdmin'])->name('productAdd');
    Route::post('add',[ProductController::class,'store'])->middleware(['middlewareAuthLogin','middlewareAuthAdmin'])->name('productRequest');
    //product request
    //Route::post('add',[ProductController::class,'productValidate'])->middleware('middlewareAuthAdmin')->name('productValidate');

    //product edit
    Route::get('edit{id}',[ProductController::class,'edit'])->middleware(['middlewareAuthLogin','middlewareAuthAdmin'])->name('productEdit');
    Route::post('edit{id}',[ProductController::class,'update'])->middleware(['middlewareAuthLogin','middlewareAuthAdmin'])->name('productUpdate');

    //delete
    Route::get('delete{id}',[ProductController::class,'destroy'])->middleware('middlewareAuthAdmin')->name('productDelete');

});

//login
Route::prefix('login')->group(function(){
    Route::get('/',[AuthController::class,'index'])->name('login');
    Route::post('/',[AuthController::class,'authLogin'])->name('loginPost');
    Route::post('out',[AuthController::class,'authLogout'])->middleware('middlewareAuthLogin')->name('logOut');

    Route::get('forgetpassword',[AuthController::class,'forGetPassword'])->name('forgetPassword');
    Route::post('forpostpassword',[AuthController::class,'forPostPassword'])->name('forpostPassword');
    Route::get('getpassword/{user}/{token}',[AuthController::class,'getPassword'])->name('getPassword');
    Route::post('postpassword/{user]/{token}',[AuthController::class,'postPassword'])->name('postPassword');
});

Route::middleware(['middlewareAuthLogin','middlewareAuthAdmin'])->prefix('auth')->group(function(){
    Route::get('create',[AuthController::class,'create'])->name('create');
    Route::post('create',[AuthController::class,'createAuth'])->name('createAuth');

});

Route::middleware(['middlewareAuthLogin'])->prefix('personnel')->group(function(){
    Route::get('edit{id}',[AdminController::class,'edit'])->name('editPersonnel');
});
