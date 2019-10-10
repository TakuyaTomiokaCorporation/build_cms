@extends('layouts.user_master')

@section('title', 'TE-D01h |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'product')

@section('content')

<div id="container" class="both">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">TE-D01h</h2>
    
        <section class="product_phot"><!--MV・商品画像-->
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('images/products/TE-D01h/TE-D01h_01.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/TE-D01h/TE-D01h_02.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/TE-D01h/TE-D01h_03.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/TE-D01h/TE-D01h_04.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/TE-D01h/TE-D01h_05.jpg') }}" alt=""></div>
                </div>
    
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button"></div>
                <div class="swiper-button-prev swiper-button"></div>
            </div>
    
            <div class="swiper-container gallery-thumbs mt20 alc ifpc">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('images/products/TE-D01h/TE-D01h_01.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/TE-D01h/TE-D01h_02.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/TE-D01h/TE-D01h_03.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/TE-D01h/TE-D01h_04.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/TE-D01h/TE-D01h_05.jpg') }}" alt=""></div>
                </div>
            </div>
        </section>
    
        <section class="example"><!--商品説明-->

            <div class="flex">
            <div class="mt20">
            <div>
                <h4 class="border_b">特徴</h4>
                <p class="mt10">無数の電波が飛び交う市街地や、騒音やノイズで溢れる電車内などでも、音切れが少なく、高音質でオンガクを楽しんで頂けるよう、数えきれないほどの試作とフィールドテストを行って造り込んだTE-D01h。VGPアワードのワイヤレス大賞や金賞など、最高評価を得たモデルをベースにして、本製品を造りました。市街地や電車の中でもドロップアウトに強いQualcomm社の高性能SoC　QCC3026を搭載し、連続最大9時間の長時間再生を実現。高い防水性能により、あらゆるシチュエーションで、高音質を楽しんでいただけます。</p>
            </div>
            <div class="bgGray mt20 accessories">
                <p class="txtS">付属品：MicroUSBケーブル 1本、標準イヤーピース（各サイズ1色1ペア SS/S/M/L）、収納ポーチ、ユーザーマニュアル、製品保証登録カード</p>
            </div>
        </div>
        <!--<div class="alc btn_area"><a href="" class="btn_buy">ご購入はこちら</a></div>-->
    
        </div>
    
        <h3 class="mt80">オンガクザンマイ</h3>
        <div class="">
            <p class="alc"><img src="{{ asset('images/products/TE-D01h/TE-D01h-01.jpg') }}"></p>
            <div class="flex_ImgR">
                <div class="flex_ImgLogo"><img src="{{ asset('images/user/JAPANtuned_logo.png') }}"></div>
                <div><p class="product_text">日本の音を知り尽くした、AVIOTのオーディオエキスパートが、日本市場の為だけに徹底的に音質を磨き上げました。東京ー大阪を往復したって、まだまだ余裕の最大9時間再生。無数の電波やノイズが飛び交う新幹線の車内だって、信号が途切れない高性能チップとAVIOT独自のアンテナ設計。いい音は、もう時と場所を選びません。</p>
                </div>
            </div>
            <p  class="alc mt20"><a href="{{ route('about') }}/#japansound" class="btn_Blk">詳細をみる</a></p>
    
        <h3 class="mt80">Qualcomm社最新SoC QCC3026を搭載</h3>
        <p class="alc"><img src="{{ asset('images/products/TE-D01h/TE-D01h-02.jpg') }}"></p>
        <div>
            <p class="product_text">従来型より圧倒的に高いDA（Digital to Analog) 変換性能を誇る、最新SoC QCC3026を採用。消費電力が少ないだけでなく、信号処理能力が高いので、遅延が少なく、クラシック音楽などの繊細な音も忠実に再現する高い解像度も持ちあわせています。</p>
            <p  class="alc mt20"><a href="{{ route('qualcomm') }}" class="btn_Blk">詳細をみる</a></p>
        </div>
    
        <h3 class="mt80">高品位パーツが織りなす日本の音</h3>
        <p class="alc"><img src="{{ asset('images/products/TE-D01h/TE-D01h-03.jpg') }}"></p>
        <div class="">
                <div><p class="product_text">解像度が高いQCC3026の性能を活かす為、ダイヤモンドよりも高い硬度を持つグラフェン振動板を使用したスピーカーを選択しました。イヤホン内部の線材、内部共振を抑える部材選びなど隅々にまで、日本のノウハウと技術が活かされています。</p>
                </div>
        </div>
    
        <h3 class="mt80">オンガクをもっと贅沢に</h3>
        <p class="alc"><img src="{{ asset('images/products/TE-D01h/TE-D01h-04.jpg') }}"></p>
        <div class="">
                <div><p class="product_text">「日本の音」の美しさを見た目にも再現しました。ハイグレードモデルとして、チャージングケースには、耐久性が高く、手触りの良い高品位なジュラルミンを採用。イヤホン本体にも、光の角度でその煌めきを変えるマイカ材を封じ込めた深みのある塗装を施すなど、モノづくりにこだわり続ける日本のメーカーとして、そのプライドを具現化しました。</p>
                </div>
        </div>
    
        <h3 class="mt80">aptXコーデックにより、もっと高音質に</h3>
        <p class="alc"><img src="{{ asset('images/products/TE-D01h/TE-D01h-05.jpg') }}"></p>
        <div class="flex_ImgR">
                <div class="flex_ImgLogo"><img src="{{ asset('images/user/codec_logo.jpg') }}"></div>
                <div>
                    <p class="product_text">Bluetoothのコーデックは、一般的なSBC、AACの他、高音質・低遅延なaptXにも対応。より原音に近い再生が可能です。その上遅延が極めて少ないため、YouTubeなどの動画再生にも最適です。</p>
                </div>
        </div>
        <p  class="alc mt20"><a href="{{ route('codec') }}" class="btn_Blk">詳細をみる</a></p>
    
    
        <h3 class="mt80">シャワーも浴びても平気。スポーツ時も安心な防水性能。</h3>
        <p class="alc"><img src="{{ asset('images/products/TE-D01h/TE-D01h-06.jpg') }}"></p>
        <div class="flex_ImgR">
                <div class="flex_ImgLogo"><img src="{{ asset('images/user/IPX7_logo.png') }}"></div>
                <div>
                    <p class="product_text">ハードなワークアウトな大量の汗や、イヤホンを着けたままシャワーを浴びても平気。外出時の急な雨にも安心です。 どんな時でも、オンガクを快適に楽しめます。</p>
                </div>
        </div>
        <p  class="alc mt20"><a href="{{ route('waterproof') }}" class="btn_Blk">詳細をみる</a></p>
    
        <h3 class="mt80">AVIOTならもっと安心</h3>
        <p class="alc"><img src="{{ asset('images/products/TE-D01h/TE-D01h-07.jpg') }}"></p>
        <div class="">
                <div><p class="product_text">完全ワイヤレスイヤホンの購入に抵抗を感じているお客様からは、紛失しそうで不安といったご意見を多く頂戴しています。AVIOTは、よりお客様に安心してご使用いただくため、紛失時に特別価格で代替え品を提供するプログラムもご用意しております。</p>
                </div>
        </div>
    
    
    
        <!--製品仕様テーブル-->
        <div class="mt40">
            <table class="col-head-type1">
                <tr>
                    <th colspan="2">基本仕様</th>
                </tr>
                <tr>
                    <th>ドライバー</th>
                    <td>φ6mmダイナミック型</td>
                </tr>
                <tr>
                    <th>感度</th>
                    <td>91dB±3db</td>
                </tr>
                <tr>
                    <th>インピーダンス</th>
                    <td>16Ω</td>
                </tr>
                <tr>
                    <th>最大入力</th>
                    <td>5mW</td>
                </tr>
                <tr>
                    <th>搭載SoC</th>
                    <td>Qualcomm社製QCC3026</td>
                </tr>
                <tr>
                    <th>イヤホン重量</th>
                    <td>イヤホン本体片側約5g / ケース約90g</td>
                </tr>
                <tr>
                    <th>通話用内蔵マイク</th>
                    <td>CVC8.0ノイズキャンセリング付き</td>
                </tr>
                <tr>
                    <th>内蔵マイク感度</th>
                    <td>-42db/±3db</td>
                </tr>
                <tr>
                    <th>内蔵マイク周波数特性</th>
                    <td>20Hz - 20,000Hz</td>
                </tr>
                <tr>
                    <th>再生周波数帯域</th>
                    <td>20Hz - 20,000Hz</td>
                </tr>
                <tr>
                    <th>最大再生時間</th>
                    <td>最大9時間</td>
                </tr>
                <tr>
                    <th>充電時間</th>
                    <td>1.5～2時間</td>
                </tr>
                <tr>
                    <th>防水規格</th>
                    <td>IPX7</td>
                </tr>
    
                <tr>
                    <th colspan="2">Bluetooth仕様</th>
                </tr>
                <tr>
                    <th>Bluetooth version</th>
                    <td>5.0</td>
                </tr>
                <tr>
                    <th>接続方式</th>
                    <td>TWS,TWS Plus</td>
                </tr>
                <tr>
                    <th>対応コーデック</th>
                    <td>SBC,AAC,aptX</td>
                </tr>
                <tr>
                    <th>対応プロファイル</th>
                    <td>A2DP,AVRCP, HSP,HFP</td>
                </tr>
            </table>
        </div>
        </section>
    
        <section>
            <div class="alc mt20">
                <a href="{{ route('product.show') }}" class="btn_back mt10">製品一覧へ戻る</a>
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