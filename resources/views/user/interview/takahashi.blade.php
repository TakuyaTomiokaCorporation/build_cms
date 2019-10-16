@extends('layouts.user_master')

@section('title', '高橋敦 |')

@section('description', 'アーティスト・製品ごとのインタビューページ')

@section('css')

<style type="text/css">

</style>

@endsection

@section('body_id', 'interview')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 mb20">VGP審査員　高橋 敦が語る</h2>

    <section>
        <div class=""><img src="{{ asset('images/interview/takahashi.jpg') }}" class=""></div>
        <div class="mt20">
            <h3 id="tebd21f">TE-BD21f</h3>
            <h4 class="mt10">装着感からケースまでトータルで優秀</h4>
            <p class="mt10">ハイブリッド・トリプルドライバーで音質を引き上げつつ、使い心地の良さという完全ワイヤレスイヤホンならではの快適性を兼備しています。ボディのフォルムはとてもシンプル。</p>
            <p class="mt10">耳の中で回せばぴたりとフィットするポイントがあり、装着感も良好です。また、完全ワイヤレスイヤホンは、充電用ケースも重要で、スライド式による蓋の開け閉めの感触まで作り込まれていて見事。</p>
            <p class="mt10">音質だけではなく総合的に優れているからこそ、ライフスタイル大賞を獲得しました。</p>
        </div>
        <p class="alc mt20"><a href="{{ route('tebd21f') }}" class="btn_buy">製品詳細はこちら</a></p>
        <p class="alc mt20"><a href="{{ route('special_contents.pro') }}" class="btn_back">一覧に戻る</a></p>
    </section>


</div><!--/main-->
</div><!--/container-->
    



@endsection

@section('javascript-footer')
    
@endsection