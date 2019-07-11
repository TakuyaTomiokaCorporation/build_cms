<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Region;
use App\Prefecture;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('user.shoplist',[
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
    }

    public function store(Request $request)
    {

    }
}
