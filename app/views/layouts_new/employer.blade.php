<html>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
     @include('common.head', array('title', 'GradList - Frequently Asked Questions') )
    <title>TalentPool</title>
    <meta name="viewport" content="width=device-width">
    <!--@section('head')-->
    {{ HTML::style('http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic') }}
    {{ HTML::style('css/normalize.css') }}
    {{ HTML::style('css/new_dashboard/base.css') }}
    {{ HTML::script('js/jquery-1.10.2.js') }}
    {{ HTML::script('js/jquery.hoverIntent.js') }}
    {{ HTML::script('js/chosen.jquery.min.js') }} 
    {{ HTML::script('js/new_dashboard.js') }}
   
    
    @show
    </head>
    <body>

        @include('common.employeer_top_menu')
        
        <!--<div id="sidebar_spacing"></div>-->
        
        @yield('outside_main')
        
        <div id="main_container">
        
        <div id="mobile_nav_icon">
        <span></span>
          <span></span>
          <span></span>
        </div>
        
        <h1>@yield('title')</h1>
        
        <div class="h1_shadow"></div>
        
        <div class="h1_spacing"></div>
        
        @yield('body')
        
        </div>
         
       

<div class="spacer"></div>
        <div id="footer"></div>
        @include('common.bottom')
        @yield('bottom.content')
    </body>
</html>
 