@extends('layouts.admin')

@section('main')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">最新情報トップ</h1>
    </div>
    <div class="container">
        <a href="{{ route('news.create')}}" class="btn btn-primary mr-5">新規作成</a>
        <a href="{{ route('news.trash')}}" class="btn btn-secondary">ゴミ箱</a>
    </div>
      
    <div class="container mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>タイトル</th>
                    <th>カテゴリー</th>
                    <th>公開予定時刻</th>
                    <th>公開設定</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @isset($posts)
                @foreach($posts as $post )
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->book_date }}</td>
                    <td>
                        @if($post->release === "1")
                        公開中
                        @else
                        非公開
                        @endif
                    </td>
                    <td class="row">
                    {{-- <a href="" class="btn btn-primary btn-sm">詳細</a> --}}
                    <a href="{{ route('news.edit', $post->id) }}" class="btn btn-primary btn-sm mr-3">編集</a>
                    {{-- <a href="{{ route('news.delete', $post->id) }}" class="btn btn-danger btn-sm">削除</a> --}}
                    <form method="POST" action="{{ route('news.delete', $post->id) }}">
                        <button type="submit" class="btn btn-danger btn-sm">削除</button>
                        @csrf
                        @method('DELETE')
                    </form>
                    </td>
                    </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
    </div>
@endsection