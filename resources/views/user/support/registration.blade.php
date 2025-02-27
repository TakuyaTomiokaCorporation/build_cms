@extends('layouts.user_master')

@section('title', '製品保証登録フォーム |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

<style>
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

/* The alert message box */
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
</style>

@endsection

@section('javascript-head')

    <!-- Google ReCapcha -->
    {{-- <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function timestamp() 
        { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
    </script> --}}

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
            <form action="{{ route('product_regiser.confirm') }}" method="POST">
            <input type=hidden name='captcha_settings' value='{"keyname":"aviotcap","fallback":"true","orgId":"00D6F000002Kz08","ts":""}'>
            <input type=hidden name="oid" value="00D6F000002Kz08">
            <input type=hidden name="retURL" value="aviot.jp/support/registration/thanks">
            <input type="hidden" name="00N6F00000WyN80" value="A" />
            @csrf
            @method('PATCH')
            <dl>
                <dt><span class="required">必須</span><label for="email">メールアドレス</label></dt>
                <dd><input  id="email" maxlength="80" name="email" size="60" type="text"  required pattern="[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="メールアドレスをご確認ください。"　required value="{{ old('email') }}"></dd>

                <dt><span class="required">必須</span><label for="email_confirmation">確認用メールアドレス</label></dt>
                <dd><input  id="email" maxlength="80" name="email_confirmation" size="60" type="text"  required pattern="[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="メールアドレスをご確認ください。"　required value="{{ old('email_check') }}"></dd>

                @error('email')
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    {{ $message }}
                  </div>
                @enderror

                <dt><span class="required">必須</span>シリアルナンバー</dt>
                <dd><input  id="00N6F00000MmEem" maxlength="255" name="serial" size="20" type="text" required pattern="^[WT][A-Z]{2,4}\d{7,8}$" value="{{ old('serial') }}"><br>
                    <p>&nbsp;&nbsp;WまたはTから始まるアルファベットと数字を入力してください。</p>
                    <small>&nbsp;&nbsp;※下記画像の位置にシリアル番号が見当たらないお客様はパッケージの底面等にバーコードとシリアル番号が記載されたシールが貼られておりますので、そちらをご参照ください。</small>
                </dd>
                <img src="{{ asset('images/user/serial_illustration.png') }}" alt="シリアルナンバーの説明">

                <dt><span class="required">必須</span>お名前</dt>
                <dd><input  id="last_name" maxlength="40" name="last_name" size="20" type="text" placeholder="姓"  required value="{{ old('last_name') }}">
                    <input  id="first_name" maxlength="40" name="first_name" size="20" type="text"  placeholder="名"  required value="{{ old('first_name') }}">
                </dd>

                <dt><span class="required">必須</span>フリガナ</dt>
                <dd><input  id="00N6F00000SUcr2" maxlength="255" name="last_name_ja" size="20" type="text" placeholder="セイ"  required value="{{ old('last_name_ja') }}">
                    <input  id="00N6F00000SUcr7" maxlength="255" name="first_name_ja" size="20" type="text" placeholder="メイ"  required value="{{ old('first_name_ja') }}">
                </dd>
 
                <dt><span class="required">必須</span>性別</dt>
                <dd>
                    <select  id="00N6F00000MmEeS" name="gender" title="性別"  required>
                        <option value="">------</option>
                        <option value="男">男</option>
                        <option value="女">女</option>
                    </select>
                </dd>

                {{-- <dt><span class="required">必須</span><label for="zip">郵便番号</label></dt>
                <dd><input  id="zip" maxlength="10" name="zip" size="20" type="text" required placeholder="171-0022" value="{{ old('zip') }}"></dd>

                <dt><span class="required">必須</span><label for="state">都道府県</label></dt>
                <dd><input  id="state" maxlength="20" name="state" size="20" type="text" required placeholder="東京都" value="{{ old('state') }}"></dd>

                <dt><span class="required">必須</span><label for="city">市区郡</label></dt>
                <dd><input  id="city" maxlength="40" name="city" size="20" type="text" required placeholder="豊島区" value="{{ old('city') }}"></dd>

                <dt><span class="required">必須</span><label for="street">町名・番地</label></dt>
                <dd><input type="text" name="street" size="40" required placeholder="南池袋2-14-10" value="{{ old('street') }}"><dd> --}}

                <dt><label for="phone">電話番号</label></dt>
                <dd><input  id="phone" maxlength="40" name="phone" size="20" type="text" placeholder="090-0000-0000" pattern="^\d{2,4}[-]\d{2,4}[-]\d{2,4}$" title="ハイフンを含めて半角数字でご入力ください。" value="{{ old('phone') }}"></dd>
                
                <dt><span class="required">必須</span><label for="prduct">機種名</label></dt>
                <dd>
                <select  id="00N6F00000O5eOx" name="product" title="機種名" required>
                    <option value="">------</option>
                    <option value="TE-BD21f" {{ old('product') == 'TE-BD21f' ? 'selected' : ''}}>TE-BD21f</option>
                    <option value="TE-BD21f-pnk" {{ old('product') == 'TE-BD21f-pnk' ? 'selected' : ''}}>TE-BD21f-pnk</option>
                    <option value="WE-BD21d" {{ old('product') == 'WE-BD21d' ? 'selected' : ''}}>WE-BD21d</option>
                    <option value="TE-D01g" {{ old('product') == 'TE-D01g' ? 'selected' : ''}}>TE-D01g</option>
                    <option value="TE-D01d" {{ old('product') == 'TE-D01d' ? 'selected' : ''}}>TE-D01d</option>
                    <option value="TE-D01a" {{ old('product') == 'TE-D01a' ? 'selected' : ''}}>TE-D01a</option>
                    <option value="TE-D01b" {{ old('product') == 'TE-D01b' ? 'selected' : ''}}>TE-D01b</option>
                    <option value="TE-D01c" {{ old('product') == 'TE-D01c' ? 'selected' : ''}}>TE-D01c</option>
                    <option value="TE-D01d-kzn" {{ old('product') == 'TE-D01d-kzn' ? 'selected' : ''}}>TE-D01d-kzn</option>
                    <option value="TE-D01e" {{ old('product') == 'TE-D01e' ? 'selected' : ''}}>TE-D01e</option>
                    <option value="TE-D01h" {{ old('product') == 'TE-D01h' ? 'selected' : ''}}>TE-D01h</option>
                    <option value="WE-D01c" {{ old('product') == 'WE-D01c' ? 'selected' : ''}}>WE-D01c</option>
                    <option value="WE-D01b" {{ old('product') == 'WE-D01b' ? 'selected' : ''}}>WE-D01b</option>
                </select>
                </dd>
                

                <dt><span class="required">必須</span>色</dt>
                <dd>
                <select  id="00N6F00000MmEeh" name="color" title="カラー" required>
                    <option value="">------</option>
                    <option value="ネイビー" {{ old('color') == 'ネイビー' ? 'selected' : '' }}>ネイビー</option>
                    <option value="ピンク" {{ old('color') == 'ピンク' ? 'selected' : ''}}>ピンク</option>
                    <option value="ヴァイオレット" {{ old('color') == 'ヴァイオレット' ? 'selected' : ''}}>ヴァイオレット</option>
                    <option value="ローズゴールド" {{ old('color') == 'ローズゴールド' ? 'selected' : ''}}>ローズゴールド</option>
                    <option value="シルバー" {{ old('color') == 'シルバー' ? 'selected' : ''}}>シルバー</option>
                    <option value="ガンメタル" {{ old('color') == 'ガンメタル' ? 'selected' : ''}}>ガンメタル</option>
                    <option value="ブラック" {{ old('color') == 'ブラック' ? 'selected' : ''}}>ブラック</option>
                    <option value="パールホワイト" {{ old('color') == 'パールホワイト' ? 'selected' : ''}}>パールホワイト</option>
                    <option value="アイボリー" {{ old('color') == 'アイボリー' ? 'selected' : ''}}>アイボリー</option>
                    <option value="ダークルージュ" {{ old('color') == 'ダークルージュ' ? 'selected' : ''}}>ダークルージュ</option>
                    <option value="コーディナルレッド" {{ old('color') == 'コーディナルレッド' ? 'selected' : ''}}>コーディナルレッド</option>
                    <option value="ダークメタリックブラウン" {{ old('color') == 'ダークメタリックブラウン' ? 'selected' : ''}}>ダークメタリックブラウン</option>
                </select>
                </dd>

                <dt><span class="required">必須</span>ご購入日</dt>
                <dd><input type="date" value="2019-01-01" min="2015-01-01" id="00N6F00000MmEer" name="date" value="{{ old('date') }}"></dd>
                    <small>&nbsp;&nbsp;※ご購入日が記載されているレシートの日付をお選びください。</small>

                <dt><label for="email"><span class="required">必須</span>ご購入店（AVIOT公式ストア/正規代理店）</label></dt>
                <dd>
                <select  id="00N6F00000MmEew" name="from_aviot">
                    <option value="">------</option>
                    <option value="Amazon(AVIOT公式ストア)" {{ old('from_aviot') == 'Amazon' ? 'selected' : '' }}>Amazon</option>
                    <option value="楽天(AVIOT公式ストア)" {{ old('from_aviot') == '楽天' ? 'selected' : '' }}>楽天</option>
                    <option value="yahoo(AVIOT公式ストア)" {{ old('from_aviot') == 'yahoo' ? 'selected' : '' }}>yahoo</option>
                    <option value="AVIOT専用予約フォーム" {{ old('from_aviot') == 'AVIOT専用予約フォーム' ? 'selected' : '' }}>AVIOT専用予約フォーム</option>
                    <option value="ヤマダ電機グループ" {{ old('from_aviot') == 'ヤマダ電気グループ' ? 'selected' : '' }}>ヤマダ電機グループ</option>
                    <option value="ビックカメラ" {{ old('from_aviot') == 'ビックカメラ' ? 'selected' : '' }}>ビックカメラ</option>
                    <option value="ヨドバシカメラ" {{ old('from_aviot') == 'ヨドバシカメラ' ? 'selected' : '' }}>ヨドバシカメラ</option>
                    <option value="コジマ" {{ old('from_aviot') == 'コジマ' ? 'selected' : '' }}>コジマ</option>
                    <option value="ソフマップ" {{ old('from_aviot') == 'ソフマップ' ? 'selected' : '' }}>ソフマップ</option>
                    <option value="エディオン" {{ old('from_aviot') == 'エディオン' ? 'selected' : '' }}>エディオン</option>
                    <option value="上新電気" {{ old('from_aviot') == '上新電気' ? 'selected' : '' }}>上新電気</option>
                    <option value="eイヤホン" {{ old('from_aviot') == 'eイヤホン' ? 'selected' : '' }}>eイヤホン</option>
                    <option value="ロフト" {{ old('from_aviot') == 'ロフト' ? 'selected' : '' }}>ロフト</option>
                    <option value="東急ハンズ" {{ old('from_aviot') == '東急ハンズ' ? 'selected' : '' }}>東急ハンズ</option>
                    <option value="フジヤカメラ店" {{ old('from_aviot') == 'フジヤカメラ店' ? 'selected' : '' }}>フジヤカメラ店</option>
                    <option value="山野楽器" {{ old('from_aviot') == '山野楽器' ? 'selected' : '' }}>山野楽器</option>
                    <option value="二子玉川 蔦屋家電" {{ old('from_aviot') == '二子玉川 蔦屋家電' ? 'selected' : '' }}>二子玉川 蔦屋家電</option>
                    <option value="代官山 蔦屋書店" {{ old('from_aviot') == '代官山 蔦屋書店' ? 'selected' : '' }}>代官山 蔦屋書店</option>
                    <option value="ツタヤ　トウキョウ　ロッポンギ" {{ old('from_aviot') == 'ツタヤ　トウキョウ　ロッポンギ' ? 'selected' : '' }}>ツタヤ　トウキョウ　ロッポンギ</option>
                    <option value="コストコ" {{ old('from_aviot') == 'コストコ' ? 'selected' : '' }}>コストコ</option>
                    <option value="au Shop" {{ old('from_aviot') == 'au Shop' ? 'selected' : '' }}>au Shop</option>
                    <option value="OTOTOY" {{ old('from_aviot') == 'OTOTOY' ? 'selected' : '' }}>OTOTOY</option>
                    <option value="その他" {{ old('from_aviot') == 'その他' ? 'selected' : '' }}>その他</option>
                </select>
                </dd> 

                <dt>その他のご購入店
                    
                <dd><input  id="00N6F00000MmEf1" maxlength="255" name="from_other" size="20" type="text" value="{{ old('from_other') }}"></dd>
               
                <div class="boxes">
                    <input type="checkbox" name="dm" id="box-1" value="1" checked>
                    <label for="box-1">【製品保証や修理対応、製品のご案内に関するDMメール送信に同意する】</label>
                    <input type="checkbox" id="box-2" required checked>
                    <label for="box-2"><span class="required">必須</span>【プライバシーポリシーに同意する】</label>
                    <p>※こちらの『<a href="https://v-trade.co.jp/company/#cap1" target="_blank">PRIVACY POLICY</a>』の内容をご確認の上ご同意ください。</p>
                    <p>※製品登録可能な正規販売店についての詳細は、『<a href="{{ route('shoplist') }}" target="_blank">こちら</a>』をご覧ください。</p>
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