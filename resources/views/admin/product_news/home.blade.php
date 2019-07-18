@extends('layouts.header_admin')

@section('content')
    <div class="container">
        <h1 class="text-center jumbotron">製品に関するお知らせのトップページ</h1>
    </div>
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>タイトル</th>
                    <th>内容</th>
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
                    <td>{{ $news_product->content }}</td>
                    <td><img src="/images/thumbnails/{{ $news_product->main_visual }}" alt=""></td>
                    <td>{{ $product->overview }}</td>
                    <td>
                        @if($news_product->release)
                        公開中
                        @else
                        非公開
                        @endif
                    </td>
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