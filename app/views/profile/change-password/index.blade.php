    <?php
$cookiesssss = Session::all();
echo "<pre>";
 print_r($cookiesssss);?>
@extends('layouts.login')
@section('content')
        {{ Form::open(['id' => 'change-password-form', 'route' => 'profile.saveChangedPassword' ]) }}
            <div id="log_in_header">{{ trans('Change Password') }}</div>
            <div id="log_in_box">
                <div class="text_input_container">
                    {{$errors->first('password', '<div class="error_overlay" id="password_error" style="display: block;">:message</div>')}}
                    {{Form::password('password', ['id' => 'password_input', 'placeholder' => 'Current Password'])}}
                </div>
                <div class="text_input_container">
                    {{$errors->first('new_password', '<div class="error_overlay" id="new_password_error" style="display: block;">:message</div>')}}
                    {{Form::password('new_password', ['id' => 'new_password_input', 'placeholder' => 'New Password'])}}
                </div>
                <div class="text_input_container">
                    {{$errors->first('new_password_confirmation', '<div class="error_overlay" id="new_password_confirmation_error" style="display: block;">:message</div>')}}
                    {{Form::password('new_password_confirmation', ['id' => 'new_password_confirmation_input', 'placeholder' => 'Confirm New Password'])}}
                </div>
                {{ Form::submit(trans('Change Password')) }}
                <div id="spacer"></div>
            </div>
        {{ Form::close() }}
@stop