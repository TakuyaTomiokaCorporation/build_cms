@extends('layouts.user_master')

@section('title', 'カスタマーサポート |')

@section('description', 'AVIOT製品の問い合わせはこちらから')

@section('css')

@endsection

@section('body_id', 'support')

@section('content')
<div id="container" class="both mb60">
<div id="" class="main w1020 SPw m_auto" role="main">
    <h2 class="pt20 border_b mb20">カスタマーサポート</h2>
    <section>
        <ul class="support_menu">
            <li><a href="{{ route('movies') }}"><img src="{{ asset('images/user/movies.png') }}" alt="ペアリング動画"></a></li>
            <li><a href="#QA"><img src="{{ asset('images/user/QA.png') }}" alt="よくあるご質問"></a></li>
            <li><a href="{{ route('manual') }}"><img src="{{ asset('images/user/manual.png') }}" alt="説明書ダウンロード"></a></li>
            <li><a href="{{ route('product_regiser') }}"><img src="{{ asset('images/user/registration.png') }}" alt="製品保証"></a></li>
            <li><a href="{{ route('compensation') }}"><img src="{{ asset('images/user/compensation.png') }}" alt="交換保障"></a></li>
        </ul>
        </ul>

        <div class="support_center">
            <h3 class="mt40 mb20 border_l">カスタマーサポートセンター</h3>
            <p class="fll ifpc mt20 mb40"><img src="{{ asset('images/user/support.png') }}"></p>
            <dl>
                <dd class="fsTel mt10 bold">電話：<a href="050-2018-3909">050-2018-3909</a></dd>
                <dd class="fs12">※営業時間：10:00〜17:00（土日祝除く）</dd>
                <dd class="mt10"><a href="https://v-trade.co.jp/contact_individual/" class="btn_Blk">メールでお問合わせ</a></dd>
            </dl>
        </div>
    </section>

    <h2 id="QA" class="pt20 border_b mb20 mt40">よくあるご質問</h2>
    <section>
        <h3 class="mb20 border_l">操作方法、製品について</h3>

    <ul class="accordion">
            <li>
                <p class="ac">イヤホンがいきなり反応しなくなった。<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li>
                        <p>落下や水没をしていないにも関わらず、完全ワイヤレスのBluetoothイヤホンが正常に動作しない場合、イヤホン側の初期化でトラブルが解決される場合がございます。<br>
                        初期化の方法は、製品により異なりますので、ご使用の機種の内容をご確認ください。</p>
                    </li>
                    <li class="inner_cont">
                        <p>TE-D01aの場合<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                            <li>②イヤホンの電源をオフにした状態で、L側のボタンをLEDランプが2色交互に点滅するまで約7秒押し続けてください。</li>
                            <li>③再生機器の画面に「TE-D01a」が表示されたら、選択し接続が完了します。</li>
                            <li>④一度イヤホンの電源を切り、再度②の動作を行ったらR側の電源を入れてください。</li>
                            <li>⑤再生機器で音楽を再生すると片側再生の状態になっていますので、再生機側で一旦、音楽を停止してください。</li>
                            <li>⑥R側・L側を同時に2回（カチカチ）と同時に押してください。10秒以内に「TWS接続しました」のアナウンスが流れます。</li>
                            <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        </ul>
                    </li>
                    <li class="inner_cont mt10">
                        <p>TE-D01bの場合<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                            <li>②充電ケースにイヤホンをセットする。</li>
                            <li>③充電ケースにセットしたまま、イヤホンのボタンを両側を同時にゆっくり10秒数えて押し続けてください。</li>
                            <li>④充電ケースから取り出す。この際、イヤホンの電源が入っている場合は両側の電源をオフにしてください。</li>
                            <li>⑤どちらか片方のみ電源をいれペアリングする。接続された側が親機となります。</li>
                            <li>⑥親機側のペアリングが終わったら反対側の電源をいれてください。</li>
                            <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        </ul>
                    </li>
                    <li class="inner_cont mt10">
                        <p>TE-D01dの場合<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                            <li>②充電ケースにイヤホンをセットする。</li>
                            <li>③充電ケースにセットしたまま、イヤホンのボタンを両側を同時にゆっくり10秒数えて押し続けてください。</li>
                            <li>④充電ケースから取り出す。この際、イヤホンの電源が入っている場合は両側の電源をオフにしてください。</li>
                            <li>⑤どちらか片方のみ電源をいれペアリングする。接続された側が親機となります。</li>
                            <li>⑥親機側のペアリングが終わったら反対側の電源をいれてください。</li>
                            <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        </ul>
                    </li>
                    <li class="inner_cont mt10">
                        <p>TE-D01eの場合<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                            <li>②充電ケースにイヤホンをセットする。</li>
                            <li>③充電ケースにセットしたまま、イヤホンのボタンを両側を同時にゆっくり10秒数えて押し続けてください。</li>
                            <li>④充電ケースから取り出す。この際、イヤホンの電源が入っている場合は両側の電源をオフにしてください。</li>
                            <li>⑤どちらか片方のみ電源をいれペアリングする。接続された側が親機となります。</li>
                            <li>⑥親機側のペアリングが終わったら反対側の電源をいれてください。</li>
                            <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        </ul>
                    </li>
                    <p class="mt10">上記にてトラブルが解消しない場合、カスタマーサポートセンターまたはお買い上げ店舗へお問い合わせをお願いいたします。</p>
                </ul>
            </li>

            <li>
                <p class="ac">イヤホンが高速点滅し操作ができなくなった。<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li>
                        <p>完全ワイヤレスのBluetoothイヤホンが正常に動作しない場合、イヤホン側の初期化でトラブルが解決される場合がございます。初期化の方法は製品により異なりますので、ご使用の機種の内容をご確認ください。</p>
                    </li>
                    <li class="inner_cont">
                        <p>TE-D01aの場合<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                            <li>②イヤホンの電源をオフにした状態で、L側のボタンをLEDランプが2色交互に点滅するまで約7秒押し続けてください。</li>
                            <li>③再生機器の画面に「TE-D01a」が表示されたら、選択し接続が完了します。</li>
                            <li>④一度イヤホンの電源を切り、再度②の動作を行ったらR側の電源を入れてください。</li>
                            <li>⑤再生機器で音楽を再生すると片側再生の状態になっていますので、再生機側で一旦、音楽を停止してください。</li>
                            <li>⑥R側・L側を同時に2回（カチカチ）と同時に押してください。10秒以内に「TWS接続しました」のアナウンスが流れます。</li>
                            <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        </ul>
                    </li>
                    <li class="inner_cont mt10">
                        <p>TE-D01bの場合<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                            <li>②充電ケースにイヤホンをセットする。</li>
                            <li>③充電ケースにセットしたまま、イヤホンのボタンを両側を同時にゆっくり10秒数えて押し続けてください。</li>
                            <li>④充電ケースから取り出す。この際、イヤホンの電源が入っている場合は両側の電源をオフにしてください。</li>
                            <li>⑤どちらか片方のみ電源をいれペアリングする。接続された側が親機となります。</li>
                            <li>⑥親機側のペアリングが終わったら反対側の電源をいれてください。</li>
                            <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        </ul>
                    </li>
                    <li class="inner_cont mt10">
                        <p>TE-D01dの場合<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                            <li>②充電ケースにイヤホンをセットする。</li>
                            <li>③充電ケースにセットしたまま、イヤホンのボタンを両側を同時にゆっくり10秒数えて押し続けてください。</li>
                            <li>④充電ケースから取り出す。この際、イヤホンの電源が入っている場合は両側の電源をオフにしてください。</li>
                            <li>⑤どちらか片方のみ電源をいれペアリングする。接続された側が親機となります。</li>
                            <li>⑥親機側のペアリングが終わったら反対側の電源をいれてください。</li>
                            <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        </ul>
                    </li>
                    <li class="inner_cont mt10">
                        <p>TE-D01eの場合<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                            <li>②充電ケースにイヤホンをセットする。</li>
                            <li>③充電ケースにセットしたまま、イヤホンのボタンを両側を同時にゆっくり10秒数えて押し続けてください。</li>
                            <li>④充電ケースから取り出す。この際、イヤホンの電源が入っている場合は両側の電源をオフにしてください。</li>
                            <li>⑤どちらか片方のみ電源をいれペアリングする。接続された側が親機となります。</li>
                            <li>⑥親機側のペアリングが終わったら反対側の電源をいれてください。</li>
                            <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        </ul>
                    </li>
                    <p class="mt10">上記にてトラブルが解消しない場合、カスタマーサポートセンターまたはお買い上げ店舗へお問い合わせをお願いいたします。</p>
                </ul>
            </li>

            <li>
                <p class="ac"><spnan class="ContQ">ペアリングは出来るが再生機側から音楽が流れてしまう。（TE-D01b）</spnan><i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li>
                        <p>イヤホン側のファームアップデートでトラブルが解消する場合がございます。<br>
                            手数をおかけいたしますがカスタマーサポートまでお問い合わせください。<br>
                        ※全ての再生機器・再生環境での動作改善の保証は致しかねます。</p>
                    </li>
                </ul>
            </li>

            <li>
                <p class="ac">充電がうまくできない。<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li>
                        <p>お使いの機種により、トラブル解決方法が異なります。</p>
                    </li>
                    <li class="inner_cont">
                        <p>TE-D01aの場合<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                            <li>②イヤホンの電源をオフにした状態で、L側のボタンをLEDランプが2色交互に点滅するまで約7秒押し続けてください。</li>
                            <li>③再生機器の画面に「TE-D01a」が表示されたら、選択し接続が完了します。</li>
                            <li>④一度イヤホンの電源を切り、再度②の動作を行ったらR側の電源を入れてください。</li>
                            <li>⑤再生機器で音楽を再生すると片側再生の状態になっていますので、再生機側で一旦、音楽を停止してください。</li>
                            <li>⑥R側・L側を同時に2回（カチカチ）と同時に押してください。10秒以内に「TWS接続しました」のアナウンスが流れます。</li>
                            <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        </ul>
                    </li>
                    <li class="inner_cont mt10">
                        <p><span class="ContQ">それ以外の完全ワイヤレスイヤホンの場合（TE-D01b,c,d,e,h）</span><i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li class="mb10">下記の手順を①より順番にお試しください。</li>
                            <li>①充電ケース内の端子部分にイヤホン本体の充電部分がきちんと接触するようにセットする。</li>
                            <li>②イヤホン本体を一度ケースに押し込み、本体側のLEDランプが点灯するか確認する。</li>
                            <li>③充電ケースの蓋を閉め、付属のUSBケーブルを挿し、ケースのLEDランプが点灯しているか確認する。</li>
                        </ul>
                    </li>
                    <p class="mt10">上記にてトラブルが解消しない場合、カスタマーサポートセンターまたはお買い上げ店舗へお問い合わせをお願いいたします。</p>
                </ul>
            </li>

            <li>
                <p class="ac">再生中に片側の音が聞こえなくなった。<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li>
                        <p>最初に再生機器にペアリング情報を登録した側がR側/L側のどちらかにより異なりますが、子機側の音楽が停止するという症例がいくつか報告されております。<br>
                            原因として考えられますのが、Qualcomm社のチップセットQCC3026の仕様で特定の使用状況下において、今回のような症状が発生する疑いがございます。</p>
                        <p>Qualcomm社にも問合せしておりますが回答にはしばらく時間がかかる見込みです。充電ケースへの収納、電源の入れなおしを行うと改善がみられる場合がございます。それでも改善が見られない場合はイヤホン端末の初期化を行っていただき再接続してください。</p>
                        <p>初期化の方法は、製品により異なりますので、ご使用中の機種をクリックしてご覧くださ い。</p>
                    </li>
                    <li class="inner_cont">
                        <p>TE-D01aの場合<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                            <li>②イヤホンの電源をオフにした状態で、L側のボタンをLEDランプが2色交互に点滅するまで約7秒押し続けてください。</li>
                            <li>③再生機器の画面に「TE-D01a」が表示されたら、選択し接続が完了します。</li>
                            <li>④一度イヤホンの電源を切り、再度②の動作を行ったらR側の電源を入れてください。</li>
                            <li>⑤再生機器で音楽を再生すると片側再生の状態になっていますので、再生機側で一旦、音楽を停止してください。</li>
                            <li>⑥R側・L側を同時に2回（カチカチ）と同時に押してください。10秒以内に「TWS接続しました」のアナウンスが流れます。</li>
                            <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        </ul>
                    </li>
                    <li class="inner_cont mt10">
                        <p>TE-D01bの場合<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                            <li>②充電ケースにイヤホンをセットする。</li>
                            <li>③充電ケースにセットしたまま、イヤホンのボタンを両側を同時にゆっくり10秒数えて押し続けてください。</li>
                            <li>④充電ケースから取り出す。この際、イヤホンの電源が入っている場合は両側の電源をオフにしてください。</li>
                            <li>⑤どちらか片方のみ電源をいれペアリングする。接続された側が親機となります。</li>
                            <li>⑥親機側のペアリングが終わったら反対側の電源をいれてください。</li>
                            <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        </ul>
                    </li>
                    <li class="inner_cont mt10">
                        <p>TE-D01dの場合<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                            <li>②充電ケースにイヤホンをセットする。</li>
                            <li>③充電ケースにセットしたまま、イヤホンのボタンを両側を同時にゆっくり10秒数えて押し続けてください。</li>
                            <li>④充電ケースから取り出す。この際、イヤホンの電源が入っている場合は両側の電源をオフにしてください。</li>
                            <li>⑤どちらか片方のみ電源をいれペアリングする。接続された側が親機となります。</li>
                            <li>⑥親機側のペアリングが終わったら反対側の電源をいれてください。</li>
                            <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        </ul>
                    </li>
                    <li class="inner_cont mt10">
                        <p>TE-D01eの場合<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                        <ul>
                            <li>①事前に、再生機器に登録されている該当のイヤホン情報を削除してください。</li>
                            <li>②充電ケースにイヤホンをセットする。</li>
                            <li>③充電ケースにセットしたまま、イヤホンのボタンを両側を同時にゆっくり10秒数えて押し続けてください。</li>
                            <li>④充電ケースから取り出す。この際、イヤホンの電源が入っている場合は両側の電源をオフにしてください。</li>
                            <li>⑤どちらか片方のみ電源をいれペアリングする。接続された側が親機となります。</li>
                            <li>⑥親機側のペアリングが終わったら反対側の電源をいれてください。</li>
                            <li>⑦音楽等を再生し、動作の確認をお願いします。</li>
                        </ul>
                    </li>
                    <p class="mt10">上記にてトラブルが解消しない場合、カスタマーサポートセンターまたはお買い上げ店舗へお問い合わせをお願いいたします。</p>
                </ul>
            </li>

            <li>
                <p class="ac"><span class="ContQ">充電ケースからイヤホンを取り出しても自動で接続されない。</span><i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li>
                        <p>環境により再生機器との間に通信を妨げる障害が発生し、Bluetoothの通信距離範囲内でも接続が上手くいかない場合がございます。<br>
                        Bluetoothは、2.4GHzの帯域を使って通信を行ないます。</p>
                        <p>この帯域はWi-Fiなどさまざまな無線規格で使われておりますので、電波が混雑していると発生する可能性が考えられます。<br>
                        接続トラブルが毎回発生する場合は、製品の不具合の可能性がございます。カスタマーサポートセンターまたはお買い上げ店舗へお問い合わせをお願いいたします。</p>
                    </li>
                </ul>
            </li>

            <li>
                <p class="ac">ガイダンスや最小再生音量が大きく感じます。<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li>
                        <p>一部機種（TE-D01b,d）では、ファームアップデートで音量の改善ができる場合がございます。<br>
                            製品登録（リンク：<a href="{{ route('product_regiser') }}" target="_brank"> https://aviot.jp/support/registration</a>）をお済ませ頂いた上、お手数お掛けしますがカスタマーサポートセンターまでお問い合わせをお願いいたします。</p>
                    </li>
                </ul>
            </li>
            <li>
                <p class="ac">音量調整ができない。（TE-BD21f／TE-BD21f-pnk）<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li>
                        <p>「TE-BD21f」「TE-BD21f-pnk」では、一部のAndroid端末と接続された際、<br>
                                端末側とイヤホンの音量がそれぞれ独立しているため、<br>
                                音量調整ができない場合がございます。<br>
                                このような問題が起きた場合は、下記方法をお試しください。<br>
                                <br>
                                [音量を上げる場合]<br>
                                ・イヤホンのL側を、3回連続で押してください。<br>
                                <br>
                                [音量を下げる場合]<br>
                                ・イヤホンのL側を、2回連続で押してください。<br>
                                <br>
                                上記にて問題が解消しない場合、お手数ではございますが<br>
                                カスタマーサポートセンターまでお問い合わせをお願いいたします。</p>
                    </li>
                </ul>
            </li>
            </section>

    <section id="">
        <h3 class="mt40 mb20 border_l">保証について</h3>
        <ul class="accordion">
            <li>
                <p class="ac">イヤホンを紛失してしまった。<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li>
                        <p>紛失したり、落下などの予期せぬ事故によって壊れてしまった場合など、保証期間内に一回限り、下記金額をご負担いただく事で、新品への交換、又は代替品のご提供をいたします。詳細に関しては下記リンクをご参照ください。</p>
                        <p>[交換保証サービスのご案内]：<a href="{{ route('compensation') }}"> http://aviot.jp/compensation/</a></p>
                    </li>
                </ul>
            </li>

            <li>
                <p class="ac">充電ケースを紛失してしまった。<i class="accordion_icon ifpc"><span></span><span></span></i></p>
                <ul class="inner">
                    <li>
                        <p>紛失したり、落下などの予期せぬ事故によって壊れてしまった場合など、保証期間内に一回限り、下記金額をご負担いただく事で、新品への交換、又は代替品のご提供をいたします。詳細に関しては下記リンクをご参照ください。</p>
                        <p>[交換保証サービスのご案内]：<a href="{{ route('compensation') }}"> http://aviot.jp/compensation/</a></p>
                    </li>
                </ul>
            </li>
        </ul>
    </ul>
    </section>
        
        
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