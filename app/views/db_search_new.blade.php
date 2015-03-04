<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', array('title', 'TalentPool - Frequently Asked Questions') )
        {{ HTML::style('css/base.css') }}
        {{ HTML::style('css/base_extended.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/db_search_new.css') }}
        {{ HTML::style('css/token-input.css') }}
        {{ HTML::style('css/token-input-facebook.css') }}
    </head>
    <body>
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                <div id="menu">
                <div class="menu_option">Dashboard</div>
                <div class="menu_option menu_option_selected" >Campaigns</div>
                <div class="menu_option">Candidates</div>
                <div class="menu_option" >Opportunities</div>
                </div>

		<!--<div style="background: #fff; height: 70px; width: 100px;">
                	<div id="total_label">
                    	Candidates selected
                	</div>
                	<div id="total">1,112</div>
		</div>-->

            </div>
        </div>
        </div>
        <div id="main_container">
        
        	<h1>Campaigns / New Campaign</h1>
         
         <div id="progress_container">
    <div class="progress_indicator step_1 step-first-ready step-first-on" id="progress-indicator-opportunity"></div>
    <div class="progress_indicator step_2" id="progress-indicator-candidates"></div>
    <div class="progress_indicator step_3" id="progress-indicator-content"></div>
    <div class="progress_indicator step_3" id="progress-indicator-preview"></div>
    <div class="progress_indicator step_4" id="progress-indicator-send"></div>
    <div class="step_text">Opportunity</div>
    <div class="step_text">Candidates</div>
    <div class="step_text">Email</div>
    <div class="step_text">Preview</div>
    <div class="step_text">Send</div>
</div>
        
            
                {{ Form::open(array('url' => 'foo/bar', 'id' => 'search-form')) }}
                <div id="categories_box">
                    <div class="option_icon_box" id="work_option">
                        <div id="border_1" class="option_icon_top_border"></div>
                        <div class="option_icon" id="icon_1"></div>
                        <div class="option_text">Work Experience</div>
                    </div>
                    <div class="option_icon_box" id="academic_option">
                        <div id="border_2" class="option_icon_top_border"></div>
                        <div class="option_icon" id="icon_2"></div>
                        <div class="option_text">Academics &#38; Skills</div>
                    </div>
                    <div class="option_icon_box" id="sport_option">
                        <div id="border_3" class="option_icon_top_border"></div>
                        <div class="option_icon" id="icon_3"></div>
                        <div class="option_text">Sports &#38; Societies</div>
                    </div>
                    <div class="option_icon_box" id="other_option">
                        <div id="border_4" class="option_icon_top_border"></div>
                        <div class="option_icon" id="icon_4"></div>
                        <div class="option_text">Other</div>
                    </div>
                </div>
                <div class="sub_option_container" id="sub_option_container_work">
                    <div id="sub_option_length" class="sub_option ">Length</div>
                    <div id="sub_option_sector" class="sub_option ">Sector</div>
                    <div id="sub_option_type" class="sub_option ">Type</div>
                    <div id="sub_option_company" class="sub_option ">Company</div>
                </div>
                <div class="sub_option_container" id="sub_option_container_academic">
                    <div id="sub_option_school" class="sub_option ">School</div>
                    <div id="sub_option_university" class="sub_option ">University</div>
                    <div id="sub_option_languages" class="sub_option ">Languages</div>
                    <div id="sub_option_skills" class="sub_option ">Skills</div>
                </div>
                <div class="sub_option_container" id="sub_option_container_sport">
                    <div id="sub_option_sport" class="sub_option ">Sport</div>
                    <div id="sub_option_society" class="sub_option ">Society</div>
                </div>
                <div class="sub_option_filter" id="sub_option_work_filter_length">
                
                	<div class="sub_sub_option work_experience">
                	<div class="box_header">Length</div>
                	
                	<select name="min-work-length" id="min-work-length">
                	    <option value="0">No Minimum</option>
                	    <option value="1_week">1 week</option>
                	    <option value="2_to_4_weeks">2-4 weeks</option>
                	    <option value="1_to_2_months">1-2 months</option>
                	    <option value="3_to_4_months">3-4 months</option>
                	    <option value="over_4_months">Over 4 months</option>
                	</select>
                	<select name="max-work-length" id="max-work-length">
                	    <option value="0">No Maximum</option>
                	    <option value="1_week">1 week</option>
                	    <option value="2_to_4_weeks">2-4 weeks</option>
                	    <option value="1_to_2_months">1-2 months</option>
                	    <option value="3_to_4_months">3-4 months</option>
                	    <option value="over_4_months">Over 4 months</option>
                	</select>
                	
                	<div class="clear"></div>
                	
                	<div class="add_to_filter_holder">                    
                	<div class="add_to_filter_btn work_experience_btn">Add to Filter +</div>
                	<div id="spacer"></div>
                	</div>
                	
                	<div class="clear"></div>
                	
                	</div>
                	
                	
                    
                    <div class="clear"></div>
                </div>
                <div class="sub_option_filter" id="sub_option_work_filter_sector">
                    
                    
                    <div class="sub_sub_option work_experience">
                         <div class="box_header">Sector</div>
                         
                         <div class="sub_option_divider">Creative</div>
                         
                         <label name="sector_interest[]" value="advertising" class="work_sector"><input type="checkbox">Advertising </label>
                         <label name="sector_interest[]" value="journalism" class="work_sector"><input type="checkbox">Journalism </label>
                         <label name="sector_interest[]" value="marketing" class="work_sector"><input type="checkbox">Marketing </label>
                         <label name="sector_interest[]" value="publishing" class="work_sector"><input type="checkbox">Publishing </label>
                         <label name="sector_interest[]" value="pr" class="work_sector"><input type="checkbox">PR </label>
                         
                         
                         <div class="sub_option_divider">Professional Services</div>
                         
                         <label name="sector_interest[]" value="accounting" class="work_sector"><input type="checkbox">Accounting </label>
                         <label name="sector_interest[]" value="banking" class="work_sector"><input type="checkbox">Banking </label>
                         <label name="sector_interest[]" value="consulting" class="work_sector"><input type="checkbox">Consulting </label>
                         <label name="sector_interest[]" value="finance" class="work_sector"><input type="checkbox">Finance </label>
                         <label name="sector_interest[]" value="investment_banking" class="work_sector"><input type="checkbox">Investment Banking </label>
                         <label name="sector_interest[]" value="law" class="work_sector"><input type="checkbox">Law </label>
                         
                         <div class="sub_option_divider">Industry</div>
                         
                         <label name="sector_interest[]" value="consumer_goods" class="work_sector"><input type="checkbox">Consumer Goods</label>
                         <label name="sector_interest[]" value="energy" class="work_sector"><input type="checkbox">Energy and Utilities</label>
                         <label name="sector_interest[]" value="it_telecoms" class="work_sector"><input type="checkbox">IT and Telecoms</label>
                         <label name="sector_interest[]" value="management" class="work_sector"><input type="checkbox">Management</label>
                         <label name="sector_interest[]" value="hr" class="work_sector"><input type="checkbox">Human Resources</label>
                         <label name="sector_interest[]" value="logistics" class="work_sector"><input type="checkbox">Logistics</label>
                         <label name="sector_interest[]" value="retail" class="work_sector"><input type="checkbox">Retail</label>
                         <label name="sector_interest[]" value="transport" class="work_sector"><input type="checkbox">Transport</label>
                         
                         <div class="sub_option_divider">Public Sector</div>
                         
                         <label name="sector_interest[]" value="education" class="work_sector"><input type="checkbox">Education</label>
                         <label name="sector_interest[]" value="government" class="work_sector"><input type="checkbox">Government</label>
                         <label name="sector_interest[]" value="politics" class="work_sector"><input type="checkbox">Politics</label>
                                                 
                         <div class="clear"></div>
                         
                         <div class="add_to_filter_holder">                    
                         <div class="add_to_filter_btn work_experience_btn">Add to Filter +</div>
                         <div id="spacer"></div>
                         </div>
                         
                         <div class="clear"></div>
                         </div>
                    
                </div>
                <div class="sub_option_filter" id="sub_option_work_filter_type">
                   
                   	<div class="sub_sub_option work_experience">
                   	<div class="box_header">Type</div>
                   	
					<label name="sector_interest[]" value="consumer_goods" class="work_sector"><input type="checkbox" >Full Time</label>
					
					<label name="sector_interest[]" value="consumer_goods" class="work_sector"><input type="checkbox" >Part Time</label>
					
					<label name="sector_interest[]" value="consumer_goods" class="work_sector"><input type="checkbox" >Internship</label>
                   	
                   	<div class="clear"></div>
                   	
                   	<div class="add_to_filter_holder">                    
                   	<div class="add_to_filter_btn work_experience_btn">Add to Filter +</div>
                   	<div id="spacer"></div>
                   	</div>
                   	
                   	<div class="clear"></div>
                   	
                   	</div>
                   
                   
                   
                    <div class="clear"></div>
                </div>
                <div class="sub_option_filter" id="sub_option_work_filter_company">
                    
                    <div class="sub_sub_option work_experience">
                    <div class="box_header">Specific Companies</div>
                    
                    <input id="specific_company_input" type="text" name="" value="" />
                    
                    <div class="subject_input_helper">Type a Company Above &#8593;</div>
                    
                    
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn work_experience_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    
                    </div>
                    
                </div>
                <div class="sub_option_filter" id="sub_option_academic_filter_school">
                
                    <div class="sub_sub_option university">
                    <div class="box_header">Specific Subject</div>
                    <select>
                    <option>Subject</option>
                    </select>
                    <select>
                    <option>Result</option>
                    <option>A*</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    </select>
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn academic_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    </div>
                    
                    <div class="sub_sub_option university">
                    <div class="box_header">Overall Result</div>
                    <select class="grade_letter">
                    <option></option>
                    <option>A*</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    </select>
                    <select class="grade_letter">
                    <option></option>
                    <option>A*</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    </select>
                    <select class="grade_letter">
                    <option></option>
                    <option>A*</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    </select>
                    <select class="grade_letter">
                    <option></option>
                    <option>A*</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    </select>
                    <select class="grade_letter">
                    <option></option>
                    <option>A*</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    </select>
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn academic_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    </div>
                    
                    
                </div> 
                
                
                
                <div class="sub_option_filter" id="sub_option_academic_filter_university">
                	
                	<div class="sub_sub_option university">
                    <div class="box_header">Degree Type</div>
                    <label><input type="radio" name="degree_type" value="" checked/>Any Degree</label>
                    <label><input type="radio" name="degree_type" value="" />Masters Degree or Higher</label>
                    <label><input type="radio" name="degree_type" value="" />Doctorate Degree</label>
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn academic_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    </div>
                    
                    <div class="sub_sub_option university">
                    <div class="box_header">Degree Result</div>
                    <label><input type="radio" name="degree_result" value="" checked/>Any Result</label>
                    <label><input type="radio" name="degree_result" value="" />2:2 or Higher</label>
                    <label><input type="radio" name="degree_result" value="" />2:1 or Higher</label>
                    <label><input type="radio" name="degree_result" value="" />1st</label>
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn academic_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    </div>
                    
                    <div class="sub_sub_option university">
                    <div class="box_header">Degree Subject</div>
                    
                    <div class="sub_option_divider">Subject Category</div>
                    
                    <label class="subject_category"><input type="radio" name="degree_subject" value="" checked/>None</label>
                    <label class="subject_category"><input type="radio" name="degree_subject" value="" />Humanities</label>
                    <label class="subject_category"><input type="radio" name="degree_subject" value="" />Social Sciences</label>
                    <label class="subject_category"><input type="radio" name="degree_subject" value="" />Sciences</label>
                    
                    <div class="sub_option_divider">Specific Subjects</div>
                    
                    <input id="degree_subject_input" type="text" name="" value="" />
                    
                    <div class="subject_input_helper">Type a Subject Above &#8593;</div>
                    
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn academic_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    </div>
                    
                    <div class="sub_sub_option university">
                    <div class="box_header">University</div>
                    
                    <div class="sub_option_divider">Top Universities</div>
                    
                    <div class="sub_option_divider">University Group</div>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />Russell Group</label>
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />Ivy League</label>
               
                    
                    <div class="sub_option_divider">Specific Universities</div>
                    
                    <input id="degree_uni_input" type="text" name="" value="" />
                    
                    <div class="subject_input_helper">Type a University Above &#8593;</div>
                    
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn academic_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    </div>
                    
                    
                </div>
                
                <div class="sub_option_filter language" id="sub_option_academic_filter_languages">
                
                
                    <div class="sub_sub_option">
                    <div class="box_header">Language</div>
                            <select name="language[]" id="language" data-group-name="language" data-group-delete="true">
                                <option value="0">Language</option>
                                @foreach ( $languages as $language )
                                <option value="{{ $language->id }}">{{ $language->name }}</option>
                                @endforeach
                            </select>
                            <select name="language-level[]" id="language-level" data-group-name="language" data-group-delete="false">
                                <option value="0">Level</option>
                                @foreach ( $languageLevels as $languageLevel )
                                <option value="{{ $languageLevel->id }}">{{ $languageLevel->name }}</option>
                                @endforeach
                            </select>
                    
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn academic_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    
                    </div>
                    
                </div>
                
                <div class="sub_option_filter skills" id="sub_option_academic_filter_skills">
                
                
                    <div class="sub_sub_option">
                    <div class="box_header">Skills</div>
                    
                    <div class="sub_option_divider">Computer Programming Languages</div>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />C</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />C#</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />C++</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />Java</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />Objective-C</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />Pearl</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />Python</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />Ruby</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />SQL</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />Visual Basic</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />XML</label>
                    
                    <div class="sub_option_divider">Web Programming Languages</div>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />CSS</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />HTML</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />JavaScript</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />jQuery</label>
                    
                    <div class="sub_option_divider">Computer Programs</div>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />Access</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />Excel</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />Illustrator</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />InDesign</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />Photoshop</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />PowerPoint</label>
                    
                    <label class="subject_category"><input type="checkbox" name="degree_subject" value="" />Word</label>
                    
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn academic_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    
                    </div>
                    
                </div> 
                
                <div class="sub_option_filter" id="sub_option_sport_filter_sport">
                    
                    <div class="sub_sub_option">
                    <div class="box_header">Sport Level</div>
      				
      				<label><input type="radio" name="sport_level" value="" checked/>Any Level</label>
      				<label><input type="radio" name="sport_level" value="" />College or Higher</label>
      				<label><input type="radio" name="sport_level" value="" />University or Higher</label>
                    
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn sports_and_societies_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    
                    </div>
                    
                    <div class="sub_sub_option">
                    <div class="box_header">Specific Sport</div>
                    	
                    <input id="specific_sport_input" type="text" name="" value="" />
                    
                    <div class="subject_input_helper">Type a Subject Above &#8593;</div>
                    
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn sports_and_societies_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    
                    </div>
                    
                </div>
                
                
                <div class="sub_option_filter" id="sub_option_sport_filter_society">
                   
                    <div class="sub_sub_option">
                    <div class="box_header">Society Category</div>
                    	
                    	<label><input type="checkbox" name="society_category" value="" checked/>Any Category</label>
                    	<label><input type="checkbox" name="society_category" value="" />Academic</label>
                    	<label><input type="checkbox" name="society_category" value="" />Appreciation</label>
                    	<label><input type="checkbox" name="society_category" value="" />Artistic and Cultural</label>
                    	<label><input type="checkbox" name="society_category" value="" />Campaigning</label>
                    	<label><input type="checkbox" name="society_category" value="" />Careers and Industry</label>
                    	<label><input type="checkbox" name="society_category" value="" />Charity</label>
                    	<label><input type="checkbox" name="society_category" value="" />Faith and Spiritual</label>
                    	<label><input type="checkbox" name="society_category" value="" />Hobbies</label>
                    	<label><input type="checkbox" name="society_category" value="" />International</label>
                    	<label><input type="checkbox" name="society_category" value="" />Military and Adventure</label>
                    	<label><input type="checkbox" name="society_category" value="" />Music, Dance, Theatre</label>
                    	<label><input type="checkbox" name="society_category" value="" />Political</label>
                    	<label><input type="checkbox" name="society_category" value="" />Social</label>
                    	<label><input type="checkbox" name="society_category" value="" />Sports</label>
                    	<label><input type="checkbox" name="society_category" value="" />Student Media</label>
                    	<label><input type="checkbox" name="society_category" value="" />Travel</label>
                    	<label><input type="checkbox" name="society_category" value="" />Volunteering</label>
                    
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn sports_and_societies_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    
                    </div>
                    
                    <div class="sub_sub_option">
                    <div class="box_header">Society Position</div>
                    	
                    	<label><input type="checkbox" name="society_category" value="" checked/>President</label>
                    	<label><input type="checkbox" name="society_category" value="" checked/>Vice-President</label>
                    	<label><input type="checkbox" name="society_category" value="" checked/>Committee Member</label>
                    	<label><input type="checkbox" name="society_category" value="" checked/>Press Officer</label>
                    	<label><input type="checkbox" name="society_category" value="" checked/>Secretary</label>
                    	<label><input type="checkbox" name="society_category" value="" checked/>Treasurer</label>
                    	<label><input type="checkbox" name="society_category" value="" checked/>Events Officer</label>
                    	<label><input type="checkbox" name="society_category" value="" checked/>Guests Officer</label>
                    	<label><input type="checkbox" name="society_category" value="" checked/>Website Manager</label>
                    
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn sports_and_societies_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    
                    </div>
                    
                    <div class="sub_sub_option">
                    <div class="box_header">Specific Society</div>
                    	
                    <input id="specific_society_input" type="text" name="" value="" />
                    
                    <div class="subject_input_helper">Type a Society Above &#8593;</div>
                    
                    <div class="clear"></div>
                    
                    <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn sports_and_societies_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                    </div>
                    
                    <div class="clear"></div>
                    
                    </div>
                    
                </div>
                
                
                <div class="sub_option_filter" id="sub_option_other_filter">
                    <div>
                        {{ Form::label('gender') }} {{ Form::select('gender', ['Not Specified', 'Male', 'Female']) }}
                        {{ Form::label('ethnicity') }} @include('inputs.ethnicity_dropdown', $ethnicities)
                        {{ Form::label('birth year')}}{{ Form::select('dob', range(2005, 1930)) }}
                    </div>
                    <div class="clear"></div>
                    <div class="add_to_filter_btn academic_btn">Add to Filter</div>
                </div>
            {{ Form::close() }}
            </div>
        </div>
        <div id="footer">

<div id="footer_container">

<div id="tp_logo_footer"></div>

<div id="footer_icon_container">
<div class="footer_icon" id="facebook"></div>
<div class="footer_icon" id="twitter"></div>
<div class="footer_icon" id="linkedin"></div>
</div>

<div id="copyright_container">&copy; GradList Ltd. 2014. All rights reserved.</div>

<div id="links_container">
<a id="terms_link" href="http://s536007897.websitehome.co.uk/gradlist.laravel/public/index.php/terms-of-use">Terms of Use</a>
<a id="privacy_link" href="http://s536007897.websitehome.co.uk/gradlist.laravel/public/index.php/privacy-policy">Privacy Policy</a>
<a href="http://s536007897.websitehome.co.uk/gradlist.laravel/public/index.php/faqs">FAQ</a>
</div>

<div id="spacer"></div>

</div>

</div>
        @include('common.bottom')
        {{ HTML::script('js/jquery.tokeninput.js') }}
        {{ HTML::script('js/db_search.js') }}   
        <script>
setProgressIndicator('candidates');
        </script>
    </body>
</html>
