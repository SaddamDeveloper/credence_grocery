<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
});
Route::get('login', function () {
    return view('web.login');
});