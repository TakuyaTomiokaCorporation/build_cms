@extends('layouts.user_master')

@section('title', '製品保証登録フォーム |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'registration')

@section('content')
<div id="container" class="both">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto mb60">
        <h2 class="pt20 border_b mb20">製品保証登録フォーム</h2>
        <p class="read">弊社商品の保証登録は下記項目をご入力の上、送信をお願い致します。必要事項をご記入の上、送信ボタンを押してください。</p>
        <div class="registration_form mt40">
            <p>※<span class="required">必須</span>は入力必須項目となります。</p>
            <form accept="confirmation" method="POST">
                <dl>
                    <dt><span class="required">必須</span>お名前</dt>
                    <dd><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="姓"  required="true"/>
                        <input  id="first_name" maxlength="40" name="first_name" size="20" type="text"  placeholder="名"  required="true"/>
                    </dd>
    
                    <dt><span class="required">必須</span>フリガナ</dt>
                    <dd><input  id="00N6F00000SUcr2" maxlength="255" name="00N6F00000SUcr2" size="20" type="text" placeholder="セイ"  required="true"/>
                        <input  id="00N6F00000SUcr7" maxlength="255" name="00N6F00000SUcr7" size="20" type="text" placeholder="メイ"  required="true"/>
                    </dd>
    
                    <dt><span class="required">必須</span>性別</dt>
                    <dd>
                        <select  id="00N6F00000MmEeS" name="00N6F00000MmEeS" title="性別"  required="true" />
                            <option value="">--なし--</option>
                            <option value="男">男</option>
                            <option value="女">女</option>
                        </select>
                    </dd>
    
                    <dt><span class="required">必須</span><label for="zip">郵便番号</label></dt>
                    <dd><input  id="zip" maxlength="10" name="zip" size="20" type="text" required="true" required="true" placeholder="1234567"/></dd>
    
                    <dt><span class="required">必須</span><label for="state">都道府県</label></dt>
                    <dd><input  id="state" maxlength="20" name="state" size="20" type="text" required="true" placeholder="東京都"/></dd>
    
                    <dt><span class="required">必須</span><label for="city">市区郡</label></dt>
                    <dd><input  id="city" maxlength="40" name="city" size="20" type="text" required="true" placeholder="豊島区"/></dd>
    
                    <dt><span class="required">必須</span><label for="city">町名・番地</label></dt>
                    <dd><input type="text" name="N6F00000Mmgax" value="" size="40" ><dd>
    
                    <dt><label for="phone">電話番号</label></dt>
                    <dd><input  id="phone" maxlength="40" name="phone" size="20" type="text" placeholder="090-0000-0000" pattern="\d{8,}" title="正式な電話番号をご入力ください。" /></dd>
    
                    <dt><span class="required">必須</span><label for="email">メールアドレス</label></dt>
                    <dd><input  id="email" maxlength="80" name="email" size="60" type="text"  required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="メールアドレスをご確認ください。"　required="true"/></dd>
    
                    <dt><span class="required">必須</span><label for="email">機種名</label></dt>
                    <dd>
                    <select  id="00N6F00000O5eOx" name="00N6F00000O5eOx" title="機種名" required="true">
                        <option value="">--なし--</option>
                        <option value="">TE-BD21f</option>
                        <option value="">TE-BD21f-pnk</option>
                        <option value="">WE-BD21d</option>
                        <option value="">TE-D01g</option>
                        <option value="">TE-D01d</option>
                        <option value="">TE-D01a</option>
                        <option value="">TE-D01b</option>
                        <option value="">TE-D01c</option>
                        <option value="">TE-D01d-kzn</option>
                        <option value="">TE-D01e</option>
                        <option value="">TE-D01h</option>
                        <option value="">WE-D01c</option>
                        <option value="">WE-D01b</option>
                    </select>
                    </dd>
    
                    <dt>色</dt>
                    <dd><input  id="00N6F00000MmEeh" maxlength="255" name="00N6F00000MmEeh" size="20" type="text" /></dd>
    
                    <dt><span class="required">必須</span>シリアルナンバー</dt>
                    <dd><input  id="00N6F00000MmEeh" maxlength="255" name="00N6F00000MmEeh" size="20" type="text" required="true"/></dd>
    
                    <dt>購入日</dt>
                    <dd><input type="date" value="2019-01-01" min="2015-01-01" id="00N6F00000MmEer" name="00N6F00000MmEer"></dd>
    
                    <dt><label for="email">購入店（miraporta）</label></dt>
                    <dd>
                    <select  id="00N6F00000MmEew" name="00N6F00000MmEew" required="true">
                        <option value="">--なし--</option>
                        <option value="楽天">楽天</option>
                        <option value="yahoo">yahoo</option>
                        <option value="その他">その他</option>
                    </select>
                    </dd>
    
                    <dt>購入店（AVIOT公式ストア/miraporta以外）<br>
                        <small>※キャンペーンコードをお持ちの方は、こちらにご記入ください</small></dt>
                    <dd><input  id="00N6F00000MmEf1" maxlength="255" name="00N6F00000MmEf1" size="20" type="text" /></dd>
    
                    <div class="boxes">
                        <input type="checkbox" id="box-1">
                        <label for="box-1">【製品保証や修理対応、製品のご案内に関するDMメール送信に同意する】</label>
                        <input type="checkbox" id="box-2">
                        <label for="box-2">【プライバシーポリシーに同意する】</label>
                        <p>※こちらの『<a href="https://v-trade.co.jp/company/#cap1" target="_blank">PRIVACY POLICY</a>』の内容をご確認の上ご同意ください。</p>
                        <p>※製品登録可能な正規販売店についての詳細は、『<a href="../../shop/" target="_blank">こちら</a>』をご覧ください。</p>
                    </div>
                    <p class="alc mt20"><input type="submit" name="submit"></p>
                </dl>
            </form>
        </div>
    </article>
        
</div><!--/main-->
</div><!--/container-->
@endsection

@section('javascript-footer')
    
@endsection