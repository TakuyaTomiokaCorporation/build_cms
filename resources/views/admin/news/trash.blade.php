@extends('layouts.admin')

@section('main')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">最新情報トップ</h1>
    </div>
    <div class="container">
        <a href="{{ route('news')}}" class="btn btn-primary">最新情報トップに戻る</a>
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
                @isset($trashedPosts)
                @foreach($trashedPosts as $post )
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
                    <td class="row">
                    <form method="GET" action="{{ route('news.restore', $post->id) }}">
                        <button type="submit" class="btn btn-success btn-sm">元に戻す</button>
                        @csrf
                    </form>
                    <form method="GET" action="{{ route('news.restore', $post->id) }}">
                        <button type="submit" class="btn btn-danger btn-sm">元に戻す</button>
                        @csrf
                    </form>
                    {{-- <a href="" class="btn btn-primary btn-sm">詳細</a>
                    <a href="{{ route('news.restore', $post->id) }}" class="btn btn-primary btn-sm">元に戻す</a>
                    <a href="{{ route('news.destroy', $post->id) }}" class="btn btn-danger btn-sm">完全に削除する</a> --}}
                    </td>
                    </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
    </div>
@endsection