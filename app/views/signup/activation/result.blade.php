@extends('layouts.login')
@section('content')
    <div id="log_in_header" style="padding-top: 100px">{{ trans('Account activation') }}</div>
    <div id="log_in_box" style="height: 120px;">
        <div id="confirmation_email_desc">{{$resultMsg}}</div>
        @if($showButton)
            {{Form::submit($buttonText, ['onclick' => $btnLocation])}}
        @endif    
    </div>
@stop
