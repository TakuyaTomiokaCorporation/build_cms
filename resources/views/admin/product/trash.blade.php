@extends('layouts.admin')

@section('main')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">ゴミ箱</h1>
    </div>
    <div class="container">
        <a href="{{ route('product')}}" class="btn btn-primary">製品トップに戻る</a>
    </div>
    <div class="container mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>製品名</th>
                    <th>サムネイル画像</th>
                    <th>概要</th>
                    <th>公開設定</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @isset($trashedProducts)
                @foreach($trashedProducts as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td><img src="/images/thumbnails/{{ $product->thumbnail }}" alt=""></td>
                    <td>{{ $product->overview }}</td>
                    <td>
                        @if($product->release === 1)
                        公開中
                        @else
                        非公開
                        @endif
                    </td>
                    <td class="row">
                        <form method="GET" action="{{ route('product.restore', $product->id) }}">
                            <button type="submit" class="btn btn-success btn-sm mr-3">元に戻す</button>
                            @csrf
                        </form>
                        <form method="POST" action="{{ route('product.destroy', $product->id) }}">
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
    </div>
@endsection