<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', array('title', 'TalentPool - Sign Up') )
        {{ HTML::style('css/base.css') }}
        {{ HTML::style('css/base_extended.css') }}
        
        <!-- Facebook Conversion Code for New sign ups - Rachel Donallon 1 -->
        <script>(function() {
          var _fbq = window._fbq || (window._fbq = []);
          if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
          }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '6026354383755', {'value':'0.00','currency':'GBP'}]);
        </script>
        <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6026354383755&amp;cd[value]=0.00&amp;cd[currency]=GBP&amp;noscript=1" /></noscript>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                <div id="progress_bar">
                    <div id="segment_1" class="progress_segment pos_7">
                        <div class="progress_segment_text">Interests</div>
                        <div class="progress_segment_icon"></div>
                    </div>
                    <div id="segment_2" class="progress_segment pos_1">
                        <div class="progress_segment_text">Education</div>
                        <div class="progress_segment_icon"></div>
                    </div>
                    <div id="segment_3" class="progress_segment pos_1">
                        <div class="progress_segment_text">Experience</div>
                        <div class="progress_segment_icon"></div>
                    </div>
                    <div id="segment_4" class="progress_segment pos_2">
                        <div class="progress_segment_text">Other</div>
                        <div class="progress_segment_icon"></div>
                    </div>
                </div>
                <div id="spacer"></div>
            </div>
        </div>

        <div id="success_header">Congratulations! You've signed up to TalentPool</div>
        <div class="animated bounce" id="large_tick"></div>
        <div id="confirmation_email_desc">We've just sent you a link to confirm that your email address is <em>{{ $email }}</em></div>
        <div id="share_page_header">We're excited to have you on board and your selected charity will be really grateful for your support. Now why not let your friends know about TalentPool?</div>
        <div id="share_buttons_container">
            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.talentpool.com" target="_blank"><div id="fb_share_button">Share with Facebook</div></a>
            <a href="https://twitter.com/share?url=http%3A%2F%2Fwww.talentpool.com" target="_blank"><div id="twitter_share_button">Share with Twitter</div></a>
        </div>
	
	<div id="spacer"></div>
        <div id="spacer"></div>
	
        @include('common.bottom')
        {{ HTML::script('js/sign_up.js') }}
    </body>
</html>
