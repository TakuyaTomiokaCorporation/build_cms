@extends('layouts.admin')

@section('main')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">製品に関するお知らせの作成</h1>
    </div>
    <div class="container">
        <a href="{{ route('home')}}" class="btn btn-outline-primary">トップ</a>
        <a href="{{ route('product_news')}}" class="btn btn-outline-secondary ml-3">戻る</a>
    </div>
    <div class="container mt-5">
        <form  class="form-horizontal" action="{{ route('product_news.confirm') }}" method="POST" enctype='multipart/form-data'>{{-- enctype="multipart/form-data" --}}
            @csrf
            @method('PATCH')
            <div class="form-group row">
                <label class="control-label col-sm-2" for="title">タイトル</label>
                <input class="col-sm-10 form-control-lg" name="title" type="text" id="title" value="{{ old('title') }}">
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="content">内容</label>
                <textarea class="form-control" name="content" id="content" rows="5" placeholder="お知らせの内容を入力してください。"></textarea>
            </div>
            <hr>
            <p>画像</p>
            <div class="">
                <input type="file" name="main_visual"> 
            </div>
            <hr>
            <p>PDF</p>
            <div class="">
                <input type="file" name="pdf"> 
            </div>
            <hr>
            <p>予約投稿</p>
            <div class="row">
                <div class="form-group">
                    <label for="book_date">日時</label>
                    <input id="date" type="datetime-local" min="{{ $now }}" name="book_date">
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
            <button type="submit" class="btn btn-primary">確認</button>
        </form>
    </div>
@endsection