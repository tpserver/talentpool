@extends('layouts.login')
@section('content')
    {{ Form::open(['id' => 'change-password-form', 'route' => 'profile.changeEmail' ]) }}
        <div id="log_in_header">{{ trans('Change Email') }}</div>
        <div id="log_in_box">
            <div class="text_input_container">
                {{$errors->first('password', '<div class="error_overlay" id="password_error" style="display: block;">:message</div>')}}
                {{Form::password('password', ['id' => 'password_input', 'placeholder' => 'Password'])}}
            </div>
            <div class="text_input_container">
                {{$errors->first('new_email', '<div class="error_overlay" id="new_email_error" style="display: block;">:message</div>')}}
                {{Form::text('new_email', Input::old('new_email'), ['id' => 'new_email_input', 'placeholder' => 'New Email'])}}
            </div>
            <div class="text_input_container">
                {{$errors->first('new_email_confirmation', '<div class="error_overlay" id="new_email_confirmation_error" style="display: block;">:message</div>')}}
                {{Form::text('new_email_confirmation', Input::old('new_email_confirmation'), ['id' => 'new_email_confirmation_input', 'placeholder' => 'Confirm New Email'])}}
            </div>
            {{ Form::submit(trans('Change Email')) }}
            <div id="spacer"></div>
        </div>
    {{ Form::close() }}
@stop
