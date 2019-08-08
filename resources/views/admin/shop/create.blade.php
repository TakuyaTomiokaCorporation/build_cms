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
        <h1 class="text-center jumbotron">ショップの作成</h1>
    </div>
    <div class="container">
        <a href="{{ route('home')}}" class="btn btn-outline-primary">トップ</a>
        <a href="{{ route('shop')}}" class="btn btn-outline-secondary ml-3">戻る</a>
    </div>
    <div class="container mt-5">
        <form class="form-horizontal" action="{{ route('shop.confirm')}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group row">
                <label class="control-label col-sm-2" for="region">地域<span class="req">*</span></label>
                <select name="region" id="" size="1" class="custom-select col-sm-10">   
                    @foreach ($regions as $region)
                        <option value="{{ $region -> region_id }}" required>{{ $region -> region_name}}</option>
                    @endforeach 
                    {{-- @if($errors->has('region'))<br><span class="error">{{ $errors->first('region') }}</span> @endif --}}
                </select>
                <p class="mt-1">※北海道を選択する際も、入力してください</p>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="prefecture">都道府県<span class="req">*</span></label>
                <select name="prefecture" id="" size="1" class="custom-select col-sm-10"> 
                    @foreach ($prefectures as $prefecture)
                        <option value="{{ $prefecture -> prefectures_id }}" required>{{ $prefecture -> prefectures_name}}</option>
                    @endforeach 
                </select>
                <p class="mt-1">※北海道を選択する際も、入力してください</p>
                {{-- @if($errors->has('prefecture'))<br><span class="error">{{ $errors->first('prefecture') }}</span>@endif --}}
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="shop_name">店舗名<span class="req">*</span></label>
                <input class="col-sm-10 form-control-lg" name="shop_name" type="text" id="shop_name" value="{{ old('shop_name') }}" required>
                {{-- @if($errors->has('shop_name'))<br><span class="error">{{ $errors->first('shop_name') }}</span> @endif --}}
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="post_number">郵便番号</label>  
                <input class="col-sm-10 form-control-lg" name="post_number" type="text" id="post_number" value="{{ old('post_number') }}">
                {{-- @if($errors->has('post_number'))<br><span class="error">{{ $errors->first('post_number') }}</span> @endif --}}
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="shop_address">住所<span class="req">*</span></label>
                <input class="col-sm-10 form-control-lg" name="shop_address" type="text" id="shop_address" value="{{ old('shop_address') }}" required>
                {{-- @if($errors->has('shop_address'))<br><span class="error">{{ $errors->first('shop_address') }}</span> @endif  --}}
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="shop_tel">電話番号<span class="req">*</span></label>
                <input class="col-sm-10 form-control-lg" name="shop_tel" type="text" id="shop_tel" value="{{ old('shop_tel') }}" required>
                {{-- @if($errors->has('shop_tel'))<br><span class="error">{{ $errors->first('shop_tel') }}</span> @endif --}}
            </div>
            <button type="submit" name="submit" class="btn btn-primary">確認</button>
        </form>
    </div>
@endsection