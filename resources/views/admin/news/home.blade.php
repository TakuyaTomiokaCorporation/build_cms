@extends('layouts.header_admin')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">最新情報トップ</h1>
    </div>
    <div class="container">
        <a href="{{ route('news.create')}}" class="btn btn-primary">新規作成</a>
    </div>
      
    <div class="container mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>タイトル</th>
                    <th>カテゴリー</th>
                    <th>公開予約時刻</th>
                    <th>公開設定</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post )
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->book_date }}</td>
                    <td>
                        @if($post->release)
                        公開中
                        @else
                        非公開
                        @endif
                    </td>
                    <td>
                    <a href="" class="btn btn-primary btn-sm">詳細</a>
                    <a href="" class="btn btn-primary btn-sm">編集</a>
                    <a href="" class="btn btn-danger btn-sm">削除</a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection