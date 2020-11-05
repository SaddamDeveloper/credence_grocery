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

Route::get('/Address', function () {
    return view('web.address.address');
})->name('web.address.address');

Route::get('/edit-Address', function () {
    return view('web.address.edit-address');
})->name('web.address.edit-address');

Route::get('/checkout-edit-Address', function () {
    return view('web.checkout.checkout-edit-address');
})->name('web.checkout.checkout-edit-address');

Route::get('/Order', function () {
    return view('web.order.order');
})->name('web.order.order');

Route::get('/Wishlist', function () {
    return view('web.wishlist.wishlist');
})->name('web.wishlist.wishlist');

Route::get('/Profile', function () {
    return view('web.profile.profile');
})->name('web.profile.profile');

Route::get('/edit-Profile', function () {
    return view('web.profile.edit-profile');
})->name('web.profile.edit-profile');

Route::get('/change-password', function () {
    return view('web.profile.change-password');
})->name('web.profile.change-password');

Route::get('/login', function () {
    return view('web.user.login');
})->name('web.user.login');

Route::get('/register', function () {
    return view('web.user.register');
})->name('web.user.register');

Route::get('/forgot-password', function () {
    return view('web.user.forgot-password');
})->name('web.user.forgot-password');

Route::get('/New-password', function () {
    return view('web.user.forgot-change-password');
})->name('web.user.forgot-change-password');
