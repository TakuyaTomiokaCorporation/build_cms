@extends('layouts.admin')

@section('main')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">ゴミ箱</h1>
    </div>
    <div class="container">
        <a href="{{ route('product_news')}}" class="btn btn-primary">お知らせのトップに戻る</a> 
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
                @isset($trashedNewsProducts)
                @foreach($trashedNewsProducts as $news_product)
                <tr>
                    <td>{{ $news_product->title }}</td>
                    <td><img src="/images/product_news/{{ $news_product->main_visual }}" alt=""></td>
                    <td>{{ $news_product->pdf }}</td>
                    <td>
                        @if($news_product->release === 1)
                        公開中
                        @else
                        非公開
                        @endif
                    </td>
                    <td class="row">
                        <form method="GET" action="{{ route('product_news.restore', $news_product->id) }}">
                            <button type="submit" class="btn btn-success btn-sm mr-3">元に戻す</button>
                            @csrf
                        </form>
                        <form method="POST" action="{{ route('product_news.destroy', $news_product->id) }}">
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