<h1>aviot.jpお問合せフォームのお知らせ</h1>

<p>※本メールは自動返信です</p>

<p>aviot.jpのお問合せフォームより{{ $contact_sent['$last_name'] }}様より下記の連絡が届きました。<br>
ご対応よろしくお願いいたします。</p>

<dl>
    <dt>お名前</dt>
    <dd>{{ $last_name.$first_name }}</dd>

    <dt>フリガナ</dt>
    <dd>{{ $last_name_ja.$first_name_ja }}</dd>

    <dt>性別</dt>
    <dd>{{ $sex }}</dd>

    <dt>ご住所</dt>
    <dd>{{ $zip }}</dd>
    <dd>{{ $state }}</dd>
    <dd>{{ $city }}</dd>
    <dd>{{ $street }}</dd>
    
    <dt>電話番号</dt>
    <dd>{{ $phone }}</dd>
    
    <dt>メールアドレス</dt>
    <dd>{{ $email }}</dd>

    <dt>機種名</dt>
    <dd>{{ $product }}</dd>

    <dt>色</dt>
    <dd>
        @isset($color)
        {{ $color }}
        @endisset
    </dd>

    <dt>購入日</dt>
    <dd>
        @isset($purchase_date)
        {{ $purchase_date }}
        @endisset
    </dd>

    <dt>購入店（miraporta）</dt>
    <dd>
        @isset($shop_miraporta)
        {{ $shop_miraporta }}    
        @endisset
    </dd>

    <dt>購入店（AVIOT公式ストア/miraporta以外）</dt>
    <dd>
        @isset($shop_other)
        {{ $shop_other }}        
        @endisset
    </dd>

    <dt>お問い合わせ分類</dt>
    <dd>{{ $category }}</dd>

    <dt>お問い合わせ内容</dt>
    <dd>{{ $content }}</dd>
</dl>