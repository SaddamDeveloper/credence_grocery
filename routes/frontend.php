<?php

use Illuminate\Support\Facades\Route;
Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'HomePageController@index')->name('web.index');
    Route::get('product-list/{slug}/{id}', 'HomePageController@productList')->name('web.product.product-list');
    Route::get('/product-detail/{slug}/{id}', 'HomePageController@productDetail')->name('web.product.single-product');
});


Route::get('/Cart', function () {
    return view('web.cart.cart');
})->name('web.cart.cart');

Route::get('/Checkout', function () {
    return view('web.checkout.checkout');
})->name('web.checkout.checkout');

Route::get('/Confirm', function () {
    return view('web.checkout.confirm');
})->name('web.checkout.confirm');

// Route::get('Product-detail', function () {
//     return view('web.product.single-product');
// })->name('web.product.single-product');

Route::get('login', function () {
    return view('web.login');
});
Route::get('login', function () {
    return view('web.register');
});