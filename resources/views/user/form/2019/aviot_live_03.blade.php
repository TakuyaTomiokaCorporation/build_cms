@extends('layouts.user_applied_form')

@section('title', 'AVIOT LIVE:03 抽選入力フォーム |')

@section('description', '')
	
@section('css')
	
<style type="text/css">

#event #container ::selection {
    background: #72bbff;
}

#event #container { margin-top: 0px;}
#event h3 { 
	font-size: 2rem;
	padding: 12px 0;
	color: #fff;
	background: radial-gradient(#993300, #A52A2A);
 }
#event h4 { 
	font-size: 1.4rem;
	padding: 12px 4px;
    color: #fff;
    background: radial-gradient(#993300, #A52A2A);
}

.date { font-size: 1.5rem; }

.text {
	margin: 10px;
}

#event dd a {
	color: #37dc93;
}

#event dl dt {
	padding: 8px 2px;
	font-weight: bold;
	background: #993300;
	color: #fff;
}

dd input {
	border: 1px solid #000;
	padding: 6px 0;
}

dd select {
	border: 1px solid #000;
	padding: 6px 8px;
}

input[type="number"] {
	width: 100px;
}

input[type="submit"] {
	background: #193064;
	color: #fff;
	padding: 18px 100px;
	font-weight: bold;
	font-size: 1.2rem;
}

footer img {
	width: 10%;
}

@media screen and (min-width:1024px) {
}

@media screen and (max-width: 640px) {
	body {
		font-size: 14px;
	}
}

/* error messasges */
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

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

.closebtn:hover {
  color: black;
}

th,td {
    border: solid 1px;  /* 枠線指定 */
    padding: 10px;      /* 余白指定 */
}
 
table {
    border-collapse:  collapse; /* セルの線を重ねる */
}

.bg-gray-900{
    background-color: #1a202c;
}
		
</style>

@endsection

@section('body_id', 'event')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
<article class="w1020 w98 m_auto">
	<h2 class="alc"><img src="{{ asset('images/events/2019/AVIOTLIVE03.jpg') }}"></h2>
	
	<div class="text">
		{{-- <p class="date alc bold mb20">受付終了いたしました。</p> --}}
    </div>
    <section>
            <h3 class="alc mb20">AVIOT製品登録者を抽選で無料招待！</h3>
            <p>製品登録をお済のお客様の中から抽選で200名様をAVIOT LIVE：02に招待いたします！</p>
            <p>メールアドレスを入力して送信するだけで応募完了！</p>
            <p>みなさまのご応募お待ちしています！</p>
            <p class="mt20">※当選発表は2019年11月21日以降に当選された方のみメールにて順次お送りいたします。</p>
            <p class="mb10 txtRed">※会場へのご入場は一般チケット購入者の方を優先とさせていただきますので、予めご了承ください。</p>
            <table class="mt20">
                <tbody>
                    <tr>
                        <th>応募期間</th>
                        <th>
                            2019年11月13日（水）12時00分~2019年11月20日（水）23時59分<br>
                            ※本キャンペーンは予告なく終了する場合があります。予めご了承ください。
                        </th>
                    </tr>
                    <tr>
                        <th>応募方法</th>
                        <th>
                            本キャンペーンページより応募フォームに必要事項（年齢、性別、製品ご登録時のメールアドレス）を入力し、ご応募ください。
                        </th>
                    </tr>
                    <tr>
                        <th>応募資格</th>
                        <th>
                            ・<a href="{{ route('shoplist') }}">正規代理店または公式ストア</a> でAVIOT製品をご購入いただき、<a href="{{ route('product_regiser') }}">製品保証登録</a>が応募期間までにお済みのお客様。<br>
                            ・12月10日（火） 19:00に吉祥寺CLUB SEATAへお越しいただけるお客様。
                        </th>
                    </tr>
                </tbody>
            </table>
        </section>
		<section>
			<form action="{{ route('form.confirm') }}" method="POST">
			@csrf
			@method('PATCH')
				<dl class="pt10">
					<dt class="">製品登録時のメールアドレス</dt>
					<dd class="mt10"><input type="text" name="email" size="40" value="{{ old('email') }}"></dd>
					@error('email')
						<div class="alert mt10">
							{{ $message }}
						</div>
					@enderror
				</dl>
                <p class="mt10 txtRed">※ご応募は製品登録で使用しているメールアドレスでお願いいたします。</p>
                
                <dl class="mb40">
                    <dt class="mt20">性別</dt>
                    <dd class="mt10">
                        <select name="sex">
                            <option value="">---</option>
                            <option value="男性" {{ old('sex') == "男性" ? 'selected' : '' }}>男性</option>
                            <option value="女性" {{ old('sex') == "女性" ? 'selected' : '' }}>女性</option>
                            <option value="その他" {{ old('sex') == "その他" ? 'selected' : '' }}>その他</option>
                        </select>
                    </dd>
                </dl>

                <dl class="mb40">
                    <dt>年齢</dt>
                    <dd class="mt10"><input type="number" name="age" min="12" max="100" value="{{ old('age') }}"></dd>
                </dl>

				<h4 class="mt40 bg-gray-900">サービス向上のため是非アンケートにご協力ください　<small>※必須ではありません</small></h4>

				<dl class="mb40 mt10">
					<dt>AVIOTの製品を知ったきっかけは何ですか？</dt>
					<dd class="mt10">
						<select name="recognition_from">
							<option value="">-----</option>
							<option value="友人・知人" {{ old('recognition_from') == "友人・知人" ? 'selected' : '' }}>友人・知人</option>
							<option value="インターネットバナー" {{ old('recognition_from') == "インターネットバナー" ? 'selected' : '' }}>インターネットバナー</option>
							<option value="広告" {{ old('recognition_from') == "広告" ? 'selected' : '' }}>広告</option>
							<option value="イベント" {{ old('recognition_from') == "イベント" ? 'selected' : '' }}>イベント</option>
							<option value="SNS" {{ old('recognition_from') == "SNS" ? 'selected' : '' }}>SNS</option>
							<option value="You Tube" {{ old('recognition_from') == "YouTube" ? 'selected' : '' }}>YouTube</option>
							<option value="アーティスト" {{ old('recognition_from') == "アーティスト" ? 'selected' : '' }}>アーティスト</option>
							<option value="その他" {{ old('recognition_from') == "その他" ? 'selected' : '' }}>その他</option>
						</select>
					</dd>
				</dl>

				<dl class="mb40">
					<dt>普段お使いのスマートフォン？</dt>
					<dd class="mt10">
						<select name="purchased_product">
							<option value="">-----</option>
							<option value="TE-BD21f-pnk" {{ old('purchased_product') == "TE-BD21f-pnk" ? 'selected' : '' }}>TE-BD21f-pnk</option>
							<option value="WE-BD21d" {{ old('purchased_product') == "WE-BD21d" ? 'selected' : '' }}>WE-BD21d</option>
							<option value="TE-D01g" {{ old('purchased_product') == "TE-D01g" ? 'selected' : '' }}>TE-D01g</option>
							<option value="TE-D01d" {{ old('purchased_product') == "TE-D01d" ? 'selected' : '' }}>TE-D01d</option>
							<option value="TE-D01a" {{ old('purchased_product') == "TE-D01a" ? 'selected' : '' }}>TE-D01a</option>
							<option value="TE-D01b" {{ old('purchased_product') == "TE-D01b" ? 'selected' : '' }}>TE-D01b</option>
							<option value="TE-D01c" {{ old('purchased_product') == "TE-D01c" ? 'selected' : '' }}>TE-D01c</option>
							<option value="TE-D01d-kzn" {{ old('purchased_product') == "TE-D01d-kzn" ? 'selected' : '' }}>TE-D01d-kzn</option>
							<option value="TE-D01e" {{ old('purchased_product') == "TE-D01e" ? 'selected' : '' }}>TE-D01e</option>
							<option value="TE-D01h" {{ old('purchased_product') == "TE-D01h" ? 'selected' : '' }}>TE-D01h</option>
							<option value="WE-D01c" {{ old('purchased_product') == "WE-D01c" ? 'selected' : '' }}>WE-D01c</option>
							<option value="WE-D01b" {{ old('purchased_product') == "WE-D01b" ? 'selected' : '' }}>WE-D01b</option>
							<option value="WE-D01b" {{ old('purchased_product') == "その他" ? 'selected' : '' }}>その他</option>
						</select>
					</dd>
				</dl>

				<dl class="mb40">
					<dt class="mt10">上記製品ご購入のさい他にご検討されていたものはありますか？または、ご使用されていた製品はありますか？</dt>
					<dd class="mt10">
						<select name="considered_product">
							<option value="">-----</option>
							<option value="特にない" {{ old('considered_product') == "特にない" ? 'selected' : '' }}>特にない</option>
							<option value="TE-BD21f-pnk" {{ old('considered_product') == "TE-BD21f-pnk" ? 'selected' : '' }}>TE-BD21f-pnk</option>
							<option value="WE-BD21d" {{ old('considered_product') == "WE-BD21d" ? 'selected' : '' }}>WE-BD21d</option>
							<option value="TE-D01g" {{ old('considered_product') == "TE-D01g" ? 'selected' : '' }}>TE-D01g</option>
							<option value="TE-D01d" {{ old('considered_product') == "TE-D01d" ? 'selected' : '' }}>TE-D01d</option>
							<option value="TE-D01a" {{ old('considered_product') == "TE-D01a" ? 'selected' : '' }}>TE-D01a</option>
							<option value="TE-D01b" {{ old('considered_product') == "TE-D01b" ? 'selected' : '' }}>TE-D01b</option>
							<option value="TE-D01c" {{ old('considered_product') == "TE-D01c" ? 'selected' : '' }}>TE-D01c</option>
							<option value="TE-D01d-kzn" {{ old('considered_product') == "TE-D01d-kzn" ? 'selected' : '' }}>TE-D01d-kzn</option>
							<option value="TE-D01e" {{ old('considered_product') == "TE-D01e" ? 'selected' : '' }}>TE-D01e</option>
							<option value="TE-D01h" {{ old('considered_product') == "TE-D01h" ? 'selected' : '' }}>TE-D01h</option>
							<option value="WE-D01c" {{ old('considered_product') == "WE-D01c" ? 'selected' : '' }}>WE-D01c</option>
							<option value="WE-D01b" {{ old('considered_product') == "WE-D01b" ? 'selected' : '' }}>WE-D01b</option>
						</select>
					</dd>
				</dl>
                
                <dl class="mb40">
                    <dt>お好きなミュージシャンはどなたですか？</dt>
                    <dd class="mt10">
                        <input type="text" name="musician" size="40">
                    </dd>
                </dl>

				<p class="alc mt20"><input type="submit" name="submit" value="確認画面へ"></p>
			</form>
			
		</section>
	
</article>
</div><!--/main-->
</div><!--/container-->
@endsection

@section('javascript-footer')
    
@endsection