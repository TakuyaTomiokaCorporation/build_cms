@extends('layouts.header_admin')

@section('content')
    <h1 class="text-center jumbotron">ショップの作成</h1>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger dismissible fade show" role="alert">
                @foreach ($erros as $error)
                    <strong>注意!</strong> {{ $error}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="閉じる">
                        <span aria-hidden="true">&times;</span>
                    </button>
                @endforeach
            </div>
        @endif
    </div>
    <div class="container">
        <form class="form-horizontal" action="{{ route('shop.finish')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group row">
                <label class="control-label col-sm-2" for="region">地域</label>
                <select name="region" id="" size="1" class="custom-select col-sm-10">   
                    @foreach ($regions as $region)
                        <option value="{{ old($region -> region_id) }}" required>{{ $region -> region_name}}</option>
                    @endforeach 
                    @if($errors->has('region'))<br><span class="error">{{ $errors->first('region') }}</span> @endif
                </select>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="prefecture">都道府県</label>
                <select name="prefecture" id="" size="1" class="custom-select col-sm-10"> 
                    @foreach ($prefectures as $prefecture)
                        <option value="{{ old($prefecture -> prefectures_id) }}" required>{{ $prefecture -> prefectures_name}}</option>
                    @endforeach 
                </select>
                @if($errors->has('prefecture'))<br><span class="error">{{ $errors->first('prefecture') }}</span> @endif
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="shop_name">店舗名</label>
                <input class="col-sm-10 form-control-lg" name="shop_name" type="text" id="shop_name" name="shop_name" value="{{ old('shop_name') }}" required>
                @if($errors->has('shop_name'))<br><span class="error">{{ $errors->first('shop_name') }}</span> @endif
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="post_number">郵便番号</label>  
                <input class="col-sm-10 form-control-lg" name="post_number" type="text" id="post_number" name="post_number" value="{{ old('post_number') }}" required>
                @if($errors->has('post_number'))<br><span class="error">{{ $errors->first('post_number') }}</span> @endif
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="shop_address">住所</label>
                <input class="col-sm-10 form-control-lg" name="shop_address" type="text" id="shop_address" name="shop_address" value="{{ old('shop_address') }}" required>
                @if($errors->has('shop_address'))<br><span class="error">{{ $errors->first('shop_address') }}</span> @endif 
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="shop_tel">電話番号</label>
                <input class="col-sm-10 form-control-lg" name="shop_tel" type="text" id="shop_tel" name="shop_tel" value="{{ old('shop_tel') }}" required>
                @if($errors->has('shop_tel'))<br><span class="error">{{ $errors->first('shop_tel') }}</span> @endif
            </div>
            <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </form>
    </div>
@endsection