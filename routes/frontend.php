<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
});
Route::get('Product-list', function () {
    return view('web.product.product-list');
});
Route::get('Product-detail', function () {
    return view('web.product.single-product');
});
Route::get('login', function () {
    return view('web.login');
});
Route::get('login', function () {
    return view('web.login');
});