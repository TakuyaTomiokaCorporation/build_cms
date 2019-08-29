@extends('layouts.user_master')

@section('title', '確認画面 |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

<style type="text/css">
    .confirm_item {
        padding: 20px 10px 20px 50px;
    }
    
    .confirm_item dt {
        margin-top: 16px;
        font-weight: bold;
    }
</style>

@endsection

@section('javascript-head')

    <!-- Google ReCapcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function timestamp() 
        { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
    </script>

@endsection

@section('body_id', 'confirm')

@section('content')

<div id="container" class="both">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto mb60">
        <h2 class="pt20 border_b mb20">ご確認</h2>
        <p class="read">お問い合わせ内容にお間違いがないかご確認ください。</p>
    
        <div class="confirm_item bgGray mt20">
            <form action="{{ route('inquiry.sent') }}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method('POST')
            <input type="hidden" name="last_name" value="{{ $last_name }}">
            <input type="hidden" name="first_name" value="{{ $first_name }}">
            <input type="hidden" name="last_name_ja" value="{{ $last_name_ja }}">
            <input type="hidden" name="first_name_ja" value="{{ $first_name_ja }}">
            <input type="hidden" name="sex" value="{{ $sex }}">
            <input type="hidden" name="zip" value="{{ $zip }}">
            <input type="hidden" name="state" value="{{ $state }}">
            <input type="hidden" name="city" value="{{ $city }}">
            <input type="hidden" name="street" value="{{ $street }}">
            <input type="hidden" name="phone" value="{{ $phone }}">
            <input type="hidden" name="product" value="{{ $product }}">
            <input type="hidden" name="email" value="{{ $email }}">
            <input type="hidden" name="color" value="{{ $color }}">
            <input type="hidden" name="purchase_date" value="{{ $purchase_date }}">
            <input type="hidden" name="shop_miraporta" value="{{ $shop_miraporta }}">
            <input type="hidden" name="shop_other" value="{{ $shop_other }}">
            <input type="hidden" name="category" value="{{ $category }}">
            <input type="hidden" name="content" value="{{ $content }}">
            <dl>
                <dt>お名前</dt>
                <dd>{{ $last_name.$first_name }}</dd>
    
                <dt>フリガナ</dt>
                <dd>{{ $last_name_ja.$first_name_ja }}</dd>
    
                <dt>性別</dt>
                <dd>{{ $sex }}</dd>
    
                <dt>ご住所</dt>
                <dd>{{ $zip }}</dd>
                <dd>{{ $state }}</dd>
                <dd>{{ $city }}</dd>
                <dd>{{ $street }}</dd>
                
                <dt>電話番号</dt>
                <dd>{{ $phone }}</dd>
                
                <dt>メールアドレス</dt>
                <dd>{{ $email }}</dd>
    
                <dt>機種名</dt>
                <dd>{{ $product }}</dd>
    
                <dt>色</dt>
                <dd>
                    @isset($color)
                    {{ $color }}
                    @endisset
                </dd>
    
                <dt>購入日</dt>
                <dd>
                    @isset($purchase_date)
                    {{ $purchase_date }}
                    @endisset
                </dd>
    
                <dt>購入店（miraporta）</dt>
                <dd>
                    @isset($shop_miraporta)
                    {{ $shop_miraporta }}    
                    @endisset
                </dd>
    
                <dt>購入店（AVIOT公式ストア/miraporta以外）</dt>
                <dd>
                    @isset($shop_other)
                    {{ $shop_other }}        
                    @endisset
                </dd>
    
                <dt>お問い合わせ分類</dt>
                <dd>{{ $category }}</dd>
    
                <dt>お問い合わせ内容</dt>
                <dd>{{ $content }}</dd>
            </dl>
            
            <div class="g-recaptcha m_auto mt20" data-sitekey="6Ldnm68UAAAAAIHuRLurfVAazlDVc4aJw_f-CLG2"></div><br>
            <div class="alc">
                <button type="submit" name="action" class="btn_back" value="back">戻る</button>
                <button type="submit" name="action" class="btn_conf" value="sent">送信</button>
            </div>
            </form>
        </div>
        
        
    </article>
        
</div><!--/main-->
</div><!--/container-->
    
@endsection

@section('javascript-footer')
    
@endsection