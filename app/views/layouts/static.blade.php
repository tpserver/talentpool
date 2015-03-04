<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head')
        {{ HTML::style('css/policy.css') }}
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
        @yield('bottom.content')
    </body>
</html>