@extends('layouts.user_master')

@section('title', '海上忍 |')

@section('description', 'アーティスト・製品ごとのインタビューページ')

@section('css')

<style type="text/css">

</style>

@endsection

@section('body_id', 'interview')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 mb20">VGP審査員　海上 忍が語る</h2>

    <section>
        <div class=""><img src="{{ asset('images/interview/unakami.jpg') }}" class=""></div>
        <div class="mt20">
            <h3 id="tebd21f">TE-BD21f</h3>
            <h4 class="mt10">音質も快適性も高次元の出来栄え</h4>
            <p class="mt10">性能と音質、そしてデザインが高次にバランスした完全ワイヤレスイヤホンを次々に送り出し、一躍人気ブランドに成長したAVIOTですが、本機は「音」に対する意気込みが他のモデルとは違います。</p>
            <p class="mt10">完全ワイヤレスイヤホンで初採用のハイブリッド・トリプルドライバーは、従来の完全ワイヤレスの音を明らかに凌駕しています。</p>
            <p class="mt10">その一方、内蔵アンテナの改良や消費電力抑制など快適性への取り組みも怠らないところが、ライフスタイル大賞にふさわしいといえます。</p>
        </div>
        <p class="alc mt20"><a href="{{ route('tebd21f') }}" class="btn_buy">製品詳細はこちら</a></p>
        <p class="alc mt20"><a href="{{ route('interview.pro') }}" class="btn_back">一覧に戻る</a></p>
    </section>


</div><!--/main-->
</div><!--/container-->
    



@endsection

@section('javascript-footer')
    
@endsection