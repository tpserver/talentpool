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
    </head>
    <body>
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                @include('common.employeer_top_menu')
            </div>
        </div>
            <div id="main_container">
                <h1><a href="campaign">Campaigns</a> / {{$campaign->name}}</h1>
                <h3>Sent last Tuesday to {{$campaign->emails_sent}} candidates</h3>
                <div id="box_container">
                    <div class="color_box" id="opportunity_box">
                        <div class="box_label">Opportunity</div>
                        <div class="box_headline">{{$campaign->opportunity->name}}</div>
                    </div>
                    <div class="color_box" id="candidate_pool_box">
                        <div class="box_label">Candidate Pool</div>
                        <div class="box_headline">{{$campaign->candidatesPool->name}}</div>
                    </div>
                    <div class="color_box" id="stats_box">
                        <div class="box_label">Open Rate</div>
                        <div class="box_headline">{{$campaign->open_rate}}%</div>
                    </div>
                    <div class="color_box" id="stats_box">
                        <div class="box_label">Response Rate</div>
                        <div class="box_headline">{{$campaign->response_rate}}%</div>
                    </div>
                </div>
            </div>
            <div class="red_button" id="extend_campaign_btn">Extend Campaign</div>
        </div>
        <div id="footer"></div>
    </body>
</html>
