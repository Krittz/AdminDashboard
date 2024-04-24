<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');
