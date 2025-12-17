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

Route::get('business/register', function () {
    return view('business.register');
})->name('business.register');