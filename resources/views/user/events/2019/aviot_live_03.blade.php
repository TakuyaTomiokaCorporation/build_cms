@extends('layouts.user_master')

@section('title', 'AVIOT LIVE:02 |')

@section('description', 'アーティストによるインタビュー動画、AVIOT製品のレビュー、操作方法')

@section('css')

<style type="text/css">
.text {
    margin: 10px;
}

#event dd a {
    color: #37dc93;
}

#event h3 {
	font-size: 2.5em;
	color: #fff;
	/* background: -moz-linear-gradient(top left, #221e4a, #0b59a0);
	background: -webkit-linear-gradient(top left, #221e4a, #0b59a0); 
    background: linear-gradient(to bottom right, #221e4a, #0b59a0); */
    background: radial-gradient(#993300, #A52A2A);
	padding: 12px;
}

#event h4 {
    font-size: 1.4em;
    color: #fff;
    background-color: #000;
    padding: 12px;
}

#event dl dt {
    font-weight: bold;
}

@media screen and (min-width:1024px) {
.fll { float: left; }
.flr { float: right; }
.pr { padding-right: 10px; }
.text_width { width: 40%; margin: 10px; }
.img_width { width: 50%; }
.pi { margin-top: 40px; }
.yanakoto { margin-top: 80px; }

#event dl dt {
    width: 160px;
    text-align: right;
    font-weight: bold;
}

#event dl dd {
    margin-left: 180px;
}
}

.green{
    color: #37dc93;
}

@media screen and (max-width: 640px) {

}
</style>

@endsection

@section('body_id', 'event')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
<article class="w1020 w98 m_auto">
    <h2 class="mt20 pt20"><img src="{{ asset('images/events/2019/AVIOTLIVE03.jpg') }}"></h2>

        <section>
        <h3 class="alc">イベント詳細</h3>
        <dl class="mt40">
            <dt class="fll">開催場所：</dt>
            <dd>吉祥寺CLUB SEATA（アクセス:<a href="https://seata.jp/map/" target="_brank">https://seata.jp/map/</a>）</dd>

            <dt class="fll mt10 both">日時：</dt>
            <dd class="mt10">12月10日(火)　OPEN18:00 / START19:00</dd>

            <dt class="fll mt10 both">チケット：</dt>
            <dd class="mt10">1500円+当日1D</dd>

            <dt class="fll mt10 both">チケット販売サイト：</dt>
            <dd class="mt10">イープラス(<a href="https://eplus.jp/sf/detail/3147900001-P0030001" target="_blank">https://eplus.jp/sf/detail/3147900001-P0030001</a>)</dd>
        </dl>
    </section>
        <h3 class="alc mb20 mt20">AVIOT製品登録者を抽選で無料招待！</h3>
        <div class="text">
            <p>製品保証登録をお済のお客様の中から抽選で200名様をAVIOT LIVE：03に招待いたします！</p>
            <p>メールアドレスを入力して送信するだけで応募完了！</p>
            <p>11/13(水) 12:00から無料招待の受付を開始予定です。<br>締切は11/20(水) 23:59までですので、お早めにご応募お願いいたします。</p>
            <p>下記URLからご応募お待ちしております！</p>
            <p><a href="{{ route('live03') }}">https://aviot.jp/aviot_live_03/</a></p>
            <p>当選発表は2019年11月21日以降に当選された方のみメールにて順次お送りいたします。</p>
            <p class="mt20 mb10 txtRed">
                ※会場へのご入場は一般チケット購入者の方を優先とさせていただきます。<br>
                また、入場料は無料になりますが、当日1ドリンクはご負担いただきますので予めご了承ください。
            </p>
        </div>

    <section>
        <h3 class="alc mt40">出演アーティスト</h3>

        <div class="mt10">
            <h4 class="mb10">森田くみこ</h4>
                <div class="fll img_width">
                    <img src="{{ asset('images/events/2019/morita.jpg') }}" class="pr">
                </div>
                <div class="pi">
                    <p class="text">長崎県出身のシンガーソングライター。2012年に鹿児島県でピアノでの弾き語りを始め、全国各地でライブを行う。</p>
                    <p class="text">弾き語りのほか、作曲家・作詞家としても活動。舞台音楽の制作や不定期開催のパンクロックミュージシャンとお笑いの融合イベントにも出演。</p>
                    <p class="text">2019年AVIOT「TE-D01d」のCMタイアップ曲として「明かりのない街」が使用される。ジャンルに囚われず幅広く活動している。</p>
                </div>
            </div>
            <p class="alc mt20"><a href="https://twitter.com/morikumi_" target="_blank" class="btn_Blk">公式Twitter</a></p>

            <div class="mt40 both">
            <h4 class="mb10">JiLL-Decoy association</h4>
            <div  class="flr img_width">
                    <img src="{{ asset('images/events/2019/jill-decoy.jpg') }}">
                </div>
                <div class="fll text_width">
                    <p class="text">2002年結成。ボーカルchihiRo、ギターkubota、ドラムtowadaの３人。2006年メジャーデビュー。</p>
                    <p class="text">ジャズ/ポップス/ロックをベースにしたオリジナリティあふれる楽曲、その楽曲を彩る愛に満ちあふれた歌が多くのファンを魅了している。</p>
                    <p class="text">2013年にはアルバム『ジルデコ５』が「第55回日本レコード大賞」の＜優秀アルバム賞＞を受賞。</p>
                    <p class="text">A-HAの「Take on me」をジャズアレンジしたMVが話題を呼び、海外のテレビでも紹介される。</p>
                    <p class="text">毎年恒例になったビルボードライブ東京、大阪公演も好評で東京ジャズや日本全国のジャズフェス、国内最大級のロックフェスRISING SUN ROCK FESTIVALにも出演し、唯一無二の存在を確かなものにした。</p>
                    <p class="text">2019年3月6日に「ジルデコ９〜GENERATE THE TIMES〜」をリリース。初のビッグバンドも参加し、16年で築き上げた「ジルデコのJAZZ」を全て日本語で歌い上げる。</p>
                </div>
                
            </div>
            <p class="alc mt20"><a href="http://www.jilldecoy.com/" target="_blank" class="btn_Blk">公式サイト</a></p>

        <div class="both mt40">
            <h4 class="mb10">ハルカトミユキ</h4>
                <div class="fll img_width">
                    <img src="{{ asset('images/events/2019/HarukaToMiyuki.jpg') }}" class="pr">
                </div>
                <div>
                    <p class="text">ハルカ(Vo/Gt)とミユキ(Key/Cho)の2人からなるユニット。2012年にインディーズデビュー。2枚のEPをリリースし、その後2013年11月に1stフルアルバム『シアノタイプ』でメジャーデビュー。</p>
                    <p class="text">2015年9月にはデビューからわずか2年たらずで、「日比谷野外大音楽堂」でのワンマンライブを行い、その後も2016年、2017年と3年連続でワンマンライブを行い、大盛況を収めた。</p>
                    <p class="text">2018年11月にリリースした初のシングル「17才」が話題となり、2019年5月には初のベストアルバム「BEST 2012-2019」をリリース。そしてこのリリースに伴い「Best Album Release Tour 2019 “The Origin”」を8月から2人編成で行い、このツアーの締めくくりとして11月23日には「Best Album Release Special Live “7 DOORS”」と題して、初のホールでのワンマンライブを行う。</p>
                </div>
            </div>
            <p class="alc mt20"><a href="http://harukatomiyuki.net/" target="_blank" class="btn_Blk">公式サイト</a></p>
    </section>

</article>
</div><!--/main-->
</div><!--/container-->

    
@endsection

@section('javascript-footer')
    
@endsection