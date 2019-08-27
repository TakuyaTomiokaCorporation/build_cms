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
            <li><a href="">エントリーモデル</a></li>
            <li><a href="">ハイブリッドドライバー</a></li>
            <li><a href="">aptX HD</a></li>
        </ul>
    </section>
    
    <section class="product_content">
        <div class="flex">
        @foreach ($wirelessProducts as $wirelessProduct)
            <ul class="product_box mt20 mb20">
                <li class="alc"><a href="{{ $wirelessProduct->link_detail }}">
                    <img src="{{ asset('images/thumbnails') }}/{{ $wirelessProduct->thumbnail }}" alt="{{ $wirelessProduct->product_name }}">
                </a></li>
                <li class="mt10 mb10"><h3>
                    <a href="{{ $wirelessProduct->link_detail }}">{{ $wirelessProduct->product_name }}</a>
                </h3></li>
                <li>
                    <p class="fs12">{!! Str::limit($wirelessProduct->overview, 120) !!}</p>
                </li>
                <li class="alc mt20">
                    <a href="{{ $wirelessProduct->link_detail }}" class="btn_product">詳細をみる</a>
                </li>
            </ul>
            @endforeach
        </div>
    </section>
    
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