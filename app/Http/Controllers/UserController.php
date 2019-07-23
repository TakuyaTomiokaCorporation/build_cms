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


class UserController extends Controller
{
    public function getAllInfo(){

        $posts = \DB::table('news')->latest()->get();
        $news_products = \DB::table('news_products')->latest()->get();

        return view('user.home', compact('posts', 'news_products'));
    }

    public function getNewsInfo($id)
    {
        $news = News::findOrFail($id);
        // dd($news);
        return view('user.news', compact('news'));
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

    public function getProductInfo()
    {

    }

}
