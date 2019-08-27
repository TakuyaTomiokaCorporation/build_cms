@extends('layouts.user_master')

@section('title', '製品一覧 |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('body_id', '')

@section('javascript-in-head')

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

@endsection

@section('css')

<style type="text/css">
    ul.product_category li {
        display: inline-block;
    }
    
    ul.product_category li a {
        display: block;
        background: #000;
        color: #fff;
        padding: 10px;
    }
    
    ul.product_category li a:hover {
        background: #555;
    }
    
    
</style>
    
@endsection

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
    <h2 class="pt20 border_b mb20">製品一覧</h2>
    <section>
        <ul class="product_category">
            <li><a href="{{ route('product.show') }}">全商品</a></li>
            <li><a href="{{ route('wireless') }}">完全ワイヤレス</a></li>
            <li><a href="{{ route('beginner') }}">エントリーモデル</a></li>
            <li><a href="{{ route('hybrid') }}">ハイブリッドドライバー</a></li>
            <li><a href="{{ route('aptxhd') }}">aptX HD</a></li>
        </ul>
    </section>
    
    <section class="product_content">
        <div class="flex">
        @foreach ($continuedProducts as $continuedProduct)
            <ul class="product_box mt20 mb20">
                <li class="alc"><a href="{{ $continuedProduct->link_detail }}">
                    <img src="{{ asset('images/thumbnails') }}/{{ $continuedProduct->thumbnail }}" alt="{{ $continuedProduct->product_name }}">
                </a></li>
                <li class="mt10 mb10"><h3>
                    <a href="{{ $continuedProduct->link_detail }}">{{ $continuedProduct->product_name }}</a>
                </h3></li>
                <li>
                    <p class="fs12">{!! Str::limit($continuedProduct->overview, 120) !!}</p>
                </li>
                <li class="alc mt20">
                    <a href="{{ $continuedProduct->link_detail }}" class="btn_product">詳細をみる</a>
                </li>
            </ul>
            @endforeach
        </div>
    </section>

    <div id="app">
    {{-- <p class="alc"><button v-on:click="isShown" class="btn_buy" >もっとみる</button></p> --}}
    <transition>
    <section class="product_content" v-show="show">
        <h2 class="border_b">生産完了製品</h2>
        <div class="flex">
        @foreach ($discontinuedProducts as $discontinuedProduct)
            <ul class="product_box mt20 mb20">
                <li class="alc"><a href="{{ $discontinuedProduct->link_detail }}">
                    <img src="{{ asset('images/thumbnails') }}/{{ $discontinuedProduct->thumbnail }}" alt="{{ $discontinuedProduct->product_name }}">
                </a></li>
                <li class="mt10 mb10"><h3>
                    <a href="{{ $discontinuedProduct->link_detail }}">{{ $discontinuedProduct->product_name }}</a>
                </h3></li>
                <li>
                    <p class="fs12">{!! Str::limit($discontinuedProduct->overview, 120) !!}</p>
                </li>
                <li class="alc mt20">
                    <a href="{{ $discontinuedProduct->link_detail }}" class="btn_product">詳細をみる</a>
                </li>
            </ul>
        @endforeach
        </div>
    </section>
    </transition>
    <p class="alc"><button v-on:click="isShown" class="btn_buy" >もっとみる</button></p>
    </div>
    
    </article>
        
</div><!--/main-->
</div><!--/container-->

@endsection

@section('javascript-footer')

<script>
    new Vue({
        el: '#app',
        data: {
            show:false
        },
        methods: {
            isShown: function(){
                this.show = !this.show
            }
        }
    });
</script>

<style scoped>

.v-enter-active, .v-leave-active {
  transition: opacity 1.5s
}

.v-leave-active {
  transition: opacity 0.5s
}

.v-enter, .v-leave-to {
  opacity: 0
}

</style>
    
@endsection