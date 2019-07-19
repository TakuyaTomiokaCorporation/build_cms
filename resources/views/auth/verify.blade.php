@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('メールアドレスが正しいか確認する') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('新しい確認リンクがあなたのメールアドレスに送信されました') }}
                        </div>
                    @endif
                    {{ __('手続きを進める前に、確認リンクがあるかどうかメールボックスを確認してください') }}
                    {{ __('もしメールを受け取っていない場合は、') }}, <a href="{{ route('verification.resend') }}">{{ __('こちらをクリックして再度送信してください。') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
