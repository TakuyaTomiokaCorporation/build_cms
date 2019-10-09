@extends('layouts.user_master')

@section('title', '山本敦 |')

@section('description', 'アーティスト・製品ごとのインタビューページ')

@section('css')

<style type="text/css">

</style>

@endsection

@section('body_id', 'interview')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 mb20">VGP審査員　山本 敦が語る</h2>

    <section>
            <div class=""><img src="{{ asset('images/interview/yamamoto.jpg') }}" class=""></div>
            <div class="mt20">
                <h3 id="tebd21f">TE-BD21f</h3>
                <h4 class="mt10">最先端の技術を惜しまず投入</h4>
                <p class="mt10">AVIOTはオーディオのスペシャリストたちが立ち上げたブランドです。製品にも最先端の技術が惜しみなく詰め込まれていますが、それをこれ見よがしにひけらかすことなく、長く安心して使えるイヤホンを作ってきた実現力の高さに好感が持てます。</p>
                <p class="mt10">本機もコンパクトで接続性能が安定しているし、繊細さと力強さを巧みに描き分けるサウンドも文句なし。左右イヤホンを繋げられるシリコンストラップはスポーツシーンにとても役立ちそうです。</p>
            </div>
        <p class="alc mt20"><a href="{{ route('tebd21f') }}" class="btn_Blk">製品詳細はこちら</a></p>
    </section>


</div><!--/main-->
</div><!--/container-->
    



@endsection

@section('javascript-footer')
    
@endsection