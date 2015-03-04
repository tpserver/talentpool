<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', array('title', 'Reset Password') )
        {{ HTML::style('css/base.css') }}
        {{ HTML::style('css/log_in.css') }}
        {{ HTML::style('css/main.css') }}
    </head>
    <body>
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                <div id="spacer"></div>
            </div>
        </div>
        <input type="hidden" name="" value="{{ $reset_code }}" />
        <form id="gl_recover_password" method="post" action="/index.php/log_in/reset_password">
            <div id="change_password_success">Password successfully changed!</div>
            <div id="recover_password_header">Recover Password</div>
            <div id="reset_password_box">
                <div class="text_input_container">
                    <div class="error_overlay" id="new_password_error">Passwords don't match!</div>
                    <input id="password_input" type="password" name="password_input" value="" placeholder="New Password" />
                </div>
                <div class="text_input_container">
                    <div class="error_overlay" id="new_password_repeat_error"></div>
                    <input id="password_repeat_input" type="password" name="password_repeat_input" value="" placeholder="Repeat New Password" />
                </div>
                <div class="red_button" id="reset_password_btn">Reset Password</div>
                <div id="spacer"></div>
            </div>
        </form>  
        <div id="spacer"></div>
        <div id="footer"></div>
        @include('common.bottom')
        {{ HTML::script('js/log_in.js') }}
    </body>
</html>
