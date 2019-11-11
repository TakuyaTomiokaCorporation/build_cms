@extends('layouts.user_master')

@section('title', 'Indigo la End |')

@section('description', 'アーティストによるインタビュー動画、AVIOT製品のレビュー、操作方法')

@section('css')

@endsection

@section('body_id', 'pnk')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
<article class="w1020 w98 m_auto">
    <h2 class="pt20 border_b mb20">indigo la End×TE-BD21f</h2>
    <section class="artist_movie">
        <div><img src="{{ asset('images/artists/indigo-la-End.jpg') }}" alt="indigo la End image"></div>
        <div>
            <h3 class="mt20">indigo la End</h3>
            <p class="mt10">2010年2月川谷絵音を中心に結成。2014年8月に後鳥亮介が加入。2015年に佐藤栄太郎が加入し現在の体制となる。</p>
            <p>歌とギターのツインメロディとそれを支えるリズム隊、それらが絶妙なバランスで重なり合う。</p>

            <p class="mt20">■indigo la End公式サイト:<a href="https://indigolaend.com/">https://indigolaend.com/</a></p>
            <p class="mt20">本CMはindigo la Endのアルバム「濡れゆく私小説」収録の新曲「花傘」のMVと連動した内容となっており、メンバーそれぞれが3色展開の「TE-BD21f」を装着して登場致します。</p>

            <p class="mt20">メンバー着用カラー</p>
            <p class="mt10">川谷絵音さん：バイオレット</p>
            <p>長田カーティスさん：シルバー</p>
            <p>後鳥亮介さん：ブラック</p>
            <p>佐藤栄太郎さん：ブラック</p>
        </div>

        <div class="mt20 artist_movie alc">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7usr9tLBOok" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="alc mt20">
            <a href="{{ route('tebd21f') }}" target="_blank" class="btn_back mt10">製品詳細はこちら</a>
        </div>
        
    </section>

    
    
</article>
</div><!--/main-->
</div><!--/container-->

@endsection

@section('javascript-footer')

<script>

</script>
    
@endsection