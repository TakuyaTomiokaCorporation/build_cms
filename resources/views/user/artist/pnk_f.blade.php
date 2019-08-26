@extends('layouts.user_master')

@section('title', '凛として時雨ドラマー ピエール中野 |')

@section('description', 'アーティストによるインタビュー動画、AVIOT製品のレビュー、操作方法')

@section('css')

@endsection

@section('body_id', 'pnk')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
<article class="w1020 w98 m_auto">
    <h2 class="pt20 border_b mb20">凛として時雨ドラマー ピエール中野</h2>
    <section class="artist_movie">
        <div><img src="{{ asset('images/artists/pnk_f_mv.jpg') }}" alt="ピエール中野"></div>
        <div>
            <p class="mt10">AVIOTを日頃より愛用くださっている「凛として時雨」のドラマー ピエール中野さんとのコラボレーションモデル「TE-BD21f-pnk」。本モデルには、中野さん自らがチューニングに携わっており、チューニングでこだわった点や通常モデル「TE-BD21f」との違いなどお話をいただきました。</p>
            <p class="mt10">ここでしか聞けない貴重なインタビューとなっております！</p>
        </div>

        <div class="mt20 artist_movie alc">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LcJAXDk4oRc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="alc mt20">
            <a href="{{ route('tebd21fpnk') }}" target="_blank" class="btn_back mt10">製品詳細はこちら</a>
        </div>
        
    </section>

    
    
</article>
</div><!--/main-->
</div><!--/container-->

@endsection

@section('javascript-footer')

<script>

</script>
    
@endsection