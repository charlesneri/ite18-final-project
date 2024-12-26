<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\BackController;

//image

Route::get('/logo', function () {
    return response()->file(public_path('images.logo.png'));
});

//login
Route::get('/', function () {
    return view('layouts.login');
});
Route::get('/', [LoginController::class, 'showLoginForm'])->name('home'); // Show login form
Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process'); // Process login

//register
Route::get('/register', function () {
    return view('layouts.register-form');  // Adjust path if necessary
})->name('register');
/*
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register-process');

*/
//route for inventory
Route::get('/inventory', function () {
    return view('layouts.inventory'); // Render inventory.blade.php
})->name('inventory');
//route for the casher
Route::get('/casher', function () {
    return view('layouts.casher'); // Render casher.blade.php
})->name('casher');