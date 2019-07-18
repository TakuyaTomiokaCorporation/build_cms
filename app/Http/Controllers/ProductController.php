<?php

namespace App\Http\Controllers;

// use App\Http\Requests\ValiProductRequest;
use Illuminate\Http\Request;
use App\Product; 

class ProductController extends Controller
{

    /************************************************
     ************************************************
     * 
     * Bellow, related to "user"
     * 
     ***********************************************
     ***********************************************/

    public function getProductInfo(){

        return view();
    }

    /************************************************
     ************************************************
     * 
     * Bellow, related to "admin"
     * 
     ***********************************************
     ***********************************************/

    public function getList(){

        return view('admin.product.home');
    }

    public function create(){

        return view('admin.product.create');
    }

    public function confirm(Request $request){

        $product_confirm = $request -> all();

        if($file = $request->file('thumbnail')){
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/thumbnails/', $name);
            $product_confirm['thumbnail'] = $name;
            };
        return view('admin.product.confirm')->with($product_confirm);
    }

    public function store(Request $request){
        
        $product_new = $request -> all();

        $product = Product::create($product_new);

        return redirect()->to('/admin/product/');
    }

}
