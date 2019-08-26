@extends('layouts.user_master')

@section('title', '防水性能について |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'waterproof')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 border_b mb20">防水性能について</h2>
    <section id="" class="mb20">
        <p class="mt20">AVIOTのイヤホンは全機種生活防水（IPX4）を取り付けており、日常生活における範囲内であれば気にすることなくAVIOTのイヤホンをお楽しみいただけます。</p>
        <p class="txtRed">※チャージングケースは非防水です。</p>
        <p>IPXとは防水規格で数字は防水規格の等級となります。等級が上がれば上がるほど防水の性能が上がります。</p>
    </section>

    <section class="mt10 IPX">
        <h3 class="border_l mb20">防水性能の種類</h3>
        <div class="mt10">
            <h4>IPX7</h4>
            <ul class="mt10">
                <li><img src="{{ asset('images/user/IPX7.png') }}" alt="IPX4"></li>
                <li>より高いレベルの防水。一時的（30分以内）なら、ある程度の浸水（1m未満）にも耐えられます。雨の中をランニングしたり、シャワーを浴びても大丈夫な防水レベルです。</li>
            </ul>
        </div>
        <div class="mt40">
            <h4>IPX5</h4>
            <ul class="mt10">
                <li><img src="{{ asset('images/user/IPX5.png') }}" alt="IPX5"></li>
                <li>あらゆる方向からの噴流水による有害な影響がない（防噴流形）、ゲリラ豪雨などにも耐えられるほどの防水性能です。</li>
            </ul>
        </div>
        <div class="mt40">
            <h4>IPX4</h4>
            <ul class="mt10">
                <li><img src="{{ asset('images/user/IPX4.png') }}" alt="IPX4"></li>
                <li>日常生活防水。あらゆる方向からの飛沫にも影響を受けにくい、防沫型。スポーツの汗やにわか雨などには十分な防水性能です。</li>
            </ul>
        </div>
    </section>
</div><!--/main-->
</div><!--/container-->
    
@endsection

@section('javascript-footer')
    
@endsection