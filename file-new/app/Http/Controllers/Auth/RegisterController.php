<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{ 

        public function showRegisterForm()
        {
            return view('layouts.register-form'); // Adjust path if needed
        }
    
        public function register(Request $request)
        {
            // Handle form submission logic
        }
    
    
}
