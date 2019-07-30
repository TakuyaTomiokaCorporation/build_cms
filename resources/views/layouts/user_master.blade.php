<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')">

    <title>@yield('title') AVIOT</title>

    <!-- Scripts -->
    <link rel="icon" href="{{ asset('images/user/favicon.ico') }}"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('js/greedynav.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pc.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sp.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tb.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">

    @yield('css')
    
</head>
<body id="@yield('body_id')">
    <header>
        <nav class='greedy'>
            <h1><a href="{{ route('top') }}"><img src="{{ asset('images/user/logo_w.png') }}" alt="AVIOT"></a></h1>
            <ul class='links'>
                <li><a href='{{ route('about') }}'>AVIOTとは</a></li>
                <li><a href='{{ route('product.show') }}'>製品一覧</a></li>
                <li><a href='{{ route('movies') }}'>製品動画</a></li>
                <li><a href='{{ route('artists.show') }}'>インタビュー動画</a></li>
                <li><a href='{{ route('shoplist') }}'>取扱店舗</a></li>
                <li><a href='{{ route('support') }}'>製品サポート</a></li>
            </ul>
            <button>MENU</button>
            <ul class='hidden-links hidden'></ul>
        </nav>
    </header>
            
            
    <div id="app">
        <main class="">
            {{-- コンテンツ部分読み込み --}}
            @yield('content')
        </main>
    </div>
    <footer>
            <article class="w1020 w98 m_auto">
            <div class="foot_menu">
                <ul>
                    <li><a href="{{ route('about') }}">AVIOTについて</a></li>
                    <li><a href="{{ route('news.show') }}">最新情報</a></li>
                    <li><a href="{{ route('product_news.list') }}">製品に関するお知らせ</a></li>
                    <li><a href="{{ route('artists.show') }}">アーティストインタビュー</a></li>
                    <li><a href="{{ route('movies') }}">動画レビュー</a></li>
                </ul>
                <ul>
                    <li><a href="{{ route('product.show') }}">製品一覧</a></li>
                    <li><a href="{{ route('codec') }}">コーデック</a></li>
                    <li><a href="{{ route('qualcomm') }}">Qualcomm QCC3026/3020</a></li>
                    <li><a href="{{ route('waterproof') }}">防水性能</a></li>
                </ul>
                <ul>
                    <li><a href="{{ route('support') }}">カスタマーサポート</a></li>
                    <li><a href="{{ route('support') }}#QA">よくある質問</a></li>
                    <li><a href="{{ route('inqury') }}">お問い合わせ</a></li>
                    <li><a href="{{ route('product_regiser') }}">製品保証</a></li>
                    <li><a href="{{ route('compensation') }}">交換保障</a></li>
                    <li><a href="{{ route('manual') }}">説明書ダウンロード</a></li>
                </ul>
                <ul>
                    <li><a href="{{ route('shoplist') }}">取扱店舗</a></li>
                    <li><a href="https://www.amazon.co.jp/s?me=ABRZDPOGTSWO1" target="_blank">amazon店</a></li>
                    <li><a href="https://www.rakuten.co.jp/mobileselect/" target="_blank">楽天店</a></li>
                    <li><a href="https://store.shopping.yahoo.co.jp/mobileselect/" target="_blank">yahoo!店</a></li>
                </ul>
            </div>
            </article>
            <div id="copyright">
                <p>&copy;2019 AIOT</p>
            </div>
    </footer>
    {{-- 個別のjavaScript読み込み --}}
    @yield('javascript-footer')
</body>
</html>