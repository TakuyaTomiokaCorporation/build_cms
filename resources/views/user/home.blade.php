@extends('layouts.user_master')

@section('title', '')

@section('content')

@section('css')
<style>
.movie-wrap {
    position: relative;
    padding-bottom: 56.25%; /*アスペクト比 16:9の場合の縦幅*/
    height: 0;
    overflow: hidden;
}

.movie-wrap video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>

@endsection

<div id="container" class="both">
<div id="" class="main" role="main">
    <article>
    <div class="mv w1020 m_auto">
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <div class="swiper-slide movie-wrap"><video src="{{ asset('images/user/nakano_15s.mp4') }}" playsinline autoplay muted controls width="1020"></video></div>
            <div class="swiper-slide"><a href="https://youtu.be/gugCIOd5QEo" target="_blank"><img src="{{ asset('images/user/passcode-top.jpg') }}" alt=""></a></div>
            <div class="swiper-slide"><a href="https://youtu.be/5s2B5fy94Qk" target="_blank"><img src="{{ asset('images/user/mv_01.jpg') }}" alt=""></a></div>
            <div class="swiper-slide"><a href="https://youtu.be/8Bw7rNG72Tc" target="_blank"><img src="{{ asset('images/user/mv_02.jpg') }}" alt=""></a></div>
            <div class="swiper-slide"><a href="{{ route('pnk_f.show') }}"><img src="{{ asset('images/user/mv_03.jpg') }}" alt=""></a></div>
            <div class="swiper-slide"><a href="{{ route('gesu.show') }}"><img src="{{ asset('images/user/gesu.gif') }}" alt=""></a></div>
            <div class="swiper-slide"><a href="{{ route('wagamama.show') }}"><img src="{{ asset('images/user/mv_04.jpg') }}" alt=""></a></div>
            <div class="swiper-slide"><a href="{{ route('cy8er.show') }}"><img src="{{ asset('images/user/mv_05.jpg') }}" alt=""></a></div>
            <div class="swiper-slide"><a href="{{ route('yanakoto.show') }}"><img src="{{ asset('images/user/mv_06.jpg') }}" alt=""></a></div>
        </div>
        <!-- Add Arrows -->
        {{-- <img src="./img/mv.png"> --}}
        {{-- <div class="swiper-button-next swiper-button"></div>
        <div class="swiper-button-prev swiper-button"></div> --}}
    </div>
    </div>
    </article>
    <article class="bgGray">
    <div class="area_news w1020 w98 m_auto">
        <h3 class="pt20">最新情報</h3>
        <div class="news">
        @foreach ($posts as $post)
        <div class="news_box">
            @if (isset($post->another_link))
                <a href="{{ $post->another_link }}">
            @else
                <a href="{{ route('news.show') }}#{{ $post->id }}">
            @endif
                <img src="{{ asset('images/news') }}/{{ $post->image }}">
                <span class="{{ $post->class }}">{{ $post->category }}</span>
                <h4>{{ $post->title }}</h4>
            </a>
        </div>
        @endforeach
        </div><!--news-->
    </div><!--area_news-->
    </article>     
    <article class="notice w1020 w98 m_auto">
        <h3 class="mt20 mb10">お知らせ</h3>
        <div>
            <dl>
                @foreach ($news_products as $news_product)
                <dt>{{ $news_product->book_date }}</dt>
                <dd><a href="{{ route('product_news.list') }}#{{ $news_product->id }}">{{ $news_product->title }}</a></dd>
                @endforeach
            </dl>
        </div>
    </article>   
    <!--<article class="instagram">-->
        <!-- InstaWidget -->
        <!--<a href="https://instawidget.net/v/tag/aviot" id="link-1f6313a18f9b285a9554e7b92f40e8dcec395f83e5098a368cba238715dbc751">#aviot</a>
        <script src="https://instawidget.net/js/instawidget.js?u=1f6313a18f9b285a9554e7b92f40e8dcec395f83e5098a368cba238715dbc751&width=100%"></script>
    </article>-->
</div><!--/main-->
</div><!--/container-->

    {{-- <div class="container">
        <img src="images/user/main_visual.png" class="max-auto d-block" style="width:100%" alt="画像">
    </div> --}}

@endsection

@section('javascript-footer')
<script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        loop: true,
        autoplay: {
            delay: 17000,
            disableOnInteraction: true
        },
    });
</script>

@endsection