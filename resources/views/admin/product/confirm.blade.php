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
            @isset($thumbnail)
            <input type="hidden" name="thumbnail" value="{{ $thumbnail }}">   
            @endisset
            @isset($link_detail)
            <input type="hidden" name="link_detail" value="{{ $link_detail }}">
            @endisset
            @isset($link_ec)
            <input type="hidden" name="link_ec" value="{{ $link_ec }}">
            @endisset
            @isset($waterproof)
            <input type="hidden" name="waterproof" value="{{ $waterproof }}">
            @endisset
            @isset($transmission_method)
            <input type="hidden" name="transmission_method" value="{{ $transmission_method }}">
            @endisset
            @isset($category)
            <input type="hidden" name="category" value="{{ $category }}">     
            @endisset
            @isset($noise_canceling)
            <input type="hidden" name="noise_canceling" value="{{ $noise_canceling }}">   
            @endisset
            @isset($compression_method)
            <input type="hidden" name="compression_method" value="{{ $compression_method }}">    
            @endisset
            @isset($sound_method)
            <input type="hidden" name="sound_method" value="{{ $sound_method }}">    
            @endisset
            @isset($release)
            <input type="hidden" name="release" value="{{ $release }}">    
            @endisset
            @isset($discontinued)
            <input type="hidden" name="discontinued" value="{{ $discontinued }}">    
            @endisset
            
            {{-- <input type="hidden" name="transmission_method" value="{{ $color }}"> --}}

            <div class="row">
                <label class="col-sm-4">製品名</label>
                <div class="col-sm-8">{{ $product_name }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">概要</label>
                <div class="col-sm-8">{!! $overview !!}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">サムネイル画像</label>
                @isset($thumbnail)
                <div class="col-sm-8">{{  $thumbnail }}</div>
                @endisset
            </div>
            <div class="row">
                <label class="col-sm-4">製品詳細ページのリンク</label>
                @isset($link_detail)
                <div class="col-sm-8">{{  $link_detail }}</div>
                @endisset
            </div>
            <div class="row">
                <label class="col-sm-4">ECページへのリンク</label>
                @isset($link_ec)
                <div class="col-sm-8">{{  $link_ec }}</div>
                @endisset
            </div>
            <div class="row">
                <label class="col-sm-4">防水企画</label>
                @isset($waterproof)
                <div class="col-sm-8">{{  $waterproof }}</div>
                @endisset
            </div>
            <div class="row">
                <label class="col-sm-4">接続方式</label>
                @isset($transmission_method)
                <div class="col-sm-8">{{  $transmission_method }}</div>
                @endisset
            </div>
            <div class="row">
                <label class="col-sm-4">カテゴリー</label>
                @isset($category)
                <div class="col-sm-8">{{  $category }}</div>
                @endisset
            </div>
            <div class="row">
                <label class="col-sm-4">ノイズキャンセリング機能</label>
                <div class="col-sm-8">
                    @isset($noise_canceling)
                    @if ($noise_canceling)
                        あり
                    @else
                        なし    
                    @endif
                    @endisset
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4">音声圧縮方式</label>
                @isset($compression_method)
                <div class="col-sm-8">{{  $compression_method }}</div>
                @endisset
            </div>
            <div class="row">
                <label class="col-sm-4">音声出力方式</label>
                @isset($sound_method)
                <div class="col-sm-8">{{  $sound_method }}</div>
                @endisset
            </div>
            <div class="row">
                <label class="col-sm-4">公開設定</label>
                <div class="col-sm-8">
                    @isset($release)
                    @if($release === "1")
                        公開
                    @else
                        非公開
                    @endif
                    @endisset
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4">廃盤設定</label>
                <div class="col-sm-8">
                    @isset($discontinued)
                    @if($discontinued === "1")
                        廃盤
                    @else
                        現行品
                    @endif
                    @endisset
                </div>
            </div>
            {{-- <div class="row">
                <label class="col-sm-4">カラー</label>
                <div class="col-sm-8">
                    @for($i = 0; $i < $loop->count; $i++)
                    {{ $color[i] }}
                    @endfor
                    {{-- $i < count($product_confirm->color) 
                </div>--}}
                <input type="submit" name="button" value="登録" class="btn btn-primary btn-lg mt-5">
            </div> 
            
        </form>
        </div>
@endsection