<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Region;
use App\Prefecture;
use App\Http\Requests\ValiShopRequest;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function getList()
    {
        $shops_joined = \DB::table('shops')
                        ->whereNull('deleted_at')
                        ->join('regions', 'shops.region_id', '=', 'regions.region_id')
                        ->join('prefectures', 'shops.pre_id', '=', 'prefectures.prefectures_id')
                        ->paginate(100);

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

    public function store(Request $request)
    {
        $shop_new = $request -> all();
        $shop = Shop::create($shop_new);

        return redirect()->to(route('shop'));
    }

    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        $regions = Region::all();
        $prefectures = Prefecture::all();

        return view('admin.shop.edit', compact('shop', 'regions', 'prefectures'));
    }

    public function update(Request $request, $id)
    {
        $shop_update = $request -> all();
        $shop = Shop::findOrFail($id);
        $shop->update($shop_update);
        return redirect()->to(route('shop'));
    }

    public function delete($id)
    {
        $shop = Shop::findOrFail($id);
        $shop->delete();
        return redirect()->to(route('shop'));
    }

    public function trash()
    {
        $trashedShops = Shop::onlyTrashed()
                        ->join('regions', 'shops.region_id', '=', 'regions.region_id')
                        ->join('prefectures', 'shops.pre_id', '=', 'prefectures.prefectures_id')
                        ->paginate(50);
        return view('admin.shop.trash', compact('trashedShops'));
    }

    public function restore($id)
    {
        $restoredShops = Shop::onlyTrashed()->findOrFail($id);
        $restoredShops->restore();
        return redirect()->to(route('shop'));
    }

    public function destroy($id)
    {
        $destroyedShop = Shop::onlyTrashed()->findOrFail($id);
        $destroyedShop->forceDelete($destroyedShop);
        return redirect()->to(route('shop.trash'));
    }
}
