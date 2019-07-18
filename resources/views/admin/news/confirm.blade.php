@extends('layouts.header_admin')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">最新情報の確認</h1>
    </div>
    <div class="container">
        <form action=" {{ route('news.store')}} " method="post" class="form-horizontal" enctype='multipart/form-data'>
            @csrf
            @method('POST')
            <input type="hidden" name="title" value="{{ $title }}">
            <input type="hidden" name="content" value="{{ $content }}">
            <input type="hidden" name="category" value="{{ $category }}">
            <input type="hidden" name="image" value="{{ $image }}">
            <input type="hidden" name="pdf" value="{{ $pdf }}">
            <input type="hidden" name="release" value="{{ $release }}">
            <input type="hidden" name="book_date" value="{{ $book_date }}">
            {{-- <input type="hidden" name="transmission_method" value="{{ $color }}"> --}}

            <div class="row">
                <label class="col-sm-4">タイトル</label>
                <div class="col-sm-8">{{ $title }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">内容</label>
                <div class="col-sm-8">{{ $content }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">カテゴリー</label>
                <div class="col-sm-8">{{ $category }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">画像</label>
                <div class="col-sm-8">{{  $image }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">PDF</label>
                <div class="col-sm-8">{{  $pdf }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">公開設定</label>
                <div class="col-sm-8">
                    @if($release === 1)
                        公開
                    @else
                        非公開
                    @endif
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4">予約投稿時刻</label>
                <div class="col-sm-8">{{  $book_date }}</div>
            </div>
                <input type="submit" name="button" value="登録" class="btn btn-primary btn-lg">
            </div> 
        </form>
    </div>
@endsection

