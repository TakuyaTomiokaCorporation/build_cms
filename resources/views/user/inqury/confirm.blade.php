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

@section('body_id', 'confirm')

@section('content')

<div id="container" class="both">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto mb60">
        <h2 class="pt20 border_b mb20">ご確認</h2>
        <p class="read">お問い合わせ内容にお間違いがないかご確認ください。</p>
    
        <div class="confirm_item bgGray mt20">
            <dl>
                <dt>お名前</dt>
                <dd>池袋　南</dd>
    
                <dt>フリガナ</dt>
                <dd>イケブクロ　ミナミ</dd>
    
                <dt>性別</dt>
                <dd>男</dd>
    
                <dt>ご住所</dt>
                <dd>123-4568</dd>
                <dd>東京都</dd>
                <dd>豊島区</dd>
                <dd>池袋123-5-202</dd>
                
                <dt>電話番号</dt>
                <dd>090-444-4444</dd>
                
                <dt>メールアドレス</dt>
                <dd>qwer@ucou.co.jp</dd>
    
                <dt>機種名</dt>
                <dd>WE-BD21d</dd>
    
                <dt>色</dt>
                <dd>あお</dd>
    
                <dt>購入日</dt>
                <dd>2019/07/16</dd>
    
                <dt>購入店（miraporta）</dt>
                <dd>なし</dd>
    
                <dt>購入店（AVIOT公式ストア/miraporta以外）</dt>
                <dd>ヤマダ電機</dd>
    
                <dt>お問い合わせ分類</dt>
                <dd>修理</dd>
    
                <dt>お問い合わせ内容</dt>
                <dd>ボタンが取れた</dd>
            </dl>
            <p class="alc mt20"><input type="submit" name="submit" class="btn_Blk"></p>
        </div>
        
        
    </article>
        
</div><!--/main-->
</div><!--/container-->
    
@endsection

@section('javascript-footer')
    
@endsection