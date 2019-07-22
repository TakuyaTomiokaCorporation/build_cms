@extends('layouts.header_user')

@section('content')
    <div class="container">
        <img src="images/user/main_visual.png" class="max-auto d-block" style="width:100%" alt="画像">
    </div>
    <div class="container mt-5">
        <h3>最新情報</h3>
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-xs-2">
                    <a href="{{ route('news.show', $post->id) }}">
                    <img src="images/news/{{ $post->image }}" alt="">
                    <span>{{ $post->category }}</span>
                    <h4>{{ $post->title }}</h4>
                    </a>
                </div>
                @endforeach
            </div>       
        </div>
    </div>

@endsection