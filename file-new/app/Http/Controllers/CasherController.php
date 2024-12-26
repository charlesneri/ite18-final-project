<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasherController extends Controller
{
    // Method for inventory (admin)
    public function casher()
    {
        // Logic or data fetching for inventory page
        return view('layouts.casher');  // Returning the inventory view
    }

}
