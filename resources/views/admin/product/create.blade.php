@extends('layouts.header_admin')

@section('content')
    <h1 class="text-center jumbotron">製品の登録</h1>
    <div class="container">
        <form  class="form-horizontal" action="{{ route('product.confirm') }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group row">
            <label class="control-label col-sm-2" for="product_name">製品名</label>
            <input class="col-sm-10 form-control-lg" name="product_name" type="text" id="product_name" value="{{ old('product_name') }}" required>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="overview">概要</label>
            <textarea class="form-control" name="overview" id="overview" rows="5" placeholder="製品概要を入力してください。"></textarea>
        </div>
        <div class="custom-file">
                <input type="file" name="thumbnail" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="thumbnail">ファイル選択...</label>
              </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="link_detail">製品詳細ページのリンク</label>
            <input class="col-sm-10 form-control-lg" name="link_detail" type="text" id="link_detail" value="{{ old('link_detail') }}" required>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="link_ec">ECページのリンク</label>
            <input class="col-sm-10 form-control-lg" name="link_ec" type="text" id="link_ec" value="{{ old('link_ec') }}" required>
        </div>
        <hr>
        <p>接続方式</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="transmission_method" id="transmission_method" value="ワイヤレス">
            <label class="form-check-label" for="transmission_method">ワイヤレス</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="transmission_method" id="transmission_method" value="完全ワイヤレス">
            <label class="form-check-label" for="transmission_method">完全ワイヤレス</label>    
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="transmission_method" id="transmission_method" value="有線">
            <label class="form-check-label" for="transmission_method">有線</label>
        </div>
        <hr>
        <p>防水規格</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="waterproof" id="waterproof" value="IPX4">
            <label class="form-check-label" for="transmission_method">IPX4</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="waterproof" id="waterproof" value="IPX5">
            <label class="form-check-label" for="transmission_method">IPX5</label>    
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="waterproof" id="waterproof" value="IPX7">
            <label class="form-check-label" for="transmission_method">IPX7</label>
        </div>
        <hr>
        <p>カテゴリー</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="category" value="スポーツ向け">
            <label class="form-check-label" for="transmission_method">スポーツ向け</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="category" value="エントリーモデル">
            <label class="form-check-label" for="transmission_method">エントリーモデル</label>    
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="category" value="ハイエンド">
            <label class="form-check-label" for="transmission_method">ハイエンド</label>
        </div>
        <hr>
        <p>ノイズキャンセリング機能</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="noise_canceling" id="noise_canceling" value="true">
            <label class="form-check-label" for="transmission_method">あり</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="noise_canceling" id="noise_canceling" value="false">
            <label class="form-check-label" for="transmission_method">なし</label>
        </div>
        <hr>
        <p>音声圧縮方式</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="compression_method" id="compression_method" value="aptX">
            <label class="form-check-label" for="transmission_method">aptX</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="compression_method" id="compression_method" value="aptX HD">
            <label class="form-check-label" for="transmission_method">aptX HD</label>
        </div>
        <hr>
        <p>音声出力方式</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sound_method" id="sound_method" value="ダイナミック型">
            <label class="form-check-label" for="transmission_method">ダイナミック型</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sound_method" id="sound_method" value="ハイブリッド型">
            <label class="form-check-label" for="transmission_method">ハイブリッド型</label>
        </div>
        <hr>
        <p>カラー</p>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="color" value="黒">
            <label class="form-check-label" for="color">黒</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="color" value="白">
            <label class="form-check-label" for="color">白</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="color" value="シルバー">
            <label class="form-check-label" for="color">シルバー</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="color" value="赤">
            <label class="form-check-label" for="color">赤</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="color" value="青">
            <label class="form-check-label" for="color">青</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="color" value="ピンク">
            <label class="form-check-label" for="color">ピンク</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="color[]" id="color" value="紫">
            <label class="form-check-label" for="color">紫</label>
        </div>
    </form>
    </div>
@endsection