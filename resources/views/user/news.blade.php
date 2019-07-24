@extends('layouts.user_master')

@section('title', '最新情報 |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'news')

@section('content')
<div id="container" class="both">
        <div id="" class="main w1020 w98 m_auto" role="main">
            <h2 class="pt20 border_b mb20">最新情報</h2>
        
            <section id="" class="news_TL m_auto mt10">
                <div class="news_title mb20">
                    <p class="tag_artist">アーティストインタビュー</p>
                    <h3>AVIOT LIVE :01開催のお知らせ</h3>
                    <time><small>2019.07.03</small></time>
                </div>
        
                <div class="news_img both m_auto mt10 mb10">
                </div>
        
                <div class="news_text mt20">
                    <p>VIOT LIVE:01開催！旬な音を、ライブとイヤホンで楽しもう！<br>
                    AVIOTの最新完全ワイヤレスイヤホン「TE-BD21f」が世界初展示！<br>
                    <br>
                    場所：吉祥寺CLUB SEATA（アクセス:<a href="https://seata.jp/map/">https://seata.jp/map/</a>）<br>
                    日時：7月12日(金)　OPEN18:00 / START18:30<br>
                    チケット：2000円+1D<br>
                    チケット販売サイト：<a href="https://eplus.jp/sf/detail/3006560001-P0030001">https://eplus.jp/sf/detail/3006560001-P0030001</a><br>
                    6月23日(日)10:00から発売開始。<br>
                    <br>
                    出演アーティスト発表！<br>
                    ・森田くみこ<br>
                    ・クマリデパート<br>
                    ・Maison book girl<br>
                    ・ZOC</p>
                </div>
        
                <div class="news_Link mt10 mb40 alc">
                </div>
            </section>
        
            <section id="" class="news_TL m_auto mt10">
                <div class="news_title mb20">
                    <p class="tag_event">イベント情報</p>
                    <h3>AVIOT LIVE :01開催のお知らせ</h3>
                    <time><small>2019.07.03</small></time>
                </div>
        
                <div class="news_img both m_auto mt10 mb10">
                    <img src="{{ asset('images/news/2def7990fba77f877dc85c0ea6dfd652.jpg') }}">
                </div>
        
                <div class="news_text mt20">
                    <p>VIOT LIVE:01開催！旬な音を、ライブとイヤホンで楽しもう！<br>
                    AVIOTの最新完全ワイヤレスイヤホン「TE-BD21f」が世界初展示！<br>
                    <br>
                    場所：吉祥寺CLUB SEATA（アクセス:<a href="https://seata.jp/map/">https://seata.jp/map/</a>）<br>
                    日時：7月12日(金)　OPEN18:00 / START18:30<br>
                    チケット：2000円+1D<br>
                    チケット販売サイト：<a href="https://eplus.jp/sf/detail/3006560001-P0030001">https://eplus.jp/sf/detail/3006560001-P0030001</a><br>
                    6月23日(日)10:00から発売開始。<br>
                    <br>
                    出演アーティスト発表！<br>
                    ・森田くみこ<br>
                    ・クマリデパート<br>
                    ・Maison book girl<br>
                    ・ZOC</p>
                </div>
        
                <div class="news_Link mt10 mb40 alc">
                    <a href="" class="btn_Blk mt10">詳しくはこちら</a>
                </div>
            </section>
        
            <section id="" class="news_TL m_auto mt10">
                <div class="news_title mb20">
                    <p class="tag_product">新製品情報</p>
                    <h3>AVIOT LIVE :01開催のお知らせ</h3>
                    <time><small>2019.07.03</small></time>
                </div>
        
                <div class="news_img both m_auto mt10 mb10">
                    <img src="{{ asset('images/news/2def7990fba77f877dc85c0ea6dfd652.jpg') }}">
                </div>
        
                <div class="news_text mt20">
                    <p>VIOT LIVE:01開催！旬な音を、ライブとイヤホンで楽しもう！<br>
                    AVIOTの最新完全ワイヤレスイヤホン「TE-BD21f」が世界初展示！<br>
                    <br>
                    場所：吉祥寺CLUB SEATA（アクセス:<a href="https://seata.jp/map/">https://seata.jp/map/</a>）<br>
                    日時：7月12日(金)　OPEN18:00 / START18:30<br>
                    チケット：2000円+1D<br>
                    チケット販売サイト：<a href="https://eplus.jp/sf/detail/3006560001-P0030001">https://eplus.jp/sf/detail/3006560001-P0030001</a><br>
                    6月23日(日)10:00から発売開始。<br>
                    <br>
                    出演アーティスト発表！<br>
                    ・森田くみこ<br>
                    ・クマリデパート<br>
                    ・Maison book girl<br>
                    ・ZOC</p>
                </div>
        
                <div class="news_Link mt10 mb40 alc">
                    <a href="" class="btn_Blk mt10">詳しくはこちら</a>
                    <a href="" class="btn_Blk mt10">PDFを見る</a>
                </div>
            </section>

            {{-- <section id="" class="news_TL m_auto mt10">
                <div class="news_title mb20">
                    <p class="tag_artist">{{ $news->category }}</p>
                    <h3>{{ $news->title }}</h3>
                    <time><small>{{ $news->book_date }}</small></time>
                </div>
        
                <div class="news_img both m_auto mt10 mb10">
                </div>
        
                <div class="news_text mt20">
                    {{ $news->content }}
                </div>
        
                <div class="news_Link mt10 mb40 alc">
                    <a href="" class="btn_Blk mt10">詳しくはこちら</a>
                    <a href="" class="btn_Blk mt10">詳しくはこちら</a>
                </div>
            </section> --}}
        
        
        
        </div><!--/main-->
        </div><!--/container-->
        
@endsection

@section('javascript-footer')
    
@endsection