<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductListController extends Controller{

    public function proddisplay()
    {
        return view('layouts.product-add'); 
    }
}