@extends('layouts.login')
@section('content')
    <div id="log_in_header" style="padding-top: 100px">{{ trans('login.Password Reset') }}</div>
    <div id="log_in_box">
        @if(isset($resultMsg))
        <div class="text_input_container">
            {{$resultMsg}}
        </div>
        @endif
        <div id="confirmation_email_desc">You're password was changed. You can now login with your credentials.</div>
        <?php $loginLocationAttrUrl = 'window.location="' . route('login') . '"'; ?>
        {{Form::submit('Log in', ['onclick' => $loginLocationAttrUrl])}}
    </div>
@stop
