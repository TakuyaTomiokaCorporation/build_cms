@extends('layouts.user_master')

@section('title', '製品に関するお知らせ |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'product-news')

@section('content')
    
<div id="container" class="both">
<div id="" class="main w1020 w98 m_auto" role="main">
    
    <h2 class="pt20 border_b mb20">製品に関するお知らせ</h2>
    @foreach ($news_products as $news_product)
    <section id="" class="news_TL m_auto mt10 mb40">
        <div class="news_title mb20">
            <time>{{ $news_product->book_date }}</time>
            <h3>{{ $news_product->title }}</h3>
        </div>

        <div class="news_text mt20">
            {{ $news_product->content }}
        </div>

        <div class="news_Link alc mt10 mb20">
            <a href="{{ route('product_news.show', $news_product->id) }}" class="btn_Blk mt10">詳しくはこちら</a>
            @isset($news_product->pdf)
                <a href="pdf/{{ $news_product->pdf }}" class="btn_Blk mt10">PDFを見る</a>   
            @endisset
        </div>
    </section>
    @endforeach

</div><!--/main-->
</div><!--/container-->
@endsection

@section('javascript-footer')
    
@endsection