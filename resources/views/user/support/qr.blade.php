@extends('layouts.user_master')

@section('title', 'カスタマーサポート |')

@section('description', 'AVIOT製品の問い合わせはこちらから')

@section('css')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<style>

.orange{
    color: #FF9872;
}
.bold{
    font-weight: bold;
}

.text-small{
    font-size: 12px;
}

.border-b{
    border-bottom: 2px solid black;
}

.ml-20px{
    margin-left: 20px;
}
.w-half{
    width:50%
}

.h-auto{
    height: auto;
}

</style>

@endsection

@section('body_id', 'support')

@section('content')
<div id="container" class="both mb60">
<div id="" class="main w1020 SPw m_auto" role="main">

    <h2 id="QA" class="pt20 border_b mb20 mt40">よくあるお問合せ<i class="material-icons">
            
            </i></h2>
    <section>
        

    <ul class="accordion">
        <li>
            <p id="charging" class="ac">充電ができない<i class="accordion_icon ifpc"><span></span><span></span></i></p>
            <ul class="inner">
                <li>
                    <p>以下の手順に従ってご確認ください。</p>
                </li>
                <li class="inner_cont">
                    <p>１、充電ケースのバッテリーはありますか<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li>※充電ケースの蓋を閉め、付属のUSBケーブルを挿して、ケースのLEDランプが点灯しているかを確認してください。</li>
                        <li class="bold">はい　<i class="fas fa-arrow-right"></i>　<span class="orange bold"> 項目２．</span>に進んでください。</li>
                        <li class="bold">いいえ　<i class="fas fa-arrow-right"></i>　充電をお願いします。　※充電に関する注意事項は<a href="{{ route('manual') }}">取扱説明書</a>をご参照ください。</li>
                    </ul>
                </li>
                <li class="inner_cont mt10">
                    <p>２、イヤホン本体は、充電状態になっていますか<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li>※充電ケースに入れてLEDがオレンジ色に点灯するか確認してください。</li>
                        <li class="bold">はい　<i class="fas fa-arrow-right"></i>　正常に充電されています。 </i>　
                        <li class="bold">いいえ　<i class="fas fa-arrow-right"></i>　<span class="orange bold"> 項目3．</span>に進んでください。</li> 
                        <li>※充電ケースに入れてLEDがオレンジ色に点灯しない場合、満充電されている可能性が高いです。</li>
                    </ul>
                </li>
                <li class="inner_cont mt10">
                    <p>３、本体の電源は入りますか<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li class="bold">はい　<i class="fas fa-arrow-right"></i>　<span class="orange bold"> 項目4．</span>に進んでください。</li>
                        <li class="bold">いいえ　<i class="fas fa-arrow-right"></i>　 <span class="border-b">浸水、落下、破損以外の場合</span>、不良品の可能性がございますので、カスタマーセンターにご連絡ください。不良品の場合は、正常品とご交換させていただきます。</li>
                    </ul>
                </li>
                <li class="inner_cont mt10">
                    <p>４、充電端子の汚れや、異物はありますか<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li class="bold">はい　<i class="fas fa-arrow-right"></i>　乾いた布で軽く拭き、イヤホン本体の充電部分がきちんと接触するようにセットしてから、もう一度お試しください。</li>
                        <li class="bold">いいえ　<i class="fas fa-arrow-right"></i>　<span class="border-b">浸水、落下、破損以外の場合</span>、不良品の可能性がございますので、カスタマーセンターにご連絡ください。不良品の場合は、正常品とご交換させていただきます。</li>
                    </ul>
                </li>
                <p class="mt10">上記にてトラブルが解消しない場合、カスタマーサポートセンターまたはお買い上げ店舗へお問い合わせをお願いいたします。</p>
            </ul>
        </li>

        <li>
            <p id="pairing" class="ac">ペアリングがうまくいかない<i class="accordion_icon ifpc"><span></span><span></span></i></p>
            <ul class="inner">
                <li>
                    <p>以下の手順に従ってご確認ください。</p>
                </li>
                <li class="inner_cont">
                    <p>１、	端末側のBluetooth機能は、オンになっていますか<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li class="bold">はい　<i class="fas fa-arrow-right"></i>　<span class="orange bold"> 項目２．</span>に進んでください。</li>
                        <li class="bold">いいえ　<i class="fas fa-arrow-right"></i>　Bluetooth機能をオンにしてから、もう一度お試しください。</li>
                    </ul>
                </li>
                <li class="inner_cont mt10">
                    <p>２、	本体がペアリングモードになっていますか<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li>※片側を素早くダブルクリックすると、ペアリングモードになります。押した側のイヤホンLEDが白とオレンジ色交互に点滅します。押していない側イヤホンのLEDは、３秒ごとに白が一回点滅します。型番ごどにLEＤランプのカラーが異なる場合がありますので、詳しくは所持機種の取扱説明書をご参照ください。</li>
                        <li class="bold">はい　<i class="fas fa-arrow-right"></i>　<span class="orange bold"> 項目3．</span>に進んでください。</i>　
                        <li class="bold">いいえ　<i class="fas fa-arrow-right"></i>　ペアリング操作を進めてください。※操作方法は、<a href="{{ route('movies') }}">動画</a>または<a href="{{ route('manual') }}">取扱説明書</a>をご参照ください。</li> 
                    </ul>
                </li>
                <li class="inner_cont mt10">
                    <p>３、	端末側のBluetooth設定画面上に、接続側イヤホンの型番は表示されましたか<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li class="bold">はい　<i class="fas fa-arrow-right"></i>　<span class="orange bold"> 項目4．</span>に進んでください。</li>
                        <li class="bold">いいえ　<i class="fas fa-arrow-right"></i>　 既に一度接続したことがある場合は、スマートフォンの機種によって、既存デバイスもしくは、以前接続したデバイスに製品名の記載があります。また、接続したイヤホンの履歴が多い場合は、一度すべての履歴を削除し、Bluetoothのスイッチをオフからオンにしてから、再度ペアリングを行ってください。</li>
                    </ul>
                </li>
                <li class="inner_cont mt10">
                    <p>４、	端末と両耳イヤホンの接続に成功しましたか<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li class="bold">はい　<i class="fas fa-arrow-right"></i>　正常にペアリングされています。</li>
                        <li>※もし、接続されていても音が出ない場合がございましたら、Bluetooth設定マークより、「端末の詳細」へ進み、メディア音声がオンになっているかご確認ください。（アンドロイドのみ）</li>
                        <li class="bold">いいえ　<i class="fas fa-arrow-right"></i>　片側だけ接続した場合は、もう片側のペアリングを許可するポップアップが表示されますので、「同意する」を選択してください。</li>
                        <li>※片側の型番名を選択後に、もう片側のペアリングにポップアップが表示されます。表示されるまで数秒かかる場合があります。また、iPhoneを使用されている方は「接続できませんでした」というポップアップが表示されることがあります、こちらはご使用に影響ありません。</li>
                        <li><img class="w-half h-auto mt10" src="{{ asset('images/user/pairing-image.png') }}" alt=""></li>
                        <li>※スマートフォンの機種によって、表示の仕様が少々異なります。</li>
                        <li>上記もお試し後、片側しか接続しない場合は、リセット操作を行って、再ペアリングをお試してください。リセットの操作方法は、<a href="{{ route('manual') }}"> 取扱説明書</a>をご参照ください。</li>
                    </ul>
                </li>
                <p class="mt10">上記にてトラブルが解消しない場合、カスタマーサポートセンターまたはお買い上げ店舗へお問い合わせをお願いいたします。</p>
            </ul>
        </li>

        <li>
            <p id="connection" class="ac">接続が途切れる<i class="accordion_icon ifpc"><span></span><span></span></i></p>
            <ul class="inner">
                <li>
                    <p>以下の手順に従ってご確認ください。</p>
                </li>
                <li class="inner_cont">
                    <p>１、	音楽を聴いている途中に、ブツッと一瞬途切れる音はしますか<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li class="bold">はい　<i class="fas fa-arrow-right"></i>　電波干渉によって生じる問題の可能性が高いです。電波の混雑した環境をなるべく避け、再度お試しください。</li>
                        <section class="ml-20px">
                            <li>※身近で電波干渉を起こす家電には、次のようなものがあります。</li>
                            <li>・コードレス電話機／FAX機</li>
                            <li>・電子レンジ（加熱調理中のみ）</li>
                            <li>・レーザー式無線マウス</li>
                            <li>・Bluetoothヘッドフォン</li>
                            <li>・無線機能を持ったスピーカシステム</li>
                            <li>・無線監視カメラ、または無線WEBカメラ</li>
                            <li>・そのほか（2.4GHz帯の周波数を利用する機器）</li>
                        </section>　
                        <li class="bold">いいえ　<i class="fas fa-arrow-right"></i>　<span class="orange bold"> 項目2．</span>に進んでください。</li>
                    </ul>
                </li>
                <li class="inner_cont mt10">
                    <p>２、	音楽を聴いている途中に、片側のみ接続が切れましたか<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul class="ml-20">
                        <li class="bold">はい　<i class="fas fa-arrow-right"></i>　充電ケースにイヤホンを入れ、再度お試しください。お試しいただいても回復しない場合は、イヤホンへのバージョンアップによって解決する可能性がございます。詳しくはカスタマーセンターにご連絡してください。</i>
                        <li class="bold">いいえ　<i class="fas fa-arrow-right"></i>　その他の不具合などございましたら、お気軽にカスタマーセンターにお問い合わせください。</li> 
                    </ul>
                </li>
            </ul>
        </li>

        <li>
            <p id="operation" class="ac">オペレーションの問題<i class="accordion_icon ifpc"><span></span><span></span></i></p>
            <ul class="inner">
                <li class="inner_cont">
                    <p>１、LEDが高速に点滅している<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li>完全ワイヤレスのBluetoothイヤホンが正常に動作しない場合、イヤホン側の初期化でトラブルが解決される場合がございます。</li>
                        <li>以下の手順を従ってご確認ください。</li>
                        <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                        <li>②充電ケースにイヤホンをセットする。</li>
                        <li>③充電ケースにセットしたまま、イヤホンのボタンを両側同時にゆっくり10秒数えて押し続けてください。</li>
                        <li>④充電ケースから取り出す。この際、イヤホンの電源が入っている場合は両側の電源をオフにしてください。</li>
                        <li>⑤どちらか片方のみ電源をいれペアリングする。接続された側が親機となります。</li>
                        <li>⑥親機側のペアリングが終わったら反対側の電源をいれてください。</li>
                        <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        <li>上記にてトラブルが解消しない場合、カスタマーサポートセンターまたはお買い上げ店舗へお問い合わせをお願いいたします。</li>
                    </ul>
                </li>
                <li class="inner_cont mt10">
                    <p>２、イヤホンがいきなり反応しなくなった<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li>落下や水没をしていないにも関わらず、完全ワイヤレスのBluetoothイヤホンが正常に動作しない場合、イヤホン側の初期化でトラブルが解決される場合がございます。</li>
                        <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                        <li>②充電ケースにイヤホンをセットする。</li>
                        <li>③充電ケースにセットしたまま、イヤホンのボタンを両側同時にゆっくり10秒数えて押し続けてください。</li>
                        <li>④充電ケースから取り出す。この際、イヤホンの電源が入っている場合は両側の電源をオフにしてください。</li>
                        <li>⑤どちらか片方のみ電源をいれペアリングする。接続された側が親機となります。</li>
                        <li>⑥親機側のペアリングが終わったら反対側の電源をいれてください。</li>
                        <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        <li>上記にてトラブルが解消しない場合、カスタマーサポートセンターまたはお買い上げ店舗へお問い合わせをお願いいたします。</li>
                    </ul>
                </li>
                <li class="inner_cont mt10">
                    <p>３、	充電ケースからイヤホンを取り出しても自動で接続されない<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li>環境により再生機器との間に通信を妨げる障害が発生し、Bluetoothの通信距離範囲内でも接続が上手くいかない場合がございます。</li>
                        <li>Bluetoothは、2.4GHzの帯域を使って通信を行ないます。</li>
                        <li>この帯域はWi-Fiなどさまざまな無線規格で使われておりますので、電波が混雑していると発生する可能性が考えられます。</li>
                        <li>接続トラブルが毎回発生する場合は、製品の不具合の可能性がございます。カスタマーサポートセンターまたはお買い上げ店舗へお問い合わせをお願いいたします。</li>
                    </ul>
                </li>
                <li class="inner_cont mt10">
                    <p>４、	音量調整ができない<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li>AVIOT製品の一部機種では、一部のAndroid端末と接続された際、端末側とイヤホンの音量がそれぞれ独立しているため、音量調整ができない場合がございます。</li>
                        <li>このような問題が起きた場合は、下記方法をお試しください。</li>
                        <li class="mt10">[音量を上げる場合] <br>
                            ・イヤホンのL側を、3回連続で押してください。
                        </li>
                        <li class="mt10">[音量を下げる場合] <br>
                            ・イヤホンのL側を、2回連続で押してください。
                        </li>
                        <li>
                            上記にて問題が解消しない場合、お手数ではございますが <br>
                            カスタマーサポートセンターまでお問い合わせをお願いいたします。
                        </li>
                    </ul>
                </li>
                <li class="inner_cont mt10">
                    <p>５、ガイダンスや最小再生音量が大きく感じる <i class="accordion_icon ifpc"><span></span><span></span></i></p>
                    <ul>
                        <li>AVIOT製品の一部機種では、ファームアップデートで音量の改善ができる場合がございます。</li>
                        <li><a href="{{ route('product_regiser') }}">製品保証登録</a>をお済ませ頂いた上、お手数お掛けしますがカスタマーサポートセンターまでお問い合わせをお願いいたします。</li>
                    </ul>

                </li>
            </ul>
        </li>
    
    </ul>

           
        
</div><!--/main-->
</div><!--/container-->
    
@endsection

@section('javascript-footer')

<script type="text/javascript">
	$(function(){
	$('.accordion p').click(function(){
		$(this).next().slideToggle();	
		if ($(this).children(".accordion_icon").hasClass('active')) {			
			$(this).children(".accordion_icon").removeClass('active');				
		}
		else {
			$(this).children(".accordion_icon").addClass('active');			
		}	
    });
    
	$('.accordion .inner li p').click(function() {
        
		$(this).children('ul').slideToggle();

  });
});
</script>
    
@endsection