<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('logins');
});
// routes/web.php

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form'); // Show login form
Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process'); // Process login
Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register.form'); // Show registration form

