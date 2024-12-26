<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function showLoginForm()
    {
        return view('layouts.login');
    }
    
    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|in:admin,casher',
        ]);
    
        // Simulate user authentication (replace with actual logic later)
        if ($request->username === 'admin' && $request->password === 'admin123' && $request->role === 'admin') {
            return redirect()->route('layouts.inventory');
        } elseif ($request->username === 'casher' && $request->password === 'casher123' && $request->role === 'casher') {
            return redirect()->route('layouts.casher');
        }
    
        return back()->withErrors(['error' => 'Invalid credentials or role.']);
    }
    }
