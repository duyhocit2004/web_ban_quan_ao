<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\sizeController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\authAdminController;
use App\Http\Controllers\admin\productImagesController;

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
    Route::get('/',[productController::class,'index'])->name('product');
    Route::get('product',[productController::class,'index'])->name('product');
    Route::get('FromProduct',[productController::class,'create'])->name('FromProduct');
    Route::post('addproduct',[productController::class,'store'])->name('addproduct');
    Route::get('/getProduct/{id}',[productController::class,'edit'])->name('getProduct');
    Route::put('/updateproduct/{id}',[productController::class,'update'])->name('updateproduct');
    Route::delete('/deleteproduct/{id}',[productController::class,'destroy'])->name('deleteproduct');

    Route::get('images/{id}',[productImagesController::class,'index'])->name('images');
    Route::get('Fromimages',[productImagesController::class,'create'])->name('Fromimages');
    Route::post('addimages',[productImagesController::class,'store'])->name('addimages');
    Route::get('/getimages/{id}',[productImagesController::class,'edit'])->name('getimages');
    Route::put('/updateimages/{id}',[productImagesController::class,'update'])->name('updateimages');
    Route::delete('/deleteimages/{id}',[productImagesController::class,'destroy'])->name('deleteimages');

    Route::get('size',[sizeController::class,'index'])->name('size');
    Route::get('Fromsize',[sizeController::class,'create'])->name('Fromsize');
    Route::post('addsize',[sizeController::class,'store'])->name('addsize');
    Route::get('/getsize/{id}',[sizeController::class,'edit'])->name('getsize');
    Route::put('/updatesize/{id}',[sizeController::class,'update'])->name('updatesize');
    Route::delete('/deletesize/{id}',[sizeController::class,'destroy'])->name('deletesize');


});

