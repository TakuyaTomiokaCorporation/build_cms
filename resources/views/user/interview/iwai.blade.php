@extends('layouts.user_master')

@section('title', '岩井喬 |')

@section('description', 'アーティスト・製品ごとのインタビューページ')

@section('css')

<style type="text/css">

</style>

@endsection

@section('body_id', 'interview')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 mb20">ライフスタイル部会副座長　岩井 喬が語る</h2>

    <section>
            <div class=""><img src="{{ asset('images/interview/iwai.jpg') }}" class=""></div>
            <div class="mt20">
                <h3 id="tebd21f">TE-BD21f</h3>
                <h4 class="mt10">音の解像度版と鮮度感が際立つ</h4>
                <p class="mt10">クアルコムの最新チップ「QCC3020」を積んだ完全ワイヤレスイヤホンで、唯一のハイブリッド・トリプルドライバーである点が最大の特長といえるでしょう。</p>
                <p class="mt10">接続性の高さとバッテリー持続時間の長さも申し分なく、カメラレンズを彷彿とさせるデザインも独自性に溢れています。</p>
                <p class="mt10">クロスオーバーもパッシブな素子に頼り切らないアコースティックな設計の良さが生きており、完全ワイヤレスイヤホンとは思えない解像度と鮮度感を味わえます。ダイナミック型ドライバーによる制動性の良い低域の豊かさも魅力です。</p>
            </div>
        <p class="alc mt20"><a href="{{ route('tebd21f') }}" class="btn_Blk">製品詳細はこちら</a></p>
    </section>


</div><!--/main-->
</div><!--/container-->
    



@endsection

@section('javascript-footer')
    
@endsection