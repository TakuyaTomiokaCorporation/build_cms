@extends('layouts.admin')

@section('main')
    <div class="container mt-5">
            <h1 class="text-center jumbotron">ゴミ箱</h1>
    </div>
    <div class="container">
        <a href="{{ route('shop')}}" class="btn btn-primary">ショップリストのトップに戻る</a>
    </div> 
    <div class="container mt-5">
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
            @isset($trashedShops)
            @foreach($trashedShops as $shop)
            <tr>
                <td>{{$shop->region_name}}</td>
                <td>{{$shop->prefectures_name}}</td>
                <td>{{$shop->shop_name}}</td>
                <td>{{$shop->post_number}}</td>
                <td>{{$shop->shop_address}}</td>
                <td>{{$shop->shop_tel}}</td>
                <td class="row">
                    <form method="GET" action="{{ route('shop.restore', $shop->id) }}">
                        <button type="submit" class="btn btn-success btn-sm mr-3">元に戻す</button>
                        @csrf
                    </form>
                    <form method="POST" action="{{ route('shop.destroy', $shop->id) }}">
                        <button type="submit" class="btn btn-danger btn-sm">完全に削除する</button>
                        @csrf
                        @method('delete')
                    </form>
                </td>
                </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
    {{ $trashedShops->links() }}
    </div>
@endsection