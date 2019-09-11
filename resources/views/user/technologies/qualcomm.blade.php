@extends('layouts.user_master')

@section('title', 'Qualcomm QCC3026/3020について |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'qualcomm')

@section('content')
<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 border_b mb20">Qualcomm QCC3026/3020について</h2>
    <section id="" class="mb20">
        <p class="mt20">Qualcomm社のSoC、SoCとはSystem-on-a-chipの略称で、プロセッサコアや様々な機能を集積、連携してシステムとして機能するよう設計集積回路のこと。<br>
        QCC3026/3020はBluetooth5.0やバッテリー残量に応じてマスターを切り替えるロールスワッピング機能、高性能DSPによる高いオーディオ性能、圧縮率の低いaptXコーデック、電力消費の最適化による長時間の連続再生、高い接続安定性などワイヤレスイヤホンにとって有用な次世代SoCです。</p>
    </section>

    <section class="mt40">
        <h3 class="border_l">ロールスワッピング機能について</h3>
        <p class="mt10">従来の完全ワイヤレスイヤホンはほとんどの製品が左右のどちらかが親機、子機という関係性で設計されており、親機側の負担が大きいため先にバッテリー切れを起こすことが運用時間の短さに繋がっていました。</p>
        <p>ロールスワッピング機能は、左右両方のイヤホンが親機にも子機にもなり、なおかつ起動時のバッテリー残量に応じて親機を指定することで駆動時間を最適化する仕組みです。</p>
    </section>

    <section class="mt40">
        <h3 class="border_l">True Wireless Stereo Plusについて</h3>
        <p class="mt10">QCC3026/3020実装モデルにはデバイスから親機側イヤホンを経由して子機側までデータをブリッジして伝送するTrue Wireless Stereo(TWS)方式に加え、左右イヤホンへそれぞれデータを伝送するTrue Wireless Stereo Plus(TWS Plus)にも対応しています。<br>
        この方式はTWSよりも接続安定性に優れ、レイテンシも低くなることが期待される次世代の接続方式です。（接続にはデバイス側もTWS Plusに対応している必要があります）</p>
    </section>
    
    
</div><!--/main-->
</div><!--/container-->
@endsection

@section('javascript-footer')
    
@endsection