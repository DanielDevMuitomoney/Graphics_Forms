<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function ShowAdmArea()
    {
        return view('internal_views.admin_views.vw_adm_area');
    }
    public function ShowRegisterProduct()
    {
       $categories= category::all();
        return view('internal_views.admin_views.vw_registerproduct',
        [
            'categories' => $categories 
        ]);
    }

    public function register_product(Request $request)
    {
        $product = new ProductModel();
        $product->nm_product= $request->name;
        $product->ds_product= $request->desc;
        $product->qtd_product=$request->qtd;
        $product->fk_category=$request->select;
        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            
            $requestImage= $request->image;
            $extension=$requestImage->extension();
            $imgName= md5($requestImage->getClientOriginalName(). strtotime("now")). ".". $extension;
            $request->image->move(public_path('/img/products'), $imgName);
            $product->path_img= $imgName;
            
        }

        //dd($request);
        $product->save();

    }
}
