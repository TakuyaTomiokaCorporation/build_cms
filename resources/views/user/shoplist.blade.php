<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ショップリスト</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <nav class="my-navbar">
            <a href="/" class="my-navbar-brand">aviot</a>
        </nav>
    </header>
    <main>
            <h1>ショップ検索</h1>
            <table>
                <tr><th>店舗名</th><th>郵便番号</th><th>住所</th><th>電話番号</th></tr>
                @foreach($shops as $shop)
                    <tr>
                        <td>{{ $shop -> shop_name}}</td>
                        <td>{{ $shop -> post_number}}</td>
                        <td>{{ $shop -> shop_address}}</td>
                        <td>{{ $shop -> shop_tel}}</td>
                    </tr>
                @endforeach
            </table>
    </main>
</body>
</html>