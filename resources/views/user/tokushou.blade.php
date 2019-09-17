@extends('layouts.user_master')

@section('title', '特定商取引法に基づく表記について |')

@section('description', '特定商取引法に基づく表記について')

@section('content')
<div id="container" class="both mb60">
    <div id="" class="main w1020 w98 m_auto" role="main">
        <h2 class="pt20 border_b mb20">特定商取引法に基づく表記について</h2>
        <!--製品仕様テーブル-->
    <div class="mt40">
        <table class="col-head-type1">
            <tr>
                <th>販売業者</th>
                <td>バリュートレード株式会社</td>
            </tr>
            <tr>
                <th>運営統括責任者</th>
                <td>土山裕和</td>
            </tr>
            <tr>
                <th>所在地</th>
                <td>【 本社 】<br> 
                    〒171-0022<br>
                    東京都豊島区南池袋2-14-10 瀬川池袋ビル3F<br>
                    営業時間：10：30～18：00（土日祝日除く）
                </td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>03-5927-1089</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>aviot@v-trade.co.jp</td>
            </tr>
            <tr>
                <th>屋号</th>
                <td>AVIOT Online Shop</td>
            </tr>
            <tr>
                <th>商品代金以外に必要な料金</th>
                <td>なし</td>
            </tr>
            <tr>
                <th>引渡し時期</th>
                <td>基本的にご注文の7日以内にお届けいたします。<br>
                    遅延する場合はメール等でお知らせいたします。
                </td>
            </tr>
            <tr>
                <th>返品について</th>
                <td>初期不良の場合、商品到着日より7日以内であれば返品・交換を承ります。<br>
                    また、返品・交換の際の送料はお客様でご負担下さい。    
                </td>
            </tr>
            <tr>
                <th>支払方法</th>
                <td>クレジットカード・銀行振込・コンビニ払い<br>
                    ※『カード決済』、『コンビニ決済』、『ネット銀行決済』 は、<br>
                    クレジットカード決済代行のイプシロン株式会社の決済代行システムを利用しております。<br>
                    ご注文後、イプシロン決済画面へ移動いたしますので決済を完了させてください。<br>
                    安心してお支払いをしていただくために、お客様の情報がイプシロンサイト経由で<br>
                    送信される際にはSSL(128bit)による暗号化通信で行い、クレジットカード情報は<br>
                    当サイトでは保有せず、同社で厳重に管理しております。<br>
                    なお、コンビニ決済の場合、払込票番号はイプシロンよりご案内がございます。<br>
                </td>
            </tr>
            <tr>
                <th>支払期限</th>
                <td>
                    クレジットカード決済<br>
                    <small> 支払時期：ご利用のカード会社ごとに異なります。</small><br>
                    コンビニ決済<br>
                    <small>支払時期：ご注文日から1週間以内にお支払いください。</small> <br>
                    銀行振込（バーチャル口座）<br>
                    <small>支払時期：ご注文日から30日以内にお支払いください。</small>
                </td>
            </tr>
        </table>
    </div><!--/main-->
</div><!--/container-->
@endsection

@section('javascript-footer')
    
@endsection