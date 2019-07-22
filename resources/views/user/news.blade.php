@extends('layouts.header_user')

@section('content')
    <article>
        <div class="container jumbotron">
            <h1>{{ $posts->title }}</h1>
        </div>
        <div class="container">
            <div class="col-md-12">
                    <p>{{ $posts->content }}</p>
            </div>
        </div>
    </article>
@endsection