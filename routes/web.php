<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SauceController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

// Authentification
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Auth::routes();

// Page accueil
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('sauce', SauceController::class);