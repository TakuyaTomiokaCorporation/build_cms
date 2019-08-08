@extends('layouts.admin')

@section('css')

<style>
    .img-sm{
        width: 200px;
        height: auto;
    }

</style>
    
@endsection

@section('main')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">製品に関するお知らせのトップページ</h1>
    </div>
    <div class="container">
        <a href="{{ route('product_news.create') }}" class="btn btn-primary mr-5">新規作成</a>
        <a href="{{ route('product_news.trash')}}" class="btn btn-secondary">ゴミ箱</a>
    </div>  
    <div class="container mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>タイトル</th>
                    <th>画像</th>
                    <th>PDF</th>
                    <th>公開設定</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news_products as $news_product)
                <tr>
                    <td>{{ $news_product->title }}</td>
                    <td><img src="{{ asset('images/product_news') }}/{{ $news_product->main_visual }}" alt="" class="img-sm"></td>
                    <td>{{ $news_product->pdf }}</td>
                    <td>
                        @if($news_product->release === 1)
                        公開中
                        @else
                        非公開
                        @endif
                    </td>
                    <td class="row">
                    {{-- <a href="" class="btn btn-primary btn-sm">詳細</a> --}}
                    <a href="{{ route('product_news.edit', $news_product->id) }}" class="btn btn-primary btn-sm mr-3">編集</a>
                    <form method="POST" action="{{ route('product_news.delete', $news_product->id) }}">
                        <button type="submit" class="btn btn-danger btn-sm">削除</button>
                        @csrf
                        @method('DELETE')
                    </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-5">{{ $news_products->links() }}</div>
    </div>
@endsection