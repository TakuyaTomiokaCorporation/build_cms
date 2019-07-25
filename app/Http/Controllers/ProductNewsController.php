<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductNews;
use Carbon\Carbon;

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

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getList(){

        $news_products = \DB::table('news_products')->get();
        // dd($news_products);
         return view('admin.product_news.home',[
             'news_products' => $news_products,
         ]);
    }

    public function create(){

        $today = Carbon::now()->format('Y-m-d');
        return view('admin.product_news.create',[
            'today' => $today,
        ]);
    }

    public function confirm(Request $request){

        $product_news_confirm = $request -> all();

        $news_confirm['book_date'] = $request->date .' '.$request->time;

        if($file = $request->file('main_visual')){
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/product_news/', $name);
            $product_news_confirm['main_visual'] = $name;
            };

        if($file = $request->file('pdf')){
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/product_news/', $name);
            $product_news_confirm['pdf'] = $name;
            };
        
        // dd($product_news_confirm);
        
        return view('admin.product_news.confirm')->with($product_news_confirm);
    }

    public function store(Request $request){
        
        $product_news_new = $request -> all();

        $product = ProductNews::create($product_news_new);

        return redirect()->to(route('product_news'));
    }

    public function edit($id){

        $news_product = ProductNews::findOrFail($id);

        return view('admin.product_news.edit', compact('news_product'));
    }

    public function update(Request $request, $id){
        
        $news_product = $request -> all();
        $product = ProductNews::findOrFail($id);
        $product->update($news_product);
        return redirect() -> to(route('product_news'));
    }
}
