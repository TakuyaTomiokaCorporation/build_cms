@extends('layouts.user_master')

@section('title', '交換保証サービスのご案内 |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'compensation')

@section('content')
<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 border_b mb20">交換保証サービスのご案内</h2>
    <div class="read">
        <p>弊社下記完全ワイヤレスイヤホンをご使用の際、紛失したり、落下などの予期せぬ事故によって壊れてしまった場合など、 保証期間内に一回限り、下記金額をご負担いただく事で、新品への交換、又は代替品のご提供をいたします。</p>
    </div>

    <section class="compensation_price mt20">
        <h3 class="border_l mb20">ご負担いただく金額</h3>
        <table class="m_auto mt10">
            <tr>
                <th></th>
                <th>イヤホン本体</th>
                <th>充電ケース</th>
            </tr>
            {{-- <tr>
                <td>TE-D01a</td>
                <td>4,320円</td>
                <td>5,400円</td>
            </tr>
            <tr>
                <td>TE-D01b</td>
                <td>7,380円</td>
                <td>8,200円</td>
            </tr> --}}
            <tr>
                <td>TE-D01c</td>
                <td>3,780円</td>
                <td>4,860円</td>
            </tr>
            <tr>
                <td>TE-D01d</td>
                <td>5,400円</td>
                <td>6,600円</td>
            </tr>
            <tr>
                <td>TE-D01e</td>
                <td>4,180円</td>
                <td>5,080円</td>
            </tr>
            <tr>
                <td>TE-D01d-kzn</td>
                <td>5,800円</td>
                <td>7,080円</td>
            </tr>
            <tr>
                <td>TE-D01h</td>
                <td>4,160円</td>
                <td>5,080円</td>
            </tr>
            <tr>
                <td>TE-D01g</td>
                <td>4,000円</td>
                <td>4,880円</td>
            </tr>
            <tr>
                <td>TE-BD21f</td>
                <td>7,880円</td>
                <td>9,630円</td>
            </tr>
            <tr>
                <td>TE-BD21f-pnk</td>
                <td>8,950円</td>
                <td>10,940円</td>
            </tr>
        </table>
        <p class="txtRed mt20">※金額は全て税込み、送料込みになります。</p>
        <p class="txtRed mt10">※TE-D01a・TE-D01bに関しましては生産完了製品となっておりますので、交換保証サービスの対象外となっております。ご不便をお掛け致しますがご理解のほど何卒宜しくお願い申し上げます。</p>
    </section>

    <section class="mt40">
        <h3 class="border_l mb20">交換保証について</h3>
        <p>イヤホンにつきましては、ペアでご使用いただいていたもう片側のイヤホン本体を、充電ケースについては、その損壊したものを弊社にご返送＊いただく事を前提に、保証期間内に一回限り、上記金額をご負担いただくことで、それぞれ新品（イヤホン本体ペア、又は充電ケース）と交換させていただきます。<span class="txtRed">*弊社への送料はご負担願います。</span></p>
            <p>尚、イヤホン本体に関して、片側だけでなく両方を紛失された場合は補償対象外となります。</p>
    </section>

    <section class="mt40">
        <h3 class="border_l mb20">手続きの流れについて</h3>
        <p>ユーザー登録の後、弊社からお送りしたメールに詳細を記載しておりますので、そちらをどうぞご一読ください。もし届いていない場合には、弊社までご一報ください。</p>
    </section>

    <section class="mt40">
        <h3 class="border_l mb20">自然故障について</h3>
        <p>通常使用で発生した製品の不具合につきましては、当交換保障でなく、通常の製品保証となります。保証はご購入日から一年間です。（ユーザー登録をいただきますと、3か月延長いたします）お求めいただいたご販売店様にお持ち込みいただくか、弊社カスタマーサポートにご連絡ください。</p>
    </section>
</div><!--/main-->
</div><!--/container-->
@endsection

@section('javascript-footer')
    
@endsection