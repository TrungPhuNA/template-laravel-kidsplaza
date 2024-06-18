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


Route::prefix('customer')->group(function(){

    Route::get('/address', function () {
        return view('pages/customer/address/index');
    })->name('address');

    Route::get('/favourite-product', function () {
        return view('pages/customer/favourite-product/index');
    })->name('favourite-product');

    Route::get('/info-kicoin', function () {
        return view('pages/customer/info-kicoin/index');
    })->name('info-kicoin');

    Route::get('/info-user', function () {
        return view('pages/customer/info-user/index');
    })->name('info-user');
    
    Route::get('/question', function () {
        return view('pages/customer/question/index');
    })->name('question');
    
    Route::get('/review', function () {
        return view('pages/customer/review/index');
    })->name('review');

    Route::get('/viewed-product', function () {
        return view('pages/customer/viewed-product/index');
    })->name('viewed-product');

    Route::get('/order', function () {
        return view('pages/customer/orders/index');
    })->name('order');
});

