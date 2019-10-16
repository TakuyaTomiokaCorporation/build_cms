@extends('layouts.user_master')

@section('title', 'オーディオのプロに聞くAVIOT |')

@section('description', 'アーティスト・製品ごとのインタビューページ')

@section('css')


<style type="text/css">

@media screen and (min-width: 559px){
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
        justify-content: space-between;
    }

    .content_pro li {
        width: 28%;
    }
}

@media screen and (min-width: 959px){
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
        justify-content: space-between;
    }

    .content_pro li {
        width: 28%;
    }
}




</style>

@endsection

@section('body_id', 'interview')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 border_b mb20">オーディオのプロに聞くAVIOT</h2>

    <section>
        {{-- <div class="mt10 content_pro">
            <h4 class="alc">エンジニア／プレイヤー／プロデューサー</h4>
            <ul class="flex m_auto mt20">
                <li class="alc">
                    <a href=""><img src="{{ asset('images/interview/sample.jpg') }}">
                        <h5 class="mt10">ゆうせい</h5></a>
                </li>
                <li class="alc">
                    <a href=""><img src="{{ asset('images/interview/sample.jpg') }}">
                        <h5 class="mt10">ゆうせい</h5></a>
                </li>
                <li class="alc">
                    <a href=""><img src="{{ asset('images/interview/sample.jpg') }}">
                        <h5 class="mt10">ゆうせい</h5></a>
                </li>
            </ul>
        </div> --}}

        <div class="mt40 content_pro">
            <h3 class="border_l">評論家</h3>
            <ul class="flex m_auto mt20">
                <li class="alc">
                    <a href="{{ route('pro.1') }}"><img src="{{ asset('images/interview/kounoike.jpg') }}">
                    <h5 class="mt10"></h5></a>
                </li>
                <li class="alc">
                    <a href="{{ route('pro.2') }}"><img src="{{ asset('images/interview/iwai.jpg') }}">
                    <h5 class="mt10"></h5></a>
                </li>
                <li class="alc">
                    <a href="{{ route('pro.3') }}"><img src="{{ asset('images/interview/orihara.jpg') }}">
                    <h5 class="mt10"></h5></a>
                </li>
            </ul>
        </div>
        <div class="content_pro">
            <ul class="flex m_auto mt20">
                <li class="alc">
                    <a href="{{ route('pro.4') }}"><img src="{{ asset('images/interview/unakami.jpg') }}">
                    <h5 class="mt10"></h5></a>
                </li>
                <li class="alc">
                    <a href="{{ route('pro.5') }}"><img src="{{ asset('images/interview/takahashi.jpg') }}">
                    <h5 class="mt10"></h5></a>
                </li>
                <li class="alc">
                    <a href="{{ route('pro.6') }}"><img src="{{ asset('images/interview/nomura.jpg') }}">
                    <h5 class="mt10"></h5></a>
                </li>
            </ul>
        </div>
        <div class="content_pro">
            <ul class="flex m_auto mt20">
                <li class="alc">
                    <a href="{{ route('pro.7') }}"><img src="{{ asset('images/interview/yamamoto.jpg') }}">
                    <h5 class="mt10">山本 敦 氏</h5></a>
                </li>
            </ul>
        </div>
    </section>


</div><!--/main-->
</div><!--/container-->


@endsection

@section('javascript-footer')
    
@endsection