@extends('layouts.admin')

@section('main')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">最新情報の作成</h1>
    </div>
    <div class="container">
        <a href="{{ route('home')}}" class="btn btn-outline-primary">トップ</a>
        <a href="{{ route('news')}}" class="btn btn-outline-secondary ml-3">戻る</a>
    </div>
    <div class="container mt-5">
        <form  class="form-horizontal" action="{{ route('news.confirm') }}" method="POST" enctype='multipart/form-data'>{{-- enctype="multipart/form-data" --}}
            @csrf
            @method('PATCH')
            <div class="form-group row">
                <label class="control-label col-sm-2" for="title">タイトル</label>
                <input class="col-sm-10 form-control-lg" name="title" type="text" id="title" value="{{ old('title') }}" required>
            </div>
            <hr>
            <p>内容　※改行は「shift + enter」で行えます</p>
            <textarea class="form-control" name="content" id="summary-ckeditor"></textarea>
            <hr>
            <p>カテゴリー</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="product" value="新製品情報">
                <label class="form-check-label" for="product">新製品情報</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="news" value="最新情報">
                <label class="form-check-label" for="news">最新情報</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="event" value="イベント情報">
                <label class="form-check-label" for="event">イベント情報</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="artists" value="アーティストインタビュー">
                <label class="form-check-label" for="artists">アーティストインタビュー</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="information" value="お知らせ">
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
                <label class="control-label col-sm-2" for="pdf">詳細のリンク</label>
                <input class="col-sm-10 form-control-lg" name="link" type="text" id="link" value="{{ old('link') }}">
            </div>
            <hr>
            <p>予約投稿</p>
            <div class="row">
                <div class="form-group">
                    <input class="col-sm-10 form-control-lg" id="date" type="datetime-local" min="{{ $now }}" name="book_date">
                </div>
            </div>
            <hr>
            <p>公開設定</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="release" id="release" value="1">
                <label class="form-check-label" for="release">公開</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="release" id="close" value="0">
                <label class="form-check-label" for="close">非公開</label>    
            </div>
            <hr>
            <button type="submit" class="btn btn-primary mb-5">確認</button>
        </form>
    </div>
@endsection

@section('footer-js')

<script>
    CKEDITOR.replace( 'content' );
</script>
    
@endsection