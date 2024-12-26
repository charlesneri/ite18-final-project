<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\BackController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CasherController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductListController;
//use App\Http\Controllers\AddProductController;



//login
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
// Define route for admin (inventory)
Route::get('/inventory', [adminController::class, 'admininventory'])->name('inventory');

// Define route for cashier (casher)
Route::get('/casher', [CasherController::class, 'casher'])->name('casher');

//Home route
Route::get('/homepage', [HomeController::class, 'home'])->name('homepage');
//product list route
Route::get('/prodlist', [ProductListController::class, 'proddisplay'])->name('prodlist');
