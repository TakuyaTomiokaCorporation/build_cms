@extends('layouts.admin')

@section('main')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">製品トップ</h1>
    </div>
    <div class="container">
        <a href="{{ route('product.create') }}" class="btn btn-primary mr-5">新規作成</a>
        <a href="{{ route('product.trash')}}" class="btn btn-secondary">ゴミ箱</a>
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
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    {{-- <td><img src="/images/thumbnails/{{ $product->thumbnail }}" alt=""></td> --}}
                    <td><img src="{{ asset('images/thumbnails') }}/{{ $product->thumbnail }}" alt=""></td>
                    <td>{{ $product->overview }}</td>
                    <td>
                        @if($product->release === 1)
                        公開中
                        @else
                        非公開
                        @endif
                    </td>
                    <td class="row">
                    {{-- <a href="" class="btn btn-primary btn-sm">詳細</a> --}}
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary btn-sm mr-3">編集</a>
                    <form method="POST" action="{{ route('product.delete', $product->id) }}">
                        <button type="submit" class="btn btn-danger btn-sm">削除</button>
                        @csrf
                        @method('DELETE')
                    </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
@endsection