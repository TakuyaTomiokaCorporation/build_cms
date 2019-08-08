@extends('layouts.admin')

@section('main')
    <div class="container jumbotron mt-5">
        <h1 class="text-center">製品に関するお知らせの確認</h1>
    </div>
    <div class="container mt-5">
        <form action=" {{ route('product_news.store')}} " method="post" class="form-horizontal" enctype='multipart/form-data'>
            @csrf
            @method('POST')
            <input type="hidden" name="title" value="{{ $title }}">
            <input type="hidden" name="content" value="{{ $content }}">
            <input type="hidden" name="main_visual" value="{{ $main_visual }}">
            @isset($pdf)
            <input type="hidden" name="pdf" value="{{ $pdf }}">
            @endisset
            <input type="hidden" name="book_date" value="{{ $book_date }}">
            <input type="hidden" name="release" value="{{ $release }}">
            @isset($link)
            <input type="hidden" name="link" value="{{ $link }}">
            @endisset
            {{-- <input type="hidden" name="transmission_method" value="{{ $color }}"> --}}

            <div class="row">
                <label class="col-sm-4">タイトル</label>
                <div class="col-sm-8">{{ $title }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">内容</label>
                <div class="col-sm-8">{!! $content !!}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">画像</label>
                <div class="col-sm-8">{{  $main_visual }}</div>
            </div>
            <div class="row">
                <label class="col-sm-4">PDF</label>
                @isset($pdf)
                <div class="col-sm-8">{{  $pdf }}</div>
                @endisset
            </div>
            <div class="row">
                <label class="col-sm-4">詳細ページのリンク</label>
                @isset($link)
                <div class="col-sm-8">{{ $link }}</div>
                @endisset
            </div>
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
            <div class="row">
                <label class="col-sm-4">投稿時刻</label>
                <div class="col-sm-8">{{  $book_date }}</div>
            </div>
            <input type="submit" name="button" value="登録" class="btn btn-primary btn-lg">
        </form>
    </div> 
@endsection