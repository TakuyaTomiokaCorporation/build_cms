<header>
    <nav class='greedy'>
        <h1><a href="{{ route('top') }}"><img src="{{ asset('images/user/logo_w.png') }}" alt="AVIOT"></a></h1>
        <ul class='links'>
            <li><a href='{{ route('about') }}'>AVIOTとは</a></li>
            <li><a href='{{ route('product.show') }}'>製品一覧</a></li>
            <li><a href='{{ route('special_contents.top') }}'>Special Contents</a></li>
            <li><a href='{{ route('shoplist') }}'>取扱店舗</a></li>
            <li><a href='{{ route('support') }}'>製品サポート</a></li>
        </ul>
        <button>MENU</button>
        <ul class='hidden-links hidden'></ul>
    </nav>
</header>