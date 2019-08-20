@extends('layouts.user_master')

@section('title', '')

@section('content')

<div id="container" class="both">
<div id="" class="main" role="main">
    <article>
    <div class="mv w1020 m_auto">
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{ asset('images/user/mv_01.gif') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('images/user/mv_02.png') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('images/user/mv_03.png') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('images/user/mv_04.png') }}" alt=""></div>
        </div>
        <!-- Add Arrows -->
        {{-- <img src="./img/mv.png"> --}}
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
        <h3 class="mt20 mb10">製品に関するお知らせ</h3>
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
            delay: 5000,
            disableOnInteraction: true
        },
    });
</script>

@endsection