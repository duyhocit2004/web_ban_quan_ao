<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\sizeController;
use App\Http\Controllers\admin\accountController;
use App\Http\Controllers\admin\contactController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\authAdminController;
use App\Http\Controllers\admin\OrderController;

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

Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('formlogin',[authAdminController::class,'showlogin'])->name('formlogin');
Route::post('checklogin',[authAdminController::class,'checklogin'])->name( 'checklogin');
Route::get('formRegister',[authAdminController::class,'formRegister'])->name('formRegister');
Route::post('PostRegister',[authAdminController::class,'PostRegister'])->name( 'PostRegister');
Route::get('logout',[authAdminController::class,'logout'])->name( 'logout');

Route::prefix('admin')->middleware('admin')->group(function (){
    Route::get('/',[productController::class,'index'])->name('product');

    // quản lý sản phẩm
    Route::get('product',[productController::class,'index'])->name('product');
    Route::get('FromProduct',[productController::class,'create'])->name('FromProduct');
    Route::post('addproduct',[productController::class,'store'])->name('addproduct');
    Route::get('/getProduct/{id}',[productController::class,'edit'])->name('getProduct');
    Route::put('/updateproduct/{id}',[productController::class,'update'])->name('updateproduct');
    Route::delete('/deleteproduct/{id}',[productController::class,'destroy'])->name('deleteproduct');

    // Quản lý kích cỡ
    Route::get('size',[sizeController::class,'index'])->name('size');
    Route::get('Fromsize',[sizeController::class,'create'])->name('Fromsize');
    Route::post('addsize',[sizeController::class,'store'])->name('addsize');
    Route::get('/getsize/{id}',[sizeController::class,'edit'])->name('getsize');
    Route::put('/updatesize/{id}',[sizeController::class,'update'])->name('updatesize');
    Route::delete('/deletesize/{id}',[sizeController::class,'destroy'])->name('deletesize');

    // quản lý tài khoản
    Route::get('account',[accountController::class,'index'])->name('account');
    Route::get('accountUser',[accountController::class,'show'])->name('accountUser');
    Route::get('Fromaccount',[accountController::class,'create'])->name('Fromaccount');
    Route::post('addaccount',[accountController::class,'store'])->name('addaccount');
    Route::get('/getaccount/{id}',[accountController::class,'edit'])->name('getaccount');
    Route::put('/updateaccount/{id}',[accountController::class,'update'])->name('updateaccount');
    Route::delete('/deleteaccount/{id}',[accountController::class,'destroy'])->name('deleteaccount');

    // Quản lý liên hệ
    Route::get('contact',[contactController::class,'index'])->name('contact');
    Route::get('contactUser',[contactController::class,'show'])->name('contactUser');
    Route::get('Fromcontact',[contactController::class,'create'])->name('Fromcontact');
    Route::post('addcontact',[contactController::class,'store'])->name('addcontact');
    Route::get('/getcontact/{id}',[contactController::class,'edit'])->name('getcontact');
    Route::put('/updatecontact/{id}',[contactController::class,'update'])->name('updatecontact');
    Route::delete('/deletecontact/{id}',[contactController::class,'destroy'])->name('deletecontact');

    
    // Quản lý hóa đơn
    Route::get('order',[OrderController::class,'index'])->name('Order');
    Route::get('/Orderdetail/{id}',[OrderController::class,'show'])->name('Orderdetail');
    // Route::get('FromOrder',[OrderController::class,'create'])->name('FromOrder');
    // Route::post('addOrder',[OrderController::class,'store'])->name('addOrder');
    Route::get('/getOrder/{id}',[OrderController::class,'edit'])->name('getOrder');
    Route::put('/updateOrder/{id}',[OrderController::class,'update'])->name('updateOrder');
    Route::delete('/deleteOrder/{id}',[OrderController::class,'destroy'])->name('deletecart');


});

