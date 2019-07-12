<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- 個別のjavaScript読み込み --}}
    @yield('javascript-head')

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- 個別のCSS読み込み --}}
    @yield('css')
</head>
<body>
    <header>
            <div class="containr">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    {{-- ロゴのみ左寄せ --}}
                    <a class="navbar-brand" href="#">会社ロゴ</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    {{-- その他のナビゲーションバーは右寄せ --}}
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">ショップ情報 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ニュースの投稿</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                特集ページの投稿
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">アーティストインタビュー</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">製品レビュー動画</a>
                            </div>
                        </li>
                    </div>
                </div>
            </nav>
        </header>
    <div id="app">
        <main class="">
            {{-- コンテンツ部分読み込み --}}
            @yield('content')
        </main>
    </div>

    {{-- 個別のjavaScript読み込み --}}
    @yield('javascript-footer')

</body>
</html>