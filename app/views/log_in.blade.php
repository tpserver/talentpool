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
                <div class="text_input_container">
                    <div class="error_overlay" id="username_error">{{$errors->first('email')}}</div>
                    {{ Form::email('email', isset($email) ? $email : '', ['placeholder' => 'Email', 'id' => 'email_input']) }}
                </div>
                <div class="text_input_container">
                    <div class="error_overlay" id="password_error">{{$errors->first('password')}}</div>
                    {{ Form::password('password', ['id' => 'password_input', 'placeholder' => 'Password']) }}
                </div>
                {{ Form::submit('Log in') }}
                <div id="spacer"></div>
            </div>
            <div id="forgotten_password_box"><a href="log_in/recover_password">Forgot your password?</a></div>
        {{ Form::close() }}
        <div id="spacer"></div>
        <div id="footer">
        
        <div id="footer_container">
        
        <div id="tp_logo_footer"></div>
        
        <div id="footer_icon_container">
        <div id="facebook" class="footer_icon"></div>
        <div id="twitter" class="footer_icon"></div>
        <div id="linkedin" class="footer_icon"></div>
        </div>
        
        <div id="copyright_container">&#169; GradList Ltd. 2014. All rights reserved.</div>
        
        <div id="links_container">
        {{ link_to_route('terms', 'Terms of Use', [], ['id'=>'terms_link']) }}
        {{ link_to_route('policy', 'Privacy Policy', [], ['id'=>'privacy_link']) }}
        {{ link_to_route('faq', 'FAQ') }}
        </div>
        
        <div id="spacer"></div>
        
        </div>
        
        </div>
        @include('common.bottom')
        {{ HTML::script('js/log_in.js') }}
        <script>
        var emailError = '{{$errors->first("email")}}';
        var passwordError = '{{$errors->first("password")}}';
            
        if(emailError.length > 0)
            $('#username_error').fadeIn();
        if(passwordError.length > 0)
            $('#password_error').fadeIn();
        </script>
    </body>
</html>