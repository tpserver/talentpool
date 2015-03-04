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
       
       	<h1>Candidates</h1>
        
        <h2>Candidate Pools</h2>
        
        <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>Name</th>
            <th>Size</th>
            <th>Campaign Status</th>
            <th>New Candidates?</th>
            <th>Filters</th>
        </tr>
        <tr>
          <td class="pool_name"><a href="campaign_details">Oxbridge Scientists</td></a>
          <td class="pool_size">272</td>
          <td class="pool_campaign_used">Contacted</td>
          <td class="pool_new_candidates">17</td>
          <td class="pool_filters"><div class="round_box skill">Graduating in 2014</div><div class="round_box skill">Oxford</div><div class="round_box skill">Cambridge</div><div class="round_box skill">Studying Science</div><div class="round_box experience">Speaks French</div></td>
        </tr>
        </table>
        {{ link_to_route('search', 'New Candidate Pool', [], ['id' => 'new_campaign_btn', 'class' => 'red_button']) }}
        <div id="spacer"></div>
        
        </div>
        
        
        
        </div>
        
        <div id="footer">
        </div>
   
    </body>
</html>
