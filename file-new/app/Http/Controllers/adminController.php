<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    // Method for inventory (admin)
    public function admininventory()
    {
        // Logic or data fetching for inventory page
        return view('layouts.inventory');  // Returning the inventory view
    }

    
}
