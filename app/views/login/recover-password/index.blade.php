@extends('layouts.login')
@section('content')
    {{ Form::open(['id' => 'gl_log_in', 'route' => 'login.recoverPassword' ]) }}
    {{ Form::hidden('password_incorrect', $errors->first('password'), ['id' => 'password_incorrect']) }}
    {{ Form::hidden('username_not_found', $errors->first('email'), ['id' => 'username_not_found']) }}
        <div id="log_in_header">{{ trans('login.Password Reset') }}</div>
        <div id="log_in_box">
            @if(isset($resultMsg))
            <div class="text_input_container">
                {{$resultMsg}}
            </div>
            @endif
            <div class="text_input_container">
                <div class="error_overlay" id="username_error">{{$errors->first('email')}}</div>
                {{ Form::email('email', isset($email) ? $email : '', ['placeholder' => trans('login.Email'), 'id' => 'email_input']) }}
            </div>
            {{ Form::submit(trans('login.Reset Password')) }}
            <div id="spacer"></div>
        </div>
        <div id="forgotten_password_box">{{ link_to_route('sign_up', trans("login.Don't have a profile? Create one here!")) }}</div>
    {{ Form::close() }}
@stop
