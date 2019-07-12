<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Region;
use App\Prefecture;

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
        // 下記は今後有効かする。
        // $regions = Region::all();
        // $prefectures = Prefecture::all();

        // return view('admin.shop.create', [
        //     'regions' => $regions,
        //     'prefectures' => $prefectures,
        // ]);

        return view('admin.shop.create');
    }

    public function confirm(\App\Http\Request\ValiShopRequest $request)
    {
        $data = $request -> all();
        return view('shop.confirm')->with($data);
    }

    public function finish(){

    }
}
