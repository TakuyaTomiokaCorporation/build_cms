@extends('layouts.user_master')

@section('title', 'ゲスの極み乙女｡×TE-D01g |')

@section('description', 'アーティストによるインタビュー動画、AVIOT製品のレビュー、操作方法')

@section('css')

@endsection

@section('body_id', 'gesu')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">ゲスの極み乙女｡×TE-D01g</h2>
        <section class="artist_movie">
            <img src="{{ asset('images/artists/gesu_mv.jpg') }}">
            <div>
                <img src="{{ asset('images/artists/gesu_TE-D01g.png') }}" alt="TE-D01g各種">
            </div>
    
            <dl class="mt20">
                <dt>＜発売日＞</dt>
                <dd>ブラックおよびネイビー：5月31日（金）発売開始</dd>
                <dd>アイボリーおよびパールホワイト：6月12日（水）発売開始</dd>
    
                <dt class="mt10">＜販売価格＞</dt>
                <dd>8,880円（税別）</dd>
            </dl>
    
            <ul class="flex">
                <li><iframe width="560" height="315" src="https://www.youtube.com/embed/PcpRO6ruX94" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
                <li><iframe width="560" height="315" src="https://www.youtube.com/embed/bJvfQy4DiZ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
            </ul>
    
            <div class="alc mt20">
                <a href="{{ route('lp1') }}" target="_blank" class="btn_back mt10">製品詳細はこちら</a>
    
                <a href="https://www.amazon.co.jp/AVIOT-TE-D01g-Bluetooth-%E5%AE%8C%E5%85%A8%E3%83%AF%E3%82%A4%E3%83%A4%E3%83%AC%E3%82%B9%E3%82%A4%E3%83%A4%E3%83%9B%E3%83%B3-%E3%83%8E%E3%82%A4%E3%82%BA%E3%82%AD%E3%83%A3%E3%83%B3%E3%82%BB%E3%83%AA%E3%83%B3%E3%82%B0/dp/B07R1Y2ZXJ/ref=sr_1_7?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&amp;keywords=%E3%83%AF%E3%82%A4%E3%83%A4%E3%83%AC%E3%82%B9%E3%82%A4%E3%83%A4%E3%83%9B%E3%83%B3%2Baviot&amp;qid=1557750671&amp;s=electronics&amp;sr=1-7&amp;th=1" class="btn_buy mt10" target="_blank" rel="noopener noreferrer">ご購入はこちら</a>
            </div>
            
        </section>   
    </article>
</div><!--/main-->
</div><!--/container-->
    
@endsection

@section('javascript-footer')
    
@endsection