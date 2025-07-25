<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StripeController;
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
Route::get('admin/create',[ProductController::class,'create'])->name('product.admin.create');
Route::get('/admin',[ProductController::class,'admin'])->name('product.admin');
Route::post('/store',[ProductController::class,'store'])->name('product.store');
Route::get('/show/{product}',[ProductController::class,'show'])->name('product.show');
Route::get('/edit/{product}',[ProductController::class,'edit'])->name('product.edit');
Route::get('/stripe', [StripeController::class, 'stripe'])->name('stripe');
Route::get('/thankYou', [ProductController::class, 'thankYou'])->name('thankYou');
Route::get('/search',[ProductController::class,'search'])->name('product.search');
Route::get('/ordini', [OrderController::class, 'index'])->name('ordini');
Route::get('/ship', [ProductController::class, 'ship'])->name('ship');
Route::get('/{sex}',[ProductController::class,'viewBySex'])->name('viewBySex');
Route::post('/stripepost', [StripeController::class, 'stripePost'])->name('stripe.post');
Route::post('/ship/{userName}{userSurname}',[ProductController::class,'insertAddress'])->name('insertAddress');
Route::post('/update/{product}',[ProductController::class,'update'])->name('product.update');
Route::delete('/destroy/{product}',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('/account/{user}',[AccountController::class,'display'])->name('account.display');
Route::get('/carrello/{userName}{userSurname}',[ProductController::class,'viewCart'])->name('viewCart');
Route::post('/addToCart/{product}',[ProductController::class,'addToCart'])->name('addToCart');
Route::post('/removeToCart/{product}',[ProductController::class,'removeToCart'])->name('removeToCart');
Route::post('/addLoved/{product}',[ProductController::class,'addLoved'])->name('addLoved');
Route::delete('/trash/{product}',[ProductController::class,'trash'])->name('product.trash');
Route::get('/{sex}/{category}',[ProductController::class,'viewBySexCategory'])->name('viewBySexCategory');
Route::get('/{sex}/{category}/a',[ProductController::class,'orderAscendent'])->name('orderAscendent');
Route::get('/{sex}/{category}/d',[ProductController::class,'orderDescendent'])->name('orderDescendent');
Route::get('/{sex}/{category}/n',[ProductController::class,'orderNews'])->name('orderNews');
Route::get('/{sex}/{category}/n',[ProductController::class,'orderNews'])->name('orderNews');
Route::post('/locale/{locale}', [PublicController::class, 'locale'])->name('locale');
Route::post('/cart/update/{product}', [OrderController::class, 'updateQuantity'])->name('updateQuantity');



Route::get('/contatti',[FormController::class,'form'])->name('form');
Route::post('/contatti/submit' , [FormController::class,'store'])->name('store');
Route::get('/thankYou',[FormController::class,'thankYou'])->name('thankYou');