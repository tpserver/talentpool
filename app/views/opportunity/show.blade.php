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
        </div>
        <div id="main_container">
            <h1>Opportunity</h1>
            <table class="table table-hover table-bordered table-striped">
                <tr>
                    <td class="pool_name">Name</td><td>{{{ $opportunity->name }}}</td>
                </tr>
                <tr>
                    <td class="pool_size">Work Type</td><td>{{{ $opportunity->workType->name }}}</td>
                </tr>
            </table>
        {{ link_to_route('opportunity.index', 'Back', [], ['id' => 'new_campaign_btn', 'class' => 'red-button small-button float-left mrg-left-5']) }}
        </div>
        <div id="footer"></div>
    </body>
</html>
