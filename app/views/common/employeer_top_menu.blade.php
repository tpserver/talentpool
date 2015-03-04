<div id="topbar_bg">
    <div id="topbar">
        <a href="/"><div id="logo"></div></a>
<?php if( !isset($currentPage) ) $currentPage = true; ?>
<div id="menu">
    <div style="display: none;" class="menu_option @if( $currentPage == Route::is('campaign*')) {{'menu_option_selected'}} @endif">{{link_to_route('campaign.index', 'Campaigns')}}</div>
    <div style="display: none;" class="menu_option @if( $currentPage == Route::is('opportunity*')) {{'menu_option_selected'}} @endif">{{link_to_route('opportunity.index', 'Opportunities')}}</div>
    <div style="display: none;" class="menu_option @if( $currentPage == Route::is('candidatesPool*')) {{'menu_option_selected'}} @endif">{{link_to_route('candidatesPool.index', 'Talent Pools')}}</div>
</div>
        <div class="dropdown_no_focus" id="user_dropdown">
        <svg id="triangle_svg_no_focus" height="10" width="10">
          <polygon id="dropdown_triangle" class="triangle_no_focus" points="5,10 10,0 0,0"/>
        </svg>
        <svg id="triangle_svg_focus" height="10" width="10">
          <polygon id="dropdown_triangle" class="triangle_focus" points="5,10 10,0 0,0"/>
        </svg>
        <div id="user_name">{{Sentry::getUser()->first_name}}</div>
        <div id="hello_span">Hello,</div>
        <div id="dropdown_menu">
        	<a href="{{route('employers.settings')}}"><div class="dropdown_menu_option">Settings</div></a>
        	<a href="{{ URL::to('logout') }}"><div class="dropdown_menu_option">Log Out</div></a>
        </div>
        </div>
        
    </div>
</div>