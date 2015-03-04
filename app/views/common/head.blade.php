<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
<title>@if ( isset($title) )
    {{{ $title }}}
@else
    TalentPool - Let the Job Find You
@endif</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=1170, maximum-scale=1.0" />
<meta property="og:title" content="TalentPool - Let the Opportunity Find You" />
<meta property="og:description" content="description" />
<meta property="og:image" content="thumbnail_image" />
{{ HTML::style('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900') }}
{{ HTML::style('http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic') }}
{{ HTML::style('css/normalize.css') }}
{{ HTML::style('css/bootstrap.css') }}
{{ HTML::style('css/animate.css') }}
{{ HTML::style('css/popup.css') }}
{{ HTML::style('css/base.css') }}
{{ HTML::style('css/main.css') }}
{{ HTML::style('css/db_search.css') }}
{{ HTML::style('css/base_extended.css') }}
{{ HTML::script('js/vendor/modernizr-2.6.2.min.js') }}
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); 
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-45195160-1', 'gradlist.co.uk');
    ga('send', 'pageview');
</script>

<script type="text/javascript">
    window.heap=window.heap||[],heap.load=function(t,e){window.heap.appid=t,window.heap.config=e;var a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=("https:"===document.location.protocol?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+t+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(t){return function(){heap.push([t].concat(Array.prototype.slice.call(arguments,0)))}},p=["clearEventProperties","identify","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
    heap.load("585672243");
  </script>

</head>