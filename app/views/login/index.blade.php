<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head')
        {{ HTML::style('css/log_in.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/base.css') }}
    </head>
    
    <body>
    <?php
$cookiesssss = Session::all();
echo "<pre>";
 print_r($cookiesssss);?>
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                <div id="spacer"></div>
            </div>
        </div>
        {{ Form::open(['id' => 'gl_log_in', 'route' => 'session.store' ]) }}
        {{ Form::hidden('password_incorrect', $errors->first('password'), ['id' => 'password_incorrect']) }}
        {{ Form::hidden('username_not_found', $errors->first('email'), ['id' => 'username_not_found']) }}
            <div id="log_in_header">Log In</div>
            <div id="log_in_box">
            	
            	<?php 
            	$error_message = Session::get('error', FALSE);
            	if ($error_message !== FALSE) {
            		echo('<div class="error_message">');
            		echo($error_message);
            		echo('</div>');
            	}
            	
            	?>
               
                
                <div class="text_input_container">
                    {{$errors->first('email', '<div class="error_overlay" id="username_error">:message</div>')}}
                    {{ Form::email('email', isset($email) ? $email : '', ['placeholder' => trans('login.Email'), 'id' => 'email_input']) }}
                </div>
                <div class="text_input_container">
                    {{$errors->first('password', '<div class="error_overlay" id="password_error">:message</div>')}}
                    {{ Form::password('password', ['id' => 'password_input', 'placeholder' => trans('login.Password')]) }}
                </div>
                {{ Form::submit('Log in') }}
                <div class="clear"></div>
            </div>
            <div id="forgotten_password_box"><span>Forgot your password?</span></div>
        {{ Form::close() }}
        <div id="spacer"></div>
        <div id="footer"></div>
        @include('common.bottom')
        {{ HTML::script('js/log_in.js') }}
        <script>
        var emailError = '{{$errors->first("email")}}';
        var passwordError = '{{$errors->first("password")}}';
            
        if(emailError.length > 0)
            $('#username_error').fadeIn();
        if(passwordError.length > 0)
            $('#password_error').fadeIn();
        
        $(document).ready(function() {
        
        $("#forgotten_password_box").click(function() {
        
        var emailInput = $("#email_input").val();
        
        var passwordUrl = "http://talentpool.com/login/recover-password?email=" + emailInput;
        
        window.location = passwordUrl;
        
        });
        
        });    
            
        </script>

    </body>
</html>