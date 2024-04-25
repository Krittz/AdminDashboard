<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::post('/logout', function () {
    Auth::logout();

    return redirect('/login');
})->name('logout');

// Rota para exibir o formulário de login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Rota para processar o login
Route::post('/login', [UserController::class, 'login']);

// Rota para exibir o formulário de registro
Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

// Rota para processar o registro
Route::post('/signup', [UserController::class, 'store']);


