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
	background: -moz-linear-gradient(top left, #221e4a, #0b59a0);
	background: -webkit-linear-gradient(top left, #221e4a, #0b59a0); 
	background: linear-gradient(to bottom right, #221e4a, #0b59a0);
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

@media screen and (max-width: 640px) {

}
</style>

@endsection

@section('body_id', 'event')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
<article class="w1020 w98 m_auto">
    <h2 class="mt20 pt20"><img src="{{ asset('images/events/2019/AVIOTLIVE02.jpg') }}"></h2>

        <section>
        <h3 class="alc">イベント詳細</h3>
        <dl class="mt40">
            <dt class="fll">開催場所：</dt>
            <dd>会場TOKYO FM ホール（アクセス:<a href="http://www.tfmhall.jp/accsess.html" target="_brank">http://www.tfmhall.jp/accsess.html</a>）</dd>

            <dt class="fll mt10 both">日時：</dt>
            <dd class="mt10">9月19日(木)　OPEN18:00 / START19:00</dd>

            <dt class="fll mt10 both">チケット：</dt>
            <dd class="mt10">1500円+当日1D</dd>

            <dt class="fll mt10 both">チケット販売サイト：</dt>
            <dd class="mt10">イープラス(<a href="https://eplus.jp/sf/detail/3079740001-P0030001" target="_blank">https://eplus.jp/sf/detail/3079740001-P0030001</a>)　9月4日(水)10:00から発売開始。</dd>
        </dl>
    </section>

    <section class="">
        <h3 class="alc mt40">出演アーテスト</h3>

        <div class="mt10">
            <h4 class="mb10">ピエール中野 (トークイベント)</h4>
                <div class="fll img_width">
                    <img src="{{ asset('images/events/2019/pinakano.jpg') }}" class="pr">
                </div>
                <div class="pi">
                    <p class="text">手数、足数を駆使した高度なテクニックと表現力で、豪快かつ繊細な圧倒的プレイスタイルを確立。 国内唯一のドラム専門誌「リズム＆ドラム・マガジン」の表紙を5度務め、ドラマガフェスでのパフォーマンスは最多動員を記録、同誌のドラムヒーローランキングでは国内2位に選ばれた。</p>
                    <p class="text">シグネチャー・スネアやスティックの年間売上トップクラスをキープするなど、ドラマーとして高い注目を集めている。また、著名ミュージシャンのレコーディングへの参加や、ドラムチューナー、テレビ出演、番組MC、DJ、ドラムDJ、音楽監修、フェス主催、ビバラポップ プレゼンター、インタビュアー、コラム連載など、ドラマーの枠を超えた幅広い活動を展開している。</p>
                </div>
            </div>
            <p class="alc mt20"><a href="https://www.pinakano.jp/" target="_blank" class="btn_Blk">公式サイト</a></p>

            <div class="mt40 both">
            <h4 class="mb10">ヤなことそっとミュート</h4>
            <div  class="flr img_width">
                    <img src="{{ asset('images/events/2019/yanakoto.jpg') }}">
                </div>
                <div class="fll text_width">
                    <p class="text yanakoto">ヤなことだらけの日常をそっとミュートしても何も解決しないんだけど、とりあえずロックサウンドに切ないメロディーを乗せて歌ってみる事にする。</p>
                </div>
                
            </div>
            <p class="alc mt20"><a href="http://yanakotosottomute.com/" target="_blank" class="btn_Blk">公式サイト</a></p>

        <div class="both mt40">
            <h4 class="mb10">Maison book girl</h4>
                <div class="fll img_width">
                    <img src="{{ asset('images/events/2019/maison.jpg') }}" class="pr">
                </div>
                <div>
                    <p class="text">矢川葵、井上唯、和田輪、コショージメグミ、による4人組グループ。通称「ブクガ」。音楽家サクライケンタが楽曲から世界観の構築まで、トータルでプロデュースを行う。その独特且つ前衛的な音楽性、他には類を見ないパフォーマンスが話題となり2016年にメジャーデビュー。2018年よりポニーキャニオンに移籍し、「ビバラポップ」への出演や、イギリス・ブライトンでの国際音楽フェス「THE GREAT ESCAPE FESTIVAL2018」に日本代表として出演、「ピッコマ」のCMタイアップ獲得、NHK「シブヤノオト」での初歌唱パフォーマンス披露、など活動の幅を拡げる。</p>
                    <p>2019年は3月より名古屋・大阪・福岡でワンマンライブを行なった後、4月3日にシングル「SOUP」をリリース。4月には自身最大規模となるワンマンライブ「Solitude HOTEL 7F」を昭和女子大学・人見記念講堂で開催し大成功を収めた。</p>
                </div>
            </div>
            <p class="alc mt20"><a href="https://www.maisonbookgirl.com/" target="_blank" class="btn_Blk">公式サイト</a></p>
    </section>
    
</article>
</div><!--/main-->
</div><!--/container-->

    
@endsection

@section('javascript-footer')
    
@endsection