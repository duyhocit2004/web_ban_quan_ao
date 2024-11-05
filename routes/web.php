<?php

use App\Http\Controllers\admin\authAdminController;
use App\Http\Controllers\admin\productController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('formlogin',[authAdminController::class,'showlogin'])->name('formlogin');
Route::post('checklogin',[authAdminController::class,'checklogin'])->name( 'checklogin');
Route::get('formRegister',[authAdminController::class,'formRegister'])->name('formRegister');
Route::post('PostRegister',[authAdminController::class,'PostRegister'])->name( 'PostRegister');
Route::get('logout',[authAdminController::class,'logout'])->name( 'logout');

Route::prefix('admin')->middleware('admin')->group(function (){
    Route::get('product',[productController::class,'index'])->name('product');
    Route::get('FromProduct',[productController::class,'create'])->name('FromProduct');
    Route::post('addproduct',[productController::class,'store'])->name('addproduct');
    Route::get('getproduct/{id}',[productController::class,'edit'])->name('getproduct');
    Route::put('updateproduct/|{id}',[productController::class,'update'])->name('updateproduct');
    Route::get('deleteproduct/{id}',[productController::class,'destroy'])->name('deleteproduct');
});

// Route::get('product',[productController::class,'index'])->name('product');
//     Route::get('FromProduct',[productController::class,'create'])->name('FromProduct');
//     Route::post('addproduct',[productController::class,'store'])->name('addproduct');
//     Route::get('getproduct/{id}',[productController::class,'edit'])->name('getproduct');
//     Route::put('updateproduct/|{id}',[productController::class,'update'])->name('updateproduct');
//     Route::get('deleteproduct/{id}',[productController::class,'destroy'])->name('deleteproduct');

