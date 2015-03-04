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
        @yield('head.content')
    </head>
    <body>
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                <div id="spacer"></div>
            </div>
        </div>
        @yield('content')
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
        </script>
        @yield('bottom.content')
    </body>
</html>
