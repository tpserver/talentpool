@extends('layouts.login')
@section('content')
    {{ Form::open(['id' => 'gl_log_in', 'route' => 'login.saveNewPassword' ]) }}
    {{ Form::hidden('password_incorrect', $errors->first('password'), ['id' => 'password_incorrect']) }}
    {{ Form::hidden('username_not_found', $errors->first('email'), ['id' => 'username_not_found']) }}
        <div id="log_in_header">Password reset</div>
        <div id="log_in_box" style="height: 240px;">
            <div class="text_input_container">
                <div class="error_overlay" id="username_error">{{$errors->first('email')}}</div>
                {{ Form::email('email', isset($email) ? $email : '', ['placeholder' => 'Email', 'id' => 'email_input']) }}
            </div>
            <div class="text_input_container">
                <div class="error_overlay" id="username_error">{{$errors->first('email')}}</div>
                {{ Form::password('password', ['placeholder' => 'New Password']) }}
            </div>
            <div class="text_input_container">
                <div class="error_overlay" id="username_error">{{$errors->first('email')}}</div>
                {{ Form::password('password_confitm', ['placeholder' => 'Confirm New Password']) }}
            </div>
            {{ Form::hidden('code', Input::get('code')) }}
            {{ Form::submit('Save Your New Password') }}
            <div id="spacer"></div>
        </div>
        <div id="forgotten_password_box">{{ link_to_route('sign_up', "Don't have a profile? Create one here!") }}</div>
    {{ Form::close() }}
@stop        