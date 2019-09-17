@extends('layouts.user_master')

@section('title', 'PassCode×AVIOT |')

@section('description', 'アーティストによるインタビュー動画、AVIOT製品のレビュー、操作方法')

@section('body_id', '')

@section('css')
    
@endsection

@section('content')

<div id="container" class="both mb60">
<div id="" class="main" role="main">
    <article class="w1020 w98 m_auto">
        <h2 class="pt20 border_b mb20">PassCode×TE-D01d</h2>
        <section class="artist_movie mb60">
            <div><img src="{{ asset('images/artists/passcode_mv.jpg') }}" alt="PassCode"></div>
            <div>
                <h3 class="mt20">PassCode</h3>
                <p class="mt10">2016年メジャーデビュー。バンドサウンドをベースにスクリーモ、メタルコアなど変幻自在の楽曲群とシャウト・スクリームを駆使した大阪発4人組アーティスト。</p>
                <p class="mt10">2018年にはイギリスJPU Recordsより海外デビュー盤をリリース。今夏には3年連続SUMMER SONICに招集、Vans Warped Tour Japan 2018など多くの大型ロックフェスへも参戦。</p>
                <p class="mt10">2019年4月、メジャー2作目となるアルバム「CLARITY」をリリース。同作品はオリコン週間アルバムチャートで初登場10位を記録、自身最高位を更新。</p>
                <p class="mt10">同年4月より自身初となるZepp Tour 2019を開催。東名阪対バンツアー「VERSUS PASSCODE 2019」、そして秋からは全国ツアー「CLARITY Plus 19-20」の開催が決定している。</p>
                <p class="mt10">国内外ともにロックファンやアイドルファンから絶大な支持を獲得している。</p>
            </div>
            <dl class="mt20">
                <dt>■PassCode オフィシャルHP</dt>
                <dd><a href="https://passcode-official.com/" target="_blank">https://passcode-official.com/</a></dd>
    
                <dt class="mt10">■PassCode Twitter</dt>
                <dd><a href="https://twitter.com/passcodeO" target="_blank">Twitter https://twitter.com/passcodeO</a></dd>
    
                <dt class="mt10">■PassCode Instagram</dt>
                <dd><a href="https://www.instagram.com/passcodeo/" target="_blank">https://www.instagram.com/passcodeo/</a></dd>
            </dl>
    
            <div class="mt20 alc">
                <iframe width="600" height="400" src="https://www.youtube.com/embed/m-fgcat-M1I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
    
            <div class="alc mt20">
                <a href="{{ route('ted01d') }}" target="_blank" class="btn_back mt10">製品詳細はこちら</a>
            </div>  
        </section>

        <h2 id="TE-BD21f" class="border_b mb20 id_top">PassCode×TE-BD21f</h2>
        <section class="artist_movie">
            <div><img src="{{ asset('images/artists/passcode_mv02.jpg') }}" alt="PassCode"></div>
            <div>
                <h3 class="mt20">PassCode</h3>
                <p class="mt10">2016年メジャーデビュー。バンドサウンドをベースにスクリーモ、メタルコアなど変幻自在の楽曲群とシャウト・スクリームを駆使した大阪発4人組アーティスト。</p>
                <p class="mt10">2018年にはイギリスJPU Recordsより海外デビュー盤をリリース。今夏には3年連続SUMMER SONICに招集、Vans Warped Tour Japan 2018など多くの大型ロックフェスへも参戦。</p>
                <p class="mt10">2019年4月、メジャー2作目となるアルバム「CLARITY」をリリース。同作品はオリコン週間アルバムチャートで初登場10位を記録、自身最高位を更新。</p>
                <p class="mt10">同年4月より自身初となるZepp Tour 2019を開催。東名阪対バンツアー「VERSUS PASSCODE 2019」、そして秋からは全国ツアー「CLARITY Plus 19-20」の開催が決定している。</p>
                <p class="mt10">国内外ともにロックファンやアイドルファンから絶大な支持を獲得している。</p>
            </div>
            <dl class="mt20">
                <dt>■PassCode オフィシャルHP</dt>
                <dd><a href="https://passcode-official.com/" target="_blank">https://passcode-official.com/</a></dd>
    
                <dt class="mt10">■PassCode Twitter</dt>
                <dd><a href="https://twitter.com/passcodeO" target="_blank">Twitter https://twitter.com/passcodeO</a></dd>
    
                <dt class="mt10">■PassCode Instagram</dt>
                <dd><a href="https://www.instagram.com/passcodeo/" target="_blank">https://www.instagram.com/passcodeo/</a></dd>
            </dl>
    
            <div class="mt20 alc">
                <iframe width="600" height="400" src="https://www.youtube.com/embed/gugCIOd5QEo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
    
            <div class="alc mt20">
                <a href="{{ route('tebd21f') }}" target="_blank" class="btn_back mt10">製品詳細はこちら</a>
            </div>  
        </section>     
    </article>
</div><!--/main-->
</div><!--/container-->

@endsection

@section('javascript-footer')
    
@endsection