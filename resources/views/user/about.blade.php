@extends('layouts.user_master')

@section('title', 'AVIOTについて |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('content')
<div id="container" class="both mb60">
    <div id="" class="main w1020 w98 m_auto" role="main">
        <h2 class="pt20 border_b mb20">AVIOTについて</h2>
        <section id="" class="mb20">
            <h3 class="border_l">ブランド名へ込めた想い</h3>
            <p class="alc"><img src="{{ asset('images/user/av-iol.png') }}" width="60%"></p>
            <p class="mt20">AVIOTというブランドは、Internet of Things（モノのインターネット）と、Audio、そしてVisualそれぞれの頭文字を組み合わせて作りました。</p>
            <p class="mt10">前世紀の、いわゆるバブル景気に隆盛を極めた日本のAV機器メーカーですが、その後低価格を武器にした韓国や中国などの新興メーカーなどの攻勢により、多くが市場から淘汰され消滅しています。</p>
            <p>この厳しい逆風の中、新しい日本発のメーカーをいちから立ち上げる事には、大きな不安や外部からの強い抵抗もありました。</p>
            <p>ですが、日本のお客様が本来求めている繊細で、美しく、手触りの良い商品が無くなっている事に不満と不安を感じ、志を同じくする仲間と日系ブランド再興の為、商品を造り送り出すことを決意しました。</p>
            <p>廉価ではあるものの、日本メーカーの高い品質が伝わる音づくり、IoTをもっと身近に、誰にでももっと簡単にお使いいただけるイヤホンを目指しています。</p>
            <p class="mt10">「神は細部に宿る」、この言葉を常にモノ造りの中心に置き、細部まで作り込まれた商品を提供し、お客様に深い喜びと感動を与える。そんな製品を造りたい。</p>
            <p>AVIOTの5文字には、我々創業メンバーのそんな熱くて強い想いが刻まれています。</p>
        </section>
    
        <section id="japansound" class="mt40">
            <h3 class="border_l">AVIOTが目指しているのは「日本の音」</h3>
            <div class="flex mt20">
            <div class="mr10">
                <img src="{{ asset('images/user/JAPAN-tuned.png') }}">
            </div>
            <div>
                <p>日本人の多くは、世界でも稀な母音節を中心とした発音体系を持つ「日本語」を聞き、話しています。</p>
            <p>AVIOTのイヤホンにはそんな日本人の聴覚特性を深く学び、熟知しているオーディオエキスパートが携わっていて、日本人の特性に合わせた音響設計、0.1dbレベルのチューニングも妥協することなく調整しています。</p>
            <p>これは『日本語の曲だけが良く聴こえる』という事ではありません。</p>
            <p class="mt10">日本語を聴き慣れた人の耳に合わせて、クラシックやジャズのようなアコースティックな曲でも、EDMやヘビメタのような激しい曲であっても、最も心地よく響くように設計しています。</p>
            <P class="mt10">AVIOTは日本発のオーディオ＆ビジュアルブランドとして「日本の音」を基点とし、「日本の音」をずっと聴き続けていたいと思う心地のよいイヤホン。</P>
            <p>今まで聞こえなかったような音まで聞こえるようなイヤホンを日々研究しています。</p>
            <p class="alc mt20"><a href="https://m.newspicks.com/news/3801368/body/" target="_brank"><img src="{{ asset('images/user/about_bnr.png') }}" width="60%"></a></p>
            </div>
            </div>
        </section>
    </div><!--/main-->
</div><!--/container-->
@endsection

@section('javascript-footer')
    
@endsection