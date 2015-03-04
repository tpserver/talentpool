<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', array('title', 'GradList - Reset Password') )
        {{ HTML::style('css/policy.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/base.css') }}
        {{ HTML::style('css/log_in.css') }}
    </head>
    <body>
        <div id="topbar_bg">
            <div id="topbar">
                <div id="logo"></div>
                <div id="spacer"></div>
            </div>
        </div>
        <form id="gl_recover_password" method="post" action="">
            <div id="recover_password_header">Recover Password</div>
            <div id="recover_password_box">
                <div class="text_input_container">
                    <input id="email_input" type="text" name="" value="" placeholder="Email" />
                </div>
                <input type="submit" name="" value="Recover Password" />
                <div id="spacer"></div>
            </div>
        </form>  
        <div id="spacer"></div>
        <div id="footer"></div>
        @include('common.bottom')
        {{ HTML::script('js/log_in.js') }}
    </body>
</html>
