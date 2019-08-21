@extends('layouts.user_master')

@section('title', 'WE-D01b |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')

@endsection

@section('body_id', 'product')

@section('content')


@endsection

@section('javascript-footer')

<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        loop: true,
        thumbs: {
        swiper: galleryThumbs
        }
    });
</script>
    
@endsection