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
                <div id="menu">
                    <div class="menu_option">Dashboard</div>
                    <div class="menu_option">Campaigns</div>
                    <div class="menu_option">Candidates</div>
                    <div class="menu_option menu_option_selected">Opportunities</div>
                </div>
            </div>
        </div>
        <div id="main_container">
            <h1>Email Templates</h1>
            <table class="table table-hover table-bordered table-striped">
                <tr>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Total campaigns</th>
                    <th>Active campaign</th>
                    <th></th>
                </tr>
                @foreach( $emailTemplates as $emailTemplate )
                <tr>
                  <td class="pool_name">{{ link_to_route('email-template.show', $emailTemplate->name, $emailTemplate->id) }}</td>
                  <td class="pool_size">{{{ $emailTemplate->subject }}}</td>
                  <td class="pool_campaign_used">{{ rand(0, 20) }}</td>
                  <td class="pool_new_candidates">no</td>
                  <td class="pool_filters">{{ link_to_route('email-template.edit', 'Edit', [], ['id' => 'edit-template-btn', 'class' => 'small-button red-button float-left']) }}{{ Form::delete('email-template/' . $emailTemplate->id, 'Delete', [], ['class' => 'small-button red-button float-left mrg-left-5']) }}</td>
                </tr>
                @endForeach
            </table>
        {{ link_to_route('email-template.create', 'New Email Template', [], ['id' => 'new_campaign_btn', 'class' => 'red_button']) }}
        </div>
        <div id="footer"></div>
        @include('common.bottom')
    </body>
</html>
