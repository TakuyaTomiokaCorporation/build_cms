@extends('layouts.user_master')

@section('title', '鴻池賢三 |')

@section('description', 'アーティスト・製品ごとのインタビューページ')

@section('css')

<style type="text/css">

</style>

@endsection

@section('body_id', 'interview')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 mb20">VGP ライフスタイル部会座長　鴻池賢三が語る</h2>

    <section>
            <div class=""><img src="{{ asset('images/interview/kounoike.jpg') }}" class=""></div>
            <div class="mt20">
                <h3 id="tebd21f">TE-BD21f</h3>
                <h4 class="mt10">ライフスタイルを革命する！</h4>
                <p class="mt10">音が出た瞬間、「この音は凄い！ワイヤレスとは思えない！」、と驚嘆。なんと業界初のハイブリッド・トリプルドライバー構成で、定評ある2基のBAドライバーも採用した豪華仕様です。</p>
                <p class="mt10">aptXコーデックに対応し、その音は限りない滑らかさと力強さを併せ持つ感動の次元といえます。</p>
                <p class="mt10">完全ワイヤレスの利便性と超高音質を両立し、価格もリーズナブル。新しいリスニングスタイル、すなわちライフスタイルを革命する製品として高く評価しました。</p>
            </div>
        <p class="alc mt20"><a href="{{ route('tebd21f') }}" class="btn_buy">製品詳細はこちら</a></p>
        <p class="alc mt20"><a href="{{ route('special_contents.pro') }}" class="btn_back">一覧に戻る</a></p>
    </section>


</div><!--/main-->
</div><!--/container-->
    



@endsection

@section('javascript-footer')
    
@endsection