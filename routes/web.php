<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages/home/index');
})->name('home');

Route::get('/{category}', function () {
    return view('pages/category/index');
})->name('category');

Route::get('/category/{product}', function () {
    return view('pages/product-detail/index');
})->name('product-detail');

Route::get('/payment/cart', function () {
    return view('pages/cart/index');
})->name('cart');
