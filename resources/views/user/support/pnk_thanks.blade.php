@extends('layouts.user_master')

@section('title', 'ありがとうございます。 |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'thanks')

@section('content')

<div id="container" class="both">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto mb60">
        <h2 class="pt20 border_b mb20">TE-BD21f-pnkの予約を受け付けました。</h2>
        <div class="tanks_item">
            <p>TE-BD21f-pnkの予約を受け付けました。</p>
            <p>メールにてご案内をお送りしますのでご確認ください。</p>
            <p class="mt10">最長3営業日ほどで予約確認メールをお送りしていますが、確認メールが届かない場合は正常に予約できていないことがございます。<br>
            その際は下記情報と一緒に下記カスタマーサポートセンターへ直接ご連絡ください。</p>
            <p>
                件名：TE-BD21f-pnkの予約確認について<br>
                お名前（フリガナ）：<br>
                メールアドレス：<br>
                電話番号（任意）：
            </p>
    
            <div class="support_center">
                <h3 class="mt20 mb20 border_l">カスタマーサポートセンター</h3>
                <dl>
                    <dt class="bold">カスタマーサポートセンター</dt>
                    <dd>電話：<a href="050-2018-3909">050-2018-3909</a></dd>
                    <dd>※営業時間：10:00〜17:00（土日祝除く）</dd>
                    <dd class="mt10"><a href="{{ route('inquiry') }}">メールでお問い合わせ</a></dd>
                </dl>
            </div>
    
            <h3 class="border_l mt20 mb10">安心の紛失保証サービス</h3>
            <p>ご使用にあたり、片耳イヤホンの紛失や充電ケースの落下などによって破損した場合など、保証期間内に一回限り、特別価格にて、新品への交換、又は代替品のご提供をいたします。</p>
            <p class="mt10"><a href="{{ route('compensation') }}">詳しくはこちら</a></p>
        </div>
    
        <ul class="mt20">
            <li><a href="{{ route('support') }}#QA"> >よくある質問へ</a></li>
            <li><a href="{{ route('product.show') }}"> >製品一覧へ</a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
        </ul>
        
    </article>
        
</div><!--/main-->
</div><!--/container-->
    
@endsection

@section('javascript-footer')
    
@endsection