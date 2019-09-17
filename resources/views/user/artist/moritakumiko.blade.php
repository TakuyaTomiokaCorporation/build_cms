@extends('layouts.user_master')

@section('title', '森田くみこ×TE-BD21f |')

@section('description', 'アーティストによるインタビュー動画、操作方法')

@section('body_id', 'moritakumiko')

@section('css')
    
@endsection

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">シンガーソングライター 森田くみこ×TE-BD21f</h2>
        <section class="artist_movie">
            <div><img src="{{ asset('images/artists/moritakumiko_mv.jpg') }}" alt="森田くみこ"></div>
            <div>
                <h3 class="mt20">森田くみこ</h3>
                <p class="mt10">長崎県出身のシンガーソングライター。2012年に鹿児島県でピアノでの弾き語りを始め、全国各地でライブを行う。</p>
                <p class="mt10">弾き語りのほか、作曲家・作詞家としても活動。舞台音楽の制作や不定期開催のパンクロックミュージシャンとお笑いの融合イベントにも出演。</p>
                <p class="mt10">2019年AVIOT「TE-D01d」のCMタイアップ曲として「明かりのない街」が使用される。ジャンルに囚われず幅広く活動している。</p>
            </div>
            <dl class="mt20">
                <dt class="mt10">■森田くみこ Twitter</dt>
                <dd><a href="https://twitter.com/morikumi_/" target="_blank">Twitter https://twitter.com/morikumi_/</a></dd>
    
                <dt class="mt10">■森田くみこ Instagram</dt>
                <dd><a href="https://www.instagram.com/morikumi_/" target="_blank">https://www.instagram.com/morikumi_/</a></dd>
            </dl>
    
            <div class="mt20 alc">
                <iframe width="600" height="400" src="https://www.youtube.com/embed/8Bw7rNG72Tc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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