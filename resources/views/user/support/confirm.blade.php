@extends('layouts.user_master')

@section('title', '確認画面 |')

@section('description', '日本のサウンドを熟知した日本人オーディオエキスパートが携わる日本発のオーディオビジュアルブランド')

@section('css')
<style type="text/css">
    .confirm_item {
        padding: 20px 10px 20px 50px;
    }
    
    .confirm_item dt {
        margin-top: 16px;
        font-weight: bold;
    }
    
</style>
@endsection

@section('javascript-head')

<!-- Google ReCapcha -->
{{-- <script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function timestamp() 
    { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
</script> --}}

<script src="http://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="/js/pardot-assist_template-2.0.js"></script>

    {{-- Add Below from toBe Marketing --}}
<script>
    (function () {

        "use strict";
    
        /**
         * Pardot form handler assist script.
         * Copyright (c) 2018 toBe marketing, inc. 
         * Released under the MIT license
         * http://opensource.org/licenses/mit-license.php
         */
    
        // == 設定項目ここから ==================================================================== //
    
        /*
         * ＠データ取得方式
         */
        var useGetType = 1;
    
        /*
         * ＠フォームハンドラーエンドポイントURL
         */
        var pardotFHUrl = 'https://info.aviot.jp/l/781993/2019-07-23/9j';
    
        /*
         * ＠フォームのセレクタ名
         */
        var parentFormName = 'form';
    
        /*
         * ＠送信ボタンのセレクタ名
         */
        var submitButton = 'input[type="submit"]';
    
        /* 
         * ＠項目マッピング
         */
    
        var defaultFormJson = [
            {
                "tag_name": "email",
                "x_target": "email",
            },
            {
                "tag_name": "last_name",
                "x_target": "last_name",
            },
            {
                "tag_name": "first_name",
                "x_target": "first_name",
            },
        ];
    
        // == 設定項目ここまで ==================================================================== //
    
        // 区切り文字設定
        var separateString = ',';
    
        var iframeFormData = '';
        for (var i in defaultFormJson) {
            iframeFormData = iframeFormData + '<input id="pd' + defaultFormJson[i]['tag_name'] + '" type="text" name="' + defaultFormJson[i]['tag_name'] + '"/>';
        }
    
        var iframeHeadSrc =
            '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
    
        var iframeSrcDoc =
            '<form id="shadowForm" action="' + pardotFHUrl + '" method="post" accept-charset=\'UTF-8\'>' +
            iframeFormData +
            '<input id="shadowSubmit" type="submit" value="send" onclick="document.charset=\'UTF-8\';"/>' +
            '</form>';
    
        var shadowSubmited = false;
        var isError = false;
        var pdHiddenName = 'pdHiddenFrame';
    
        /**
         * エスケープ処理
         * @param val
         */
        function escapeSelectorString(val) {
            return val.replace(/[ !"#$%&'()*+,.\/:;<=>?@\[\\\]^`{|}~]/g, "\\$&");
        }
    
        $(function () {
    
            $(submitButton).click(function () {
                // Submitボタンを無効にする。
                $(submitButton).prop("disabled", true);
            });
    
            $('#' + pdHiddenName).remove();
    
            $('<iframe>', {
                id: pdHiddenName
            })
                .css({
                    display: 'none'
                })
                .on('load', function () {
    
                    if (shadowSubmited) {
                        if (!isError) {
    
                            shadowSubmited = false;
    
                            // 送信ボタンを押せる状態にする。
                            $(submitButton).prop("disabled", false);
    
                            // 親フォームを送信
                            $(parentFormName).submit();
                        }
                    } else {
                        $('#' + pdHiddenName).contents().find('head').prop('innerHTML', iframeHeadSrc);
                        $('#' + pdHiddenName).contents().find('body').prop('innerHTML', iframeSrcDoc);
    
                        $(submitButton).click(function () {
                            shadowSubmited = true;
                            try {
                                for (var j in defaultFormJson) {
                                    var tmpData = '';
    
                                    // NANE値取得形式
                                    if (useGetType === 1) {
                                        $(parentFormName + ' [name="' + escapeSelectorString(defaultFormJson[j]['x_target']) + '"]').each(function () {
    
                                            //checkbox,radioの場合、未選択項目は送信除外
                                            if (["checkbox", "radio"].indexOf($(this).prop("type")) >= 0) {
                                                if ($(this).prop("checked") == false) {
                                                    return true;
                                                }
    
                                            }
    
                                            if (tmpData !== '') {
                                                tmpData += separateString;
                                            }
    
                                            // 取得タイプ 1 or Null(default) :val()方式, 2:text()形式
                                            if (defaultFormJson[j]['x_type'] === 2) {
                                                tmpData += $(this).text().trim();
                                            } else {
                                                tmpData += $(this).val().trim();
                                            }
                                        });
                                    }
    
                                    // セレクタ取得形式
                                    if (useGetType === 2) {
                                        $(defaultFormJson[j]['x_target']).each(function () {
                                            if (tmpData !== '') {
                                                tmpData += separateString;
                                            }
    
                                            // 取得タイプ 1 or Null(default) :val()方式, 2:text()形式
                                            if (defaultFormJson[j]['x_type'] === 2) {
                                                tmpRegexData = $(this).text().trim();
                                            } else {
                                                tmpRegexData = $(this).val().trim();
                                            }
                                        });
                                    }
    
                                    $('#' + pdHiddenName).contents().find('#pd' + escapeSelectorString(defaultFormJson[j]['tag_name'])).val(tmpData);
    
                                }
    
                                $('#' + pdHiddenName).contents().find('#shadowForm').submit();
    
                            } catch (e) {
                                isError = true;
    
                                $(submitButton).prop("disabled", false);
    
                                $(parentFormName).submit();
                                shadowSubmited = false;
                            }
                            return false;
                        });
                    }
                })
                .appendTo('body');
        });
    })();
</script>

@endsection

@section('body_id', 'confirm')

@section('content')
<div id="container" class="both">
    <div id="" class="main" role="main">
    {{-- <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST"> --}}
    <form action="{{ route('product_register.thanks') }}" method="POST">
    {{-- <input type=hidden name='captcha_settings' value='{"keyname":"aviotcap","fallback":"true","orgId":"00D6F000002Kz08","ts":""}'>
    <input type=hidden name="oid" value="00D6F000002Kz08">
    <input type=hidden name="retURL" value="aviot.jp/support/registration/thanks">
    <input type="hidden" name="00N6F00000WyN80" value="A" /> --}}
    @csrf
    @method('POST')

    <input type="hidden" name="last_name" value="{{ $last_name }}">
    <input type="hidden" name="first_name" value="{{ $first_name }}">
    {{-- <input type="hidden" name="00N6F00000SUcr2" value="{{ $last_name_ja }}">
    <input type="hidden" name="00N6F00000SUcr7" value="{{ $first_name_ja }}">
    <input type="hidden" name="00N6F00000MmEeS" value="{{ $gender }}">
    <input type="hidden" name="zip" value="{{ $zip }}">
    <input type="hidden" name="state" value="{{ $state }}">
    <input type="hidden" name="city" value="{{ $city }}">
    <input type="hidden" name="N6F00000Mmgax" value="{{ $street }}">
    <input type="hidden" name="phone" value="{{ $phone }}"> --}}
    <input type="hidden" name="email" value="{{ $email }}">
    {{-- <input type="hidden" name="00N6F00000O5eOx" value="{{ $product }}">
    <input type="hidden" name="00N6F00000MmEeh" value="{{ $color }}">
    <input type="hidden" name="00N6F00000MmEem" value="{{ $serial }}">
    @isset($date)
    <input type="hidden" name="00N6F00000MmEer" value="{{ $date }}">
    @endisset
    @isset($from_aviot)
    <input type="hidden" name="00N6F00000MmEew" value="{{ $from_aviot }}">
    @endisset
    @isset($from_other)
    <input type="hidden" name="00N6F00000MmEf1" value="{{ $from_other }}">
    @endisset --}}

    <article class="w1020 w98 m_auto mb60">
        <h2 class="pt20 border_b mb20">ご確認</h2>
        <p class="read">製品保証登録情報ににお間違いがないかご確認ください。</p>
    
        <div class="confirm_item bgGray mt20">
            <dl>
                <dt>お名前</dt>
                <dd>{{ $last_name.$first_name }}</dd>
    
                {{-- <dt>フリガナ</dt>
                <dd>{{ $last_name_ja.$first_name_ja }}</dd>
    
                <dt>性別</dt>
                <dd>{{ $gender }}</dd>
    
                <dt>ご住所</dt>
                <dd>{{ $zip }}</dd>
                <dd>{{ $state }}</dd>
                <dd>{{ $city }}</dd>
                <dd>{{ $street }}</dd>
                
                <dt>電話番号</dt>
                <dd>{{ $phone }}</dd> --}}
                
                <dt>メールアドレス</dt>
                <dd>{{ $email }}</dd>
    
                {{-- <dt>機種名</dt>
                <dd>{{ $product }}</dd>
    
                <dt>色</dt>
                <dd>{{ $color }}</dd>
    
                <dt>シリアルナンバー</dt>
                <dd>{{ $serial }}</dd>
    
                <dt>購入日</dt>
                <dd>
                    @isset($date)
                    {{ $date }}        
                    @endisset
                </dd>
    
                <dt>購入店（miraporta）</dt>
                <dd>
                    @isset($from_aviot)
                    {{ $from_aviot }}        
                    @endisset
                </dd>
    
                <dt>購入店（AVIOT公式ストア/miraporta以外）</dt>
                <dd>
                    @isset($record)
                    {{ $from_other }}
                    @endisset
                </dd>
            </dl> --}}
            {{-- <div class="g-recaptcha m_auto mt20" data-sitekey="6Ldnm68UAAAAAIHuRLurfVAazlDVc4aJw_f-CLG2"></div> --}}
            <p class="alc mt20"><input type="submit" name="submit" class="btn_Blk"></p>
        
        </form>
        </div>
        
        
    </article>
        
</div><!--/main-->
</div><!--/container-->
    
@endsection

@section('javascript-footer')
    
@endsection