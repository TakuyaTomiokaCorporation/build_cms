@extends('layouts.user_applied_form')

@section('title', 'AVIOT LIVE:02 |')

@section('description', '')
	
@section('css')

<style type="text/css">
section {
	background: #f1f1f1;
	padding: 20px 20px;
}

input[type="submit"] {
	background: #2a73a9;
	color: #fff;
	padding: 18px 100px;
	font-weight: bold;
	font-size: 1.2rem;
}

input[type="submit"]:first-child {
	background: #000;
	color: #fff;
	padding: 18px 100px;
	font-weight: bold;
	font-size: 1.2rem;
}

footer img {
	width: 10%;
}

@media screen and (min-width:1024px) {

}

@media screen and (max-width: 640px) {
	}


</style>

@endsection

@section('body_id', 'event')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
<article class="w1020 w98 m_auto">
	<h2 class="pt20 border_b mb20">確認画面</h2>
	<p>下記内容にて受付いたします。</p>
	<p class="mb20">ご確認いただき内容に問題ありませんでしたら送信ボタンを押してください。</p>
		<section class="">
			<form action="{{ route('form.thanks') }}" method="POST" enctype='multipart/form-data'>
			@csrf
			@method('POST')
			<input type="hidden" name="email" value="{{ $email }}">
			<div class="m_auto">
			<dl class="">
				<dt class="bold">メールアドレス</dt>
				<dd>{{ $email }}</dd>
			</dl>

			@if(null !== $sex or $age or $recognition_from or $purchased_product or $considered_product or $purchased_from)
			{{-- data under this statement will submit to database. --}}
			@isset($sex)
				<input type="hidden" name="sex" value="{{ $sex }}">
			@endisset 
			@isset($age)
				<input type="hidden" name="age" value="{{ $age }}">
			@endisset
			@isset($recognition_from)
				<input type="hidden" name="recognition_from" value="{{ $recognition_from }}">
			@endisset
			@isset($purchased_product)
				<input type="hidden" name="purchased_product" value="{{ $purchased_product }}">
			@endisset
			@isset($considered_product)
				<input type="hidden" name="considered_product" value="{{ $considered_product }}">
			@endisset
			@isset($purchased_from)
				<input type="hidden" name="purchased_from" value="{{ $purchased_from }}">
			@endisset

			<h3 class="mt20">ご回答いただいたアンケート内容</h3>
			@isset($sex)
			<dl class="mt10">
				<dt class="bold">性別</dt>
				<dd>{{ $sex }}</dd>
			</dl>
			@endisset

			@isset($age)
			<dl class="mt10">
				<dt class="bold">年齢</dt>
				<dd>{{ $age }}</dd>
			</dl>
			@endisset

			@isset($recognition_from)
			<dl class="mt10">
				<dt class="bold">AVIOTの製品を知ったきっかけは何ですか？</dt>
				<dd>{{ $recognition_from }}</dd>
			</dl>
			@endisset

			@isset($purchased_product)
			<dl class="mt10">
				<dt class="bold">最近ご購入いただいた製品はどちらですか？</dt>
				<dd>{{ $purchased_product }}</dd>
			</dl>
			@endisset

			@isset($considered_product)
			<dl class="mt10">
				<dt class="bold">上記製品ご購入のさい他にご検討されていたものはありますか？</dt>
				<dd>{{ $considered_product }}</dd>
			</dl>
			@endisset

			@isset($purchased_from)
			<dl class="mt10">
				<dt class="bold">上記製品のご購入はどちらでされましたか？</dt>
				<dd>{{ $purchased_from }}</dd>
			</dl>
			@endisset

			@endif

			<p class="alc mt40 pb20"><input type="submit" name="action" value="修正">  <input class="mt10" type="submit" name="action" value="送信"></p>

			</form>
			</div>
		</section>
	
</article>
</div><!--/main-->
</div><!--/container-->

@endsection

@section('javascript-footer')
    
@endsection