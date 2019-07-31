<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// related to Shop Model
use App\Shop;
use App\Region;
use App\Prefecture;

class UserShopController extends Controller
{
    public function __invoke(){
        // Hokkaido
        $hokkaido_shops = \DB::table('shops')->where('pre_id', '1')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        // Tohoku
        $aomori_shops = \DB::table('shops')->where('pre_id', '2')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $akita_shops = \DB::table('shops')->where('pre_id', '3')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $iwate_shops = \DB::table('shops')->where('pre_id', '4')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $yamagata_shops = \DB::table('shops')->where('pre_id', '5')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $miyagi_shops = \DB::table('shops')->where('pre_id', '6')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $fukushima_shops = \DB::table('shops')->where('pre_id', '7')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        // Kanto
        $gunma_shops = \DB::table('shops')->where('pre_id', '8')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $tochigi_shops = \DB::table('shops')->where('pre_id', '9')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $ibaraki_shops = \DB::table('shops')->where('pre_id', '10')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $saitama_shops = \DB::table('shops')->where('pre_id', '11')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $chiba_shops = \DB::table('shops')->where('pre_id', '12')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $tokyo_shops = \DB::table('shops')->where('pre_id', '13')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $kanagawa_shops = \DB::table('shops')->where('pre_id', '14')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        // Chubu
        $yamanashi_shops = \DB::table('shops')->where('pre_id', '15')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $shizuoka_shops = \DB::table('shops')->where('pre_id', '16')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $niigata_shops = \DB::table('shops')->where('pre_id', '17')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $nagano_shops = \DB::table('shops')->where('pre_id', '18')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $gifu_shops = \DB::table('shops')->where('pre_id', '19')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $aichi_shops = \DB::table('shops')->where('pre_id', '20')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $toyama_shops = \DB::table('shops')->where('pre_id', '21')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $ishikawa_shops = \DB::table('shops')->where('pre_id', '22')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $fukui_shops = \DB::table('shops')->where('pre_id', '23')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $mie_shops = \DB::table('shops')->where('pre_id', '24')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        // Kinki
        $shiga_shops = \DB::table('shops')->where('pre_id', '25')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $kyoto_shops = \DB::table('shops')->where('pre_id', '26')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $nara_shops = \DB::table('shops')->where('pre_id', '27')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $osaka_shops = \DB::table('shops')->where('pre_id', '28')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $wakayama_shops = \DB::table('shops')->where('pre_id', '29')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $hyogo_shops = \DB::table('shops')->where('pre_id', '30')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        // Chugoku
        $tottori_shops = \DB::table('shops')->where('pre_id', '31')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $okayama_shops = \DB::table('shops')->where('pre_id', '32')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $shimane_shops = \DB::table('shops')->where('pre_id', '33')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $hiroshima_shops = \DB::table('shops')->where('pre_id', '34')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $yamaguchi_shops = \DB::table('shops')->where('pre_id', '35')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        // Shikoku
        $kagawa_shops = \DB::table('shops')->where('pre_id', '36')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $tokushima_shops = \DB::table('shops')->where('pre_id', '37')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $ehime_shops = \DB::table('shops')->where('pre_id', '38')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $kochi_shops = \DB::table('shops')->where('pre_id', '39')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        // Kyushu
        $fukuoka_shops = \DB::table('shops')->where('pre_id', '40')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $saga_shops = \DB::table('shops')->where('pre_id', '41')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $nagasaki_shops = \DB::table('shops')->where('pre_id', '42')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $oita_shops = \DB::table('shops')->where('pre_id', '43')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $kumamoto_shops = \DB::table('shops')->where('pre_id', '44')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $miyagi_shops = \DB::table('shops')->where('pre_id', '45')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $kagoshima_shops = \DB::table('shops')->where('pre_id', '46')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();
        $okinawa_shops = \DB::table('shops')->where('pre_id', '47')->select('shop_name', 'post_number', 'shop_address', 'shop_tel')->get();





        return view('user.shoplist', compact(
            'hokkaido_shops',
            'aomori_shops',
            'akita_shops',
            'iwate_shops',
            'yamagata_shops',
            'miyagi_shops',
            'fukushima_shops',
            'gunma_shops',
            'tochigi_shops',
            'ibaraki_shops',
            'saitama_shops',
            'chiba_shops',
            'tokyo_shops',
            'kanagawa_shops',
            'yamanashi_shops',
            'shizuoka_shops',
            'niigata_shops',
            'nagano_shops',
            'gifu_shops',
            'aichi_shops',
            'toyama_shops',
            'ishikawa_shops',
            'fukui_shops',
            'mie_shops',
            'shiga_shops',
            'kyoto_shops',
            'nara_shops',
            'osaka_shops',
            'wakayama_shops',
            'hyogo_shops',
            'tottori_shops',
            'okayama_shops',
            'shimane_shops',
            'hiroshima_shops',
            'yamaguchi_shops',
            'kagawa_shops',
            'tokushima_shops',
            'ehime_shops',
            'kochi_shops',
            'fukuoka_shops',
            'saga_shops',
            'nagasaki_shops',
            'oita_shops',
            'kumamoto_shops',
            'miyagi_shops',
            'kagoshima_shops',
            'okinawa_shops'


        ));
    }
}