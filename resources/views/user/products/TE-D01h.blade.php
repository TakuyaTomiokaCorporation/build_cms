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
                    <div class="swiper-slide"><img src="{{ asset('images/products/TE-D01h/TE-D01h_01.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="./img/TE-D01h_02.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/TE-D01h_03.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/TE-D01h_04.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/TE-D01h_05.jpg" alt=""></div>
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
    
        <section class="w1020 w98 mt40"><!--商品説明-->
            <div class="flex">
            <div>
                <img src="./img/TE-D01h_04.jpg"><!--製品画像一枚-->
                <p class="alc mt20"><!--製品の色-->
                    <span class="Black"></span>
                </p>
                <span class=""></span>
            </div>
    
        <div>
            <div>
                <h4 class="border_b">特徴</h4>
                <p class="mt10">無数の電波が飛び交う市街地や、騒音やノイズで溢れる電車内などでも、音切れが少なく、高音質でオンガクを楽しんで頂けるよう、数えきれないほどの試作とフィールドテストを行って造り込んだTE-D01b。VGPアワードのワイヤレス大賞や金賞など、最高評価を得たモデルをベースにして、本製品を造りました。市街地や電車の中でもドロップアウトに強いQualcomm社の高性能SoC　QCC3026を搭載し、連続最大9時間の長時間再生を実現。高い防水性能により、あらゆるシチュエーションで、高音質を楽しんでいただけます。</p>
            </div>
            <div class="bgGray mt20 accessories">
                <p class="txtS">付属：MicroUSBケーブル、標準イヤーピース（各サイズ1色1ペア S/M/L）、イヤーウイング、（各サイズ1色1ペア S/M）、SpinFit CP100Z（各サイズ1色1ペア SS/S/M）、収納ポーチ、ユーザーマニュアル、製品保証登録カード</p>
            </div>
            <div class="alc mt20"><a href="https://www.amazon.co.jp/AVIOT-%E6%97%A5%E6%9C%AC%E3%81%AE%E3%82%AA%E3%83%BC%E3%83%87%E3%82%A3%E3%82%AA%E3%83%A1%E3%83%BC%E3%82%AB%E3%83%BC-WE-D01b-Bluetooth-Android/dp/B07HCJHMSW/ref=sr_1_14?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%83%AF%E3%82%A4%E3%83%A4%E3%83%AC%E3%82%B9%E3%82%A4%E3%83%A4%E3%83%9B%E3%83%B3&s=gateway&sr=8-14&th=1" class="btn_buy">ご購入はこちら</a></div>
    
            
        </div>
        </div>
    
        <h3 class="mt40">オンガクザンマイ-</h3>
        <div class="flex">
            <div><img src="{{ asset('images/user/JAPAN-tuned.png') }}"></div>
            <div>
                <p>日本の音を知り尽くした、AVIOTのオーディオエキスパートが、日本市場の為だけに徹底的に音質を磨き上げました。東京ー大阪を往復したって、まだまだ余裕の最大9時間再生。無数の電波やノイズが飛び交う新幹線の車内だって、信号が途切れない高性能チップとAVIOT独自のアンテナ設計。いい音は、もう時と場所を選びません。</p>
                <div class="alc mt20"><a href="" class="btn_Blk">詳細をみる</a></div>
            </div>
        </div>
    
        <h3 class="mt40">Qualcomm社最新SoC QCC3026を搭載</h3>
        <div>
            <p>従来型より圧倒的に高いDA（Digital to Analog) 変換性能を誇る、最新SoC QCC3026を採用。消費電力が少ないだけでなく、信号処理能力が高いので、遅延が少なく、クラシック音楽などの繊細な音も忠実に再現する高い解像度も持ちあわせています。</p>
        </div>
    
        <h3 class="mt20">高品位パーツが織りなす日本の音</h3>
        <div>
            <p>解像度が高いQCC3026の性能を活かす為、ダイヤモンドよりも高い硬度を持つグラフェン振動板を使用したスピーカーを選択しました。イヤホン内部の線材、内部共振を抑える部材選びなど隅々にまで、日本のノウハウと技術が活かされています。</p>
            <img src="">
        </div>
    
        <h3 class="mt40">オンガクをもっと贅沢に</h3>
        <div class="flex">
            <div><img src="{{ asset('images/user/JAPAN-tuned.png') }}"></div>
            <div>
                <p>「日本の音」の美しさを見た目にも再現しました。ハイグレードモデルとして、チャージングケースには、耐久性が高く、手触りの良い高品位なジュラルミンを採用。イヤホン本体にも、光の角度でその煌めきを変えるマイカ材を封じ込めた深みのある塗装を施すなど、モノづくりにこだわり続ける日本のメーカーとして、そのプライドを具現化しました。</p>
            </div>
        </div>
    
        <h3 class="mt40">aptXコーデックにより、もっと高音質に</h3>
        <div class="flex">
            <div><img src="{{ asset('images/user/JAPAN-tuned.png') }}"></div>
            <div>
                <p>Bluetoothのコーデックは、一般的なSBC、AACの他、高音質・低遅延なaptXにも対応。より原音に近い再生が可能です。その上遅延が極めて少ないため、YouTubeなどの動画再生にも最適です。</p>
            </div>
        </div>
    
        <h3 class="mt40">シャワーを浴びても平気。スポーツ時も安心な防水性能。</h3>
        <div class="flex">
            <div>
                <p>ハードなワークアウトな大量の汗や、イヤホンを着けたままシャワーを浴びても平気。外出時の急な雨にも安心です。 どんな時でも、オンガクを快適に楽しめます。</p>
            </div>
            <div><img src="{{ asset('images/user/JAPAN-tuned.png') }}"></div>
        </div>
    
        <h3 class="mt40">AVIOTならもっと安心</h3>
        <div class="flex">
            <div>
                <p>完全ワイヤレスイヤホンの購入に抵抗を感じているお客様からは、紛失しそうで不安といったご意見を多く頂戴しています。AVIOTは、よりお客様に安心してご使用いただくため、紛失時に特別価格で代替え品を提供するプログラムもご用意しております。</p>
            </div>
            <div><img src="{{ asset('images/user/JAPAN-tuned.png') }}"></div>
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
                <a href="../" class="btn_back mt10">製品一覧へ戻る</a>
    
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