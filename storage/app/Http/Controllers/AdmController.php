<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $product->fk_user_create=Auth::user()->id_user;
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
    public function Manage_Products()
    {
        $products= ProductModel::where('fk_user_create',Auth::user()->id_user)->get();
    
        return view('internal_views.admin_views.vw_manage_products',
        [
            'products'=>$products
        ]);
    }

    public function ShowManageRequests($id)
    {
        $info_product= ProductModel::find($id);
       //dd($info_product);
        $requests= DB::table('tb_requests')->join('tb_products','tb_requests.fk_product','=','tb_products.id_product')->join('tb_status','fk_status','=','id_status')->join('users','tb_requests.fk_user_create','=','id_user')->select(['nm_user','nm_product','qtd_request_product','nm_status','dt_create'])->where('id_product',$id)->get();
        //dd($requests);

        return view('internal_views.admin_views.vw_RequestsProduct',[
            'requests'=> $requests,
            'product'=>$info_product,
        ]);

        
    }
}
