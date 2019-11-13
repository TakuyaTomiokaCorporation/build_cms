@extends('layouts.user_applied_form')

@section('title', 'AVIOT LIVE:02 |')

@section('description', '')
	
@section('css')

<style type="text/css">

#event{
	height: 100vh;
}

#container{
	margin-top: 10px;
}
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
	<p class="mb20">ご確認いただき内容にお間違いなければ送信ボタンを押してください。</p>
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

			@if(null !== $sex or $age or $recognition_from or $smart_phone or $expectation or $musician)
			{{-- data under this statement will submit to database. --}}
			@isset($sex)
				<input type="hidden" name="sex" value="{{ $sex }}">
			@endisset 
			@isset($age)
				<input type="hidden" name="age" value={{ $age }}>
			@endisset
			@isset($recognition_from)
				<input type="hidden" name="recognition_from" value="{{ $recognition_from }}">
			@endisset
			@isset($smart_phone)
				<input type="hidden" name="smart_phone" value="{{ $smart_phone }}">
			@endisset
			@isset($expectation)
				<input type="hidden" name="expectation" value="{{ $expectation }}">
			@endisset
			@isset($musician)
				<input type="hidden" name="musician" value="{{ $musician }}">
			@endisset

			<h3 class="mt20">ご回答いただいたアンケート内容</h3>
			@isset($recognition_from)
			<dl class="mt10">
				<dt class="bold">AVIOTの製品を知ったきっかけは何ですか？</dt>
				<dd>{{ $recognition_from }}</dd>
			</dl>
			@endisset

			@isset($smart_phone)
			<dl class="mt10">
				<dt class="bold">普段お使いのスマートフォンはどちらですか？</dt>
				<dd>{{ $smart_phone }}</dd>
			</dl>
			@endisset

			@isset($expectation)
			<dl class="mt10">
				<dt class="bold">AVIOTに今後期待することはございますか？</dt>
				<dd>{{ $expectation }}</dd>
			</dl>
			@endisset

			@isset($musician)
			<dl class="mt10">
				<dt class="bold">お好きなミュージシャンをご記入ください。</dt>
				<dd>{{ $musician }}</dd>
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