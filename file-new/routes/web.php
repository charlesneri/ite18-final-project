<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\BackController;

//login
Route::get('/', function () {
    return view('layouts.login');
});
Route::get('/home', [LoginController::class, 'showLoginForm'])->name('home'); // Show login form
//Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process'); // Process logi

//register
Route::get('/register', function () {
    return view('layouts.register-form');  // Adjust path if necessary
})->name('register');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


//register back button
/*Route::get('/back', function () {
    return view('layouts.login');  // Adjust path if necessary
})->name('back');
Route::get('/back', [BackController::class, 'showLoginFormback'])->name('back'); // Show login form
*/