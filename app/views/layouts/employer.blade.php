<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', array('title', 'GradList - Frequently Asked Questions') )
        {{ HTML::style('css/base.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/db_search.css') }}
        {{ HTML::style('css/base_extended.css') }}
        <style type="text/css">
            .error_overlay {
                height: 44px;
                width: 595px;
            }   
        </style>
        @yield('head.content')
    </head>
    <body>
                @include('common.employeer_top_menu')

        <div id="main_container">
            @yield('content')
        </div>
        <div id="footer"></div>
        @include('common.bottom')
        @yield('bottom.content')
    </body>
</html>
