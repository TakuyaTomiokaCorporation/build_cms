@extends('layouts.admin')

@section('main')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">最新情報の編集</h1>
    </div>
    <div class="container">
        <a href="{{ route('home')}}" class="btn btn-outline-primary">トップ</a>
        <a href="{{ route('news')}}" class="btn btn-outline-secondary ml-3">戻る</a>
    </div>
    <div class="container mt-5">
        <form  class="form-horizontal" action="{{ route('news.update', $news->id) }}" method="POST" enctype='multipart/form-data'>{{-- enctype="multipart/form-data" --}}
            @csrf
            @method('PATCH')
            <div class="form-group row">
                <label class="control-label col-sm-2" for="title">タイトル</label>
                <input class="col-sm-10 form-control-lg" name="title" type="text" id="title" value="{{ old('title', $news->title) }}">
            </div>
            <hr>
            <p>内容　※改行は「shift + enter」で行えます</p>
            <textarea class="form-control" name="content" id="summary-ckeditor">{{ old('content', $news->content) }}</textarea>
            <hr>
            <p>カテゴリー</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="product" value="新製品情報" {{ $news->category == "新製品情報" ? 'checked' : '' }}>
                <label class="form-check-label" for="product">新製品情報</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="news" value="最新情報" {{ $news->category == "最新情報" ? 'checked' : '' }}>
                <label class="form-check-label" for="news">最新情報</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="event" value="イベント情報" {{ $news->category == "イベント情報" ? 'checked' : '' }}>
                <label class="form-check-label" for="event">イベント情報</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="artists" value="アーティストインタビュー" {{ $news->category == "アーティストインタビュー" ? 'checked' : '' }}>
                <label class="form-check-label" for="artists">アーティストインタビュー</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="information" value="お知らせ" {{ $news->category == "お知らせ" ? 'checked' : '' }}>
                <label class="form-check-label" for="information">お知らせ</label>
            </div>
            <hr>
            <p>画像</p>
            <div class="">
                <input type="file" name="image"> 
            </div>
                    <hr>
            <p>PDF</p>
            <div class="">
                <input type="file" name="pdf"> 
            </div>
            <hr>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="pdf">詳細ページのリンク</label>
                <input class="col-sm-10 form-control-lg" name="link" type="text" id="link" value="{{ $news->link }}">
            </div>
            <hr>
            <p>投稿日時<span class="req">*</span></p>
            <input id="date" type="datetime-local" min="{{ $now }}" name="book_date" value="{{ \Carbon\Carbon::parse($news->book_date)->format('Y-m-d\TH:i') }}">
            <hr>
            <p>公開設定</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="release" id="release" value="1" {{ $news->release == "1" ? 'checked' : '' }}>
                <label class="form-check-label" for="release">公開</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="release" id="close" value="0" {{ $news->release == "0" ? 'checked' : '' }}>
                <label class="form-check-label" for="close">非公開</label>    
            </div>
            <hr>
            <button type="submit" class="btn btn-primary mb-5">更新</button>
        </form>
    </div>
@endsection

@section('footer-js')

<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
    
@endsection