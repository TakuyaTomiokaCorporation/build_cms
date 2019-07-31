@extends('layouts.user_master')

@section('title', '取扱説明書ダウンロード |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('fonts')
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
@endsection

@section('body_id', 'manual')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 border_b mb20">取扱説明書ダウンロード</h2>
    <div class="read">
        <p>各製品の取扱説明書をダウンロードしてご覧いただけます。<br>
        取扱説明書のダウンロードサービスは、下記の利用規約にご同意いただいた上でご利用ください。</p>
        <p>取扱説明書の内容を複製したり、書き換えたりすることはできません。</p>
        <p class="mt10">公開されている取扱説明書は、原則として発売された当初のものを掲載していますが、予告なく変更することがあります。<br>
        お手持ちの取扱説明書と異なる場合があります。</p>
        <p class="mt10">※取扱説明書をご利用いただくには『<a href="https://get.adobe.com/reader/?loc=jp" target="_brank">AdobeReader</a>』が必要です。<br>
            お持ちでない場合は、<a href="https://get.adobe.com/reader/?loc=jp" target="_brank">こちら</a>からダウンロードしてください。</p>
    </div>
    <p class="mt10 mb10"><a href="{{ route('movies') }}" class="btn_Blk">ペアリング動画はこちら</a></p>
    
        <!--<section class="manual_product">
                <div class="manual_photo"><img src="../product/WE-D01b/img/WE-D01b_02.png"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">TE-BD21f-pnk</h3>
                    <p><a href="./pdf/" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>
    
        <section class="manual_product">
                <div class="manual_photo"><img src="../product/WE-D01b/img/WE-D01b_02.png"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">TE-BD21f</h3>
                    <p><a href="./pdf/" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>-->
        
        <section class="manual_product">
                <div class="manual_photo"><img src="{{ asset('images/manuals/WE-BD21d.png') }}"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">WE-BD21d</h3>
                    <p><a href="{{ asset('pdf/WE-BD21d_v1.01.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>
    
        <section class="manual_product">
                <div class="manual_photo"><img src="{{ asset('images/manuals/TE-D01g.png') }}"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">TE-D01g</h3>
                    <p><a href="{{ asset('pdf/TE-D01g_v1.01.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>
    
        <section class="manual_product">
                <div class="manual_photo"><img src="{{ asset('images/manuals/TE-D01d.png') }}"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">TE-D01d</h3>
                    <p><a href="{{ asset('pdf/TE-D01d_v1.03.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>
    
        <section class="manual_product">
                <div class="manual_photo"><img src="{{ asset('images/manuals/TE-D01a.png') }}"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">TE-D01a</h3>
                    <p><a href="{{ asset('pdf/TE-D01a_v1.01.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>
    
        <section class="manual_product">
                <div class="manual_photo"><img src="{{ asset('images/manuals/TE-D01b.png') }}"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">TE-D01b</h3>
                    <p><a href="{{ asset('pdf/TE-D01b_v1.02.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>
    
        <section class="manual_product">
                <div class="manual_photo"><img src="{{ asset('images/manuals/TE-D01c.png') }}"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">TE-D01c</h3>
                    <p><a href="{{ asset('pdf/TE-D01c_v1.01.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>
    
        <section class="manual_product">
                <div class="manual_photo"><img src="{{ asset('images/manuals/TE-D01d-kzn.png') }}"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">TE-D01d-kzn</h3>
                    <p><a href="{{ asset('pdf/TE-D01d-kzn_v1.01.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>
    
        <section class="manual_product">
                <div class="manual_photo"><img src="{{ asset('images/manuals/TE-D01e.png') }}"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">TE-D01e</h3>
                    <p><a href="{{ asset('pdf/TE-D01e_v1.02.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>
    
        <section class="manual_product">
                <div class="manual_photo"><img src="{{ asset('images/manuals/TE-D01h.png') }}"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">TE-D01h</h3>
                    <p><a href="{{ asset('pdf/TE-D01h_v1.01.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>
    
        <section class="manual_product">
                <div class="manual_photo"><img src="{{ asset('images/manuals/WE-D01c-kzn.png') }}"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">WE-D01c-kzn</h3>
                    <p><a href="{{ asset('pdf/WE-D01c-kzn_v1.01.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>
    
        <section class="manual_product">
                <div class="manual_photo"><img src="{{ asset('images/manuals/WE-D01c.png') }}"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">WE-D01c</h3>
                    <p><a href="{{ asset('pdf/WE-D01c_v1.01.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>
    
        <section class="manual_product">
                <div class="manual_photo"><img src="{{ asset('images/manuals/WE-D01b.png') }}"></div>
                <div class="manual_pdf">
                    <h3 class="mt20 mb20">WE-D01b</h3>
                    <p><a href="{{ asset('pdf/WE-D01b_v1.01.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> 説明書ダウンロード</a></p>
                </div>
        </section>
    
        <div class="both alc">
        <a href="{{ route('product.show') }}" class="btn_buy">製品一覧へ</a>		
        </div>
    
    
</div><!--/main-->
</div><!--/container-->
    
@endsection

@section('javascript-footer')
    
@endsection