<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// relatedo to News Model
use App\News;
use Carbon\Carbon;

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
    // 
    // Top Page function
    // 

    public function getAllInfo(){

        $now = Carbon::now()->format('Y-m-d H:i:s');

        $posts = \DB::table('news')->where([
                    ['release', '=', '1'],
                    ['book_date', '<=', $now],
                ])->whereNull('deleted_at')
                ->latest()->take(6)->get();

        $news_products = \DB::table('news_products')->where([
                            ['release', '=', '1'],
                            ['book_date', '<=', $now],
                        ])->whereNull('deleted_at')->
                        latest()->take(5)->get();

        foreach($news_products as $news_product){

            $news_product->book_date = Carbon::createFromFormat('Y-m-d H:i:s', $news_product->book_date)->format('Y-m-d');
        }

        return view('user.home', compact('posts', 'news_products'));
    }

    // 
    // News functions
    // 
    public function getNewsInfo()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $posts = \DB::table('news')
                ->where('release', '=', '1')
                ->where('book_date', '<=', $now)
                ->whereNull('deleted_at')
                ->latest()->take(6)->get();

        return view('user.news', compact('posts'));
    }

    // Product News functions
    public function showProductNewsList()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        
        $news_products = \DB::table('news_products')->where([
                            ['release', '=', '1'],
                            ['book_date', '<=', $now],
                        ])
                        ->whereNull('deleted_at')
                        ->latest()->paginate(5);

        foreach($news_products as $news_product)
        {
            $news_product->book_date = Carbon::createFromFormat('Y-m-d H:i:s', $news_product->book_date)->format('Y-m-d');
        }

        return view('user.product-news',[
            'news_products' => $news_products,
        ]);
    }
    // public function getEachProductNews($id)
    // {
    //     $news_product = ProductNews::findOrFail($id);

    //     return view('user.product-news', compact('news_products'));

    // }

    // 
    // About function
    // 

    public function getAbout()
    {
        return view('user.about');
    }

    // 
    // Waterproof function
    // 

    public function getWaterproof()
    {
        return view('user.waterproof');
    }

    // 
    // Qualcomm function
    // 

    public function getQualcomm()
    {
        return view('user.qualcomm');
    }

    // 
    // Manual function
    // 

    public function getManual()
    {
        return view('user.manual');
    }

    // 
    // Movies function
    // 

    public function getMovies()
    {
        return view('user.movies');
    }


    // 
    // Products functions
    //

    public function getProductInfo()
    {
        $continuedProducts = \DB::table('products')->select('thumbnail', 'product_name', 'overview', 'link_detail', 'discontinued')
                        ->where('discontinued', 0)
                        ->orderBy('id', 'desc')
                        ->get();
        $discontinuedProducts = \DB::table('products')->select('thumbnail', 'product_name', 'overview', 'link_detail', 'discontinued')
                        ->where('discontinued', 1)
                        ->orderBy('id', 'desc')
                        ->get();
        return view('user.product', [
            'continuedProducts' => $continuedProducts,
            'discontinuedProducts' => $discontinuedProducts,
        ]);
    }

    public function getTed01h()
    {
        return view('user.products.TE-D01h');
    }

    public function getWed01b()
    {
        return view('user.products.WE-D01b');
    }

    public function getWed01c()
    {
        return view('user.products.WE-D01c');
    }

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

    // 
    // Codec function
    //

    public function getCodec()
    {
        return view('user.codec');
    }

    // 
    // Compensation function
    //

    public function getCompensation()
    {
        return view('user.compensation');
    }

    // 
    // Inqury functions
    //

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

    // 
    // Operation function
    //

    public function getOperation()
    {
        return view('user.operation');
    }

    // 
    // LP1 function
    // 

    public function getLP()
    {
        return view('user.lp.lp1');
    }
}
