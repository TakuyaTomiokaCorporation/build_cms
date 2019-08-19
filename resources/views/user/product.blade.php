@extends('layouts.user_master')

@section('title', '製品一覧 |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('body_id', '')

@section('css')

<style type="text/css">
    ul.product_category li {
        display: inline-block;
    }
    
    ul.product_category li a {
        display: block;
        background: #000;
        color: #fff;
        padding: 10px;
    }
    
    ul.product_category li a:hover {
        background: #555;
    }
    
    
</style>
    
@endsection

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
    <h2 class="pt20 mb20">製品一覧</h2>
    <section>
        <ul class="product_category">
            <li><a href="">全商品</a></li>
            <li><a href="">完全ワイヤレス</a></li>
            <li><a href="">エントリーモデル</a></li>
            <li><a href="">ハイブリッドドライバー</a></li>
            <li><a href="">aptX HD</a></li>
        </ul>
    </section>
    
    <section class="product_content">
        <div class="flex">
        @foreach ($continuedProducts as $continuedProduct)
            <ul class="product_box mt20 mb20">
                <li class="alc"><a href="">
                    <img src="{{ asset('images/thumbnails') }}/{{ $continuedProduct->thumbnail }}" alt="{{ $continuedProduct->product_name }}">
                </a></li>
                <li class="mt10 mb10"><h3>
                    <a harf="">{{ $continuedProduct->product_name }}</a>
                </h3></li>
                <li>
                    <p class="fs12">{!! Str::limit($continuedProduct->overview, 120) !!}</p>
                </li>
                <li class="alc mt20">
                    <a href="{{ $continuedProduct->link_detail }}" class="btn_product">詳細をみる</a>
                </li>
            </ul>
            @endforeach
        </div>
    </section>

    <section class="product_content">
        <h2 class="border_b">生産完了製品</h2>
        <div class="flex">
        @foreach ($discontinuedProducts as $discontinuedProduct)
            <ul class="product_box mt20 mb20">
                <li class="alc"><a href="">
                    <img src="{{ asset('images/thumbnails') }}/{{ $discontinuedProduct->thumbnail }}" alt="{{ $discontinuedProduct->product_name }}">
                </a></li>
                <li class="mt10 mb10"><h3>
                    <a harf="">{{ $discontinuedProduct->product_name }}</a>
                </h3></li>
                <li>
                    <p class="fs12">{!! Str::limit($discontinuedProduct->overview, 120) !!}</p>
                </li>
                <li class="alc mt20">
                    <a href="{{ $discontinuedProduct->link_detail }}" class="btn_product">詳細をみる</a>
                </li>
            </ul>
        @endforeach
        </div>
    </section>
    
    
    </article>
        
</div><!--/main-->
</div><!--/container-->
@endsection

@section('javascript-footer')

    
@endsection