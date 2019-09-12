@extends('layouts.user_master')

@section('title', '技術情報 |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('javascript-head')

@endsection

@section('body_id', 'codec')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 border_b mb20">技術情報</h2>
    
    <section id="" class="mb20">
        <h3 class="mt40 mb20 border_l">コーデック</h3>
            <div class="index_codec">
                <p>コーデックとはBluetoothの限られた帯域を使って音声信号を無線伝送する為の音声圧縮変換方式のことです。弊社のイヤホンが使用する代表的なコーデックにはSBC、AAC、aptX、aptX HDの4種類があります。</p>
                <p class="mt20 alc"><a href="{{ route('codec') }}" class="btn_Gray">詳しくはこちら</a></p>
            </div>

            <h3 class="mt40 mb20 border_l">Qualcomm</h3>
            <div class="mt20 index_qualcomm">
                <p>Qualcomm社のSoC、SoCとはSystem-on-a-chipの略称で、プロセッサコアや様々な機能を集積、連携してシステムとして機能するよう設計集積回路のことです。</p>
                <p class="mt20 alc"><a href="{{ route('qualcomm') }}" class="btn_Gray">詳しくはこちら</a></p>
            </div>

            <h3 class="mt40 mb20 border_l">防水性能</h3>
            <div class="mt20 index_waterproof">
                <p>AVIOTのイヤホンは全機種生活防水（IPX4）に対応しており、日常生活における範囲内であれば汗や雨など気にすることなくお使いいただけます。</p>
                <p class="mt20 alc"><a href="{{ route('waterproof') }}" class="btn_Gray">詳しくはこちら</a></p>
            </div>
    </section>
    
    

</div><!--/main-->
</div><!--/container-->

    
@endsection

@section('javascript-footer')
    
@endsection