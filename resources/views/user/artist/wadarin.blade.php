@extends('layouts.user_master')

@section('title', '和田輪×TE-BD21f |')

@section('description', 'アーティストによるインタビュー動画、操作方法')

@section('body_id', 'moritakumiko')

@section('css')
    
@endsection

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">Maison book girl 和田輪×TE-BD21f</h2>
        <section class="artist_movie">
            <div><img src="{{ asset('images/artists/wadarin_mv.jpg') }}" alt="和田輪"></div>
            <div>
                <h3 class="mt20">Maison book girl（和田輪さん）</h3>
                <p class="mt10">矢川葵、井上唯、和田輪、コショージメグミ、による4人組グループ。通称「ブクガ」。音楽家サクライケンタが楽曲から世界観の構築まで、トータルでプロデュースを行う。その独特且つ前衛的な音楽性、他には類を見ないパフォーマンスが話題となり2016年にメジャーデビュー。2018年よりポニーキャニオンに移籍し、「ビバラポップ」への出演や、イギリス・ブライトンでの国際音楽フェス「THE GREAT ESCAPE FESTIVAL2018」に日本代表として出演、「ピッコマ」のCMタイアップ獲得、NHK「シブヤノオト」での初歌唱パフォーマンス披露、など活動の幅を拡げる。</p>
                <p class="mt10">2019年は3月より名古屋・大阪・福岡でワンマンライブを行なった後、4月3日にシングル「SOUP」をリリース。4月には自身最大規模となるワンマンライブ「Solitude HOTEL 7F」を昭和女子大学・人見記念講堂で開催し大成功を収めた。</p>
            </div>
            <dl class="mt20">
                <dt class="mt10">■和田輪 Twitter</dt>
                <dd><a href="https://twitter.com/Rin_Wada/" target="_blank">Twitter https://twitter.com/Rin_Wada/</a></dd>
    
                <dt class="mt10">■和田輪 Instagram</dt>
                <dd><a href="https://www.instagram.com/rin_wada/" target="_blank">https://www.instagram.com/rin_wada/</a></dd>
            </dl>
    
            <div class="mt20 alc">
                <iframe width="600" height="400" src="https://www.youtube.com/embed/5s2B5fy94Qk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
    
            <div class="alc mt20">
                <a href="{{ route('tebd21f') }}" target="_blank" class="btn_back mt10">製品詳細はこちら</a>
            </div>  
        </section>     
    </article>
</div><!--/main-->
</div><!--/container-->
    
@endsection

@section('javascript-footer')
    
@endsection