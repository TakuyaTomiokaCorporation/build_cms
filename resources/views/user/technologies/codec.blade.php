@extends('layouts.user_master')

@section('title', 'コーデックについて |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'codec')

@section('content')
<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 border_b mb20">コーデックについて</h2>
    <section id="" class="mb20">
        <p class="mt20">コーデックとはBluetoothの限られた帯域を使って音声信号を無線伝送する為の音声圧縮変換方式のことです。<br>
        弊社のイヤホンが使用する代表的なコーデックにはSBC、AAC、aptX、aptX HDの4種類があります。 </p>
        <p>Bluetoothイヤホンの力を最大限に発揮するには同じコーデックに対応している必要があります。</p>
        <p class="mt10 alc"><img src="{{ asset('images/user/codec_works.png') }}" alt="コーデックの説明"></p>
    </section>

    <section class="mt20">
        <h3 class="border_l mb20">コーデックの種類</h3>
        <dl>
            <dt class="bold mt10 both"></dt>
            <dd class="fll codec_logo mt10 mb20 alc"><img src="{{ asset('images/user/logo_aptXHD.png') }}"></dd>
            <dd class="codec_txt mt10">最大48kHz/24bitで、44.1kHz/16bitのCD音質をも上回るハイレゾオーディオ信号をワイヤレスで伝送できるaptXの上位コーデックです。元々はプロオーディオ向けに開発された技術ですが、これによりハイレゾ音源をワイヤレスイヤホンでもより気軽に楽しめるようになりました。</dd>

            <dt class="bold mt10 both"></dt>
            <dd class="fll codec_logo mt10 mb20 alc"><img src="{{ asset('images/user/logo_aptX.png') }}"></dd>
            <dd class="codec_txt mt10">CSR社（現Qualcomm社）が開発した圧縮技術です。SBCより圧縮レベルが低いため、情報量が多く高音質です。標準コーデックに比べ遅延が少ないのも特徴です。</dd>

            <dt class="bold mt10 both"></dt>
            <dd class="fll codec_logo logo_small mt10 mb20 alc"><img src="{{ asset('images/user/logo_AAC.png') }}"></dd>
            <dd class="codec_txt mt10">iOS対応機器、つまりアップル社製品で使われているコーデック。Advanced Audio Codingの略です。SBCより圧縮レベルが低いため、情報量が多く、より高音質だと言われています。 </dd>
            

            <dt class="bold mt10 both"></dt>
            <dd class="fll codec_logo logo_small mt10 mb20 alc"><img src="{{ asset('images/user/logo_SBC.png') }}"></dd>
            <dd class="codec_txt mt10">Bluetooth機器が標準で使用するコーデック。Subband Codecの略です。音声を扱う全てのBluetooth機器が対応しています。</dd>
        </dl>
    </section>
</div><!--/main-->
</div><!--/container-->
@endsection

@section('javascript-footer')
    
@endsection