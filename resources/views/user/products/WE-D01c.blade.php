@extends('layouts.user_master')

@section('title', 'WE-D01c |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'product')

@section('content')
<div id="container" class="both">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">WE-D01c</h2>
    
        <section class="product_phot"><!--MV・商品画像-->
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_01.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_02.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_03.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_04.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_05.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_06.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_07.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_08.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_09.png') }}" alt=""></div>
                </div>
    
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button"></div>
                <div class="swiper-button-prev swiper-button"></div>
            </div>
    
            <div class="swiper-container gallery-thumbs mt20 alc ifpc">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_01.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_02.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_03.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_04.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_05.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_06.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_07.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_08.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('images/products/WE-D01c/WE-D01c_09.png') }}" alt=""></div>
                </div>
            </div>
        </section>
    
        <section class="example"><!--商品説明-->
        <div class="flex">

    <div class="mt20">
        <div>
            <h4 class="border_b">特徴</h4>
            <p class="mt10">高音質ワイヤレスイヤホンの定番モデルとして好評のWE-D01bをベースに、より快適に装着頂けるよう、ケースを小型化。室内など静かな場所で音量を下げても低音が痩せにくく、騒音が多い電車内などでボリュームを上げてもバランスが崩れない、絶妙なトーンバランスに仕上げました。クラシックからポップスまで幅広いオンガクを心地良くお楽しみいただけます。</p>
        </div>
        <div class="bgGray mt20 accessories">
            <p class="txtS">付属品：MicroUSBケーブル 1本、標準イヤーピース（各サイズ1色1ペア SS/S/M/L）、イヤーウイング、（各サイズ1色1ペア S/M/L）、収納ポーチ、ユーザーマニュアル、製品保証登録カード</p>
        </div>
    </div>
    <div class="alc btn_area"><a href="https://www.amazon.co.jp/AVIOT-WE-D01c-Bluetooth-Android-6%E6%99%82%E9%96%93%E9%80%A3%E7%B6%9A%E5%86%8D%E7%94%9F/dp/B07M7WPKF6/ref=sr_1_16?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&amp;keywords=%E3%83%AF%E3%82%A4%E3%83%A4%E3%83%AC%E3%82%B9%E3%82%A4%E3%83%A4%E3%83%9B%E3%83%B3&amp;s=gateway&amp;sr=8-16&amp;th=1" target="_blank" class="btn_buy">ご購入はこちら</a></div>
    </div>


    <h3 class="mt80">-Japan Tuned-</h3>
    <div class="">
        <p class="alc"><img src="{{ asset('images/products/WE-D01c/WE-D01c-01.jpg') }}"></p>
        <div class="flex_ImgR">
            <div class="flex_ImgLogo"><img src="{{ asset('images/user/JAPAN-tuned.png') }}"></div>
            <div><p class="product_text">日本の音を知り尽くしたオーディオのエキスパート達が、クラシックから最新ヒット曲まで約1,000曲の楽曲じっくりと聴き込み、徹底したチューニングを行いました。誇張の少ないフラットでナチュラルな音調に整えた上で、サウンドバランスを低域がふくよかに響くよう調整。これにより小型でありながら大編成のクラシックから、最新ヒット曲まで、ワイドレンジで、心地良く響くようになりました。</p>
            </div>
        </div>
        <p  class="alc mt20"><a href="{{ route('about') }}#japansound" class="btn_Blk">詳細をみる</a></p>
    </div>
    
        <h3 class="mt80">ライブの熱を伝える新設計ハウジング</h3>
    <p class="alc"><img src="{{ asset('images/products/WE-D01c/WE-D01c-02.jpg') }}"></p>
    <div>
        <p class="product_text">AVIOTが最も得意とするTWS (完全ワイヤレスイヤホン）の設計ノウハウを活かし、重量物であるバッテリーをケーブルから排除。ハウジングケースには剛性が高く外来ノイズに強い高品位なアルミケースを採用し、音質を犠牲することなくイヤホン本体を小型化しました。フラットなトーンバランスを採用しつつ、低音量時でも豊かなベースサウンドが楽しめるようチューニングを施しました。長時間の音楽再生にも聞き疲れしません。</p>
    </div>

    <h3 class="mt80">クラスを超えた高音質設計</h3>
    <p class="alc"><img src="{{ asset('images/products/WE-D01c/WE-D01c-03.jpg') }}"></p>
    <div class="">
            <div><p class="product_text">ハウジング内部のアコースティックチャンバーを入念に調整し、内部共振を抑え、小型でありながら濁りの少ない中低音を実現。AVIOTが上位モデルにも採用しているハイスピード、低歪みなドライバーを使用し、中高域のリニアリティーも高めました。コーデックには一般的なSBCやAACだけでなく、より情報量の多いapt-Xにも対応しています。</p>
            </div>
    </div>

    <h3 class="mt80">スポーツにも最適、IPX7の防水性能</h3>
    <p class="alc"><img src="{{ asset('images/products/WE-D01c/WE-D01c-04.jpg') }}"></p>
    <div class="flex_ImgR">
            <div class="flex_ImgLogo"><img src="{{ asset('images/user/IPX7_logo.png') }}"></div>
            <div>
                <p class="product_text">リモコンやハウジングケース部品のシーリングを強化して、IPX７レベルの防滴性能を実現しました。ジムでのハードなワークアウトやランニングでの汗や、急な雨でも平気です。</p>
            </div>
    </div>
    <p  class="alc mt20"><a href="{{ route('waterproof') }}" class="btn_Blk">詳細をみる</a></p>

    <h3 class="mt80"></h3>

    <h3 class="mt80">マグネット内蔵だから、便利で安心</h3>
    <p class="alc"><img src="{{ asset('images/products/WE-D01c/WE-D01c-05.jpg') }}"></p>
    <div class="">
        <div>
            <p class="product_text">イヤホンにマグネットが内蔵されていますので、使わない時はネックレスのように首にかけられます。落とす心配もいりません。</p>
        </div>
    </div>

    <h3 class="mt80">誰でも、簡単に操作が可能。</h3>
    <p class="alc"><img src="{{ asset('images/products/WE-D01c/WE-D01c-06.jpg') }}"></p>
        <div>
            <p class="product_text">リモコン部分で、ボリューム/再生/停止/曲送り/曲戻しなどの基本操作が可能です。またマイクが搭載されているので、ハンズフリー通話やSiri&Googleアシスタントに対応しています。</p>
        </div>


    <!--製品仕様テーブル-->
    <div class="mt40">
        <table class="col-head-type1">
            <tr>
                <th colspan="2">基本仕様</th>
            </tr>
            <tr>
                <th>搭載SoC</th>
                <td>CSR8645</td>
            </tr>
            <tr>
                <th>音声ガイダンス</th>
                <td>日本語音声ガイダンス</td>
            </tr>
            <tr>
                <th>通話用内蔵マイク</th>
                <td>cVc6.0ノイズキャンセリング</td>
            </tr>
            <tr>
                <th>再生周波数</th>
                <td>16Hz-32kHz</td>
            </tr>
            <tr>
                <th>最大通話時間</th>
                <td>最大7時間</td>
            </tr>
            <tr>
                <th>最大再生時間</th>
                <td>最大6時間</td>
            </tr>
            <tr>
                <th>充電時間</th>
                <td>約1.5～2時間</td>
            </tr>
            <tr>
                <th>充電ポート</th>
                <td>Micro USB</td>
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
                <td>4.1</td>
            </tr>
            <tr>
                <th>Bluetoothマルチポイント</th>
                <td>8デバイス</td>
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

            <a href="https://www.amazon.co.jp/AVIOT-WE-D01c-Bluetooth-Android-6%E6%99%82%E9%96%93%E9%80%A3%E7%B6%9A%E5%86%8D%E7%94%9F/dp/B07M7WPKF6/ref=sr_1_16?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&amp;keywords=%E3%83%AF%E3%82%A4%E3%83%A4%E3%83%AC%E3%82%B9%E3%82%A4%E3%83%A4%E3%83%9B%E3%83%B3&amp;s=gateway&amp;sr=8-16&amp;th=1" target="_blank" class="btn_buy mt10">ご購入はこちら</a>
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