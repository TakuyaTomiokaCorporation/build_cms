@extends('layouts.admin')

@section('main')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">最新情報の確認</h1>
    </div>
    <div class="container mt-5">
        <form action=" {{ route('news.store')}} " method="post" class="form-horizontal" enctype='multipart/form-data'>
            @csrf
            @method('POST')
            <input type="hidden" name="title" value="{{ $title }}">
            <input type="hidden" name="content" value="{{ $content }}">
            <input type="hidden" name="category" value="{{ $category }}">
            <input type="hidden" name="image" value="{{ $image }}">
            @isset($pdf)
            <input type="hidden" name="pdf" value="{{ $pdf }}">
            @endisset
            <input type="hidden" name="release" value="{{ $release }}">
            <input type="hidden" name="book_date" value="{{ $book_date }}">
            @isset($link)
            <input type="hidden" name="link" value="{{ $link }}">
            @endisset
            @isset($another_link)
            <input type="hidden" name="another_link" value="{{ $another_link }}">
            @endisset
            <input type="hidden" name="class" value="{{ $class }}">
            {{-- <input type="hidden" name="transmission_method" value="{{ $color }}"> --}}
            <hr>
            <div class="row">
                <label class="col-sm-4">タイトル</label>
                <div class="col-sm-8">{{ $title }}</div>
            </div>
            <hr>
            <div class="row">
                <label class="col-sm-4">内容</label>
                <div class="col-sm-8">{{ $content }}</div>
            </div>
            <hr>
            <div class="row">
                <label class="col-sm-4">カテゴリー</label>
                <div class="col-sm-8">{{ $category }}</div>
            </div>
            <hr>
            <div class="row">
                <label class="col-sm-4">画像</label>
                <div class="col-sm-8">{{ $image }}</div>
            </div>
            <hr>
            <div class="row">
                <label class="col-sm-4">PDF</label>
                @isset($pdf)
                <div class="col-sm-8">{{ $pdf }}</div>
                @endisset
            </div>
            <hr>
            <div class="row">
                <label class="col-sm-4">詳細ページのリンク</label>
                @isset($link)
                <div class="col-sm-8">{{ $link }}</div>
                @endisset
            </div>
            <hr>
            <div class="row">
                <label class="col-sm-4">別ページのリンク</label>
                @isset($another_link)
                <div class="col-sm-8">{{ $another_link }}</div>
                @endisset
            </div>
            <hr>
            <div class="row">
                <label class="col-sm-4">公開設定</label>
                <div class="col-sm-8">
                    @if($release === "1")
                        公開
                    @else
                        非公開
                    @endif
                </div>
            </div>
            <hr>
            <div class="row">
                <label class="col-sm-4">投稿日時</label>
                <div class="col-sm-8">{{  $book_date }}</div>
            </div>
            <input type="submit" name="button" value="登録" class="btn btn-primary btn-lg">
        </form>
    </div>
@endsection

