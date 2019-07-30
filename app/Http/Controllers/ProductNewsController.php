<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductNews;
use Carbon\Carbon;

class ProductNewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getList(){

        $news_products = \DB::table('news_products')->paginate(5);;
         return view('admin.product_news.home',[
             'news_products' => $news_products,
         ]);
    }

    public function create(){

        $now = Carbon::now();

        return view('admin.product_news.create', compact('now'));
    }

    public function confirm(Request $request){

        $product_news_confirm = $request -> all();

        $product_news_confirm['book_date'] = Carbon::createFromFormat('Y-m-d\TH:i', $product_news_confirm['book_date']);
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

        ProductNews::create($product_news_new);
        // dd($product_news_new);
        return redirect()->to(route('product_news'));
    }

    public function edit($id){

        $now = Carbon::now();
        $news_product = ProductNews::findOrFail($id);

        return view('admin.product_news.edit', compact('news_product', 'now'));
    }

    public function update(Request $request, $id){
        
        $news_product = $request -> all();
        $product = ProductNews::findOrFail($id);
        $product->update($news_product);
        return redirect() -> to(route('product_news'));
    }
}
