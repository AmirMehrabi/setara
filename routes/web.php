<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('profile', function () {
    return view('profile');
});

Route::get('search', function () {
    return view('search');
});