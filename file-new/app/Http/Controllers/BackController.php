<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function back()
    {
        return view('layouts.login'); // Assuming 'login' corresponds to 'login.blade.php'
    }
}
