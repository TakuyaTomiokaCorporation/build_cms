@extends('layouts.user_master')

@section('title', 'CY8ER×TE-D01g |')

@section('description', 'アーティストによるインタビュー動画、AVIOT製品のレビュー、操作方法')

@section('body_id', 'CY8ERinfo')

@section('css')
    
@endsection

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">CY8ER×TE-D01g</h2>
        <section class="artist_movie">
            <div><img src="{{ asset('images/artists/CY8ER_mv.jpg') }}" alt="CY8ER"></div>
            <div>
                <h3 class="mt20">CY8ER</h3>
                <p class="mt10">2016年12月24日結成。 世界を騒がすガチマジアイドルをコンセプトに活動する完全セルフプロデュー ス東京系アイドルユニット。</p>
                <p class="mt10">6/23にTokyo Dome City Hall公演を成功させ、11/23には新木場ageHaでCY8ER至上初となる深夜オールナイトフェス「サイバーフェス」が決定している。</p>
            </div>
            <dl class="mt20">
                <dt>■CY8ER オフィシャルHP</dt>
                <dd><a href="http://icigostyle.com/cy8er" target="_blank">http://icigostyle.com/cy8er</a></dd>
    
                <dt class="mt10">■CY8ER Twitter</dt>
                <dd><a href="https://twitter.com/CY8ERinfo/" target="_blank">Twitter https://twitter.com/CY8ERinfo/</a></dd>
            </dl>
    
            <div class="mt20 alc">
                <iframe width="600" height="400" src="https://www.youtube.com/embed/5IAT5Sch2Ms" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
    
            <div class="alc mt20">
                <a href="{{ route('ted01g') }}" target="_blank" class="btn_back mt10">製品詳細はこちら</a>
            </div>  
        </section>     
    </article>
</div><!--/main-->
</div><!--/container-->
    
@endsection

@section('javascript-footer')
    
@endsection