<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[ProductController::class,'index'])->name('homepage');
Route::get('/create',[ProductController::class,'create'])->name('product.create');
Route::post('/store',[ProductController::class,'store'])->name('product.store');
Route::get('/show/{product}',[ProductController::class,'show'])->name('product.show');
Route::get('/edit/{product}',[ProductController::class,'edit'])->name('product.edit');
Route::get('/{sex}',[ProductController::class,'viewBySex'])->name('viewBySex');
Route::post('/update/{product}',[ProductController::class,'update'])->name('product.update');
Route::delete('/destroy/{product}',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('/search',[ProductController::class,'search'])->name('product.search');
Route::get('/account/{user}',[AccountController::class,'display'])->name('account.display');
Route::get('/cart',[ProductController::class,'viewCart'])->name('viewCart');
Route::post('/addToCart/{product}',[ProductController::class,'addToCart'])->name('addToCart');
Route::post('/removeToCart/{product}',[ProductController::class,'removeToCart'])->name('removeToCart');
Route::post('/addLoved/{product}',[ProductController::class,'addLoved'])->name('addLoved');

