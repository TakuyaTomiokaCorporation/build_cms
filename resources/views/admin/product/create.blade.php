@extends('layouts.admin')

@section('css')
<style>
    .req{
        color : #e45353;
    };
</style>
@endsection

@section('main')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">製品の登録</h1>
    </div>
    <div class="container">
        <a href="{{ route('home')}}" class="btn btn-outline-primary">トップ</a>
        <a href="{{ route('product')}}" class="btn btn-outline-secondary ml-3">戻る</a>
    </div>
    <div class="container mt-5">
        <form  class="form-horizontal" action="{{ route('product.confirm') }}" method="POST" enctype='multipart/form-data'>{{-- enctype="multipart/form-data" --}}
        @csrf
        @method('PATCH')
        <div class="form-group row">
            <label class="control-label col-sm-2" for="product_name">製品名<span class="req">*</span></label>
            <input class="col-sm-10 form-control-lg" name="product_name" type="text" id="product_name" value="{{ old('product_name') }}" required>
        </div>
        <hr>
        <p>概要<span class="req">*</span></p>
            <textarea class="form-control" name="overview" id="summary-ckeditor" rows="5" placeholder="製品概要を入力してください。" required></textarea>
        <hr>
        <p>画像</p>
        <div class="">
            <input type="file" name="thumbnail"> 
        </div>
        <hr>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="link_detail">製品詳細ページのリンク</label>
            <input class="col-sm-10 form-control-lg" name="link_detail" type="text" id="link_detail" value="{{ old('link_detail') }}">
        </div>
        <hr>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="link_ec">ECページのリンク</label>
            <input class="col-sm-10 form-control-lg" name="link_ec" type="text" id="link_ec" value="{{ old('link_ec') }}">
        </div>
        <hr>
        <p>接続方式</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="transmission_method" id="wireless" value="ワイヤレス" {{ old('transmission_method') == "ワイヤレス" ? 'checked' : '' }}>
            <label class="form-check-label" for="wireless">ワイヤレス</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="transmission_method" id="absolute_wireless" value="完全ワイヤレス" {{ old('transmission_method') == "完全ワイヤレス" ? 'checked' : '' }}>
            <label class="form-check-label" for="absolute_wireless">完全ワイヤレス</label>    
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="transmission_method" id="wire" value="有線" {{ old('transmission_method') == "有線" ? 'checked' : '' }}>
            <label class="form-check-label" for="wire">有線</label>
        </div>
        <hr>
        <p>防水規格</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="waterproof" id="ipx4" value="IPX4" {{ old('waterproof') == "IPX4" ? 'checked' : '' }}>
            <label class="form-check-label" for="ipx4">IPX4</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="waterproof" id="ipx5" value="IPX5" {{ old('waterproof') == "IPX5" ? 'checked' : '' }}>
            <label class="form-check-label" for="ipx5">IPX5</label>    
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="waterproof" id="ipx7" value="IPX7" {{ old('waterproof') == "IPX7" ? 'checked' : '' }}>
            <label class="form-check-label" for="ipx7">IPX7</label>
        </div>
        <hr>
        <p>カテゴリー</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="sports" value="スポーツ向け" {{ old('category') == "スポーツ向け" ? 'checked' : '' }}>
            <label class="form-check-label" for="sports">スポーツ向け</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="end" value="エントリーモデル" {{ old('category') == "エントリーモデル" ? 'checked' : '' }}>
            <label class="form-check-label" for="end">エントリーモデル</label>    
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="highend" value="ハイエンド" {{ old('category') == "ハイエンド" ? 'checked' : '' }}>
            <label class="form-check-label" for="highend">ハイエンド</label>
        </div>
        <hr>
        <p>ノイズキャンセリング機能</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="noise_canceling" id="true" value="1" {{ old('noise_canceling') == "1" ? 'checked' : '' }}>
            <label class="form-check-label" for="true">あり</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="noise_canceling" id="false" value="0" {{ old('noise_canceling') == "0" ? 'checked' : '' }}>
            <label class="form-check-label" for="false">なし</label>
        </div>
        <hr>
        <p>音声圧縮方式</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="compression_method" id="x" value="aptX" {{ old('compression_method') == "aptX" ? 'checked' : '' }}>
            <label class="form-check-label" for="x">aptX</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="compression_method" id="hd" value="aptX HD" {{ old('compression_method') == "aptX HD" ? 'checked' : '' }}>
            <label class="form-check-label" for="hd">aptX HD</label>
        </div>
        <hr>
        <p>音声出力方式</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sound_method" id="daynamic" value="ダイナミック型" {{ old('sound_method') == "ダイナミック型" ? 'checked' : '' }}>
            <label class="form-check-label" for="daynamic">ダイナミック型</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sound_method" id="hybrid" value="ハイブリッド型" {{ old('sound_method') == "ハイブリッド型" ? 'checked' : '' }}>
            <label class="form-check-label" for="hybrid">ハイブリッド型</label>
        </div>
        <hr>
        <p>発売日<span class="req">*</span></p>
        <input id="date" type="date" name="release_date" required>
        <hr>
        <p>公開設定<span class="req">*</span></p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="release" id="release" value="1" required {{ old('release') == "1" ? 'checked' : '' }}>
            <label class="form-check-label" for="release">公開</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="release" id="close" value="0" {{ old('release') == "0" ? 'checked' : '' }}>
            <label class="form-check-label" for="close">非公開</label>    
        </div>
        <hr>
        <p>廃盤設定<span class="req">*</span></p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="discontinued" id="discontinued" value="1" required {{ old('discontinued') == "1" ? 'checked' : '' }}>
            <label class="form-check-label" for="discontinued">廃盤</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="discontinued" id="continued" value="0" {{ old('discontinued') == "0" ? 'checked' : '' }}>
            <label class="form-check-label" for="continued">現行品</label>
        </div>
        
        {{-- <p>カラー</p>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="color" value="黒">
            <label class="form-check-label" for="color">黒</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="white" value="白">
            <label class="form-check-label" for="white">白</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="silver" value="シルバー">
            <label class="form-check-label" for="silver">シルバー</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="red" value="赤">
            <label class="form-check-label" for="red">赤</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="blue" value="青">
            <label class="form-check-label" for="blue">青</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="pink" value="ピンク">
            <label class="form-check-label" for="pink">ピンク</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="parple" value="紫">
            <label class="form-check-label" for="parple">紫</label>
        </div> --}}

        {{-- <p>音声圧縮方式</p>
            チェックボックスで選択できるようにする。
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="color" value="黒">
            <label class="form-check-label" for="color">黒</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="white" value="白">
            <label class="form-check-label" for="white">白</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="silver" value="シルバー">
            <label class="form-check-label" for="silver">シルバー</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="red" value="赤">
            <label class="form-check-label" for="red">赤</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="blue" value="青">
            <label class="form-check-label" for="blue">青</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="pink" value="ピンク">
            <label class="form-check-label" for="pink">ピンク</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="parple" value="紫">
            <label class="form-check-label" for="parple">紫</label>
        </div> --}}
        <hr>
        <button type="submit" name="submit" class="btn btn-primary mb-5">確認</button>
    </form>
    </div>
@endsection

@section('footer-js')

<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
    
@endsection