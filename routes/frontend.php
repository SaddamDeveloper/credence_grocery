<?php

use Illuminate\Support\Facades\Route;
Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'HomePageController@index')->name('web.index');
});
Route::get('/Product-list', function () {
    return view('web.product.product-list');
})->name('web.product.product-list');

Route::get('/Product-detail', function () {
    return view('web.product.single-product');
})->name('web.product.single-product');

Route::get('/Cart', function () {
    return view('web.cart.cart');
})->name('web.cart.cart');

Route::get('/Checkout', function () {
    return view('web.checkout.checkout');
})->name('web.checkout.checkout');

Route::get('/Confirm', function () {
    return view('web.checkout.confirm');
})->name('web.checkout.confirm');

Route::get('Product-detail', function () {
    return view('web.product.single-product');
})->name('web.product.single-product');

Route::get('login', function () {
    return view('web.login');
});
Route::get('login', function () {
    return view('web.register');
});