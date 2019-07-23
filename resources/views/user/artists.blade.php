@extends('layouts.user_master')

@section('title', 'アーティストインタビュー |')

@section('description', 'アーティストによるインタビュー動画、AVIOT製品のレビュー、操作方法')

@section('css')

<style type="text/css">
    .e-nakamura { background: url("{{ asset('images/artists/e-nakamura.jpg') }}") top center no-repeat;}
    .pnk { background: url("{{ asset('images/artists/pnk.jpg') }}") top center no-repeat;}
    .maisonbookgirl { background: url("{{ asset('images/artists/maisonbookgirl.jpg') }}") top center no-repeat;}
    .gesu {	background: url("{{ asset('images/artists/gesu.jpg') }}") top center no-repeat;}
    
    @media only screen and (min-width:640px) and (max-width:1023px) {
    /*tablet用のcssを記述*/
    .artist_name_left img, .artist_name_right img { display: none;}
    }
    
    @media screen and (max-width: 640px) {
    /*ここにスマホ用スタイルを記述*/
    .gesu,.maisonbookgirl,.pnk,.e-nakamura { background: none;}
    }
</style>

@endsection

@section('body_id', 'artist')

@section('content')

<div id="container" class="both">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">アーティストインタビュー</h2>
        <section class="artist_about gesu mt40">
            <div class="artist_name_left">
                <h3><a href="{{ route('gesu.show') }}">ゲスの極み乙女。<br class="ifpc">×<br class="ifpc">TE-D01g</a></h3>
                <img src="{{ asset('images/artists/gesu_sp.jpg') }}" class="ifsp">
                <div class="mt10">
                    <a href="{{ route('gesu.show') }}" class="btn_Blk">詳しくみる</a>
                </div>
            </div>
        </section>
        
        <section class="artist_about maisonbookgirl mt40">
            <div class="artist_name_right">
                <h3><a href="{{ route('maison.show') }}">Maison book girl<br class="ifpc">×<br class="ifpc">TE-D01d</a></h3>
                <img src="{{ asset('images/artists/maisonbookgirl_sp.jpg') }}" class="ifsp">
                <div class="mt10">
                    <a href="{{ route('maison.show') }}" class="btn_Blk">詳しくみる</a>
                </div>
            </div>
        </section>
        
        <section class="artist_about pnk mt40">
            <div class="artist_name_left">
                <h3><a href="{{ route('pnk.show') }}">凛として時雨ドラマー<br>ピエール中野<br class="ifpc">×<br class="ifpc">TE-D01d</a></h3>
                <img src="{{ asset('images/artists/pnk_sp.jpg') }}" class="ifsp">
                <div class="mt10">
                    <a href="{{ route('pnk.show') }}" class="btn_Blk">詳しくみる</a>
                </div>
            </div>
        </section>
        
        <section class="artist_about e-nakamura mt40 mb60">
            <div class="artist_name_right">
                <h3><a href="{{ route('nakamura.show') }}">声優 中村繪里子<br class="ifpc">×<br class="ifpc">TE-D01d</a></h3>
                <img src="{{ asset('images/artists/e-nakamura_sp.jpg') }}" class="ifsp">
                <div class="mt10">
                    <a href="{{ route('nakamura.show') }}" class="btn_Blk">詳しくみる</a>
                </div>
            </div>
        </section>
    </article>
</div><!--/main-->
</div><!--/container-->
    
@endsection

@section('javascript-footer')
    
@endsection