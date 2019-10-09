@extends('layouts.user_master')

@section('title', 'インタビュー |')

@section('description', 'アーティスト・製品ごとのインタビューページ')

@section('css')

<style type="text/css">
.artist_interview div img {
    width: 1020px;
}

.content_product ul {
    justify-content: center;
}

.content_product li {
    width: 25%;
}

.content_pro ul {
    justify-content: center;
}

.content_pro li {
    width: 28%;
}
</style>

@endsection

@section('body_id', 'interview')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 border_b mb20">インタビュー</h2>

    <section class="artist_interview mb20">
        <h3 class="border_l">アーティストインタビュー</h3>
        <div class="mt10 alc">
            <a href="{{ route('artists.show') }}"><img src="{{ asset('images/interview/artistmovie.png') }}"></a>
        </div>

        <h3 class="border_l mt20">オーディオのプロに聞くAVIOT</h3>
        <div class="mt10 alc">
            <a href="{{ route('interview.pro') }}"><img src="{{ asset('images/interview/pro.png') }}"></a>
        </div>
    </section>

    {{-- <section>
        <h3 class="border_l mt40">製品からコンテンツを探す</h3>
        <div class="mt10 content_product">
            <h4 class="alc">完全ワイヤレスイヤホン</h4>
            <ul class="flex">
                <li class="alc">
                    <a href=""><img src="{{ asset('images/interview/TE-BD21f.png') }}">
                        <h5 class="mt10">TE-BD21f</h5></a>
                </li>
                <li class="alc">
                    <a href=""><img src="{{ asset('images/interview/TE-BD21f.png') }}">
                        <h5 class="mt10">TE-BD21f</h5></a>
                </li>
                <li class="alc">
                    <a href=""><img src="{{ asset('images/interview/TE-BD21f.png') }}">
                        <h5 class="mt10">TE-BD21f</h5></a>
                </li>
                <li class="alc">
                    <a href=""><img src="{{ asset('images/interview/TE-BD21f.png') }}">
                        <h5 class="mt10">TE-BD21f</h5></a>
                </li>
            </ul>
        </div>

        <div class="mt60 content_product">
            <h4 class="alc">ワイヤレスイヤホン</h4>
            <ul class="flex">
                <li class="alc">
                    <a href=""><img src="{{ asset('images/interview/WE-BD21d.png') }}">
                        <h5 class="mt10">WE-BD21d</h5></a>
                </li>
                <li class="alc">
                    <a href=""><img src="{{ asset('images/interview/WE-BD21d.png') }}">
                        <h5 class="mt10">WE-BD21d</h5></a>
                </li>
                <li class="alc">
                    <a href=""><img src="{{ asset('images/interview/WE-BD21d.png') }}">
                        <h5 class="mt10">WE-BD21d</h5></a>
                </li>
            </ul>
        </div>
    </section> --}}

    <!--<section>
        <h3 class="border_l mt40">オーディオのプロに聞くAVIOT</h3>
        <div class="mt10 content_pro">
            <h4 class="alc">エンジニア／プレイヤー／プロデューサー</h4>
            <ul class="flex m_auto mt20">
                <li class="alc">
                    <a href=""><img src="./img/sample.jpg">
                        <h5 class="mt10">ゆうせい</h5></a>
                </li>
                <li class="alc">
                    <a href=""><img src="./img/sample.jpg">
                        <h5 class="mt10">ゆうせい</h5></a>
                </li>
                <li class="alc">
                    <a href=""><img src="./img/sample.jpg">
                        <h5 class="mt10">ゆうせい</h5></a>
                </li>
            </ul>
        </div>

        <div class="mt40 content_pro">
            <h4 class="alc">評論家</h4>
            <ul class="flex m_auto mt20">
                <li class="alc">
                    <a href="./kounoike.php"><img src="./img/kounoike.jpg">
                        <h5 class="mt10">VGP ライフスタイル部会座長　鴻池賢三</h5></a>
                </li>
                <li class="alc">
                    <a href="./kounoike.php"><img src="./img/kounoike.jpg">
                        <h5 class="mt10">VGP ライフスタイル部会副座長　岩井 喬</h5></a>
                </li>
                <li class="alc">
                    <a href="./kounoike.php"><img src="./img/kounoike.jpg">
                        <h5 class="mt10">VGP ライフスタイル部会副座長　折原一也</h5></a>
                </li>
            </ul>
        </div>
    </section>-->



</div><!--/main-->
</div><!--/container-->


@endsection

@section('javascript-footer')
    
@endsection