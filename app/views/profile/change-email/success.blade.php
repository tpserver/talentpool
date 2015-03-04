@extends('layouts.login')
@section('content')
    <div id="log_in_header" style="padding-top: 100px">{{ trans('Change Email') }}</div>
    <div id="log_in_box" style="height: 120px;">
        <div id="confirmation_email_desc">Your email was changed. Please login with your new credentials.</div>
        <?php $loginLocationAttrUrl = 'window.location="' . route('login') . '"'; ?>
        {{Form::submit('Log in', ['onclick' => $loginLocationAttrUrl])}}
    </div>
@stop
