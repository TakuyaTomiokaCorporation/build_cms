<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Region;
use App\Prefecture;
use App\Http\Requests\ValiShopRequest;

class ShopController extends Controller
{
    /************************************************
     ************************************************
     * 
     * Bellow, related to "user"
     * 
     ***********************************************
     ***********************************************/

    public function getShopInfo()
    {
        $shops = Shop::all();
        return view('user.shoplist',[
            'shops' => $shops,
        ]);
    }

    /************************************************
     ************************************************
     * 
     * Bellow, related to "admin"
     * 
     ***********************************************
     ***********************************************/

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $shops_joined = \DB::table('shops')
        ->join('regions', 'shops.region_id', '=', 'regions.region_id')
        ->join('prefectures', 'shops.pre_id', '=', 'prefectures.prefectures_id')
        ->get();

        return view('admin.shop.home',[
            'shops' => $shops_joined,
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

    public function confirm(Request $request)
    {
        $shop_confirm = $request -> all();

        return view('admin.shop.confirm')->with($shop_confirm);
    }

    public function store(Request $request){

        $shop_new = $request -> all();
        $shop = Shop::create($shop_new);

        return redirect()->to('/admin/shop');
    }
}
