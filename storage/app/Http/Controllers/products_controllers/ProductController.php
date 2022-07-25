<?php

namespace App\Http\Controllers\products_controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //coletivo
    public function ShowProducts()
    {
        
        $p=ProductModel::all();
        return view('internal_views.products_views.vw_products',[
            'products'=>$p
        ]);
    }
    //individual
    public function ShowProduct($id_product)
    {
        $p=ProductModel::where('id_product',$id_product)->first();
        return view('internal_views.products_views.vw_product',
        [
            'product'=>$p
        ]);
    }

}
