@extends('layouts.user_master')

@section('title', 'アーティストインタビュー |')

@section('description', 'アーティストによるインタビュー動画、AVIOT製品のレビュー、操作方法')

@section('css')

@endsection

@section('body_id', 'artist')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
<article class="w1020 w98 m_auto">
    <h2 class="pt20 border_b mb20">アーティストインタビュー</h2>
    <section class="">
        <div class="mt40">
            <h3 class="product_name">TE-BD21f-pnk<img src="{{ asset('images/artists/artistmovie_TE-BD21f-pnk.png') }}" alt="TE-BD21f-pnk"></h3>
            <div>
                <ul class="flex">
                    <li class="artist_list">
                        <a href="{{ route('pnk_f.show') }}">
                            <span class="artist_name">凛として時雨ドラマー<br>ピエール中野</span>
                            <img src="{{ asset('images/artists/pnk_f_mv.jpg') }}">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt40">
            <h3 class="product_name">TE-D01g<img src="{{ asset('images/artists/artistmovie_TE-D01g.png') }}" alt="TE-D01g"></h3>
            <div>
                <ul class="flex">
                    <li class="artist_list">
                        <a href="{{ route('cy8er.show') }}">
                            <span class="artist_name">CY8ER</span>
                            <img src="{{ asset('images/artists/CY8ER_mv.jpg') }}">
                        </a>
                    </li>
                    <li class="artist_list">
                        <a href="{{ route('yanakoto.show') }}">
                            <span class="artist_name">ヤなことそっとミュート</span>
                            <img src="{{ asset('images/artists/yanakoto_mv.jpg') }}">
                        </a>
                    </li>
                </ul>
                <ul class="flex">
                    <li class="artist_list">
                        <a href="{{ route('uijin.show') }}">
                            <span class="artist_name">uijin</span>
                            <img src="{{ asset('images/artists/uijin_mv.jpg') }}">
                        </a>
                    </li>
                    <li class="artist_list">
                        <a href="{{ route('wagamama.show') }}">
                            <span class="artist_name">我儘ラキア</span>
                            <img src="{{ asset('images/artists/wagamama_mv.jpg') }}">
                        </a>
                    </li>
                    <li class="artist_list">
                        <a href="{{ route('gesu.show') }}">
                            <span class="artist_name">ゲスの極み乙女。</span>
                            <img src="{{ asset('images/artists/gesu_mv.jpg') }}">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt40">
            <h3 class="product_name">TE-D01d<img src="{{ asset('images/artists/artistmovie_TE-D01d.png') }}" alt="TE-D01g"></h3>
            <div>
                <ul class="flex">
                    <li class="artist_list">
                        <a href="{{ route('pass.show') }}">
                            <span class="artist_name">PassCode</span>
                            <img src="{{ asset('images/artists/passcode_mv.jpg') }}">
                        </a>
                    </li>
                </ul>
                
                <ul class="flex">
                    <li class="artist_list">
                        <a href="{{ route('maison.show') }}">
                            <span class="artist_name">Maison book girl</span>
                            <img src="{{ asset('images/artists/maisonbookgirl_mv.jpg') }}">
                        </a>
                    </li>
                    <li class="artist_list">
                        <a href="{{ route('pnk.show') }}">
                            <span class="artist_name">凛として時雨ドラマー<br>ピエール中野</span>
                            <img src="{{ asset('images/artists/pnk_mv.jpg') }}">
                        </a>
                    </li>
                    <li class="artist_list">
                        <a href="{{ route('nakamura.show') }}">
                            <span class="artist_name">声優 中村繪里子</span>
                            <img src="{{ asset('images/artists/e-nakamura_mv.jpg') }}">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
</article>
</div><!--/main-->
</div><!--/container-->
    
@endsection

@section('javascript-footer')
    
@endsection