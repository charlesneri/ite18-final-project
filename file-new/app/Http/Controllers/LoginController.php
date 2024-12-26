<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('layouts.login');  // Make sure this path matches your Blade file
    }

    public function processLogin(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|in:admin,casher',
        ]);

        // Simulate checking against test credentials (replace with real checks as needed)
        $testCredentials = [
            'admin' => ['username' => 'admin', 'password' => 'admin123'],
            'casher' => ['username' => 'casher', 'password' => 'casher123'],
        ];

        // Check if the username and password match the test credentials
        if (isset($testCredentials[$validated['role']]) &&
            $testCredentials[$validated['role']]['username'] === $validated['username'] &&
            $testCredentials[$validated['role']]['password'] === $validated['password']) {
            
            // Redirect based on the selected role
            if ($validated['role'] === 'admin') {
                return redirect()->route('inventory');  // Redirect to the inventory page (admin)
            } elseif ($validated['role'] === 'casher') {
                return redirect()->route('casher');  // Redirect to the casher page
            }
        }

        // If login fails, return with error message
        return back()->with('error', 'Invalid login credentials.');
    }
}
