@extends('layouts.user_master')

@section('title', 'お問い合わせ |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'registration')

@section('content')

@section('javascript-head')
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
    function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
    </script>
@endsection

<div id="container" class="both">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto mb60">
        <h2 class="pt20 border_b mb20">お問い合わせ</h2>
        <p class="read">製品に関するお問い合わせはこちらから承ります。</p>
    
        <h3 class="read border_l mt20">製品を購入済みのお客様へ</h3>
        <p class="read mt10">製品保証登録をお済みでない場合は、ご案内をスムーズに行う為に、製品保証登録をお願いしております。<br class="ifpc">お手数をおかけしますが、「<a href="../support/registration/">製品保証登録フォーム</a>」よりご登録をお願いします。</p>
        <div class="registration_form mt40">
            <p>※<span class="required">必須</span>は入力必須項目となります。</p>
            <form action="https://webto.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8" accept="confirmation" method="POST">
            <input type=hidden name='captcha_settings' value='{"keyname":"aviotcap","fallback":"true","orgId":"00D6F000002Kz08","ts":""}'>
            <input type=hidden name="orgid" value="00D6F000002Kz08">
            <input type=hidden name="retURL" value="{{ route('inqury.thanks') }}">
            @csrf
            @method('POST')
                <dl>
                    <dt><span class="required">必須</span>お名前</dt>
                    <dd><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="姓"  required="true"/>
                        <input  id="first_name" maxlength="40" name="first_name" size="20" type="text"  placeholder="名"  required="true"/>
                    </dd>
    
                    <dt><span class="required">必須</span>フリガナ</dt>
                    <dd><input  id="00N6F00000SUcrR" maxlength="255" name="00N6F00000SUcrR" size="20" type="text" placeholder="セイ"  required="true"/>
                        <input  id="00N6F00000SUcso" maxlength="255" name="00N6F00000SUcso" size="20" type="text" placeholder="メイ"  required="true"/>
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
                    <dd><input  id="state" maxlength="20" name="state" size="20" type="text" id="00N6F00000Mmgan" name="00N6F00000Mmgan" required="true" placeholder="東京都"/></dd>
    
                    <dt><span class="required">必須</span><label for="city">市区郡</label></dt>
                    <dd><input  id="city" maxlength="40" name="city" size="20" type="text" id="00N6F00000Mmgas" name="00N6F00000Mmgas" required="true" placeholder="豊島区"/></dd>
    
                    <dt><span class="required">必須</span><label for="city">町名・番地</label></dt>
                    <dd><input type="text" name="N6F00000Mmgax" value="" size="40" id="N6F00000Mmgax" name="N6F00000Mmgax"></dd>
    
                    <dt><label for="phone">電話番号</label></dt>
                    <dd><input  id="phone" maxlength="40" name="phone" size="20" type="text" placeholder="090-0000-0000" pattern="^\d{2,4}[-]\d{2,4}[-]\d{2,4}$" title="正式な電話番号をご入力ください。" /></dd>
    
                    <dt><span class="required">必須</span><label for="email">メールアドレス</label></dt>
                    <dd><input  id="email" maxlength="80" name="email" size="60" type="text"  required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="メールアドレスをご確認ください。"　required="true"/></dd>
    
                    <dt><span class="required">必須</span><label>機種名</label></dt>
                    <dd>
                    <select  id="00N6F00000O5eSa" name="00N6F00000O5eSa" title="機種名">
                        <option value="">--なし--</option>
                        <option value="Aeromax2">Aeromax2</option>
                        <option value="Aeromax6">Aeromax6</option>
                        <option value="BT100">BT100</option>
                        <option value="CP1">CP1</option>
                        <option value="CP2">CP2</option>
                        <option value="CXA60">CXA60</option>
                        <option value="CXA80">CXA80</option>
                        <option value="CXN">CXN</option>
                        <option value="CXS">CXS</option>
                        <option value="CXU">CXU</option>
                        <option value="CXUHD">CXUHD</option>
                        <option value="DacMagicPlus">DacMagicPlus</option>
                        <option value="DacMagicXS">DacMagicXS</option>
                        <option value="DacMagic100">DacMagic100</option>
                        <option value="Min12">Min12</option>
                        <option value="Min22">Min22</option>
                        <option value="SX50">SX50</option>
                        <option value="SX60">SX60</option>
                        <option value="TOPAZ AM5">TOPAZ AM5</option>
                        <option value="TOPAZ AM10">TOPAZ AM10</option>
                        <option value="TOPAZ CD5">TOPAZ CD5</option>
                        <option value="TOPAZ CD10">TOPAZ CD10</option>
                        <option value="YOYO(S)">YOYO(S)</option>
                        <option value="YOYO(M)">YOYO(M)</option>
                        <option value="その他">その他</option>
                        <option value="VERSE">VERSE</option>
                        <option value="Apollo7ｓ">Apollo7ｓ</option>
                        <option value="Apollo7">Apollo7</option>
                        <option value="MUSE5">MUSE5</option>
                        <option value="RIO3">RIO3</option>
                        <option value="BeSport4">BeSport4</option>
                        <option value="BeFree5">BeFree5</option>
                        <option value="BeFree8">BeFree8</option>
                        <option value="BeSport3">BeSport3</option>
                        <option value="Be6i">Be6i</option>
                        <option value="Belite3">Belite3</option>
                        <option value="NU-PI">NU-PI</option>
                        <option value="HEM1">HEM1</option>
                        <option value="HEM Dynamic">HEM Dynamic</option>
                        <option value="WE-D01a">WE-D01a</option>
                        <option value="WE-D01b">WE-D01b</option>
                        <option value="TE-D01a">TE-D01a</option>
                        <option value="TE-D01b">TE-D01b</option>
                        <option value="TE-D01c">TE-D01c</option>
                    </select>
                    </dd>
    
                    <dt>色</dt>
                    <dd><input  id="00N6F00000Mmgcy" maxlength="255" name="00N6F00000Mmgcy" size="20" type="text" /></dd>
    
                    <dt>購入日</dt>
                    <dd><input type="date" value="2019-01-01" min="2015-01-01" id="00N6F00000Mmgd8" name="00N6F00000Mmgd8"></dd>
    
                    <dt><label for="email">購入店（miraporta）</label></dt>
                    <dd>
                    <select  id="00N6F00000MmgdD" name="00N6F00000MmgdD" required="true">
                        <option value="">--なし--</option>
                        <option value="楽天">楽天</option>
                        <option value="yahoo">yahoo</option>
                        <option value="その他">その他</option>
                    </select>
                    </dd>
    
                    <dt>購入店（AVIOT公式ストア/miraporta以外）<br>
                        <small>※キャンペーンコードをお持ちの方は、こちらにご記入ください</small></dt>
                    <dd><input  id="00N6F00000MmgdI" maxlength="255" name="00N6F00000MmgdI" size="20" type="text" /></dd>
    
                    <dt><label for="email">問い合わせ分類</label></dt>
                    <dd>
                    <select  id="00N6F00000MmgdD" name="00N6F00000MmgdD" required="true">
                        <option value="">---</option>
                        <option value="購入前">購入前</option>
                        <option value="使い方">使い方</option>
                        <option value="初期不良">初期不良</option>
                        <option value="修理">修理</option>
                        <option value="付属品購入">付属品購入</option>
                        <option value="その他">その他</option></select>
                    </select>
                    </dd>
    
                    <dt><span class="required">必須</span>問い合わせ内容</dt>
                    <dd><textarea  id="00N6F00000MmhYx" name="00N6F00000MmhYx" cols="50" rows="4" wrap="soft" type="text" required="true"></textarea></dd>
    
                    <div class="boxes">
                        <input type="checkbox" id="box-1">
                        <label for="box-1">【プライバシーポリシーに同意する】</label>
                        <p>※こちらの『<a href="https://v-trade.co.jp/company/#cap1" target="_blank">PRIVACY POLICY</a>』の内容をご確認の上ご同意ください。</p>
                    </div>
                    {{-- <div class="g-recaptcha" data-sitekey="6Ldnm68UAAAAAIHuRLurfVAazlDVc4aJw_f-CLG2"></div><br> --}}
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