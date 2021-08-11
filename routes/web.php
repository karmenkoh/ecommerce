<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StockController;

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

//User Register
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/create-user', [UserController::class, 'store'])->name('user.register');

Route::get('/homepage', [ProductController::class, 'index'])->name('homepage');

//User Product & Add to Cart
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

//Checkout
Route::get('/checkout', [CheckoutController::class, 'getCheckout'])->name('checkout');
Route::post('/place-order', [CheckoutController::class, 'placeOrder'])->name('place.order');

//Admin Product Page
Route::resource('stocks', StockController::class);
Route::get('/stocks',[StockController::class, 'index'])->name('stocks');
Route::post('/stocks/create',[StockController::class, 'store'])->name('stock.create');
Route::get('/order',[StockController::class, 'order'])->name('order');
