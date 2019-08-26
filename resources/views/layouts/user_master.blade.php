<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K8XKQ5F');
    </script>
    <!-- End Google Tag Manager -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')">

    <title>@yield('title') AVIOT</title>

    <!-- Scripts -->
    <link rel="icon" href="{{ asset('images/user/favicon.ico') }}"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('js/greedynav.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    
    @yield('javascript-in-head')

    <!-- Fonts -->
    @yield('fonts')

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pc.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sp.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tb.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">

    @yield('css')
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139956359-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-139956359-1');
    </script>

    @yield('javascript-head')

    <!-- pardot -->
    <script type="text/javascript">
        piAId = '782993';
        piCId = '1033';
        piHostname = 'pi.pardot.com';
        
        (function() {
            function async_load(){
                var s = document.createElement('script'); s.type = 'text/javascript';
                s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
                var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
            }
            if(window.attachEvent) { window.attachEvent('onload', async_load); }
            else { window.addEventListener('load', async_load, false); }
        })();
    </script>
    
</head>
<body id="@yield('body_id')">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8XKQ5F"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <header>
        <nav class='greedy'>
            <h1><a href="{{ route('top') }}"><img src="{{ asset('images/user/logo_w.png') }}" alt="AVIOT"></a></h1>
            <ul class='links'>
                <li><a href='{{ route('about') }}'>AVIOTとは</a></li>
                <li><a href='{{ route('product.show') }}'>製品一覧</a></li>
                <li><a href='{{ route('artists.show') }}'>インタビュー動画</a></li>
                <li><a href='{{ route('shoplist') }}'>取扱店舗</a></li>
                <li><a href='{{ route('support') }}'>製品サポート</a></li>
            </ul>
            <button>MENU</button>
            <ul class='hidden-links hidden'></ul>
        </nav>
    </header>
            
    <main class="">
        {{-- コンテンツ部分読み込み --}}
        @yield('content')
    </main>

    <footer>
            <article class="w1020 w98 m_auto">
            <div class="foot_menu">
                <ul>
                    <li><a href="{{ route('about') }}">AVIOTについて</a></li>
                    <li><a href="{{ route('news.show') }}">最新情報</a></li>
                    <li><a href="{{ route('product_news.list') }}">製品に関するお知らせ</a></li>
                    <li><a href="{{ route('artists.show') }}">アーティスト動画</a></li>
                    <li><a href="{{ route('movies') }}">動画レビュー</a></li>
                </ul>
                <ul>
                    <li><a href="{{ route('product.show') }}">製品一覧</a></li>
                    <li><a href="{{ route('codec') }}">コーデック</a></li>
                    <li><a href="{{ route('qualcomm') }}">Qualcomm <span class="ifpc"> QCC3026/3020</span></a></li>
                    <li><a href="{{ route('waterproof') }}">防水性能</a></li>
                </ul>
                <ul>
                    <li><a href="{{ route('support') }}">カスタマーサポート</a></li>
                    <li><a href="{{ route('support') }}#QA">よくある質問</a></li>
                    <li><a href="{{ route('inqury') }}">お問い合わせ</a></li>
                    <li><a href="{{ route('product_regiser') }}">製品保証</a></li>
                    <li><a href="{{ route('compensation') }}">交換保障</a></li>
                    <li><a href="{{ route('manual') }}">説明書<span class="ifpc">ダウンロード</span></a></li>
                </ul>
                <ul class="ifpc">
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