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

        $news_products = \DB::table('news_products')
                        ->whereNull('deleted_at')
                        ->paginate(5);
         return view('admin.product_news.home',[
             'news_products' => $news_products,
         ]);
    }

    public function create(){

        return view('admin.product_news.create');
        
    }

    public function confirm(Request $request){

        $product_news_confirm = $request -> all();
        
        $product_news_confirm['book_date'] = Carbon::createFromFormat('Y-m-d\TH:i', $product_news_confirm['book_date']);
        
        if($file = $request->file('main_visual'))
        {
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/product_news/', $name);
            $product_news_confirm['main_visual'] = $name;
        }
        else 
        {
            $product_news_confirm['main_visual'] = 'noimage.png';
        };

        if($file = $request->file('pdf'))
        {
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/product_news/', $name);
            $product_news_confirm['pdf'] = $name;
        }
        else
        {
            $product_news_confirm['pdf'] = "";
        }
        
        return view('admin.product_news.confirm')->with($product_news_confirm);
    }

    public function store(Request $request){
        
        $product_news_new = $request -> all();

        ProductNews::create($product_news_new);
        
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

    public function delete($id)
    {
        $news_product = ProductNews::findOrFail($id);
        $news_product->delete();
        return redirect()->to(route('product_news'));
    }

    public function trash()
    {
        $trashedNewsProducts = ProductNews::onlyTrashed()->get();
        return view('admin.product_news.trash', compact('trashedNewsProducts'));
    }

    public function restore($id)
    {
        $restoredNewsProducts = ProductNews::onlyTrashed()->findOrFail($id);
        $restoredNewsProducts->restore();
        return redirect()->to(route('product_news'));
    }

    public function destroy($id)
    {
        $destroyedNewsProduct = ProductNews::onlyTrashed()->findOrFail($id);
        $destroyedNewsProduct->forceDelete($destroyedNewsProduct);
        return redirect()->to(route('product_news.trash'));
    }
}
