@extends('layouts.user_master')

@section('title', '取り扱い店舗 |')

@section('description', 'AVIOT製品の問い合わせはこちらから')

@section('css')

@endsection

@section('body_id', 'shop')
<div id="container" class="both mb60">
<div id="" class="main w1020 SPw m_auto" role="main">
    <h2 class="pt20 border_b mb20">取り扱い店舗</h2>
    <section class="read mb20">
        <div>
            <p>AVIOTのイヤホンのお求めは下記正規販売店または公式ストアよりお願いいたします。</p>
            <p class="txtRed">※並行輸入品・転売品・模倣品をはじめ正規販売店、公式ストア以外でご購入の製品はサポートをお受けできない場合がございます。</p>
        </div>

        <div class="flex mt20">
            <ul class="genuine_01">
                <li>ヤマダ電機（<a href="https://www.yamada-denkiweb.com/" target="_blank">ヤマダウェブコム</a>含む）</li>
                <li>コジマ（<a href="https://www.kojima.net/ec/top/CSfTop.jsp" target="_blank"> コジマネット</a>含む）</li>
                <li>ビックカメラ（<a href="https://www.biccamera.com/bc/main/" target="_blank">ビックカメラ.com</a>、<a href="https://biccamera.rakuten.co.jp/" target="_blank">楽天ビック</a>含む）</li>
                <li>ヨドバシカメラ（<a href="https://www.yodobashi.com/" target="_blank"> ヨドバシカメラ.com</a>含む）</li>
                <li>上新電機（<a href="https://joshinweb.jp/" target="_blank">Joshin Web</a>含む）</li>
                <li>フジヤカメラ店（<a href="https://www.fujiya-avic.jp/" target="_blank">フジヤエービックオンラインショップ</a>）</li>
                <li>山野楽器</li>
                <li>二子玉川 蔦屋家電</li>
            </ul>
            <ul class="genuine_02">
                <li>ソフマップ（<a href="https://www.sofmap.com/" target="_blank">ソフマップ・ドットコム</a>含む）</li>
                <li>エディオン</li>
                <li>eイヤホン（<a href="https://www.e-earphone.jp/" target="_blank">eイヤホンWEB</a>本店）</li>
                <li>東急ハンズ</li>
                <li>コストコ</li>
                <li>ロフト</li>
                <li>au Shop</li>
                <li><a href="https://ototoy.jp/top/" target="_blank">OTOTOY</a></li>
            </ul>
        </div>
    </section>

    <section class="internet_shop mt40 mb20">
			<h3 class="border_l">公式ストア</h3>
            <ul class="flex">
                <li class="alc"><a href="https://www.amazon.co.jp/s?me=ABRZDPOGTSWO1" target="_btank"><img src="{{ asset('images/user/bnr_amazon.png') }}"></a></li>
                <li class="alc"><a href="https://www.rakuten.co.jp/mobileselect/" target="_btank"><img src="{{ asset('images/user/bnr_rakuten.png') }}"></a></li>
                <li class="alc"><a href="https://store.shopping.yahoo.co.jp/mobileselect/" target="_btank"><img src="{{ asset('images/user/bnr_yahoo.png') }}"></a></li>
            </ul>
    </section>

    <section>
    <ul class="accordion">
        <h3 class="border_l mt40 mb20">地域から探す</h3>
            <li>
                <p class="ac">北海道<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li>
                        @foreach ($hokkaido_shops as $hokkaido_shop)
                        <dl class="shoplist mt20 mb20">
                            <dt>{{ $hokkaido_shop->shop_name }}</dt>
                            <dd>{{ $hokkaido_shop->post_number }}</dd>
                            <dd>{{ $hokkaido_shop->shop_address }}</dd>
                            <dd>{{ $hokkaido_shop->shop_tel }}</dd>
                            <hr class="mt10 mb10">
                        </dl>
                        @endforeach
                    </li>
                </ul>
            </li>

            <li><!--各地方枠-->
                <p class="ac">東北地方<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li class="inner_cont">
                        <p>青森県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($aomori_shops as $aomori_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $aomori_shop->shop_name }}</dt>
                                    <dd>{{ $aomori_shop->post_number }}</dd>
                                    <dd>{{ $aomori_shop->shop_address }}</dd>
                                    <dd>{{ $aomori_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li>

                    <li class="inner_cont mt10">
                        <p>秋田県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($akita_shops as $akita_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $akita_shop->shop_name }}</dt>
                                    <dd>{{ $akita_shop->post_number }}</dd>
                                    <dd>{{ $akita_shop->shop_address }}</dd>
                                    <dd>{{ $akita_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>岩手県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($iwate_shops as $iwate_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $iwate_shop->shop_name }}</dt>
                                    <dd>{{ $iwate_shop->post_number }}</dd>
                                    <dd>{{ $iwate_shop->shop_address }}</dd>
                                    <dd>{{ $iwate_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>山形県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($yamagata_shops as $yamagata_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $yamagata_shop->shop_name }}</dt>
                                    <dd>{{ $yamagata_shop->post_number }}</dd>
                                    <dd>{{ $yamagata_shop->shop_address }}</dd>
                                    <dd>{{ $yamagata_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>宮城県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($miyagi_shops as $miyagi_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $miyagi_shop->shop_name }}</dt>
                                    <dd>{{ $miyagi_shop->post_number }}</dd>
                                    <dd>{{ $miyagi_shop->shop_address }}</dd>
                                    <dd>{{ $miyagi_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>福島県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($fukushima_shops as $fukushima_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $fukushima_shop->shop_name }}</dt>
                                    <dd>{{ $fukushima_shop->post_number }}</dd>
                                    <dd>{{ $fukushima_shop->shop_address }}</dd>
                                    <dd>{{ $fukushima_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->
                </ul><!--inner-->
            </li><!--各地方枠-->

            <li><!--各地方枠-->
                <p class="ac">関東地方<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li class="inner_cont">
                        <p>群馬県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($gunma_shops as $gunma_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $gunma_shop->shop_name }}</dt>
                                    <dd>{{ $gunma_shop->post_number }}</dd>
                                    <dd>{{ $gunma_shop->shop_address }}</dd>
                                    <dd>{{ $gunma_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li>

                    <li class="inner_cont mt10">
                        <p>栃木県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($tochigi_shops as $tochigi_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $tochigi_shop->shop_name }}</dt>
                                    <dd>{{ $tochigi_shop->post_number }}</dd>
                                    <dd>{{ $tochigi_shop->shop_address }}</dd>
                                    <dd>{{ $tochigi_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>茨城県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($ibaraki_shops as $ibaraki_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $ibaraki_shop->shop_name }}</dt>
                                    <dd>{{ $ibaraki_shop->post_number }}</dd>
                                    <dd>{{ $ibaraki_shop->shop_address }}</dd>
                                    <dd>{{ $ibaraki_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>埼玉県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($saitama_shops as $saitama_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $saitama_shop->shop_name }}</dt>
                                    <dd>{{ $saitama_shop->post_number }}</dd>
                                    <dd>{{ $saitama_shop->shop_address }}</dd>
                                    <dd>{{ $saitama_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>千葉県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($chiba_shops as $chiba_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $chiba_shop->shop_name }}</dt>
                                    <dd>{{ $chiba_shop->post_number }}</dd>
                                    <dd>{{ $chiba_shop->shop_address }}</dd>
                                    <dd>{{ $chiba_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>東京都<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($tokyo_shops as $tokyo_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $tokyo_shop->shop_name }}</dt>
                                    <dd>{{ $tokyo_shop->post_number }}</dd>
                                    <dd>{{ $tokyo_shop->shop_address }}</dd>
                                    <dd>{{ $tokyo_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>神奈川県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($kanagawa_shops as $kanagawa_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $kanagawa_shop->shop_name }}</dt>
                                    <dd>{{ $kanagawa_shop->post_number }}</dd>
                                    <dd>{{ $kanagawa_shop->shop_address }}</dd>
                                    <dd>{{ $kanagawa_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->
                </ul><!--inner-->
            </li><!--各地方枠-->

            <li><!--各地方枠-->
                <p class="ac">中部地方<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li class="inner_cont">
                        <p>山梨県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($yamanashi_shops as $yamanashi_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $yamanashi_shop->shop_name }}</dt>
                                    <dd>{{ $yamanashi_shop->post_number }}</dd>
                                    <dd>{{ $yamanashi_shop->shop_address }}</dd>
                                    <dd>{{ $yamanashi_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li>

                    <li class="inner_cont mt10">
                        <p>静岡県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($shizuoka_shops as $shizuoka_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $shizuoka_shop->shop_name }}</dt>
                                    <dd>{{ $shizuoka_shop->post_number }}</dd>
                                    <dd>{{ $shizuoka_shop->shop_address }}</dd>
                                    <dd>{{ $shizuoka_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>新潟県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($niigata_shops as $niigata_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $niigata_shop->shop_name }}</dt>
                                    <dd>{{ $niigata_shop->post_number }}</dd>
                                    <dd>{{ $niigata_shop->shop_address }}</dd>
                                    <dd>{{ $niigata_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>長野県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($nagano_shops as $nagano_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $nagano_shop->shop_name }}</dt>
                                    <dd>{{ $nagano_shop->post_number }}</dd>
                                    <dd>{{ $nagano_shop->shop_address }}</dd>
                                    <dd>{{ $nagano_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>岐阜県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($gifu_shops as $gifu_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $gifu_shop->shop_name }}</dt>
                                    <dd>{{ $gifu_shop->post_number }}</dd>
                                    <dd>{{ $gifu_shop->shop_address }}</dd>
                                    <dd>{{ $gifu_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>愛知県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($aichi_shops as $aichi_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $aichi_shop->shop_name }}</dt>
                                    <dd>{{ $aichi_shop->post_number }}</dd>
                                    <dd>{{ $aichi_shop->shop_address }}</dd>
                                    <dd>{{ $aichi_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>富山県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($toyama_shops as $toyama_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $toyama_shop->shop_name }}</dt>
                                    <dd>{{ $toyama_shop->post_number }}</dd>
                                    <dd>{{ $toyama_shop->shop_address }}</dd>
                                    <dd>{{ $toyama_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>石川県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($ishikawa_shops as $ishikawa_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $ishikawa_shop->shop_name }}</dt>
                                    <dd>{{ $ishikawa_shop->post_number }}</dd>
                                    <dd>{{ $ishikawa_shop->shop_address }}</dd>
                                    <dd>{{ $ishikawa_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>福井県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($fukui_shops as $fukui_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $fukui_shop->shop_name }}</dt>
                                    <dd>{{ $fukui_shop->post_number }}</dd>
                                    <dd>{{ $fukui_shop->shop_address }}</dd>
                                    <dd>{{ $fukui_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>三重県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($mie_shops as $mie_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $mie_shop->shop_name }}</dt>
                                    <dd>{{ $mie_shop->post_number }}</dd>
                                    <dd>{{ $mie_shop->shop_address }}</dd>
                                    <dd>{{ $mie_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->
                </ul><!--inner-->
            </li><!--各地方枠-->

            <li><!--各地方枠-->
                <p class="ac">近畿地方<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li class="inner_cont">
                        <p>滋賀県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($shiga_shops as $shiga_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $shiga_shop->shop_name }}</dt>
                                    <dd>{{ $shiga_shop->post_number }}</dd>
                                    <dd>{{ $shiga_shop->shop_address }}</dd>
                                    <dd>{{ $shiga_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li>

                    <li class="inner_cont mt10">
                        <p>京都府<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($kyoto_shops as $kyoto_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $kyoto_shop->shop_name }}</dt>
                                    <dd>{{ $kyoto_shop->post_number }}</dd>
                                    <dd>{{ $kyoto_shop->shop_address }}</dd>
                                    <dd>{{ $kyoto_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>奈良県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($nara_shops as $nara_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $nara_shop->shop_name }}</dt>
                                    <dd>{{ $nara_shop->post_number }}</dd>
                                    <dd>{{ $nara_shop->shop_address }}</dd>
                                    <dd>{{ $nara_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>大阪府<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($osaka_shops as $osaka_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $osaka_shop->shop_name }}</dt>
                                    <dd>{{ $osaka_shop->post_number }}</dd>
                                    <dd>{{ $osaka_shop->shop_address }}</dd>
                                    <dd>{{ $osaka_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>和歌山県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($wakayama_shops as $wakayama_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $wakayama_shop->shop_name }}</dt>
                                    <dd>{{ $wakayama_shop->post_number }}</dd>
                                    <dd>{{ $wakayama_shop->shop_address }}</dd>
                                    <dd>{{ $wakayama_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>兵庫県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($hyogo_shops as $hyogo_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $hyogo_shop->shop_name }}</dt>
                                    <dd>{{ $hyogo_shop->post_number }}</dd>
                                    <dd>{{ $hyogo_shop->shop_address }}</dd>
                                    <dd>{{ $hyogo_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->
                </ul><!--inner-->
            </li><!--各地方枠-->

            <li><!--各地方枠-->
                <p class="ac">中国地方<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li class="inner_cont">
                        <p>鳥取県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($tottori_shops as $tottori_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $tottori_shop->shop_name }}</dt>
                                    <dd>{{ $tottori_shop->post_number }}</dd>
                                    <dd>{{ $tottori_shop->shop_address }}</dd>
                                    <dd>{{ $tottori_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li>

                    <li class="inner_cont mt10">
                        <p>岡山県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($okayama_shops as $okayama_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $okayama_shop->shop_name }}</dt>
                                    <dd>{{ $okayama_shop->post_number }}</dd>
                                    <dd>{{ $okayama_shop->shop_address }}</dd>
                                    <dd>{{ $okayama_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>島根県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($shimane_shops as $shimane_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $shimane_shop->shop_name }}</dt>
                                    <dd>{{ $shimane_shop->post_number }}</dd>
                                    <dd>{{ $shimane_shop->shop_address }}</dd>
                                    <dd>{{ $shimane_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>広島県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($hiroshima_shops as $hiroshima_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $hiroshima_shop->shop_name }}</dt>
                                    <dd>{{ $hiroshima_shop->post_number }}</dd>
                                    <dd>{{ $hiroshima_shop->shop_address }}</dd>
                                    <dd>{{ $hiroshima_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>山口県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($yamaguchi_shops as $yamaguchi_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $yamaguchi_shop->shop_name }}</dt>
                                    <dd>{{ $yamaguchi_shop->post_number }}</dd>
                                    <dd>{{ $yamaguchi_shop->shop_address }}</dd>
                                    <dd>{{ $yamaguchi_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->
                </ul><!--inner-->
            </li><!--各地方枠-->

            <li><!--各地方枠-->
                <p class="ac">四国地方<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li class="inner_cont">
                        <p>香川県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($kagawa_shops as $kagawa_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $kagawa_shop->shop_name }}</dt>
                                    <dd>{{ $kagawa_shop->post_number }}</dd>
                                    <dd>{{ $kagawa_shop->shop_address }}</dd>
                                    <dd>{{ $kagawa_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li>

                    <li class="inner_cont mt10">
                        <p>徳島県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($tokushima_shops as $tokushima_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $tokushima_shop->shop_name }}</dt>
                                    <dd>{{ $tokushima_shop->post_number }}</dd>
                                    <dd>{{ $tokushima_shop->shop_address }}</dd>
                                    <dd>{{ $tokushima_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>愛媛県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($ehime_shops as $ehime_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $ehime_shop->shop_name }}</dt>
                                    <dd>{{ $ehime_shop->post_number }}</dd>
                                    <dd>{{ $ehime_shop->shop_address }}</dd>
                                    <dd>{{ $ehime_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>高知県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($kochi_shops as $kochi_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $kochi_shop->shop_name }}</dt>
                                    <dd>{{ $kochi_shop->post_number }}</dd>
                                    <dd>{{ $kochi_shop->shop_address }}</dd>
                                    <dd>{{ $kochi_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->
                </ul><!--inner-->
            </li><!--各地方枠-->

            <li><!--各地方枠-->
                <p class="ac">九州地方<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li class="inner_cont">
                        <p>福岡県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($fukuoka_shops as $fukuoka_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $fukuoka_shop->shop_name }}</dt>
                                    <dd>{{ $fukuoka_shop->post_number }}</dd>
                                    <dd>{{ $fukuoka_shop->shop_address }}</dd>
                                    <dd>{{ $fukuoka_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li>

                    <li class="inner_cont mt10">
                        <p>佐賀県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($saga_shops as $saga_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $saga_shop->shop_name }}</dt>
                                    <dd>{{ $saga_shop->post_number }}</dd>
                                    <dd>{{ $saga_shop->shop_address }}</dd>
                                    <dd>{{ $saga_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>長崎県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($nagasaki_shops as $nagasaki_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $nagasaki_shop->shop_name }}</dt>
                                    <dd>{{ $nagasaki_shop->post_number }}</dd>
                                    <dd>{{ $nagasaki_shop->shop_address }}</dd>
                                    <dd>{{ $nagasaki_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>大分県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($oita_shops as $oita_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $oita_shop->shop_name }}</dt>
                                    <dd>{{ $oita_shop->post_number }}</dd>
                                    <dd>{{ $oita_shop->shop_address }}</dd>
                                    <dd>{{ $oita_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>熊本県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($kumamoto_shops as $kumamoto_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $kumamoto_shop->shop_name }}</dt>
                                    <dd>{{ $kumamoto_shop->post_number }}</dd>
                                    <dd>{{ $kumamoto_shop->shop_address }}</dd>
                                    <dd>{{ $kumamoto_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>宮崎県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($miyazaki_shops as $miyazaki_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $miyazaki_shop->shop_name }}</dt>
                                    <dd>{{ $miyazaki_shop->post_number }}</dd>
                                    <dd>{{ $miyazaki_shop->shop_address }}</dd>
                                    <dd>{{ $miyazaki_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>鹿児島県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($kagoshima_shops as $kagoshima_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $kagoshima_shop->shop_name }}</dt>
                                    <dd>{{ $kagoshima_shop->post_number }}</dd>
                                    <dd>{{ $kagoshima_shop->shop_address }}</dd>
                                    <dd>{{ $kagoshima_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                    <li class="inner_cont mt10">
                        <p>沖縄県<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>
                                @foreach ($okinawa_shops as $okinawa_shop)
                                <dl class="shoplist mt20 mb20">
                                    <dt>{{ $okinawa_shop->shop_name }}</dt>
                                    <dd>{{ $okinawa_shop->post_number }}</dd>
                                    <dd>{{ $okinawa_shop->shop_address }}</dd>
                                    <dd>{{ $okinawa_shop->shop_tel }}</dd>
                                    <hr class="mt10 mb10">
                                </dl>
                                @endforeach
                            </li>
                        </ul>
                    </li><!--都道府県-->

                </ul><!--inner-->
            </li><!--各地方枠-->
            
        
        </ul><!--accordion-->
    </section>
        
        
        
</div><!--/main-->
</div><!--/container-->

@section('content')
    
@endsection

@section('javascript-footer')
<script type="text/javascript">
	$(function(){

	//.accordionの中のp要素がクリックされたら
	$('.accordion p').click(function(){
		$(this).next().slideToggle();	
		// activeが存在する場合
		if ($(this).children(".accordion_icon").hasClass('active')) {			
			// activeを削除
			$(this).children(".accordion_icon").removeClass('active');				
		}
		else {
			// activeを追加
			$(this).children(".accordion_icon").addClass('active');			
		}	
		//クリックされた.accordionの中のp要素に隣接するul要素が開いたり閉じたりする。
	});

        //.accordionの中の.innerの中のli要素の中のp要素がクリックされたら
	$('.accordion .inner li p').click(function() {

		//クリックされた.accordionの中の.innerの中のli要素の中のp要素の子要素のul要素が開いたり閉じたりする。
		$(this).children('ul').slideToggle();

  });
});
</script>
@endsection