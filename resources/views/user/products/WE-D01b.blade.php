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
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_01.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_02.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_03.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_04.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_05.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_06.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_07.png') }}" alt=""></div>
                </div>
    
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button"></div>
                <div class="swiper-button-prev swiper-button"></div>
            </div>
    
            <div class="swiper-container gallery-thumbs mt20 alc ifpc">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_01.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_02.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_03.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_04.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_05.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_06.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01b/WE-D01b_07.png') }}" alt=""></div>
                </div>
            </div>
        </section>
    
        <section class="example"><!--商品説明-->
            <div class="flex">
            <div>
                <img src="{{ asset('images/products/WE-D01b/WE-D01b_02.png') }}"><!--製品画像一枚-->
                <p class="alc mt20"><!--製品の色-->
                    <span class="Black"></span>
                    <span class="Silver"></span>
                    <span class="Pink"></span>
                </p>
                <span class=""></span>
            </div>
    
        <div>
            <div>
                <h4 class="border_b">特徴</h4>
                <p class="mt10">フラットなトーンバランスと、よりハイスピードなスピーカードライバーを厳選し、採用。また、剛性が高く外来ノイズに強いジュラルミンケースを採用するなど、隅々まで高音質化を行って、クラス最高の音質を実現しました。ワイヤレスイヤホンである事を忘れさせる高音質と、インビジブルバッテリーを採用した軽快な使い心地を是非お楽しみ下さい。</p>
            </div>
            <div class="bgGray mt20 accessories">
                <p class="txtS">付属品：MicroUSBケーブル、標準イヤーピース（各サイズ1色1ペア S/M/L）、イヤーウイング、（各サイズ1色1ペア S/M）、SpinFit CP100Z（各サイズ1色1ペア SS/S/M）、収納ポーチ、ユーザーマニュアル、製品保証登録カード</p>
            </div>
            <div class="alc mt20"><a href="https://www.amazon.co.jp/AVIOT-%E6%97%A5%E6%9C%AC%E3%81%AE%E3%82%AA%E3%83%BC%E3%83%87%E3%82%A3%E3%82%AA%E3%83%A1%E3%83%BC%E3%82%AB%E3%83%BC-WE-D01b-Bluetooth-Android/dp/B07HCJHMSW/ref=sr_1_14?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%83%AF%E3%82%A4%E3%83%A4%E3%83%AC%E3%82%B9%E3%82%A4%E3%83%A4%E3%83%9B%E3%83%B3&s=gateway&sr=8-14&th=1" class="btn_buy">ご購入はこちら</a></div>
    
            
        </div>
        </div>
    
        <h3 class="mt40">-Japan Tuned-</h3>
        <div class="">
            <p class="alc"><img src="{{ asset('images/products/WE-D01b/WE-D01b-01.jpg') }}"></p>
            <div class="flex_ImgR">
                <div class="flex_ImgLogo"><img src="{{ asset('images/products/WE-D01b/JAPAN-tuned-LOGO16-9.png') }}"></div>
                <div><p>日本の音を知り尽くしたオーディオのエキスパート達が、クラシックから最新ヒット曲まで約1,000曲の楽曲を、延べ3,000時間以上も掛けてじっくりと聴き込み、チューニングをしました。</p>
                    <p  class="alc mt20"><a href="{{ route('about') }}#japansound" class="btn_Blk">詳細をみる</a></p></div>
            </div>
        
        </div>
    
        <p class="alc mt40"><img src="{{ asset('images/products/WE-D01b/WE-D01b-02.jpg') }}"></p>
        <h3>誇張感のない、フラットなトーンバランス。</h3>
        <div>
            <p>開発スタート時に、まず取り組んだのは、トーンバランスがフラットで、ハイスピードなドライバーの選定です。その上で、じっくりと時間を掛け、0.1db単位の徹底したチューニングを行いました。ワイヤレスイヤホンである事を忘れるほど、ノイズや歪み感の極めて少ない、どこまでも透き通るようなサウンドに仕上げました。</p>
        </div>
    
        <p class="alc mt40"><img src="{{ asset('images/products/WE-D01b/WE-D01b-0.jpg') }}"></p>
        <h3>すみずみまで高音質設計</h3>
        <div class="flex_ImgR">
                <div class="flex_ImgLogo"><img src="{{ asset('images/products/WE-D01b/codec16-9.jpg') }}"></div>
                <div><p>日本の音を知り尽くしたオーディオのエキスパート達が、クラシックから最新ヒット曲まで約1,000曲の楽曲を、延べ3,000時間以上も掛けてじっくりと聴き込み、チューニングをしました。</p>
                    <p  class="alc mt20"><a href="{{ route('codec') }}" class="btn_Blk">詳細をみる</a></p></div>
        </div>
    
        <p class="alc mt40"><img src="{{ asset('images/products/WE-D01b/WE-D01b-04.jpg') }}"></p>
        <h3>汗、雨に強い</h3>
        <div class="flex_ImgL">
            <div class="clm2_imgLogo"><img src="{{ asset('images/products/WE-D01b/IPX716-9.png') }}"></div>
            <div>
                <p>外装パーツのシーリングの強化し、IPX7相当の防滴性能の実現しました。 <br>ジムでのハードなワークアウトや、ランニングでの大量の汗も大丈夫。急な雨に降られても平気です。</p>
                <p  class="alc mt20"><a href="{{ rotue('waterproof') }}" class="btn_Blk">詳細をみる</a></p>
            </div>
        </div>
    
        <p class="alc mt40"><img src="{{ asset('images/products/WE-D01b/WE-D01b-05.jpg') }}"></p>
        <h3>マグネット内蔵だから、便利で安心</h3>
        <div class="">
            <div>
                <p>イヤホンにマグネットが内蔵されていますので、使わない時はネックレスのように首にかけられます。落とす心配もいりません。</p>
            </div>
        </div>
    
        <p class="alc mt40"><img src="{{ asset('images/products/WE-D01b/WE-D01b-06.jpg') }}"></p>
        <h3>誰でも、簡単に操作が可能。</h3>
        <div class="">
            <div>
                <p>イヤホンにマグネットが内蔵されていますので、使わない時はネックレスのように首にかけられます。落とす心配もいりません。</p>
            </div>
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
                    <td>8.6mm（ダイナミック型）</td>
                </tr>
                <tr>
                    <th>通話用内蔵マイク</th>
                    <td>MEMSマイク</td>
                </tr>
                <tr>
                    <th>再生周波数</th>
                    <td>16Hz-32kHz</td>
                </tr>
                <tr>
                    <th>イヤホン重量</th>
                    <td>約13g</td>
                </tr>
                <tr>
                    <th>最大通話時間</th>
                    <td>11時間</td>
                </tr>
                <tr>
                    <th>最大再生時間</th>
                    <td>13時間<br>
                        <small>※コーデックにapt-X又はapt-X HDをご使用時には、2〜3割程度短くなります。</small>
                    </td>
                </tr>
                <tr>
                    <th>充電時間</th>
                    <td>約2時間</td>
                </tr>
                <tr>
                    <th>充電ポート</th>
                    <td>Micro USB</td>
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
                    <td>SBC,AAC,aptX,aptX HD</td>
                </tr>
                <tr>
                    <th>対応プロファイル</th>
                    <td>A2DP,AVRCP,HFP,HSP</td>
                </tr>
                <tr>
                    <th>Bluetooth version</th>
                    <td>5.0</td>
                </tr>
                <tr>
                    <th>Bluetoothマルチペアリング登録可能デバイス数</th>
                    <td>10</td>
                </tr>
                <tr>
                    <th>Bluetoothマルチポイント</th>
                    <td>2デバイス</td>
                </tr>
    
            </table>
        </div>
        </section>
    
        <section>
            <div class="alc mt20">
                <a href="{{ route('product.show') }}" class="btn_back mt10">製品一覧へ戻る</a>
    
                <a href="https://www.amazon.co.jp/AVIOT-%E6%97%A5%E6%9C%AC%E3%81%AE%E3%82%AA%E3%83%BC%E3%83%87%E3%82%A3%E3%82%AA%E3%83%A1%E3%83%BC%E3%82%AB%E3%83%BC-WE-D01b-Bluetooth-Android/dp/B07HCJHMSW/ref=sr_1_14?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%83%AF%E3%82%A4%E3%83%A4%E3%83%AC%E3%82%B9%E3%82%A4%E3%83%A4%E3%83%9B%E3%83%B3&s=gateway&sr=8-14&th=1" class="btn_buy mt10">ご購入はこちら</a>
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
        slidesPerView: 4,
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