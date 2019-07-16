@extends('layouts.header_admin')

@section('content')
    <div class="container">
        <h1 class="jumborton text-center">確認画面</h1>
    </div>
    <form action=" {{ route('shop.finish')}} " method="post" class="form-horizontal">
        @csrf
        @method('POST')
        <input type="hidden" name="region_id" value="{{$region}}">
        <input type="hidden" name="pre_id" value="{{$prefecture}}">
        <input type="hidden" name="shop_name" value="{{$shop_name}}">
        <input type="hidden" name="shop_address" value="{{$post_number}}">
        <input type="hidden" name="shop_tel" value="{{$shop_address}}">
        <input type="hidden" name="post_number" value="{{$shop_tel}}">
        <div class="row">
            <label class="col-sm-4">地域</label>
            <div class="col-sm-8">{{ $region }}</div>
        </div>
        <div class="row">
            <label class="col-sm-4">都道府県</label>
            <div class="col-sm-8">{{ $prefecture }}</div>
        </div>
        <div class="row">
            <label class="col-sm-4">店舗名</label>
            <div class="col-sm-8">{{  $shop_name }}</div>
        </div>
        <div class="row">
            <label class="col-sm-4">郵便番号</label>
            <div class="col-sm-8">{{  $post_number }}</div>
        </div>
        <div class="row">
            <label class="col-sm-4">住所</label>
            <div class="col-sm-8">{{  $shop_address }}</div>
        </div>
        <div class="row">
            <label class="col-sm-4">電話番号</label>
            <div class="col-sm-8">{{  $shop_tel }}</div>
        </div>
        <input type="submit" name="button" value="登録" class="btn btn-primary btn-lg">
    </form>
@endsection