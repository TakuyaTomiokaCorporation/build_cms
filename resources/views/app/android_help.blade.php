
<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="{{ asset('css/index.css') }}" rel="stylesheet" media="screen" />
	<title>AVIOT PLAYER Android版 ヘルプ</title>

	<style>
	.my-3{
		margin-top:0.75rem;
		margin-bottom: 0.75rem; 
	}
	
	</style>
</head>
<body>

<div class="container">

	<!-- ヘッダ -->
	<div id="header" class="header">
		<h1>AVIOT PLAYER Android版 ヘルプ</h1>
	</div>


	<div class="row">

		<!--目次のグリッド -->
		<div class="col-md-4">
		<!-- 目次 -->
		<div class="nav">
			<div class="list-group">
				<div class="nav_label">ようこそ</div>
				    <a href="#00" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>
						AVIOT PLAYERについて
					</a>
					<a href="#01" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>
						QRコードでログインする
					</a>
				<div class="nav_label">おもな操作方法</div>
					<a href="#15" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>製品保証登録について
					</a>
				    <a href="#10" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>
						各メニューについて
					</a>
					<a href="#11" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>
						各アイコンについて
					</a>
					<a href="#12" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>
						楽曲を再生する
					</a>
					<a href="#13" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>イコライザー機能について
					</a>
					<a href="#14" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>ハイレゾ再生について
					</a>

				<div class="nav_label">アプリでできること</div>
					<a href="#20" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>
						フル試聴、フリーDL楽曲を無料で聴く
					</a>
					<a href="#21" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>
						ニュースを読む
					</a>
				    <a href="#22" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>
						新着配信楽曲を試聴する
					</a>
					<a href="#23" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>
						チャートを見る
					</a>
					<a href="#24" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>
						過去にOTOTOYで買った楽曲を聴く
					</a>
					<a href="#25" class="list-group-item">
						<span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span>
						あとで買うリスト
					</a>
			</div>
		</div>

		</div>
		<!-- /目次のグリッド -->

		<!-- 本文 -->
		<div class="col-md-8">

		<div class="back top-button">
			<a href="#header" class="btn btn-success"><span class="glyphicon glyphicon-chevron-left"></span> ヘルプメニューへ戻る</a>
		</div>

		<div class="article">
			<h2>ようこそ</h2>
			<div class="section">
				<h3 id="00">AVIOT PLAYERについて</h3>
				<img src="{{ asset('images/user/ogp.png') }}" class=" img-responsive" alt="AVIOT">
				<p>「AVIOT PLAYER」は、読んで・聴いて・買えるミュージック・ストア「OTOTOY」とAVIOTのコラボレーションによって生まれたサウンドプレイヤーです。OTOTOYの擁するバリエーション豊かで高音質な音源をAVIOTイヤホンで再生することはもちろん、アーティストの最新ニュースや楽曲にまつわる特集記事の配信、フリー作品／新譜の試聴まで、お手持ちのAndroidスマートフォンで気軽にお楽しみいただけます。</p>
				<p>AVIOT製品のユーザ登録とOTOTOY会員登録（およびログイン）を完了すると、以下の機能をご利用いただけます。</p>
				<ul>
					<li>ローカル再生（内蔵ストレージ／microSDカードに保存された楽曲の再生）</li>
					<li>ハイレゾ再生※（WAV/FLAC/ALAC、192kHz/24bitまで）</li>
					<li>イコライザー機能（10バンド対応）</li>
				</ul>
				<p>※：ワイヤレス再生時は、適用されるオーディオコーデックによりダウンサンプリング処理されます。USB DACなどAVIOTイヤホン以外の機器への出力も可能ですが、ユーザサポート対象外です。</p>
				<p>さらに、OTOTOYの以下の機能もご利用いただけます。</p>
				<ul>
					<li>アプリから直接OTOTOYで楽曲を購入いただけます（クレジットカードの登録が必要）。</li>
					<li>OTOTOYで購入した楽曲を再生できます。楽曲データはOTOTOYのサーバから直接ストリーミングされます（Wi-Fi接続推奨）。</li>
					<li>OTOTOYのフリー作品を「ライブラリ」に登録できるようになり、配信期間終了後もお楽しみいただけます。</li>
					<li>「きになる」に新譜やランキングの楽曲を追加できます。あとで購入したい、というときに便利です。</li>
				</ul>
			</div>
		</div>

		<div class="article">
			<h2>おもな操作方法</h2>
			{{-- 製品保証登録 --}}
			<div class="section">
				<h3 id="15">製品保証登録について</h3>
				<img src="{{ asset('images/app/android-login01.jpg') }}" alt="android-player02" class="sec-img img-responsive">
				<br>
				<p>AVIOT PLAYERをご使用いただくにあたり、ご購入いただいたAVIOT製品の登録が必要です。<br>
				ご購入いただいたAVIOT製品のシリアルナンバーをお控えの上、<br>
				<br>
				<span class="glyphicon glyphicon-ok-circle"></span> <strong>AVIOT製品保証登録がお済みの方 </strong><br>
				<span class="glyphicon glyphicon-ok-circle"></span> <strong>AVIOT製品保証登録が済んでいない方</strong> <br>
				<span class="glyphicon glyphicon-ok-circle"></span> <strong>AVIOT PLAYERログイン済みの方</strong><br>
				<br>
				いずれか該当する項目をご選択ください。
				</p>
				<small>※シリアルナンバーの確認は下図をご参考ください</small>
				<img class=" img-responsive" src="{{ asset('images/user/serial_illustration.png') }}" alt="シリアルナンバーの説明図">

				<h4>AVIOT製品保証登録がお済みの方</h4>
				<br>
				<img src="{{ asset('images/app/android-login03.jpg') }}" alt="android-player02" class="sec-img img-responsive">
				<p>既に<a href="{{ route('top') }}">aviot.jp</a>等でAVIOT製品保証登録がお済みの方はこちらを選択いただき、ご登録時に使用された【シリアルナンバー】と【メールアドレス】をご入力ください。</p>
				<h4>AVIOT製品保証登録が済んでいない方</h4>
				<br>
				<img src="{{ asset('images/app/android-login02.jpg') }}" alt="android-player02" class="sec-img img-responsive">
				<p>まだ<a href="{{ route('top') }}">aviot.jp</a>等でAVIOT製品保証登録がお済みでない方はこちらをご選択し、シリアルナンバーを入力ください。<br></p>
				<h4>AVIOT PLAYERログイン済みの方</h4>
				<br>
				<img src="{{ asset('images/app/android-login04.jpg') }}" alt="android-player02" class="sec-img img-responsive">
				<p>既にAVIOT PLAYERのご登録がお済みの方はこちらを選択していただき、OTOTOYアカウントのメールアドレスとパスワードを入力してログインしてください。</p>
			</div>
			<div class="section">
				<h3 id="10">各メニューについて</h3>
				<img src="{{ asset('images/app/android-menu.jpg') }}" alt="android-menu" class="sec-img img-responsive">
				<ul>
					<li><strong>OTOTOY NOW</strong> : 「今週の無料曲」「ニュース」「新譜」「ランキング」などが表示できます。最新の音楽情報がゲットできます。</li>
					<li><strong>ライブラリ</strong> : OTOTOYアカウントで購入した楽曲が表示されます。PCからの転送いらずで、すぐスマホでストリーミング再生できます。</li>
					<li><strong>あとで買う</strong> : 「あとで買う」に登録した楽曲が表示されます。気になった音源を「あとで買う」でチェックしておけば、PC、アプリ両方の「あとで買う」リストに反映されます。</li>
					<li><strong>カートを見る</strong> : OTOTOYウェブサイトの「マイ・カート」ページに飛びます。</li>
				</ul>
			</div>

			<div class="section">
				<h3 id="11">各アイコンについて</h3>
				<h4>詳細アイコン</h4>
				<p>AVIOT PLAYERのさまざまな場面でパッケージに<img src="{{ asset('images/app/android-syousai-icon.png') }}" alt="android-syousai-icon" class="li-img">「詳細アイコン」が表示されます。</p>
				<img src="{{ asset('images/app/android-syousai01.jpg') }}" alt="android-syousai01" class="sec-img img-responsive">
				<p><img src="{{ asset('images/app/android-syousai-icon.png') }}" alt="android-syousai-icon" class="li-img">「詳細アイコン」を押すと、「アルバムを再生する」「記事を読む」「あとで買うに追加する」「ライブラリに追加」などのメニューががでてきます。</p>
				<img src="{{ asset('images/app/android-syousai02.jpg') }}" alt="android-syousai02" class="sec-img img-responsive">

				<h4>記事アイコン</h4>
				<p>OTOTOYにて公開されている記事があるアーティストのパッケージには<img src="{{ asset('images/app/android-feature-icon.png') }}" alt="android-feature-icon" class="li-img">「記事アイコン」が表示されます。</p>
				<img src="{{ asset('images/app/android-feature01.jpg') }}" alt="android-feature01" class="sec-img img-responsive">
				<p>この<img src="{{ asset('images/app/android-feature-icon.png') }}" alt="android-feature-icon" class="li-img">「記事アイコン」があるパッケージでは、<img src="{{ asset('images/app/android-syousai-icon.png') }}" alt="android-syousai-icon" class="li-img">「詳細アイコン」からそのアーティストの最新記事を見ることができます。</p>
				<img src="{{ asset('images/app/android-feature02.jpg') }}" alt="android-feature02" class="sec-img img-responsive">
			</div>

			<div class="section">
				<h3 id="12">楽曲を再生する</h3>
				<p>AVIOT PLAYERでは試聴、およびマイライブラリにある音源の再生など、音源再生はすべてほぼすべて同じ操作方法で行えます。</p>
				<p><img src="{{ asset('images/app/android-syousai-icon.png') }}" alt="android-syousai-icon" class="li-img">「詳細アイコン」から、「アルバムを再生する」を選択すると、縮小化されている再生プレイヤーが画面最下方に出現します。また各パッケージの詳細から聴きたい楽曲をタップすることでも同様の再生がなされます。</p>
				<p>縮小化されている下方の再生プレイヤーで音源を再生したままでも、ダブ・メニューを切り替え、ニュースやチャート、他の音源のチェックを行えます。
				</p>
				<p>縮小化されている下方の再生プレイヤーでは、再生、一時停止の操作の他に、左右にスワイプすることで前後の楽曲を選択、再生することができます。</p>
				<img src="{{ asset('images/app/android-player01.jpg') }}" alt="android-player01" class="sec-img img-responsive">
				<p>さらに再生プレイヤーをタップすると、全画面表示になります。再生位置の変更、楽曲の選択などの操作が行えます。<br/>
				画面上部の再生プレイヤーやジャケット写真を左右にスワイプすることで楽曲の選択を行えます。<br/>
				画面上部の再生プレイヤーをタップすると縮小化され、下部に戻ります。</p>
				<img src="{{ asset('images/app/android-player02.jpg') }}" alt="android-player02" class="sec-img img-responsive">
				<h4>注意</h4>
				<ul class="li-dec">
					<li>本アプリの音源再生は全てストリーミングによって行っております。通信料にご注意ください。</li>
					<li>すべて、本アプリで再生されるストリーミング音源は、MP３ファイルによって提供されています。ハイレゾ音源においてもMP3に変換され再生されています。</li>
				</ul>
			</div>
			<div class="section">
				<h3 id="13">イコライザー機能について</h3>
				<p>AVIOT PLAUERでは楽曲再生画面上でイコライザーの調整が可能です。これによりご自身の好きな音質で心地よく音楽を楽しめます。</p>
				<img src="{{ asset('images/app/eq_android.jpg') }}" alt="イコライザー" class="sec-img img-responsive">
				<p>上の写真で赤く囲まれている箇所をタップしてください。</p>
				<img src="{{ asset('images/app/eq_android_2.jpg') }}" alt="イコライザー" class="sec-img img-responsive">
				<p>上の画面でイコライザーの設定をすることが可能です。<br>
					<ul>
						<li>32~125K : 低音域 </li>
						<li>256~2000K : 中音域</li>
						<li>4000K以上 : 高音域</li>
						<li>-20dB ~ +20dB</li>
					</ul>
					お好きな音域を上げるのではなく、必要ではない音域を下げるのがポイントです。
				</p>
			</div>

			<div class="section">
				<h3 id="14">ハイレゾ再生について</h3>

				<p>OTOTOYではWAV、ALAC、FLAC、MP3、AAC、DSDの各フォーマットにより楽曲配信を行っています。その詳細は下表のとおりです。AVIOT PLAYERも下表のフォーマットを再生できますが、注意事項をご確認ください。</p>

				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr><th>形式</th><th>主な拡張子</th><th>圧縮可逆性</th><th>スペック上限</th><th>メタデータ埋込</th><th>圧縮後サイズ</th></tr>
						</thead>
						<tbody><tr><td style="text-align:left">WAV</td><td style="text-align:left">.wav</td><td style="text-align:left">*</td><td style="text-align:left">32bit浮動小数点/768kHz</td><td style="text-align:center">×</td><td style="text-align:left">*(100%)</td></tr>
						
						<tr><td style="text-align:left">ALAC</td><td style="text-align:left">.m4a</td><td style="text-align:left">可逆</td><td style="text-align:left">32bit整数/192kHz</td><td style="text-align:center">○</td><td style="text-align:left">60%～70%</td></tr>
						
						<tr><td style="text-align:left">FLAC</td><td style="text-align:left">.flac</td><td style="text-align:left">可逆</td><td style="text-align:left">24bit整数/192KHz</td><td style="text-align:center">○</td><td style="text-align:left">60%～70%</td></tr>
						
						<tr><td style="text-align:left">MP3</td><td style="text-align:left">.mp3</td><td style="text-align:left">不可逆</td><td style="text-align:left">16bit/48kHz</td><td style="text-align:center">○</td><td style="text-align:left">10%～30%</td></tr>
						
						<tr><td style="text-align:left">AAC</td><td style="text-align:left">.m4a</td><td style="text-align:left">不可逆</td><td style="text-align:left">24bit整数/96KHz</td><td style="text-align:center">○</td><td style="text-align:left">10%～30%</td></tr>
						
						<tr><td style="text-align:left">DSF</td><td style="text-align:left">.dsf</td><td style="text-align:left">*</td><td style="text-align:left">1bit/11.2MHz</td><td style="text-align:center">○</td><td style="text-align:left">*(100%)</td></tr>
						
						<tr><td style="text-align:left">DSDIFF</td><td style="text-align:left">.dff</td><td style="text-align:left">*</td><td style="text-align:left">1bit/11.2MHz</td><td style="text-align:center">×</td><td style="text-align:left">*(100%)</td></tr>
						
						<caption>AVIOT PLAYERおよびOTOTOYでサポートするファイル形式</caption>
					</tbody>

					</table>
				</div>

				<ul>
					<li class="my-3">ハイレゾ再生機能は、OTOTOYにログインした状態でなければご利用いただけません。設定画面に「ハイレゾプレイバック　有効」と表示されていることをご確認ください。</li>
					<li class="my-3">内蔵ストレージまたはmicroSDに保存されたハイレゾ音源（FLAC/ALAC/WAV）を再生できますが、DSD（DSF/DSDIFF）は対象外です。</li>
					<li class="my-3">AVIOT PLAYERでの音楽再生は「AVIOTイヤホンにワイヤレス出力した場合」のみサポート対象となります（アプリに接続中のAVIOTイヤホン画像が表示された状態）。USB DACなど外部機器にデジタルオーディオ信号を出力することは可能ですが、サポート対象外のご利用方法となるためご了承ください。</li>
					<li class="my-3">ハイレゾ再生出力のサンプリングレートと量子化ビット数は、適用されるBluetoothオーディオコーデックにより決定されます。お使いのAndroidスマートフォンが「LDAC」に対応している場合は最大96kHz/24bit、「aptX HD」に対応している場合は48kHz/24bitとなります。</li>
					<li class="my-3">ハイレゾ再生機能は、AVIOT製品のユーザ登録から2年間有効です。製品を追加でご登録いただいた場合、その時点から2年延長されます。</li>
				</ul>
			</div>
		</div>

		<div class="article">
			<h2>アプリでできること</h2>
			<div class="section">
			  <h3 id="20">フル試聴、フリーDL楽曲を無料で聴く</h3>
			  <p>1. 画面左上のメニューから「OTOTOY NOW」画面に切り替える。</p>
			  <img src="{{ asset('images/app/android-menu-now.jpg') }}" alt="android-menu-now" class="sec-img img-responsive">
			  <p>2. タブ・メニューから「今週の無料曲」を選択。現在配信されているフリーDL、フル試聴曲が表示されます。<br/>
				フリーDLの場合は「Free」、フル試聴の場合は「Trial」アイコンが表示されます。フリーDL/フル試聴ともに、期間が過ぎると無料で聴けなくなります。</p>
			  <img src="{{ asset('images/app/android-free.jpg') }}" alt="" class="sec-img img-responsive">
				<img src="{{ asset('images/app/android-trial.jpg') }}" alt="" class="sec-img img-responsive">

        <p>3. フリーDL楽曲は期間内に「ライブラリに追加」することで無料期間が終わっても聴くことができます。<img src="{{ asset('images/app/android-syousai-icon.png') }}" alt="android-syousai-icon" class="li-img">「詳細アイコン」をタップし、「マイライブラリに追加する」を選択するとライブラリに追加されます。期間終了後も「ライブラリ」から聴くことができます。</p>
        <img src="{{ asset('images/app/android-addlibrary01.jpg') }}" alt="android-addlibrary01" class="sec-img img-responsive">
        <p>4.「マイライブラリ」に追加されたフリーダウンロード楽曲には、<img src="{{ asset('images/app/android-library-icon.png') }}" alt="android-library-icon" class="li-img">アイコンが表示されます。</p>
        <img src="{{ asset('images/app/android-addlibrary02.jpg') }}" alt="android-addlibrary02" class="sec-img img-responsive">      </div>

      <div class="section">
				<h3 id="21">ニュースを読む</h3>
				<p>1.画面左上のメニューから「OTOTOY NOW」画面に切り替える。</p>
				<img src="{{ asset('images/app/android-menu-now.jpg') }}" alt="android-menu-now" class="sec-img img-responsive">
			  <p>2. タブ・メニューから「ニュース」を選択。OTOTOYにて配信されている最新のニュースが表示されます。それぞれ見出しをタップすることで、記事本体を読むことができます。</p>
			  <img src="{{ asset('images/app/android-news.jpg') }}" alt="android-news" class="sec-img img-responsive">
      </div>

      <div class="section">
			  <h3 id="22">新着配信楽曲を試聴する</h3>
			  <p>1.画面左上のメニューから「OTOTOY NOW」画面に切り替える。</p>
				<img src="{{ asset('images/app/android-menu-now.jpg') }}" alt="android-menu-now" class="sec-img img-responsive">
			  <p>2.タブ・メニューから「新譜」を選択。OTOTOYで配信スタートした楽曲が並びます。主に水曜に更新されます。</p>
			  <img src="{{ asset('images/app/android-newarrivals.jpg') }}" alt="android-newarrivals" class="sec-img img-responsive">
			  <p>3.それぞれアルバムのパッケージをタップするとトラック・リストが表示され、楽曲をタップすると試聴ができます。<img src="{{ asset('images/app/android-syousai-icon.png') }}" alt="android-syousai-icon" class="li-img">「詳細アイコン」をタップし「アルバムを再生する」を選択すると試聴ができます。</p>
      </div>

		  <div class="section">
			  <h3 id="23">チャートを見る</h3>
				<p>1.画面左上のメニューから「OTOTOY NOW」画面に切り替える。</p>
				<img src="{{ asset('images/app/android-menu-now.jpg') }}" alt="android-menu-now" class="sec-img img-responsive">
			  <p>2.タブ・メニューから「アルバムランキング」または「シングルランキング」を選択。</p>
			  <img src="{{ asset('images/app/android-ranking.jpg') }}" alt="android-ranking" class="sec-img img-responsive">
			  <p>3.それぞれアルバムのパッケージをタップするとトラック・リストが表示され、曲名タップで試聴ができます。<img src="{{ asset('images/app/android-syousai-icon.png') }}" alt="android-syousai-icon" class="li-img">「詳細アイコン」をタップし「アルバムを再生する」を選択することでも試聴ができます。</p>
      </div>

      <div class="section">
			  <h3 id="24">過去にOTOTOYで買った楽曲を聴く</h3>
			  <p>「ライブラリ」では、OTOTOYで購入した楽曲を一覧で表示、ストリーミング再生できます。<br/>
				OTOTOYアカウントの購入履歴に連動し、アプリが直接OTOTOYのサーバーから音源を呼び出しストリーミング再生します。購入楽曲をスマートフォンへ直接転送せずに、手軽に購入楽曲の再生が行えます。</p>
			  <p>1.画面左上のメニューから「ライブラリ」画面に切り替える。</p>
			  <img src="{{ asset('images/app/android-menu-library.jpg') }}" alt="android-menu-library" class="sec-img img-responsive">
			  <p>2.タブ・メニューから「最近入手した曲」「アルバム」「曲」「アルバム」が選択できます。それぞれの形式でソートしこれまで購入した楽曲を探すことができます。</p>
			  <img src="{{ asset('images/app/android-library-menu.jpg') }}" alt="android-library-menu" class="sec-img img-responsive">
			  <p>3.「最近入手した曲」は、画面を下にドラッグすることによって最新の状態に更新されます。</p>
			  <img src="{{ asset('images/app/android-reload.jpg') }}" alt="android-reload" class="sec-img img-responsive">
			  <p>4.パッケージ右側の<img src="{{ asset('images/app/android-syousai-icon.png') }}" alt="android-syousai-icon" class="li-img">「詳細アイコン」から「アルバムを再生する」を選ぶか、パッケージをタップしトラックリストを表示、それぞれの楽曲をタップすることで再生がはじまります。<br/>
				パッケージのアーティス名の下に<img src="{{ asset('images/app/android-feature-icon.png') }}" alt="android-feature-icon" class="li-img">「記事アイコン」があるパッケージは、<img src="{{ asset('images/app/android-syousai-icon.png') }}" alt="android-syousai-icon" class="li-img">「詳細アイコン」から、そのアーティストの関連記事を読むことができます。</p>
				<img src="{{ asset('images/app/android-feature01.jpg') }}" alt="android-feature01" class="sec-img img-responsive">
      </div>

      <div class="section">
				<h3 id="25">あとで買うリスト</h3>
				<p>「あとで買う」とは、アプリで試聴した楽曲を「あとで買う」リストに登録しておき、ログインしているアカウントと紐付けて、PC上でログインしたときに共有する機能です。</p>
				<p>1.パッケージ右下の<img src="{{ asset('images/app/android-syousai-icon.png') }}" alt="android-syousai-icon" class="li-img">「詳細アイコン」を押すと「アルバムを再生する」などとともに「あとで買うに追加する」が表示されます。これを選択するとあなたのアカウントの「あとで買う」リストに追加されます。</p>
				<img src="{{ asset('images/app/android-wishlist01.jpg') }}" alt="android-wishlist01" class="sec-img img-responsive">
				<p>2.「あとで買う」に追加したパッケージは星のマークがつきます。</p>
				<img src="{{ asset('images/app/android-wishlist02.jpg') }}" alt="android-wishlist02" class="sec-img img-responsive">
				<p>3.「あとで買う」に追加したパッケージは、左上のメニューから「あとで買う曲」を選択するとチェックできます。</p>
				<img src="{{ asset('images/app/android-wishlist03.jpg') }}" alt="android-wishlist03" class="sec-img img-responsive">
				<img src="{{ asset('images/app/android-wishlist04.jpg') }}" alt="android-wishlist04" class="sec-img img-responsive">
				<p>4.<img src="{{ asset('images/app/android-syousai-icon.png') }}" alt="android-syousai-icon" class="li-img">「詳細アイコン」をタップ、「あとで買うから削除する」で「あとで買う」から削除できます。</p>
				<p>5.「あとで買う」はPC側でも確認することができます。PCにてOTOTOYにログイン、カートボタンを押すと、下方に「あとで買う」のリストが表示されます。ここから楽曲詳細ページへ飛び、購入することもできます。</p>
				<img src="{{ asset('images/app/android-wishlist05.jpg') }}" alt="android-wishlist05" class="sec-img img-responsive">
			</div>
		</div>

		<div class="back bottom-button">
			<a href="#header" class="btn btn-success"><span class="glyphicon glyphicon-chevron-left"></span> ヘルプメニューへ戻る</a>
		</div>

		</div>
		<!-- /本文 -->

	</div>
</div>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('js/aviot_player.js') }}"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="../js/html5shiv.js"></script>
	<script src="../js/respond.min.js"></script>
<![endif]-->
</body>
</html>
