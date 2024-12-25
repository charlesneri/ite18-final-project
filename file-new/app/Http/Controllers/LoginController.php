<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('layouts.login');
    }
    
    /*
    // Process login form submission
    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $role = $request->input('user');

        // Basic validation (you can extend this with database check)
        if ($username == 'admin' && $password == 'admin123') {
            return response()->json([
                'success' => true,
                'redirect' => route('logins') // Redirect to your dashboard route
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials'
        ]);
    }

   */
}

