<?php

namespace App\Http\Controllers\products_controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowProducts()
    {
        return view('internal_views.vw_products');
    }
}
