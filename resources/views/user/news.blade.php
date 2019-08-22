@extends('layouts.user_master')

@section('title', '最新情報 |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

<style>
.id_top{
    margin-top: -67px;
    padding-top: 67px;
}

.pagination {
    margin-top: 20px;
    justify-content: center; 
}

</style>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@endsection

@section('body_id', 'news')

@section('content')
    <div id="container" class="both bg-white">
    <div id="" class="main w1020 w98 m_auto" role="main">
        <h2 class="pt20 border_b mb20">最新情報</h2>

        @foreach ($posts as $post)
        <section id="{{ $post->id }}" class="news_TL m_auto mt10 id_top">
            <div class="news_title mb20">
                <p class="{{ $post->class }}">{{ $post->category }}</p>
                <h3>{{ $post->title }}</h3>
                <time><small>{{ \Carbon\Carbon::parse($post->book_date)->format('Y-m-d') }}</small></time>
            </div>
    
            <div class="news_img both m_auto mt10 mb10">
                <img src="{{ asset('images/news') }}/{{ $post->image }}">
            </div>
    
            <div class="news_text mt20">
                {!! $post->content !!}
            </div>
    
            
            <div class="news_Link mt10 mb40 alc">
                @isset($post->link)
                    <a href="{{ $post->link }}" class="btn_Blk mt10">詳しくはこちら</a>
                @endisset
                @isset($post->pdf)
                    <a href="/hoge/{{ $post->pdf }}" class="btn_Blk mt10">PDFを見る</a>
                @endisset
            </div>
        </section>
        @endforeach 
        {{ $posts->links() }}
    </div><!--/main-->
    </div><!--/container-->
        
@endsection

@section('javascript-footer')
    
@endsection