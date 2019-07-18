<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductNewsController extends Controller
{
    /************************************************
     ************************************************
     * 
     * Bellow, related to "user"
     * 
     ***********************************************
     ***********************************************/

    public function getProductNewsInfo(){

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

        $products = \DB::table('products')->get();

        return view('admin.product_news.home',[
            'products' => $products,
        ]);
    }

    public function create(){

        return view('admin.product_news.create');
    }

    public function confirm(Request $request){

        $product_confirm = $request -> all();

        if($file = $request->file('thumbnail')){
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/thumbnails/', $name);
            $product_confirm['thumbnail'] = $name;
            };
        return view('admin.product_news.confirm')->with($product_confirm);
    }

    public function store(Request $request){
        
        $product_new = $request -> all();

        $product = Product::create($product_new);

        return redirect()->to('/admin/product_news/');
    }
}
