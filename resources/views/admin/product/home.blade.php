@extends('layouts.header_admin')

@section('content')
    <div class="container">
        <h1 class="text-center jumbotron">製品トップ</h1>
    </div>

    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>製品名</th>
                    <th>サムネイル画像</th>
                    <th>概要</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td><img src="/images/thumbnails/{{ $product->thumbnail }}" alt=""></td>
                    <td>{{ $product->overview }}</td>
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