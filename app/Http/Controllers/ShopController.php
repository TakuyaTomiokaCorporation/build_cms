<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Region;
use App\Prefecture;
use \App\Http\Request\ValiShopRequest;

class ShopController extends Controller
{

    /**
     * 
     * Bellow, related to "user"
     * 
     * */

    public function getShopInfo()
    {
        $shops = Shop::all();
        return view('user.shoplist',[
            'shops' => $shops,
        ]);
    }

    /**
     * 
     * Bellow, related to "admin"
     * 
     *  
     * */

    public function getIndex()
    {
        $shops = Shop::all();
        return view('admin.shop.list',[
            'shops' => $shops,
        ]);
    }

    public function create()
    {
        
        $regions = Region::all();
        $prefectures = Prefecture::all();

        return view('admin.shop.create', [
            'regions' => $regions,
            'prefectures' => $prefectures,
        ]);

        return view('admin.shop.create');
    }

    public function confirm(\App\Http\Request\ValiShopRequest $request)
    {
        $data = $request -> all();
        return view('admin.shop.confirm')->with($data);
    }

    public function finish(){
        $shop = new \App\Shop;

        $shop->region_id = $request->region;
        $shop->prefecture_id = $request->prefecture;
        $shop->shop_name = $request->shop_name;
        $shop->post_number = $request->post_number;
        $shop->shop_address = $request->shop_address;
        $shop->shop_tel = $request->shop_tel;

        $shop->save();

        return redirect()->to('shop.list');
    }
}
