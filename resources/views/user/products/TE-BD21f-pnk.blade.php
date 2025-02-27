@extends('layouts.user_master')

@section('title', 'TE-BD21f-pnk |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'product')

@section('content')

<div id="container" class="both">
<div id="" class="main" role="main">
<article class="w1020 w98 m_auto">
    <h2 class="pt20 border_b mb20">TE-BD21f-pnk</h2>

    <section class="product_phot"><!--MV・商品画像-->
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('images/products/TE-BD21f-pnk/TE-BD21f-pnk_01.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/TE-BD21f-pnk/TE-BD21f-pnk_02.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/TE-BD21f-pnk/TE-BD21f-pnk_03.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/TE-BD21f-pnk/TE-BD21f-pnk_04.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/TE-BD21f-pnk/TE-BD21f-pnk_05.png') }}" alt=""></div>
            </div>

            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button"></div>
            <div class="swiper-button-prev swiper-button"></div>
        </div>

        <div class="swiper-container gallery-thumbs mt20 alc ifpc">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('images/products/TE-BD21f-pnk/TE-BD21f-pnk_01.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/TE-BD21f-pnk/TE-BD21f-pnk_02.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/TE-BD21f-pnk/TE-BD21f-pnk_03.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/TE-BD21f-pnk/TE-BD21f-pnk_04.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/TE-BD21f-pnk/TE-BD21f-pnk_05.png') }}" alt=""></div>
            </div>
        </div>
    </section>

    <section class="example"><!--商品説明-->
        <div class="flex">

    <div class="mt20">
        <div>
            <h4 class="border_b">特徴</h4>
            <p class="mt10">「凛として時雨」のドラマー ピエール中野氏監修によるスペシャルなチューニングを施したコラボレーションモデルです。 完全ワイヤレスイヤホン世界初*のハイブリッド・トリプルドライバーを搭載したTE-BD21f。このハイエンドモデルに、イヤホンマニアとしても知られるピエール中野さんの（極めてハイレベルな）アドバイスを忠実に反映。歪み感がなく、どこまでも伸びゆくような高音域と、ボーカルが眼前に迫るような定位感の高い中音域、そしてバスドラの響きを忠実に伝える、豊かな低音域を高度にバランスさせる事に成功。プロミュージシャンの、迸（ほとばし）るようなパッションが感じられる逸品です。*2019年7月現在。弊社調べ。</p>
        </div>
        <div class="bgGray mt20 accessories">
            <p class="txtS">付属品：USB Type C 1本、標準イヤーピース（各サイズ1色1ペア S/M/L）、SpinFit CP355（各サイズ1ペア SS/S/M）、シリコンストラップ、EVAセミハードケース、クリーニングクロス、ユーザーマニュアル、製品保証登録カード</p>
        </div>
    </div>
    <div class="alc btn_area"><a href="{{ route('pnk_reservation') }}" target="_blank" class="btn_buy">ご購入はこちら</a></div>
    </div>

    <h3 class="mt80">「凛として時雨」のドラマー ピエール中野氏監修</h3>
    <div class="">
        <p class="alc"><img src="{{ asset('images/products/TE-BD21f-pnk/TE-BD21f-pnk-01.jpg') }}"></p>
        <div class="flex_ImgR">
            <div class="flex_ImgLogo"><img src="{{ asset('images/products/TE-BD21f-pnk/TE-BD21f-pnk-02.png') }}"></div>
            <div><p class="product_text">通常モデルとの違いは音質だけに留まりません。シックなブラックをベースに、高級感あふれるゴールドのラインと、チャージングケースドアの表面とイヤホンの側面に、ピエール中野氏のアイコンを刻印。また音声ガイドには、アニメ「PSYCHO-PASS サイコパス」常守朱(CV:花澤香菜)のボイスを採用するなど、豪華な仕様です。</p>
            </div>
    </div>

    <h3 class="mt80">専用ケースと、紛失防止用ストラップ</h3>
    <div>
    <p class="product_text">コラボレーションモデル専用にデザインされたセミハードケースを制作しました。また、ピエール中野さんのアイデアにより、イヤホンの片側が落下しても紛失しないよう、両方のイヤホンを繋ぐストラップも同梱しています（通常モデルにも採用させて頂きました）。</p>
    <p class="alc"><img src="{{ asset('images/products/TE-BD21f-pnk/TE-BD21f-pnk-03.jpg') }}"></p>
    </div>

    
    <!--製品仕様テーブル-->
    <div class="mt40">
        <table class="col-head-type1">
            <tr>
                <th colspan="2">基本仕様</th>
            </tr>
            <tr>
                <th>駆動方式</th>
                <td>ダイナミック型及びバランスドアマチュア型ドライバーによるハイブリッドタイプ</td>
            </tr>
            <tr>
                <th>ドライバー</th>
                <td>ダイナミック型×1基　バランスドアマチュア型×2基</td>
            </tr>
            <tr>
                <th>ドライバーサイズ</th>
                <td>9.0mm（ダイナミック型）</td>
            </tr>
            <tr>
                <th>通話用内蔵マイク</th>
                <td>MEMSマイク</td>
            </tr>
            <tr>
                <th>再生周波数</th>
                <td>20Hz - 20kHz</td>
            </tr>
            <tr>
                <th>イヤホン重量</th>
                <td>約5.4g</td>
            </tr>
            <tr>
                <th>最大通話時間</th>
                <td>5時間</td>
            </tr>
            <tr>
                <th>最大再生時間</th>
                <td>7時間</td>
            </tr>
            <tr>
                <th>充電時間</th>
                <td>約2時間</td>
            </tr>
            <tr>
                <th>充電ポート</th>
                <td>USB Type C</td>
            </tr>
            <tr>
                <th>防水規格</th>
                <td>IPX5</td>
            </tr>

            <tr>
                <th colspan="2">Bluetooth仕様</th>
            </tr>
            <tr>
                <th>対応コーデック</th>
                <td>SBC、AAC、aptX</td>
            </tr>
            <tr>
                <th>対応プロファイル</th>
                <td>A2DP、AVRCP、HFP、HSP</td>
            </tr>
            <tr>
                <th>Bluetooth version</th>
                <td>5.0</td>
            </tr>
            <tr>
                <th>Bluetoothマルチペアリング登録可能デバイス数</th>
                <td>7</td>
            </tr>
            <tr>
                <th>Bluetoothマルチポイント</th>
                <td>1デバイス</td>
            </tr>

        </table>
    </div>
    </section>

    <section>
        <div class="alc mt20">
            <a href="{{ route('product.show') }}" class="btn_back mt10">製品一覧へ戻る</a>

            <a href="{{ route('pnk_reservation') }}" target="_blank" class="btn_buy mt10">ご購入はこちら</a>
        </div>
    </section>


</article>

</div><!--/main-->
</div><!--/container-->

@endsection

@section('javascript-footer')

<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 10,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        loop: true,
        thumbs: {
        swiper: galleryThumbs
        }
    });
</script>
    
@endsection