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

<div id="container" class="both">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
    <h2 class="pt20 mb20">製品一覧</h2>
    <section>
        <ul class="product_category">
            <li><a href="">全商品</a></li>
            <li><a href="">ハイエンドモデル</a></li>
            <li><a href="">防水</a></li>
            <li><a href="">長時間充電</a></li>
        </ul>
    </section>
    
    <section class="product_content">
        <div class="flex">
            @foreach ($products as $product)
            <ul class="product_box mt20 mb20">
                <li class="alc"><a href=""><img src="/images/thumbnails/{{ $product->thumbnail }}" alt="WE-D01b"></a></li>
                <li class="mt10 mb10"><h3><a harf="">{{ $product->product_name }}</a></h3></li>
                <li><p class="fs12">{{ $product->overview }}</p></li>
                <li class="alc mt10"><a href="{{ $product->link_detail }}" class="btn_product">詳細をみる</a></li>
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