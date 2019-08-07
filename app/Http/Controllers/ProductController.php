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
        };

        if (is_null($product_confirm['release']))
        {
            $product_confirm['release'] = "1";
        }

        if (is_null($product_confirm['discontinued'])) 
        {
            $product_confirm['discontinued'] = "0";
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
