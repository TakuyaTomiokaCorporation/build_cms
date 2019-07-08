<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('user.shoplist');
    }

    public function add(Request $request)
    {
        return view(admin.shop.add);
    }
}
