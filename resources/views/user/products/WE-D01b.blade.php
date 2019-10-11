@extends('layouts.user_master')

@section('title', 'WE-D01b |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'product')

@section('content')

<div id="container" class="both">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">WE-D01b</h2>
        <section class="product_phot"><!--MV・商品画像-->
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/main.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/BR.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_02.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/RG.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_04.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/SL.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_06.png') }}" alt=""></div>
                </div>
    
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button"></div>
                <div class="swiper-button-prev swiper-button"></div>
            </div>
    
            <div class="swiper-container gallery-thumbs mt20 alc">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/main.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/BR.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_02.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/RG.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_04.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/SL.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_06.png') }}" alt=""></div>
                </div>
            </div>
        </section>
    
        <section class="example"><!--商品説明-->
            <div class="flex">
    
        <div class="mt20">
            <div>
                <h4 class="border_b">特徴</h4>
                <p class="mt10">フラットなトーンバランスと、よりハイスピードなスピーカードライバーを厳選し、採用。また、剛性が高く外来ノイズに強いジュラルミンケースを採用するなど、隅々まで高音質化を行って、クラス最高の音質を実現しました。ワイヤレスイヤホンである事を忘れさせる高音質と、インビジブルバッテリーを採用した軽快な使い心地を是非お楽しみ下さい。</p>
            </div>
            <div class="bgGray mt20 accessories">
                <p class="txtS">付属品：MicroUSBケーブル、標準イヤーピース（各サイズ1色1ペア S/M/L）、スポーツ用イヤーウィング（各サイズ1色1ペア S/M/L）、SpinFit®イヤピース（各サイズ1色1ペア S/M/L）、収納ポーチ、ユーザーマニュアル、製品保証登録カード</p>
            </div>
        </div>
        <div class="alc btn_area"><a href="https://www.amazon.co.jp/AVIOT-%E6%97%A5%E6%9C%AC%E3%81%AE%E3%82%AA%E3%83%BC%E3%83%87%E3%82%A3%E3%82%AA%E3%83%A1%E3%83%BC%E3%82%AB%E3%83%BC-WE-D01b-Bluetooth-Android/dp/B07HCJHMSW/ref=sr_1_14?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%83%AF%E3%82%A4%E3%83%A4%E3%83%AC%E3%82%B9%E3%82%A4%E3%83%A4%E3%83%9B%E3%83%B3&s=gateway&sr=8-14&th=1" target="_blank" class="btn_buy">ご購入はこちら</a></div>
        </div>
    
        <h3 class="mt80">-Japan Tuned-</h3>
        <div class="">
            <p class="alc"><img src="{{ asset('images/products/WE-D01b/d01b_japan_tuned.jpg') }}"></p>
                <div><p>日本の音を知り尽くしたオーディオのエキスパート達が、クラシックから最新ヒット曲まで約1,000曲の楽曲を、延べ3,000時間以上も掛けてじっくりと聴き込み、チューニングをしました。</p>
                    <p  class="alc mt20"><a href="{{ route('about') }}/#japansound" class="btn_Blk">詳細をみる</a></p></div>
    
        <h3 class="mt80">誇張感のない、フラットなトーンバランス。</h3>
        <p class="alc"><img src="{{ asset('images/products/WE-D01b/WE-D01b_01.jpg') }}"></p>
        <div>
            <p>開発スタート時に、まず取り組んだのは、トーンバランスがフラットで、ハイスピードなドライバーの選定です。その上で、じっくりと時間を掛け、0.1db単位の徹底したチューニングを行いました。ワイヤレスイヤホンである事を忘れるほど、ノイズや歪み感の極めて少ない、どこまでも透き通るようなサウンドに仕上げました。</p>
        </div>
    
        <h3 class="mt80">すみずみまで高音質設計</h3>
        <p class="alc"><img src="{{ asset('images/products/WE-D01b/WE-D01b-0.jpg') }}"></p>
        <div class="flex_ImgR">
                <div class="flex_ImgLogo"><img src="{{ asset('images/products/WE-D01b/codec16-9.jpg') }}"></div>
                <div><p class="product_text">日本の音を知り尽くしたオーディオのエキスパート達が、クラシックから最新ヒット曲まで約1,000曲の楽曲を、延べ3,000時間以上も掛けてじっくりと聴き込み、チューニングをしました。</p></div>
        </div>
        <p  class="alc mt20"><a href="{{ route('codec') }}" class="btn_Blk">詳細をみる</a></p></div>

        <h3 class="mt80">汗、雨に強い</h3>
        <p class="alc"><img src="{{ asset('images/products/WE-D01b/water.jpg') }}"></p>
        <div class="flex_ImgR">
                <div class="flex_ImgLogo"><img src="{{ asset('images/products/WE-D01b/IPX716-9.png') }}"></div>
                <div>
                    <p class="product_text">外装パーツのシーリングの強化し、IPX7相当の防滴性能の実現しました。ジムでのハードなワークアウトや、ランニングでの大量の汗も大丈夫。急な雨に降られても平気です。</p>
                </div>
        </div>
        <p  class="alc mt20"><a href="{{ route('waterproof') }}" class="btn_Blk">詳細をみる</a></p>
    
        <h3 class="mt80"></h3>
    
        <h3 class="mt80">マグネット内蔵だから、便利で安心</h3>
        <p class="alc"><img src="{{ asset('images/products/WE-D01b/magnet.jpg') }}"></p>
        <div class="">
            <div>
                <p>イヤホンにマグネットが内蔵されていますので、使わない時はネックレスのように首にかけられます。落とす心配もいりません。</p>
            </div>
        </div>
    
        <h3 class="mt80">誰でも、簡単に操作が可能。</h3>
        <p class="alc"><img src="{{ asset('images/products/WE-D01b/magcup.jpg') }}"></p>
        <div class="">
            <div>
                <p>リモコン部分で、ボリューム/再生/停止/曲送り/曲戻しなどの基本操作が可能です。またマイクが搭載されているので、ハンズフリー通話やSiri&Googleアシスタントに対応しています。</p>
            </div>
        </div>
    
    
        <!--製品仕様テーブル-->
        <div class="mt40">
            <table class="col-head-type1">
                <tr>
                    <th colspan="2">基本仕様</th>
                </tr>
                <tr>
                    <th>チップセット</th>
                    <td>CSR8645</td>
                </tr>
                <tr>
                    <th>通話用内蔵マイク</th>
                    <td>cVc6.0ノイズキャンセリング</td>
                </tr>
                <tr>
                    <th>最大再生時間</th>
                    <td>約6時間</td>
                </tr>
                <tr>
                    <th>最大総再生時間</th>
                    <td>約7時間</td>
                </tr>
                <tr>
                    <th>充電時間</th>
                    <td>約1.5～2時間</td>
                </tr>
                <tr>
                    <th>充電ポート</th>
                    <td>MicroUSB</td>
                </tr>
                <tr>
                    <th>防水規格</th>
                    <td>IPX7</td>
                </tr>
                <tr>
                    <th>音声ガイダンス</th>
                    <td>日本語音声ガイダンス</td>
                </tr>
    
                <tr>
                    <th colspan="2">Bluetooth仕様</th>
                </tr>
                <tr>
                    <th>Bluetooth version</th>
                    <td>4.1</td>
                </tr>
                <tr>
                    <th>対応コーデック</th>
                    <td>AAC,SBC,aptX</td>
                </tr>
                <tr>
                    <th>対応プロファイル</th>
                    <td>A2DP,HFP,HSP,AVRCP</td>
                </tr>
            </table>
        </div>
        </section>
    
        <section>
            <div class="alc mt20">
                <a href="{{ route('product.show') }}" class="btn_back mt10">製品一覧へ戻る</a>
    
                <a href="https://www.amazon.co.jp/AVIOT-%E6%97%A5%E6%9C%AC%E3%81%AE%E3%82%AA%E3%83%BC%E3%83%87%E3%82%A3%E3%82%AA%E3%83%A1%E3%83%BC%E3%82%AB%E3%83%BC-WE-D01b-Bluetooth-Android/dp/B07HCJHMSW/ref=sr_1_14?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%83%AF%E3%82%A4%E3%83%A4%E3%83%AC%E3%82%B9%E3%82%A4%E3%83%A4%E3%83%9B%E3%83%B3&s=gateway&sr=8-14&th=1" target="_blank" class="btn_buy mt10">ご購入はこちら</a>
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