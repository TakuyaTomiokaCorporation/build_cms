@extends('layouts.user_master')

@section('title', '製品一覧 |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('body_id', 'product')

@section('javascript-in-head')

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

@endsection

@section('css')

<style type="text/css">
   #product .accordion p.ac { 
        padding: 120px 10px;
        
        color: #fff;
        }

    #product .product_content a { color: #fff; }
    #product .product_content h3 a { color: #222; }

    #product .TWbg { background: url({{ url('images/products/TWbg.jpg') }}) center center no-repeat; }
    #product .Wbg { background: url({{ url('images/products/Wbg.jpg') }}) center center no-repeat; }
    #product .Compleatbg { background: #666666; }
    
    
</style>
    
@endsection

@section('content')

<div id="container" class="both">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
    <h2 class="pt20 mb20">製品一覧</h2>
    <section>
        <div>
            <ul class="accordion">
                <li>
                    <p class="ac alc TWbg">TRUE WIRELESS EARPHONE</p>
                    <ul class="inner">
                        <li>
                            <p>
                                <div class="flex product_content">
                                    @foreach ($trueWirlessProducts as $trueWirlessProduct)
                                    <div class="product_box mt20 mb20">
                                        <p><a href="{{ $trueWirlessProduct->link_detail }}"><img src="{{ asset('images/thumbnails') }}/{{ $trueWirlessProduct->thumbnail }}" alt="{{ $trueWirlessProduct->product_name }}"></a></p>
                                        <h3><a harf="{{ $trueWirlessProduct->link_detail }}">{{ $trueWirlessProduct->product_name }}</a></h3>
                                        <hr>
                                        <span>{!! Str::limit($trueWirlessProduct->overview, 120) !!}</span>
                                        <a href="{{ $trueWirlessProduct->link_detail }}" class="btn_product alc mt10">詳細をみる</a>
                                    </div>
                                    @endforeach
                                </div>
                            </p>
                        </li>
                    </ul>
                </li>
    
                <li class="mt20">
                    <p class="ac alc Wbg">WIRELESS EARPHONE</p>
                    <ul class="inner">
                        <li>
                            <div class="flex product_content">
                                @foreach ($wirlessProducts as $wirlessProduct)        
                                <div class="product_box mt20 mb20">
                                    <p><a href="{{ $wirlessProduct->link_detail }}"><img src="{{ asset('images/thumbnails') }}/{{ $wirlessProduct->thumbnail }}" alt="{{ $wirlessProduct->product_name }}"></a></p>
                                    <h3><a harf="{{ $wirlessProduct->link_detail }}">{{ $wirlessProduct->product_name }}</a></h3>
                                    <hr>
                                    <span>{!! Str::limit($wirlessProduct->overview, 120) !!}</span>
                                    <a href="{{ $wirlessProduct->link_detail }}" class="btn_product alc mt10">詳細をみる</a>
                                </div>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </li>
    
                <li class="mt20">
                    <p class="ac alc Compleatbg">生産完了製品</p>
                    <ul class="inner">
                        <li>
                            <div class="flex product_content">
                                @foreach ($discontinuedProducts as $discontinuedProduct)
                                <div class="product_box mt20 mb20">
                                    <p><a href="{{ $discontinuedProduct->link_detail }}"><img src="{{ asset('images/thumbnails') }}/{{ $discontinuedProduct->thumbnail }}" alt="{{ $discontinuedProduct->product_name }}"></a></p>
                                    <h3><a harf="{{ $discontinuedProduct->link_detail }}">{{ $discontinuedProduct->product_name }}</a></h3>
                                    <hr>
                                    <span>{!! Str::limit($discontinuedProduct->overview, 120) !!}</span>
                                    <a href="{{ $discontinuedProduct->link_detail }}" class="btn_product alc mt10">詳細をみる</a>
                                </div>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>
    </article>
</div><!--/main-->
</div><!--/container-->

@endsection

@section('javascript-footer')

<script type="text/javascript">
    $(function(){

    //.accordionの中のp要素がクリックされたら
    $('.accordion p').click(function(){
        $(this).next().slideToggle();   
        // activeが存在する場合
        if ($(this).children(".accordion_icon").hasClass('active')) {           
            // activeを削除
            $(this).children(".accordion_icon").removeClass('active');              
        }
        else {
            // activeを追加
            $(this).children(".accordion_icon").addClass('active');         
        }   
        //クリックされた.accordionの中のp要素に隣接するul要素が開いたり閉じたりする。
    });

        //.accordionの中の.innerの中のli要素の中のp要素がクリックされたら
    $('.accordion .inner li p').click(function() {

        //クリックされた.accordionの中の.innerの中のli要素の中のp要素の子要素のul要素が開いたり閉じたりする。
        $(this).children('ul').slideToggle();

  });
});
</script>
    
@endsection