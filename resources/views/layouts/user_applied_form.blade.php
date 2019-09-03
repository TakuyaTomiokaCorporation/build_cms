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

    <!-- OGP -->
    <meta property="og:title" content="AVIOT" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド。" />
    <meta property="og:url" content="https://aviot.jp/" />
    <meta property="og:image" content="https://aviot.jp/images/user/ogp.png" />

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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125783995-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-125783995-1');
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
            
    <main class="">
        {{-- コンテンツ部分読み込み --}}
        @yield('content')
    </main>

    {{-- 個別のjavaScript読み込み --}}
    @yield('javascript-footer')

<footer class="alc pb10 pt10">
    <a href="https://aviot.jp"><img src="{{ asset('images/user/logo_w.png') }}" alt="AVIOT"></a>
</footer>
</body>
</html>