@extends('layouts.user_master')

@section('title', '折原一也 |')

@section('description', 'アーティスト・製品ごとのインタビューページ')

@section('css')

<style type="text/css">

</style>

@endsection

@section('body_id', 'interview')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 mb20">ライフスタイル部会副座長　折原一也が語る</h2>

    <section>
        <div class=""><img src="{{ asset('images/interview/orihara.jpg') }}" class=""></div>
        <div class="mt20">
            <h3 id="tebd21f">TE-BD21f</h3>
            <h4 class="mt10">注目度トップの完全ワイヤレス</h4>
            <p class="mt10">完全ワイヤレスイヤホンに、ダイナミックドライバーとBAドライバーを併せたハイブリッド・トリプルドライバーを搭載した、ポータブル・オーディオファンにとって注目度トップのモデルと言っても過言ではありません。</p>
            <p class="mt10">実際にそのサウンドを聴いてみると、極めてピュアな傾向で音の情報量も完全ワイヤレスイヤホンと思えないほど。</p>
            <p class="mt10">本格的なサウンドを完全ワイヤレスイヤホンで味わいたい方に、真っ先にお薦めしたいモデルです。</p>
        </div>
        <p class="alc mt20"><a href="{{ route('tebd21f') }}" class="btn_buy">製品詳細はこちら</a></p>
        <p class="alc mt20"><a href="{{ route('interview.pro') }}" class="btn_back">一覧に戻る</a></p>
    </section>


</div><!--/main-->
</div><!--/container-->
    



@endsection

@section('javascript-footer')
    
@endsection