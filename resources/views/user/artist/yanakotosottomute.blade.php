@extends('layouts.user_master')

@section('title', 'ヤなことそっとミュート |')

@section('description', 'アーティストによるインタビュー動画、AVIOT製品のレビュー、操作方法')

@section('body_id', 'maisonbookgirl')

@section('css')
    
@endsection

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">ヤなことそっとミュート×TE-D01g</h2>
        <section class="artist_movie">
            <div><img src="{{ asset('images/artists/yanakoto_mv.jpg') }}" alt="ヤなことそっとミュート"></div>
            <div>
                <h3 class="mt20">ヤなことそっとミュート</h3>
                <p class="mt10">ヤなことだらけの日常をそっとミュートしても何も解決しないんだけど、とりあえずロックサウンドに切ないメロディーを乗せて歌ってみる事にする。</p>
            </div>
            <dl class="mt20">
                <dt>■ヤなことそっとミュート オフィシャルHP</dt>
                <dd><a href="http://yanakotosottomute.com/" target="_blank">http://yanakotosottomute.com/</a></dd>
    
                <dt class="mt10">■ヤなことそっとミュート Twitter</dt>
                <dd><a href="https://twitter.com/YanakotoSM" target="_blank">Twitter https://twitter.com/YanakotoSM</a></dd>
    
                <dt class="mt10">■ヤなことそっとミュート Instagram</dt>
                <dd><a href="https://www.instagram.com/yanakoto_sotto_mute/" target="_blank">https://www.instagram.com/yanakoto_sotto_mute/</a></dd>
            </dl>

            <div class="mt20 alc">
                <iframe width="600" height="400" src="https://www.youtube.com/embed/LzYLFwLAEOs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
    
            <div class="alc mt20">
                <a href="../../product/TE-D01d/" target="_blank" class="btn_back mt10">製品詳細はこちら</a>
            </div>  
        </section>     
    </article>
</div><!--/main-->
</div><!--/container-->

@endsection

@section('javascript-footer')
    
@endsection