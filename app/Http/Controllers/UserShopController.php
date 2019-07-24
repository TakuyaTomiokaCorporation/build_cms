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
        $hokkaido_shops = Shop::where('pre_id', '1')->get();
        // Tohoku
        $aomori_shops = Shop::where('pre_id', '2')->get();
        $akita_shops = Shop::where('pre_id', '3')->get();
        $iwate_shops = Shop::where('pre_id', '4')->get();
        $yamagata_shops = Shop::where('pre_id', '5')->get();
        $miyagi_shops = Shop::where('pre_id', '6')->get();
        $fukushima_shops = Shop::where('pre_id', '7')->get();
        // Kanto
        $gunma_shops = Shop::where('pre_id', '8')->get();
        $tochigi_shops = Shop::where('pre_id', '9')->get();
        $ibaraki_shops = Shop::where('pre_id', '10')->get();
        $saitama_shops = Shop::where('pre_id', '11')->get();
        $chiba_shops = Shop::where('pre_id', '12')->get();
        $tokyo_shops = Shop::where('pre_id', '13')->get();
        $kanagawa_shops = Shop::where('pre_id', '14')->get();
        // Chubu
        $yamanashi_shops = Shop::where('pre_id', '15')->get();
        $shizuoka_shops = Shop::where('pre_id', '16')->get();
        $niigata_shops = Shop::where('pre_id', '17')->get();
        $nagano_shops = Shop::where('pre_id', '18')->get();
        $gifu_shops = Shop::where('pre_id', '19')->get();
        $aichi_shops = Shop::where('pre_id', '20')->get();
        $toyama_shops = Shop::where('pre_id', '21')->get();
        $ishikawa_shops = Shop::where('pre_id', '22')->get();
        $fukui_shops = Shop::where('pre_id', '23')->get();
        $mie_shops = Shop::where('pre_id', '24')->get();
        // Kinki
        $shiga_shops = Shop::where('pre_id', '25')->get();
        $kyoto_shops = Shop::where('pre_id', '26')->get();
        $nara_shops = Shop::where('pre_id', '27')->get();
        $osaka_shops = Shop::where('pre_id', '28')->get();
        $wakayama_shops = Shop::where('pre_id', '29')->get();
        $hyogo_shops = Shop::where('pre_id', '30')->get();
        // Chugoku
        $tottori_shops = Shop::where('pre_id', '31')->get();
        $okayama_shops = Shop::where('pre_id', '32')->get();
        $shimane_shops = Shop::where('pre_id', '33')->get();
        $hiroshima_shops = Shop::where('pre_id', '34')->get();
        $yamaguchi_shops = Shop::where('pre_id', '35')->get();
        // Shikoku
        $kagawa_shops = Shop::where('pre_id', '36')->get();
        $tokushima_shops = Shop::where('pre_id', '37')->get();
        $ehime_shops = Shop::where('pre_id', '38')->get();
        $kochi_shops = Shop::where('pre_id', '39')->get();
        // Kyushu
        $fukuoka_shops = Shop::where('pre_id', '40')->get();
        $saga_shops = Shop::where('pre_id', '41')->get();
        $nagasaki_shops = Shop::where('pre_id', '42')->get();
        $oita_shops = Shop::where('pre_id', '43')->get();
        $kumamoto_shops = Shop::where('pre_id', '44')->get();
        $miyagi_shops = Shop::where('pre_id', '45')->get();
        $kagoshima_shops = Shop::where('pre_id', '46')->get();
        $okinawa_shops = Shop::where('pre_id', '47')->get();





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