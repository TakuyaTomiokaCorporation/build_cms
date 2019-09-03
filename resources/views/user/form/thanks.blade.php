@extends('layouts.user_applied_form')

@section('title', 'AVIOT LIVE:02 |')

@section('description', '')
	
@section('css')

<style type="text/css">


#container{
	margin-top: 10px;
	height: 100vh;
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
	<h2 class="pt20 mb20">ご応募ありがとうございました。</h2>
	<p class="">送信いたしました。</p>
	<p>当選は9月9日以降にメールにてご連絡させていただきますので、しばらくお待ちください。</p>
	<div class="mt40">
		<p>AVIOT LIVE: 02参加アーティストのムービーも！</p>
		<p class="mt10 alc"><a href="{{ route('artists.show') }}" target="_blank" class="btn_Blk">アーティストボイス</a></p>
	</div>
	<div class="mt20">
		<p>AVIOT YouTubeチャンネル『バリュトレ！』</p>
		<p class="mt10 alc"><a href="https://www.youtube.com/channel/UChHmHYsAGNVZJEhN8yl7H9g" target="_blank" class="btn_Blk">チャンネルはこちら</a></p>
	</div>
	
</article>
</div><!--/main-->
</div><!--/container-->

@endsection

@section('javascript-footer')
    
@endsection