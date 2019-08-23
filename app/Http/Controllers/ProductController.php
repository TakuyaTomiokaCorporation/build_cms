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

        if($file = $request->file('thumbnail'))
        {
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/thumbnails/', $name);
            $product_confirm['thumbnail'] = $name;
        }
        else
        {
            $product_confirm['thumbnail'] = 'noimage.png';    
        }

        if($file = $request->file('pdf'))
        {
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/products/pdf', $name);
            $product_confirm['pdf'] = $name;
        }
        else
        {
            $product_confirm['pdf'] = "";
        }

        if(isset($product_confirm['link_detail']))
        {
            $product_confirm['link_detail'] = "aviot.jp/product/" . $product_confirm['link_detail'];
        }else
        {
            $product_confirm['link_detail'] = "aviot.jp/product/" . $product_confirm['product_name'];
        }

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

        if($file = $request->file('thumbnail'))
        {
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/thumbnails/', $name);
            $product_update['thumbnail'] = $name;
        }
        else
        {
            $product_update['thumbnail'] = 'noimage.png';    
        }

        if($file = $request->file('pdf'))
        {
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/product_news/', $name);
            $product_update['pdf'] = $name;
        }
        else
        {
            $product_update['pdf'] = "";
        }

        if(isset($product_update['link_detail']))
        {
            $product_update['link_detail'] = "aviot.jp/product/" . $product_update['link_detail'];
        }else
        {
            $product_update['link_detail'] = "aviot.jp/product/" . $product_update['product_name'];
        }

        $product->fill($product_update)->save();
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
