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
        <h2 class="pt20 border_b mb20">送信いたしました。</h2>
        <div class="tanks_item">
            <p>送信が完了いたしました。</p>
            <p>お問い合わせに関しましては、24時間以内に順次ご案内させて頂きます。<br>
            ※土日祝日にお問い合わせをいただいた場合、翌営業日より順次ご対応させていただきますのでお待ちください。</p>
    
            <h3 class="border_l mt20 mb10">製品保証登録がお済みでないお客様へ</h3>
            <p>お客様の問題をスムーズに解決させて頂く為にも製品保証登録をお願い申し上げます。<br class="ifpc">製品保証登録を以下のURLよりご登録をお願いします。</p>
            <p><a href="{{ route('product_regiser') }}">https://aviot.co.jp/support/registration/</a></p>
            <p>お手数をおかけますが、何卒よろしくお願い申し上げます。</p>
        </div>
    
        <ul class="mt20">
            <li><a href="{{ route('support') }}#QA">>よくある質問へ</a></li>
            <li><a href="{{ route('product.show') }}">>製品一覧へ</a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
        </ul>
    
    
    </article>
        
</div><!--/main-->
</div><!--/container-->
    
@endsection

@section('javascript-footer')
    
@endsection