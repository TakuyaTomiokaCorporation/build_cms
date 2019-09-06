@extends('layouts.user_master')

@section('title', 'TE-BD21f-pnkの予約フォーム |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

<style type="text/css">
#registration .registration_form form input[type="checkbox"] + span::before {
    -webkit-transform: translateY(-50%);
    background: #fff;
    border: 1px solid #d0d0d0;
    border-radius: 0;
    content: "";
    display: block;
    height: 20px;
    left: 2px;
    position: absolute;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 20px;
}

#registration .registration_form input[type="checkbox"] + span {
    cursor: pointer;
    display: inline-block;
    margin: 0 0.2em 0;
    padding: 0 0 0 28px;
    position: relative;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

#registration .registration_form input[type="checkbox"]:checked + span::after {
    -webkit-transform: translateY(-50%) rotate(-45deg);
    border-bottom: 3px solid #333;
    border-left: 3px solid #333;
    content: "";
    display: block;
    height: 0.6em;
    left: 0;
    margin-top: -0.2em;
    opacity: 1;
    position: absolute;
    top: 50%;
    -ms-transform: translateY(-50%) rotate(-45deg);
    transform: translateY(-50%) rotate(-45deg);
    width: 1em;
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

@section('body_id', 'registration')

@section('content')

<div id="container" class="both">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto mb60">
            <h2 class="pt20 border_b mb20">TE-BD21f-pnkの予約について</h2>
            <div class="read">
                <p class="mt10">こちらはTE-BD21f-pnkの予約受付フォームです。</p>
                <p class="mt10">納期は10月以降の発送を予定しております。（9月4日更新）<br>入荷時期が確定しましたら、登録頂いたメールアドレスに購入リンクをお送りしますので、その際に購入、決済をお願い致します。
                ご予約の意志がある全てのお客様へお届けできるように、今回の予約に上限数は設けておりません。</p>
                <ul class="mt10">
                    <li>※予約後のキャンセルは可能です。また入荷時期確定メールを送信後に、弊社WEBストア以外(量販店等の正規販売店)での購入も可能です。</li>
                    <li>※生産状況により納期が前後する可能性がございます。都度状況をお知らせ致します。</li>
                    <li>※今回ご予約頂いたお客様へ確実に商品をお届けするために、購入リンク先は弊社の自社ECストア(Amazon等ではない)の非公開ページとなります。</li>
                    <li>※お客様から取得した個人情報は商品通知以外には一切使用いたしません。</li>
                </ul>
                <p class="mt10 mb30">価格につきましては、10月以降発送分から19,899円（税込）となります。（増税後価格についてのお知らせ:<a href="https://aviot.jp/product-news#11"> https://aviot.jp/product-news#11</a>）</p>
            </div>
            
            <div class="registration_form mt40">
            <p class="mb20">※<span class="required">必須</span>は入力必須項目となります。</p>
                <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
                @csrf
                @method('POST')    
                    <input type=hidden name='captcha_settings' value='{"keyname":"aviotcap","fallback":"true","orgId":"00D6F000002Kz08","ts":""}'>
                    <input type=hidden name="oid" value="00D6F000002Kz08">
                    <input type=hidden name="retURL" value="aviot.jp/pnk_reservation/thanks">
                <dl>
                    <dt><span class="required">必須</span> お名前(姓・名)</dt>
                    <dd>
                        <label for="last_name"></label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="姓" required/>
                        <label for="first_name"></label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" placeholder="名" required/>
                    </dd>
                </dl>
                <dl>
                    <dt><span class="required">必須</span> フリガナ</dt>
                    <dd>
                        <input  id="00N6F00000SUcr2" maxlength="255" name="00N6F00000SUcr2" size="20" type="text"　 placeholder="セイ" required/>
                        <input  id="00N6F00000SUcr7" maxlength="255" name="00N6F00000SUcr7" size="20" type="text" placeholder="メイ" required/>
                    </dd>
                </dl>
    
                <dl>
                    <dt><label for="phone">電話</label></dt>
                    <dd><input  id="phone" maxlength="40" name="phone" size="20" type="text" placeholder="080-0000-1111"/></dd>
                </dl>
                <dl>
                    <dt><span class="required">必須</span><label for="email">メール</label></dt>
                    <dd><input id="email" maxlength="80" name="email" size="60" type="text" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="メールアドレスをご確認ください。" 　required="true"></dd>
                </dl>
                <input  id="00N6F00000MmEeS" name="00N6F00000MmEeS" title="性別" type="hidden" value="なし">
                <input  id="zip" maxlength="20" name="zip" size="20" type="hidden" value="000-0000" required/>
                <input  id="state" maxlength="20" name="state" size="20" type="hidden" value="都道府県" required/>
                <input  id="city" maxlength="40" name="city" size="20" type="hidden" value="市町村" required/>
                <input  id="city" maxlength="40" name="city" size="20" type="hidden" value="番地" required/>
                <input  id="00N6F00000O5eOY" name="00N6F00000O5eOY" title="ブランド名" type="hidden" value="reservation">
                <input  id="00N6F00000O5eOx" name="00N6F00000O5eOx" title="機種名" type="hidden" value="TE-BD21f-pnk">
                <input  id="00N6F00000MmEeh" maxlength="255" name="00N6F00000MmEeh" size="20" type="hidden" value="なし" required/>
                <input  id="00N6F00000MmEem" maxlength="255" name="00N6F00000MmEem" size="20" type="hidden" value="XXX0000000" required/>
                <input  id="00N6F00000MmEer" name="00N6F00000MmEer" size="12" type="hidden" value="0000/00/00" required/>
                <input  id="00N6F00000MmEew" name="00N6F00000MmEew" title="購入店（miraporta）" type="hidden">
        
                <div class="button_area">
                    <p class="checkbox_text">
                        <label><input  id="00N6F00000WytAD" name="00N6F00000WytAD" type="checkbox" value="1" /><span class="label">こちらはTE-BD21f-pnk専用の予約受付フォームです。お間違いなければチェックを入れてください。</span></label>
                    </p>
                    <p class="checkbox_text mt10">
                        <label><input type="checkbox" name="" value="確認画面は表示されません。上記内容にて送信しますので、よろしければチェックを入れてください。" /><span class="label">確認画面は表示されません。上記内容にて送信されます。</span></label>
                    </p>
                    <p class="checkbox_text mt10">
                        <label><input type="checkbox" name="" value="【プライバシーポリシーに同意する】" /><span class="label">プライバシーポリシーに同意する</span></label>
                    </p>
                    <p>※こちらの『<a href="https://v-trade.co.jp/company/#cap1" target="_blank">PRIVACY POLICY</a>』の内容をご確認の上ご同意ください。</p>
                    <div class="g-recaptcha m_auto mt20" data-sitekey="6Ldnm68UAAAAAIHuRLurfVAazlDVc4aJw_f-CLG2"></div><br>
                        <p class="form_submit alc"><input type="submit" value="送信する" class="" /></p>
                </div>
                </dl>
            </form>
        </div>
    </article>
        
</div><!--/main-->
</div><!--/container-->

@endsection

@section('javascript-footer')
    
@endsection