@extends('layouts.header_admin')

@section('content')
    <div class="container">
            <h1 class="text-center jumbotron">ショップリスト</h1>
    </div>
    

    <div class="container">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>地域</th>
                <th>都道府県</th>
                <th>店舗名</th>
                <th>郵便番号</th>
                <th>住所</th>
                <th>電話番号</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shops as $shop)
            <tr>
                <td>{{$shop->region_name}}</td>
                <td>{{$shop->prefectures_name}}</td>
                <td>{{$shop->shop_name}}</td>
                <td>{{$shop->post_number}}</td>
                <td>{{$shop->shop_address}}</td>
                <td>{{$shop->shop_tel}}</td>
                <td>
                <a href="" class="btn btn-primary btn-sm">詳細</a>
                <a href="" class="btn btn-danger btn-sm">削除</a>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection