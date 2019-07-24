<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// relatedo to News Model
use App\News;

// related to Shop Model
use App\Shop;
use App\Region;
use App\Prefecture;

//related to ProductNews Model
use App\ProductNews;

//related to Products Model
use App\Product;

class UserController extends Controller
{
    public function getAllInfo(){

        $posts = \DB::table('news')->latest()->take(6)->get();
        $news_products = \DB::table('news_products')->latest()->take(5)->get();

        return view('user.home', compact('posts', 'news_products'));
    }

    public function getNewsInfo()
    {
        // $news = News::findOrFail($id);
        // dd($news);
        // return view('user.news', compact('news'));
        return view('user.news');
    }

    public function getShopInfo()
    {
        $shops = Shop::all();
        return view('user.shoplist',[
            'shops' => $shops,
        ]);
    }

    public function getProductNewsInfo()
    {
        $news_products = \DB::table('news_products')->latest()->take(5);

    }

    public function getAbout()
    {
        return view('user.about');
    }

    // 
    // Products functions
    //

    public function getProductInfo()
    {
        $products = Product::all();

        return view('user.product', [
            'products' => $products,
        ]);
    }

    public function getTed01h(){
        return view('user.products.TE-D01h');
    }

    // public function getProductIndividual($product_name)
    // {
    //     $product = Product::findOrFail($product_name);

    //     return view('user.products.individual', compact('product'));
    // }

    // 
    // Aritists functions
    // 
    public function getArtistsInfo()
    {
        return view('user.artists');
    }

    public function getNakamura()
    {
        return view('user.artist.e-nakamura');
    }

    public function getGesu()
    {
        return view('user.artist.gesu');
    }

    public function getMaison()
    {
        return view('user.artist.maison');
    }

    public function getPnk()
    {
        return view('user.artist.pnk');
    }

    public function getCodec()
    {
        return view('user.codec');
    }

    public function getCompensation()
    {
        return view('user.compensation');
    }
    
    public function getInqury()
    {
        return view('user.inqury.index');
    }

    public function getInquryConfirm()
    {
        return view('user.inqury.confirm');
    }

    public function getInquryThanks()
    {
        return view('user.inqury.thanks');
    }

    public function getOperation()
    {
        return view('user.operation');
    }

}
