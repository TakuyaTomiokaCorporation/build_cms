@extends('layouts.admin')

@section('main')
    <div class="container mt-5">
        <h1 class="text-center jumbotron">製品に関するお知らせの編集</h1>
    </div>
    <div class="container">
        <a href="{{ route('home')}}" class="btn btn-outline-primary">トップ</a>
        <a href="{{ route('product_news')}}" class="btn btn-outline-secondary ml-3">戻る</a>
    </div>
    <div class="container mt-5">
        <form  class="form-horizontal" action="{{ route('product_news.update', $news_product->id) }}" method="POST" enctype='multipart/form-data'>{{-- enctype="multipart/form-data" --}}
            @csrf
            @method('PATCH')
            <div class="form-group row">
                <label class="control-label col-sm-2" for="title">タイトル</label>
                <input class="col-sm-10 form-control-lg" name="title" type="text" id="title" value="{{ $news_product->title }}">
            </div>
            <hr>
            <p>内容　※改行は「shift + enter」で行えます</p>
            <textarea class="form-control" name="content" id="summary-ckeditor">{{ $news_product->content }}</textarea>
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
            <div class="form-group row">
                <label class="control-label col-sm-2" for="pdf">詳細ページのリンク</label>
                <input class="col-sm-10 form-control-lg" name="link" type="text" id="link" value="{{ $news_product->link }}">
            </div>
            <hr>
            <p>投稿日時<span class="req">*</span></p>
            <input id="date" type="datetime-local" name="book_date">
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
            <button type="submit" class="btn btn-primary mb-5">更新</button>
        </form>
    </div>
@endsection

@section('footer-js')

{{-- <script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script> --}}
    
@endsection