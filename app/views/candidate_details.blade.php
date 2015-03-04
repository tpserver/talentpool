<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', array('title', 'GradList - Frequently Asked Questions') )
        {{ HTML::style('css/animate.css') }}
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
            
            
            
            <div id="decision_container">
            <div id="previous_candidate">&#8592; Previous</div>
            <div id="shortlist_option">Shortlist<div id="shortlist_tick">&#10004;</div></div>
            <div id="decline_option">Decline<div id="decline_cross">&#10008;</div></div>
            <div id="next_candidate">Next &#8594;</div>
            </div>
            
        </div>
        
        <div id="main_container">
       
       	<h1>Candidates / Oxbridge Scientists / Candidate Detail</h1>
        
        <div id="candidate_details_container">
        
        <div id="candidate_name">Andrew Lavelle</div>
        <div class="round_box" id="shortlisted_badge"><div id="shortlisted_text">Shortlisted</div><div id="tick">&#10004;</div></div>
        
        <div id="details_interest_box">
        <div class="box_header">Interested in</div>
        <div class="round_box creative">Advertising</div>
        <div class="round_box creative">Marketing</div>
        <div class="round_box creative">Design</div>
        <div class="round_box creative">Publishing</div>
        </div>
        
        <div id="details_div_header">Education</div>
        
        <div id="details_degree_box">
        
        <div class="qual_type">Undergraduate Degree</div>
        
        <div class="qual_name">Oxford University</div>
         <div class="qual_subject">History - 2:1</div>
         <div class="qual_date">2012</div>
        
        </div>
        
        <div class="details_margin" id="details_school_box">
        	<div class="qual_type">A Levels</div>
        	<div class="qual_name">Maths - A</div>
        </div>
        
        <div id="details_school_box">
        	<div class="qual_type">A Levels</div>
        	<div class="qual_name">Physics - A</div>
        </div>
        
        <div class="details_margin" id="details_school_box">
        	<div class="qual_type">A Levels</div>
        	<div class="qual_name">English Literature - A</div>
        </div>
        
        <div id="details_school_box">
        	<div class="qual_type">A Levels</div>
        	<div class="qual_name">History - A</div>
        </div>
        
        <div class="details_margin" id="details_language_box">
        	<div class="qual_type">Language</div>
        	<div class="qual_name">English - Native</div>
        </div>
        
        <div id="details_language_box">
        	<div class="qual_type">Language</div>
        	<div class="qual_name">French - Basic</div>
        </div>
        
        <div id="details_key_skills_box">
        <div class="box_header">Key Skills</div>
        
        <div class="skill_divider">Programming Languages</div>
        <div class="round_box skill">C++</div>
        <div class="round_box skill">Objective-C</div>
        
        <div class="skill_divider">Web Languages</div>
        <div class="round_box skill">CSS</div>
        <div class="round_box skill">HTML</div>
        <div class="round_box skill">JavaScript</div>
        <div class="round_box skill">jQuery</div>
        <div class="round_box skill">PHP</div>
        
        <div class="skill_divider">Programs</div>
        <div class="round_box skill">Excel</div>
        <div class="round_box skill">Photoshop</div>
        <div class="round_box skill">PowerPoint</div>
        <div class="round_box skill">Word</div>
        </div>
        
        <div id="details_div_header">Experience</div>
        
        <div id="details_experience_box">
        	<div class="qual_type">Full Time Job</div>
        	<div class="qual_name">PwC</div>
        	<div class="qual_subject">Consulting - Over 4 Months</div>
        </div>
        
        <div class="details_margin" id="details_experience_small_box">
        	<div class="qual_type">Society - Academic</div>
        	<div class="qual_name">Oxford University History Society</div>
        	<div class="qual_subject">President</div>
        </div>
        
        <div id="details_experience_small_box">
        	<div class="qual_type">Sport - College</div>
        	<div class="qual_name">Basketball</div>
        	<div class="qual_subject">Team Member</div>
        </div>
        
        <div id="details_key_experience_box">
        <div class="box_header">Key Skills</div>
        
        <div class="round_box experience">Managing Small Teams of People</div>
        <div class="round_box experience">Managing Client Relationships</div>
        <div class="round_box experience">Strategic Decision Making</div>
        <div class="round_box experience">Running Meetings</div>
        <div class="round_box experience">Writing Presentations</div>
        
        </div>
        
        <div id="details_key_experience_box">
        <div class="box_header">Attributes</div>
        
        <div class="round_box attribute">Creative</div>
        <div class="round_box attribute">Enthusiastic</div>
        <div class="round_box attribute">Patient</div>
        <div class="round_box attribute">Thoughtful</div>
        <div class="round_box attribute">Aware</div>
        
        </div>
        
        
        </div>
        
        <div id="spacer"></div>
        
        </div>
        
        <div id="footer">
        </div>
   		@include('common.bottom')
   		{{ HTML::script('js/jquery-ui-1.10.3.custom.min.js') }}
   		{{ HTML::script('js/candidate_details.js') }} 
    </body>
</html>
