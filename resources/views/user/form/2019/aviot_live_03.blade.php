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
		@if ($close < $now)
		<div class="text">
			{{-- <p class="date alc bold mb20">受付終了いたしました。</p> --}}
		</div>
		<section>
			<h3 class="alc mb20">AVIOT製品登録者を抽選で無料招待！</h3>
			<p>製品登録をお済のお客様の中から抽選で200名様をAVIOT LIVE：03に招待いたします！</p>
			<p>メールアドレスを入力して送信するだけで応募完了！</p>
			<p>みなさまのご応募お待ちしています！</p>
			<p class="mt20">※当選発表は2019年11月21日以降に当選された方のみメールにて順次お送りいたします。</p>
			<p class="mb10 txtRed">
				※会場へのご入場は一般チケット購入者の方を優先とさせていただきますので、予めご了承ください。<br>
				また、入場料は無料になりますが、当日1ドリンクはご負担いただきますので予めご了承ください。
			</p>
			
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
                        <select name="sex" required>
                            <option value="">---</option>
                            <option value="男性" {{ old('sex') == "男性" ? 'selected' : '' }}>男性</option>
                            <option value="女性" {{ old('sex') == "女性" ? 'selected' : '' }}>女性</option>
                            <option value="その他" {{ old('sex') == "その他" ? 'selected' : '' }}>その他</option>
                        </select>
                    </dd>
                </dl>

                <dl class="mb40">
                    <dt>年齢</dt>
                    <dd class="mt10"><input type="number" name="age" min="12" max="100" value="{{ old('age') }}" required></dd>
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
					<dt>普段お使いのスマートフォンはどちらですか？</dt>
					<dd class="mt10">
						<select name="smart_phone">
							<option value="">-----</option>
							<option value="iPhone" {{ old('smart_phone') == "iPhone" ? 'selected' : '' }}>iPhone</option>
							<option value="Xperia" {{ old('smart_phone') == "Xperia" ? 'selected' : '' }}>Xperia</option>
							<option value="AQUOS" {{ old('smart_phone') == "AQUOS" ? 'selected' : '' }}>AQUOS</option>
							<option value="Galaxy" {{ old('smart_phone') == "Galaxy" ? 'selected' : '' }}>Galaxy</option>
							<option value="HUAWEI" {{ old('smart_phone') == "HUAWEI" ? 'selected' : '' }}>HUAWEI</option>
							<option value="OPPO" {{ old('smart_phone') == "OPPO" ? 'selected' : '' }}>OPPO</option>
							<option value="arrows" {{ old('smart_phone') == "arrows" ? 'selected' : '' }}>arrows</option>
							<option value="Google Pixel" {{ old('smart_phone') == "Google Pixel" ? 'selected' : '' }}>Google Pixel</option>
							<option value="ZenFone" {{ old('smart_phone') == "ZenFone" ? 'selected' : '' }}>ZenFone</option>
							<option value="HTC" {{ old('smart_phone') == "HTC" ? 'selected' : '' }}>HTC</option>
							<option value="その他" {{ old('smart_phone') == "その他" ? 'selected' : '' }}>その他</option>
						</select>
					</dd>
				</dl>

				<dl class="mb40">
					<dt class="mt10">AVIOTに今後期待することはございますか？</dt>
					<dd class="mt10">
						<select name="expectation">
							<option value="">-----</option>
							<option value="新製品の発売" {{ old('expectation') == "新製品の発売" ? 'selected' : '' }}>新製品の発売</option>
							<option value="イベントの実施" {{ old('expectation') == "イベントの実施" ? 'selected' : '' }}>イベントの実施</option>
							<option value="アーティストコラボレーション" {{ old('expectation') == "アーティストコラボレーション" ? 'selected' : '' }}>アーティストコラボレーション</option>
							<option value="AVIOT関連のアクセサリー" {{ old('expectation') == "AVIOT関連のアクセサリー" ? 'selected' : '' }}>AVIOT関連のアクセサリー</option>
							<option value="その他" {{ old('expectation') == "その他" ? 'selected' : '' }}>その他</option>
							<option value="特にない" {{ old('expectation') == "特にない" ? 'selected' : '' }}>特にない</option>
						</select>
					</dd>
				</dl>
                
                <dl class="mb40">
                    <dt>お好きなミュージシャンをご記入ください。</dt>
                    <dd class="mt10">
                        <input type="text" name="musician" size="40">
                    </dd>
                </dl>

				<p class="alc mt20"><input type="submit" name="submit" value="確認画面へ"></p>
			</form>
			
		</section>
		@else

		<div class="text">
			<p class="date alc bold mb20">受付終了いたしました。</p>
		</div>
		<section>
				<h3 class="alc mb20">AVIOT製品登録者を抽選で無料招待！</h3>
				<p>製品登録をお済のお客様の中から抽選で200名様をAVIOT LIVE：03に招待いたします！</p>
				<p>メールアドレスを入力して送信するだけで応募完了！</p>
				<p>みなさまのご応募お待ちしています！</p>
				<p class="mt20">※当選発表は2019年11月21日以降に当選された方のみメールにて順次お送りいたします。</p>
				<p class="mb10 txtRed">
					※会場へのご入場は一般チケット購入者の方を優先とさせていただきますので、予めご了承ください。<br>
					また、入場料は無料になりますが、当日1ドリンクはご負担いただきますので予めご了承ください。
				</p>
				
				<table class="mt20">
					<tbody>
						<tr>
							<th>応募期間</th>
							<th>
								2019年11月13日（水）12時00分~2019年11月20日（水）23時59分<br>
								※本キャンペーンの受付は終了いたしました。沢山のご応募誠にありがとうございました！
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
		@endif
</article>
</div><!--/main-->
</div><!--/container-->
@endsection

@section('javascript-footer')
    
@endsection