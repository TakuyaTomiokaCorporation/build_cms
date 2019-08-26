@extends('layouts.user_master')

@section('title', '凛として時雨ドラマー ピエール中野×TE-D01d |')

@section('description', 'アーティストによるインタビュー動画、AVIOT製品のレビュー、操作方法')

@section('body_id', 'pnk')

@section('css')
    
@endsection

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">凛として時雨ドラマー ピエール中野×TE-D01d</h2>
        <section class="artist_movie">
            <div><img src="{{ asset('images/artists/pnk_mv.jpg') }}" alt="Maison book girl"></div>
            <div>
                <h3 class="mt20">凛として時雨のドラマー、DJ</h3>
    
                <p class="mt10">手数、足数を駆使した高度なテクニックと表現力で、豪快かつ繊細な圧倒的プレイスタイルを確立。 国内唯一のドラム専門誌「リズム＆ドラム・マガジン」の表紙を5度務め、ドラマガフェスでのパフォーマンスは最多動員を記録、同誌のドラムヒーローランキングでは国内2位に選ばれた。</p>
                <p class="mt10">シグネチャー・スネアやスティックの年間売上トップクラスをキープするなど、ドラマーとして高い注目を集めている。</p>
                <p class="mt10">また、著名ミュージシャンのレコーディングへの参加や、ドラムチューナー、テレビ出演、番組MC、DJ、ドラムDJ、音楽監修、フェス主催、ビバラポップ プレゼンター、インタビュアー、コラム連載など、ドラマーの枠を超えた幅広い活動を展開している。</p>
            </div>
            
            <h3 class="mt40">TE-D01d</h3>
            <ul class="flex mt20 artist_movie">
                <li><iframe width="560" height="315" src="https://www.youtube.com/embed/OKDbx3BgF3s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
                <li><iframe width="560" height="315" src="https://www.youtube.com/embed/CzqhevxR2jg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
            </ul>
    
            <div class="alc mt20">
                <a href="../../product/TE-D01d/" target="_blank" class="btn_back mt10">製品詳細はこちら</a>
            </div>
        </section>
    </article>
</div><!--/main-->
</div><!--/container-->

@endsection

@section('javascript-footer')
    
@endsection