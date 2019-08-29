@extends('layouts.user_master')

@section('title', '声優 中村繪里子×TE-D01d |')

@section('description', 'アーティストによるインタビュー動画、AVIOT製品のレビュー、操作方法')

@section('body_id', 'e-nakamura')

@section('css')
    
@endsection

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">声優 中村繪里子×TE-D01d</h2>
        <section class="artist_movie">
            <div><img src="{{ asset('images/artists/e-nakamura_mv.jpg') }}" alt="中村繪里子"></div>
            <div>
                <h3 class="mt20">中村繪里子</h3>
    
                <p class="mt10">神奈川県出身。声優、司会、ラジオパーソナリティ。出演作に「THE IDOLM@STER」（天海春香）、「Caligura-カリギュラ－」（ミレイ）、「宇宙戦艦ヤマト2199・2202シリーズ」（桐生美影）をはじめ、数々のアニメ、ゲーム作品に出演。</p>
                <p class="mt10">多くのラジオ番組に関わっており、「中村県ちえのわ市」「おはよう☆なかよし」「本格雑談くちをひらく」の他、4月より新番組・中村繪里子と下田麻美の「こういうの好きでしょ？？」がSMART USENにて配信スタートする。</p>
            </div>
    
            <ul class="flex mt20 artist_movie">
                <li><iframe width="560" height="315" src="https://www.youtube.com/embed/mAZlANHSmeo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
                <li></li>
            </ul>
            <ul class="flex mt20 artist_movie">
                <li><iframe width="560" height="315" src="https://www.youtube.com/embed/gP7BLDhaYHg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
                <li><iframe width="560" height="315" src="https://www.youtube.com/embed/BC6Y4vpMlZM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
            </ul>
    
            <div class="alc mt20">
                <a href="{{ route('ted01d') }}" target="_blank" class="btn_back mt10">製品詳細はこちら</a>
            </div>
        </section>          
</article>
</div><!--/main-->
</div><!--/container-->

@endsection

@section('javascript-footer')
    
@endsection