@extends('layouts.user_master')

@section('title', 'WE-BD21d |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'product')

@section('content')

<div id="container" class="both">
<div id="" class="main" role="main">
<article class="w1020 w98 m_auto">
    <h2 class="pt20 border_b mb20">WE-BD21d</h2>

    <section class="product_phot"><!--MV・商品画像-->
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d_01.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d_02.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d_03.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d_04.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d_05.jpg') }}" alt=""></div>
            </div>

            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button"></div>
            <div class="swiper-button-prev swiper-button"></div>
        </div>

        <div class="swiper-container gallery-thumbs mt20 alc ifpc">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d_01.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d_02.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d_03.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d_04.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d_05.jpg') }}" alt=""></div>
            </div>
        </div>
    </section>

    <section class="example"><!--商品説明-->
        <div class="flex">

    <div class="mt20">
        <div>
            <h4 class="border_b">特徴</h4>
            <p class="mt10">ワイヤレスイヤホンとしては類例が殆どない、スピーカーを3基も搭載したマルチドライバーモデルです。小さなアルミ筐体の中に、2基のバランスドアマチュアドライバー、そしてダイナミックドライバーを組み込みました。ワイヤレスイヤホンにありがちな、低音域や高音域の一部を強調して、高音質だと錯覚させる手法を取らず、目指したのは、スタジオモニターのようにフラットなトーンバランスで、どんな楽曲でも、アーティストが意図した通りの、色付けのない音。高音質コーデックaptX HDに対応。3基の高性能ドライバーと、aptX HDの圧倒的な情報量により、従来のワイヤレスの概念を覆すほどの高音質を実現しました。</p>
        </div>
        <div class="bgGray mt20 accessories">
            <p class="txtS">付属品：MicroUSBケーブル 1本、標準イヤーピース（各サイズ1色1ペア S/M/L）、イヤーウイング（各サイズ1色1ペア S/M）、SpinFit CP100Z（各サイズ1色1ペア SS/S/M）、収納ポーチ、ユーザーマニュアル、製品保証登録カード</p>
        </div>
    </div>
    <div class="alc btn_area"><a href="https://www.amazon.co.jp/dp/B07SQXJT6T?ref=myi_title_dp" target="_blank" class="btn_buy">ご購入はこちら</a></div>
    </div>

    <h3 class="mt80">もっと、日本の音へ</h3>
    <div class="">
        <p class="alc"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d-01.jpg') }}"></p>
        <div class="flex_ImgR">
            <div class="flex_ImgLogo"><img src="{{ asset('images/user/JAPANtuned_logo.png') }}"></div>
            <div><p class="product_text">aptX HD対応ワイヤレスイヤホンとしては世界初*のハイブリッド・トリプルドライバーを搭載。SBCやAACなど既存コーデックの256倍（理論値）の高解像度を誇るaptX HDコーデックによる音楽情報を余すところなく忠実に再現します。<br>
                *2019年6月現在、当社調べ<br>
            特に現在海外ブランドのワイヤレスイヤホンをご使用中の皆様は、ボーカル帯域を含む中高音域の情報量の多さに驚かれることでしょう。（ハイブリッドドライバー本来の性能を引き出す為に、少なくとも30時間程度のエージングをお勧めします。音の成長を楽しんで頂ける筈です。）</p>
            </div>
        </div>
        <p  class="alc mt20"><a href="{{ route('about') }}#japansound" class="btn_Blk">詳細をみる</a></p>

    <h3 class="mt80">ハイブリッドドライバーのメリット</h3>
    <p class="alc"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d-02.jpg') }}"></p>
    <div class="flex_ImgR">
            <div class="flex_ImgLogo"><img src="{{ asset('images/user/DBA_logo.png') }}"></div>
            <div><p class="product_text">低音域が得意なダイナミックドライバーと、ハイスピードで感度が高く、中高音域が得意なバランスドアマチュアドライバーとを組み合わせたハイブリッド型は、理想のスピーカー構成の一つと言えます。しかし小型化が難しく、消費電力が多くなる為、ワイヤレスイヤホンへの採用例は極めて少ないのが現状です。AVIOTは持てる集積及び省電力技術を活用し、小型化と長時間再生とを実現。その音質はハイエンドワイヤレスイヤホンをも凌駕します。</p>
            </div>
        </div>

    <h3 class="mt80">高音質を支える高品位パーツ</h3>
    <p class="alc"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d-03.jpg') }}"></p>
    <div>
        <p class="product_text">イヤホン本体には、非磁性体であり、外来ノイズの侵入を防ぐ、高剛性ジュラルミン製のケースを採用。また筐体の共振を抑える為、側面には切削による美しいローレット加工を施しました。イヤーピースには、SpinFit社製CP-100Zを採用。隅々にまで、高音質化が図られています。</p>
    </div>

    <h3 class="mt80">オンガクに浸れる、最大１３時間のスタミナ</h3>
    <p class="alc"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d-04.jpg') }}"></p>
    <div>
        <p class="product_text">最新SoC QCC3034の採用と、AVIOTの低消費電力設計との相乗効果で、重くて煩わしいケーブル途中のバッテリーを排除するインビジブルバッテリー設計でありながら、音質を一切犠牲にすることなく、最大１３時間*の連続再生を実現しました。 *より高音質なaptX、aptX HDコーデック使用時や、電波状況や音量によっては再生時間が短くなる場合があります。</p>
    </div>

    <h3 class="mt80">高音質に快適さをプラス</h3>
    <p class="alc"><img src="{{ asset('images/products/WE-BD21d/WE-BD21d-05.jpg') }}"></p>
    <div>
        <p class="product_text">リモコン部分で、ボリューム調整や再生/停止/曲送り/曲戻しなどの基本操作が可能です。また、ボイスプロンプトには日本語を採用。簡単操作をアシストします。</p>
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

            <a href="https://www.amazon.co.jp/dp/B07SQXJT6T?ref=myi_title_dp" target="_blank" class="btn_buy mt10">ご購入はこちら</a>
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