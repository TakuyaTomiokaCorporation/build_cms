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
        // $open = Carbon::parse('2019-09-10 20:00:00');

        $posts = \DB::table('news')->where([
                    ['release', '=', '1'],
                    ['book_date', '<=', $now],
                ])->whereNull('deleted_at')
                ->orderBy('book_date', 'desc')->take(6)->get();

        $news_products = \DB::table('news_products')->where([
                            ['release', '=', '1'],
                            ['book_date', '<=', $now],
                        ])->whereNull('deleted_at')
                        ->orderBy('book_date', 'desc')->take(5)->get();

        foreach($news_products as $news_product){

            $news_product->book_date = Carbon::createFromFormat('Y-m-d H:i:s', $news_product->book_date)->format('Y-m-d');
        }

        return view('user.home',[
            'posts' => $posts,
            'news_products' => $news_products,
            // 'now' => $now,
            // 'open' => $open,
        ]);
    }

    public function getPnkReservation()
    {
        return view('user.support.pnk_reservation');
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
                ->orderBy('book_date', 'desc')->paginate(6);

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
                        ->orderBy('book_date', 'desc')->paginate(5);

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
    // Technologies function
    // 
    public function getTechnologies()
    {
        return view('user.technologies.index');
    }
    // 
    // Waterproof function
    // 

    public function getWaterproof()
    {
        return view('user.technologies.waterproof');
    }

    // 
    // Qualcomm function
    // 

    public function getQualcomm()
    {
        return view('user.technologies.qualcomm');
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
    // 特定商取引法に基づく表記について 
    // 
    
    public function getTokushou()
    {
        return view('user.tokushou');
    }

    //
    // App help function 
    // 

    public function showAppHelp()
    {
        return view('app.help');
    }

    public function showAndroidAppHelp()
    {
        return view('app.android_help');
    }


    // 
    // Products functions
    //

    public function getProductInfo()
    {
        $trueWirlessProducts = \DB::table('products')->select('thumbnail', 'product_name', 'overview', 'link_detail', 'discontinued')
                        ->whereNull('deleted_at')                
                        ->where([
                            ['discontinued', 0],
                            ['transmission_method', '完全ワイヤレス']
                        ])
                        ->orderBy('release_date', 'desc')
                        ->get();

        $wirlessProducts = \DB::table('products')->select('thumbnail', 'product_name', 'overview', 'link_detail', 'discontinued')
                        ->whereNull('deleted_at')
                        ->where([
                            ['discontinued', 0],
                            ['transmission_method', 'ワイヤレス']
                        ])
                        ->orderBy('release_date', 'desc')
                        ->get();

        $discontinuedProducts = \DB::table('products')->select('thumbnail', 'product_name', 'overview', 'link_detail', 'discontinued')
                        ->whereNull('deleted_at')
                        ->where('discontinued', 1)
                        ->orderBy('release_date', 'desc')
                        ->get();

        return view('user.product', [
            'trueWirlessProducts' => $trueWirlessProducts,
            'wirlessProducts' => $wirlessProducts,
            'discontinuedProducts' => $discontinuedProducts,
        ]);
    }

    // public function getProductInfo()
    // {
    //     $continuedProducts = \DB::table('products')->select('thumbnail', 'product_name', 'overview', 'link_detail', 'discontinued')
    //                     ->where('discontinued', 0)
    //                     ->orderBy('release_date', 'desc')
    //                     ->get();
    //     $discontinuedProducts = \DB::table('products')->select('thumbnail', 'product_name', 'overview', 'link_detail', 'discontinued')
    //                     ->where('discontinued', 1)
    //                     ->orderBy('release_date', 'desc')
    //                     ->get();
    //     return view('user.product2', [
    //         'continuedProducts' => $continuedProducts,
    //         'discontinuedProducts' => $discontinuedProducts,
    //     ]);
    // }

    // public function getProductWireless()
    // {
    //     $wirelessProducts = \DB::table('products')->select('thumbnail', 'product_name', 'overview', 'link_detail')
    //                     ->where('discontinued', 0)
    //                     ->where('transmission_method', '完全ワイヤレス')
    //                     ->orderBy('release_date', 'desc')
    //                     ->get();
        
    //     return view('user.products.wireless', [
    //         'wirelessProducts' => $wirelessProducts
    //     ]);
    // }

    // public function getProductForBeginner()
    // {
    //     $forBeginnerProducts = \DB::table('products')->select('thumbnail', 'product_name', 'overview', 'link_detail')
    //                     ->where('discontinued', 0)
    //                     ->where('category', 'エントリーモデル')
    //                     ->orderBy('release_date', 'desc')
    //                     ->get();
        
    //     return view('user.products.beginner', [
    //         'forBeginnerProducts' => $forBeginnerProducts
    //     ]);
    // }

    // public function getProductHybrid()
    // {
    //     $hybridProducts = \DB::table('products')->select('thumbnail', 'product_name', 'overview', 'link_detail')
    //                     ->where('discontinued', 0)
    //                     ->where('sound_method', 'ハイブリッド型')
    //                     ->orderBy('release_date', 'desc')
    //                     ->get();
        
    //     return view('user.products.hybrid', [
    //         'hybridProducts' => $hybridProducts
    //     ]);
    // }

    // public function getProductAptxHD()
    // {
    //     $aptXhdProducts = \DB::table('products')->select('thumbnail', 'product_name', 'overview', 'link_detail')
    //                     ->where('discontinued', 0)
    //                     ->where('compression_method', 'aptX HD')
    //                     ->orderBy('release_date', 'desc')
    //                     ->get();
        
    //     return view('user.products.aptxhd', [
    //         'aptXhdProducts' => $aptXhdProducts
    //     ]);
    // }

    public function getTebd21fpnk()
    {
        return view('user.products.TE-BD21f-pnk');
    }

    public function getTebd21f()
    {
        return view('user.products.TE-BD21f');
    }

    public function getTed01a()
    {
        return view('user.products.TE-D01a');
    }

    public function getTed01b()
    {
        return view('user.products.TE-D01b');
    }

    public function getTed01c()
    {
        return view('user.products.TE-D01c');
    }

    public function getTed01d()
    {
        return view('user.products.TE-D01d');
    }

    public function getTed01dkzn()
    {
        return view('user.products.TE-D01d-kzn');
    }

    public function getTed01e()
    {
        return view('user.products.TE-D01e');
    }

    public function getTed01g()
    {
        return view('user.products.TE-D01g');
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

    public function getWebd21d()
    {
        return view('user.products.WE-BD21d');
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

    public function getPnkF()
    {
        return view('user.artist.pnk_f');
    }

    public function getPass()
    {
        return view('user.artist.passcode');
    }

    public function getUijin()
    {
        return view('user.artist.uijin');
    }

    public function getWagamama()
    {
        return view('user.artist.wagamama');
    }

    public function getYanakoto()
    {
        return view('user.artist.yanakotosottomute');
    }

    public function getCy8er()
    {
        return view('user.artist.cy8er');
    }

    public function getMorita()
    {
        return view('user.artist.moritakumiko');
    }

    public function getWadarin()
    {
        return view('user.artist.wadarin');
    }

    // 
    // Codec function
    //

    public function getCodec()
    {
        return view('user.technologies.codec');
    }

    // 
    // Compensation function
    //

    public function getCompensation()
    {
        return view('user.compensation');
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
