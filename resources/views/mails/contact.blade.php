<h1>aviot.jpお問合せフォームのお知らせ</h1>

<p>※本メールは自動返信です</p>

<p>aviot.jpのお問合せフォームより{{ $contact_sent['last_name'] }}様より下記の連絡が届きました。<br>
ご対応よろしくお願いいたします。</p>

<dl>
    <dt>お名前</dt>
    <dd>{{ $contact_sent['last_name'].$contact_sent['first_name'] }}</dd>

    <dt>フリガナ</dt>
    <dd>{{ $contact_sent['last_name_ja'].$contact_sent['first_name_ja'] }}</dd>

    <dt>性別</dt>
    <dd>{{ $contact_sent['sex'] }}</dd>

    <dt>ご住所</dt>
    <dd>{{ $contact_sent['zip'] }}</dd>
    <dd>{{ $contact_sent['state'] }}</dd>
    <dd>{{ $contact_sent['city'] }}</dd>
    <dd>{{ $contact_sent['street'] }}</dd>
    
    <dt>電話番号</dt>
    <dd>{{ $contact_sent['phone'] }}</dd>
    
    <dt>メールアドレス</dt>
    <dd>{{ $contact_sent['email'] }}</dd>

    <dt>機種名</dt>
    <dd>{{ $contact_sent['product'] }}</dd>

    <dt>色</dt>
    <dd>
        @isset($contact_sent['color'])
        {{ $contact_sent['color'] }}
        @endisset
    </dd>

    <dt>購入日</dt>
    <dd>
        @isset($contact_sent['purchase_date'])
        {{ $contact_sent['purchase_date'] }}
        @endisset
    </dd>

    <dt>購入店（miraporta）</dt>
    <dd>
        @isset($contact_sent['shop_miraporta'])
        {{ $contact_sent['shop_miraporta'] }}    
        @endisset
    </dd>

    <dt>購入店（AVIOT公式ストア/miraporta以外）</dt>
    <dd>
        @isset($contact_sent['shop_other'])
        {{ $contact_sent['shop_other'] }}        
        @endisset
    </dd>

    <dt>お問い合わせ分類</dt>
    <dd>{{ $contact_sent['category'] }}</dd>

    <dt>お問い合わせ内容</dt>
    <dd>{{ $contact_sent['content'] }}</dd>
</dl>