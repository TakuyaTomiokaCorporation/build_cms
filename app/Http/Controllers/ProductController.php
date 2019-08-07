<?php

namespace App\Http\Controllers;

// use App\Http\Requests\ValiProductRequest;
use Illuminate\Http\Request;
use App\Product; 

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }


    public function getList(){

        $products = \DB::table('products')
                    ->whereNull('deleted_at')
                    ->paginate(5);
        return view('admin.product.home',[
            'products' => $products,
        ]);
    }

    public function create(){

        return view('admin.product.create');
        
    }

    public function confirm(Request $request){

        $product_confirm = $request -> all();

        
        // dd($product_confirm);
        if(isset($product_confirm['thumbnail']))
        {
            $file = $request->file('thumbnail');
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/thumbnails/', $name);
            $product_confirm['thumbnail'] = $name;
        }
        else
        {
            $product_confirm['thumbnail'] = 'noimage.png';    
        }

        if(isset($product_confirm['pdf']))
        {
            $file = $request->file('pdf');
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/product_news/', $name);
            $product_news_confirm['pdf'] = $name;
        }
        else
        {
            $product_confirm['pdf'] = "";
        }

        // if($file = $request->file('thumbnail'))
        // {
        //     $name = uniqid() . $file -> getClientOriginalName();
        //     $file -> move('images/thumbnails/', $name);
        //     $product_confirm['thumbnail'] = $name;
        // };

        return view('admin.product.confirm')->with($product_confirm);
    }

    public function store(Request $request){
        
        $product_new = $request -> all();

        $product = Product::create($product_new);

        return redirect()->to(route('product'));
    }

    public function edit($id){

        $product = Product::findOrFail($id);

        return view('admin.product.edit',compact('product'));
    }

    public function update(Request $request, $id){

        $product_update = $request -> all();
        $product = Product::findOrFail($id);
        $product->update($product_update);
        return redirect() -> to(route('product'));
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->to(route('product'));
    }

    public function trash()
    {
        $trashedProducts = Product::onlyTrashed()->get();
        return view('admin.product.trash', compact('trashedProducts'));
    } 

    public function restore($id)
    {
        $restoredProducts = Product::onlyTrashed()->findOrFail($id);
        $restoredProducts->restore();
        return redirect()->to(route('product'));
    }

    public function destroy($id)
    {
        $destroyedProduct = Product::onlyTrashed()->findOrFail($id);
        $destroyedProduct->forceDelete($destroyedProduct);
        return redirect()->to(route('product.trash'));
    }

}
