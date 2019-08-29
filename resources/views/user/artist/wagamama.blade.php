@extends('layouts.user_master')

@section('title', '我儘ラキア×TE-D01d |')

@section('description', 'アーティストによるインタビュー動画、AVIOT製品のレビュー、操作方法')

@section('body_id', '')

@section('css')
    
@endsection

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">我儘ラキア × TE-D01d</h2>
        <section class="artist_movie">
            <div><img src="{{ asset('images/artists/wagamama_mv.jpg') }}" alt="我儘ラキア"></div>
            <div>
                <h3 class="mt20">我儘ラキア</h3>
                <p class="mt10">「われがままに、自分らしく。」</p>
                <p class="mt10">2016年6月にグループ結成。エモ×ロック×エレクトロを軸にしたサウンドとアイドルの枠に収まらないアグレッシブなライブパフォーマンスで幅広い年齢層に支持を受ける。</p>
                <p class="mt10">日本全国でライブハウスやフェスを中心に3年間で通算500本を越える本数のライブを行う。当初よりバンドサウンドで再現する事を前提に作られている楽曲たちは、専属作家以外にもサウンドに定評さえあればインディーズ、メジャー問わず楽曲提供を受けている。</p>
                <p class="mt10">また、作曲家、エンジニア、バックバンドメンバー、デザイナーなどによる専属のクリエイターチームを抱えており、楽曲のアレンジや制作全般をそのチームと共に行っている。</p>
                <p class="mt10">2019年7月には過去曲全てを収録した20曲入りのアルバム「StartingOver」をリリースし、同時期より全国6都市を巡る主催対バンツアーKillboredomTOUR 2019」を開催。</p>
            </div>
            <dl class="mt20">
                <dt>■我儘ラキア オフィシャルHP</dt>
                <dd><a href="http://wagamamarakia.com/" target="_blank">http://wagamamarakia.com/</a></dd>
    
                <dt class="mt10">■我儘ラキア Twitter</dt>
                <dd><a href="https://twitter.com/wagamamarakia" target="_blank">Twitter https://twitter.com/wagamamarakia</a></dd>
            </dl>
    
            <div class="mt20 alc">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/UChuwxiIPlg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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