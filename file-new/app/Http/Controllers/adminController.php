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

class HomeController extends Controller{

    public function homepage()
    {
        return view('layouts.home'); // Assuming 'login' corresponds to 'login.blade.php'
    }
}
/*
class ProductListController extends Controller{

    public function prodlists()
    {
        return view('layouts.product-add'); 
    }
}
    */