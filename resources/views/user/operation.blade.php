@extends('layouts.user_master')

@section('title', 'ペアリング動画 |')

@section('description', 'AVIOT製品の問い合わせはこちらから')

@section('css')

@endsection

@section('body_id', 'movies')

@section('content')

<div id="container" class="both mb60">
<div id="" class="main w1020 w98 m_auto" role="main">
    <h2 class="pt20 border_b mb20">ペアリング動画</h2>
    <section class="pairing">
        <h3 class="border_l">ペアリング動画</h3>
        <ul class="flex mt20">
            <li>
                <h4>WE-BD21d</h4>
                <p class="alc"><iframe width="300" height="200" src="https://www.youtube.com/embed/kK23PsB9yFk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
            </li>
            <li>
                <h4>TE-D01g</h4>
                <p class="alc"><iframe width="300" height="200" src="https://www.youtube.com/embed/BrNqZoNzGPQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
            </li>
            <li>
                <h4>TE-D01g装着方法</h4>
                <p class="alc"><iframe width="300" height="200" src="https://www.youtube.com/embed/fF8eA-5728E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
            </li>
            <li>
                <h4>TE-D01e、TE-D01d、TE-D01d-kzn</h4>
                <p class="alc"><iframe width="300" height="200" src="https://www.youtube.com/embed/oAn2WwDWkw8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
            </li>
            <li>
                <h4>TE-D01a</h4>
                <p class="alc"><iframe width="300" height="200" src="https://www.youtube.com/embed/nPEzH2aLWL0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
            </li>
            <li>
                <h4>TE-D01b</h4>
                <p class="alc"><iframe width="300" height="200" src="https://www.youtube.com/embed/a2YxK_2yhhw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
            </li>
        </ul>
        <p><a href="https://www.youtube.com/playlist?list=PLj8nT5YBl3EDoV7TWMC0vyBBnCMKY5xom" target="_blank" class="btn_Blk">他機種のペアリング方法はこちら</a></p>
    </section>
</div><!--/main-->
</div><!--/container-->

@endsection

@section('javascript-footer')
    
@endsection