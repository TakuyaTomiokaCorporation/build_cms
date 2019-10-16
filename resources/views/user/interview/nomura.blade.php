@extends('layouts.user_master')

@section('title', '野村ケンジ |')

@section('description', 'アーティスト・製品ごとのインタビューページ')

@section('css')

<style type="text/css">

</style>

@endsection

@section('body_id', 'interview')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 mb20">VGP審査員　野村ケンジが語る</h2>

    <section>
        <div class=""><img src="{{ asset('images/interview/nomura.jpg') }}" class=""></div>
        <div class="mt20">
            <h3 id="tebd21f">TE-BD21f</h3>
            <h4 class="mt10">新時代のレファレンスモデル</h4>
            <p class="mt10">完全ワイヤレスイヤホンは機能性と共にコンパクトさも追求しなければならない製品のため、音質的に不利になる傾向があるのは確かです。</p>
            <p class="mt10">しかしながらTE-BD21fは、完全ワイヤレスであることを言い訳にせず、ハイグレードモデルと呼ぶにふさわしい良音質と表現力の豊かさを実現しています。</p>
            <p class="mt10">音質に関しては、完全ワイヤレスイヤホンの新しいレファレンスとなる存在です。ハイブリッド・トリプルドライバーの採用など、豪華な仕様の割にリーズナブルな価格設定も嬉しいかぎりです。</p>
        </div>
        <p class="alc mt20"><a href="{{ route('tebd21f') }}" class="btn_buy">製品詳細はこちら</a></p>
        <p class="alc mt20"><a href="{{ route('special_contents.pro') }}" class="btn_back">一覧に戻る</a></p>
    </section>


</div><!--/main-->
</div><!--/container-->
    



@endsection

@section('javascript-footer')
    
@endsection