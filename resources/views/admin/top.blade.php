@extends('layouts.admin')

@section('main')
    <h1 class="text-center m-5">管理画面トップ</h1>
    <div class="container">
    <div class="row">
        {{-- 製品登録 --}}
        <div class="col-sm-6">
            <div class="card img-thumbnail">
                <img class="card-img-top" src="{{ asset('images/admin/product.jpeg') }}" alt="製品登録の画像">
                <div class="card-body px-2 py-3">
                <h5 class="card-title">製品登録</h5>
                <p class="card-text">製品の登録や編集はこちらから行えます。</p>
                <p class="mb-0"><a href={{ route('product')}} class="btn btn-primary stretched-link">表示</a></p>
                </div>
            </div>
        </div>
        {{-- 最新情報 --}}
        <div class="col-sm-6">
            <div class="card img-thumbnail">
                <img class="card-img-top" src="{{ asset('images/admin/news.jpg') }}" alt="最新情報の画像">
                <div class="card-body px-2 py-3">
                <h5 class="card-title">最新情報</h5>
                <p class="card-text">最新情報の登録はこちらから行えます。</p>
                <p class="mb-0"><a href="{{ route('news') }}" class="btn btn-primary stretched-link">表示</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container mt-5">
    <div class="row">
                {{-- 製品のお知らせ --}}
                <div class="col-sm-6">
                    <div class="card img-thumbnail">
                        <img class="card-img-top" src="{{ asset('images/admin/information.jpg') }}" alt="お知らせの画像">
                        <div class="card-body px-2 py-3">
                        <h5 class="card-title">製品に関するお知らせ</h5>
                        <p class="card-text">製品に関するお知らせはこちらから行えます。</p>
                        <p class="mb-0"><a href="{{ route('product_news')}}" class="btn btn-primary stretched-link">表示</a></p>
                        </div>
                    </div>
                </div>
                {{-- 店舗の登録 --}}
                <div class="col-sm-6">
                    <div class="card img-thumbnail">
                        <img class="card-img-top" src="{{ asset('images/admin/store.jpg') }}" alt="店舗画像">
                        <div class="card-body px-2 py-3">
                        <h5 class="card-title">店舗情報の登録</h5>
                        <p class="card-text">店舗情報の登録や編集はこちらから行えます。</p>
                        <p class="mb-0"><a href="{{ route('shop')}}" class="btn btn-primary stretched-link">表示</a></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection