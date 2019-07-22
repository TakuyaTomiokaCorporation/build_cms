@extends('layouts.admin')

@section('main')
    <div class="container jumbotron mt-5">
        <h1 class="text-center">製品の確認</h1>
    </div>
    <div class="container mt-5">
        <form action=" {{ route('product.store')}} " method="post" class="form-horizontal" enctype='multipart/form-data'>
            @csrf
            @method('POST')
            <input type="hidden" name="product_name" value="{{ $product_name }}">
            <input type="hidden" name="overview" value="{{ $overview }}">
            <input type="hidden" name="thumbnail" value="{{ $thumbnail }}">
            <input type="hidden" name="link_detail" value="{{ $link_detail }}">
            <input type="hidden" name="link_ec" value="{{ $link_ec }}">
            <input type="hidden" name="waterproof" value="{{ $waterproof }}">
            <input type="hidden" name="transmission_method" value="{{ $transmission_method }}">
            <input type="hidden" name="category" value="{{ $category }}">
            <input type="hidden" name="noise_canceling" value="{{ $noise_canceling }}">
            <input type="hidden" name="compression_method" value="{{ $compression_method }}">
            <input type="hidden" name="sound_method" value="{{ $sound_method }}">
            {{-- <input type="hidden" name="transmission_method" value="{{ $color }}"> --}}

            <div class="row">
                <label class="col-sm-4">製品名</label>
                <div class="col-sm-8">{{ $product_name }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">概要</label>
                <div class="col-sm-8">{{ $overview }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">サムネイル画像</label>
                <div class="col-sm-8">{{  $thumbnail }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">製品詳細ページのリンク</label>
                <div class="col-sm-8">{{  $link_detail }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">ECページへのリンク</label>
                <div class="col-sm-8">{{  $link_ec }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">防水企画</label>
                <div class="col-sm-8">{{  $waterproof }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">接続方式</label>
                <div class="col-sm-8">{{  $transmission_method }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">カテゴリー</label>
                <div class="col-sm-8">{{  $category }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">ノイズキャンセリング機能</label>
                <div class="col-sm-8">{{  $noise_canceling }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">音声圧縮方式</label>
                <div class="col-sm-8">{{  $compression_method }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">音声出力方式</label>
                <div class="col-sm-8">{{  $sound_method }}</div>
            </div>
            {{-- <div class="row">
                <label class="col-sm-4">カラー</label>
                <div class="col-sm-8">
                    @for($i = 0; $i < $loop->count; $i++)
                    {{ $color[i] }}
                    @endfor
                    {{-- $i < count($product_confirm->color) 
                </div>--}}
                <input type="submit" name="button" value="登録" class="btn btn-primary btn-lg">
            </div> 
            
        </form>
        </div>
@endsection