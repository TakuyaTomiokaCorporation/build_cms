@extends('layouts.user_master')

@section('title', 'uijin×TE-D01d |')

@section('description', 'アーティストによるインタビュー動画、AVIOT製品のレビュー、操作方法')

@section('body_id', '')

@section('css')
    
@endsection

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">uijin×TE-D01d</h2>
        <section class="artist_movie">
            <div><img src="{{ asset('images/artists/uijin_mv.jpg') }}" alt="uijin"></div>
            <div>
                <h3 class="mt20">uijin</h3>
                <p class="mt10">2016年12月に結成された、ありぃ、りん、ひとちび、やよいの4人組アイドルグループ。 </p>
                <p class="mt10">「neo tokyo」という架空の都市をコンセプトに活動中。 メンバー自身によって作詞された楽曲は、等身大の想いが歌詞になりライブを通して表現、発信されている。</p>
            </div>
            <dl class="mt20">
                <dt>■uijin オフィシャルHP</dt>
                <dd><a href="http://www.uijin-official.com/" target="_blank">http://www.uijin-official.com/</a></dd>
    
                <dt class="mt10">■uijin Twitter</dt>
                <dd><a href="https://twitter.com/uijin_official" target="_blank">Twitter https://twitter.com/uijin_official</a></dd>
            </dl>
    
            <div class="mt20 alc">
                <iframe width="600" height="400" src="https://www.youtube.com/embed/scZHRJDbCSI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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