<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('adminside/index');
});

Route::get('/register', function () {
    return view('adminside/register');
});