<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', array('title', 'GradList - Find a Job') )
        {{ HTML::style('css/policy.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/base.css') }}
        {{ HTML::style('css/base_extended.css') }}
        {{ HTML::style('css/signup.css') }}
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                <div id="progress_bar">
                    <div id="segment_1" class="progress_segment pos_8">
                        <div class="progress_segment_text">Interests</div>
                        <div class="progress_segment_icon"></div>
                    </div>
                    <div id="segment_2" class="progress_segment pos_6">
                        <div class="progress_segment_text">Education</div>
                        <div class="progress_segment_icon"></div>
                    </div>
                    <div id="segment_3" class="progress_segment pos_6">
                        <div class="progress_segment_text">Experience</div>
                        <div class="progress_segment_icon"></div>
                    </div>
                    <div id="segment_4" class="progress_segment pos_3">
                        <div class="progress_segment_text">Other</div>
                        <div class="progress_segment_icon"></div>
                    </div>
                </div>
                <div id="spacer"></div>
            </div>
        </div>
        <form id="gl_sign_up" method="post" action="sign-up/submit">
            <div id="basic_form">
                <div id="form_div_header">Just a few basic details</div>
                <div id="personal_box">
                    <div class="text_input_container">
                        <div class="error_overlay" id="first_name_error">First name required</div>
                        <input id="first_name_input" type="text" name="first_name" value="{{ $firstName }}" placeholder="First Name"/>
                    </div>
                    <div class="text_input_container">
                        <div class="error_overlay" id="last_name_error">Last name required</div>
                        <input id="last_name_input" type="text" name="last_name" value="{{ $lastName }}" placeholder="Last Name"/>
                    </div>
                    <div class="text_input_container">
                        <div class="error_overlay" id="email_formatting_error"></div>
                        <div class="error_overlay" id="email_in_use">Email in use</div>    
                        <div class="error_overlay" id="email_error">Email required</div>
                        {{Form::email('email', Input::old('email'), ['id' => 'email_input', 'placeholder' => 'Email'])}}
                        <div id="status_message"></div>
                    </div>
                    <div class="text_input_container">
                        <div class="error_overlay" id="password_error">Password required</div>
                        {{Form::password('password', ['id' => 'password_input', 'placeholder' => 'Password'])}}
                    </div>
                </div>
                <div id="form_div_header">So what kind of jobs are you interested in?</div>
                <div id="industry_interest_error" class="error_overlay_header">It's up to you, but this bit's useful to match you with employers.</div>       
                <div id="sector_box">
                    @include('signup.inputs.work', $workOptions)
                    <div id="spacer"></div>
                </div>
                <div id="job_type_box">
                    <div id="agnostic_box_header" class="sector_grouping_header">I'm looking for a...</div>
                    <div id="job_type_container">
                        @foreach ( $workTypes as $workType )
                        <div class="checkbox_container_option">
                            <div class="checkbox_option">
                                {{Form::checkbox('desired_job_type[]', $workType->id, false, ['id' => 'desired_job_type-'.$workType->id])}}
                            </div>
                            <p>{{$workType->name}}</p>
                        </div>
                        @endforeach
                    </div>
                    <div id="agnostic_box_header" class="sector_grouping_header">...and I'd like work in the...</div>
                    <div id="job_location_container">
                        @foreach($locations as $location)
                        <div class="checkbox_container_option">
                            <div class="checkbox_option">
                                {{Form::checkbox('job_location[]', $location->id)}}
                            </div>
                            <p>{{$location->name}}</p>
                        </div>
                        @endforeach
                    </div>
                    <div id="agnostic_box_header" class="sector_grouping_header">...and I'm available for work...</div>
                    <label class="availability_option">{{Form::radio('availability', 1, false, ['class' => 'radio_availability'])}}Immediately </label>
                    <label class="availability_option">{{Form::radio('availability', 2, false, ['class' => 'radio_availability'])}}This summer</label>
                    <label class="availability_option">{{Form::radio('availability', 'other', false, ['class' => 'radio_availability'])}}Other</label>

                    <div id="availability_other_details" style="display: none;">
                        <select name="availability_month" id="month_available">
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select name="availability_year" id="degree_graduation">
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                        </select>
                    </div>
                    
                    <div id="agnostic_box_header" class="sector_grouping_header">...Some text needed here...</div>
                    <label class="availability_option">{{Form::radio('payment', 0, false, ['class' => 'radio_availability'])}}I am only interested in paid roles</label>
                    <label class="availability_option">{{Form::radio('payment', 1, false, ['class' => 'radio_availability'])}}I am open to unpaid roles</label>
                    <label class="availability_option">{{Form::radio('payment', 2, false, ['class' => 'radio_availability'])}}I am willing to consider equity in place of / alongside payment</label>
                </div> 
                <div id="button_holder">
                    <div class="red_button" id="next_button_basic">Next</div>
                </div>
            </div>     
            <div id="education_form">
                <div id="form_div_header">Great! So now a bit about your education...</div>

                <div id="education_container">
                    <div id="uni_details_box">
                        <div id="university_error" class="error_overlay_header">This bit's required</div>   
                        <div id="box_header">
                            <div class="box_header">University</div>
                        </div>
                        <div class="delete_box_btn"></div>
                        @include('inputs.degree_type_dropdown', $degreeTypes)
                        @include('inputs.university_dropdown', $universities)
                        @include('inputs.degree_subject_dropdown', $degreeSubjects)
                        <div id="uni_subject_container" class="text_input_container">
                            <input id="uni_subject_name" placeholder="Subject" type="text" name="degree_subject_name[]" value="" />
                        </div>

                        <select name="degree_result[]" id="degree_result">
                            <option value="default">Result</option>
                            @foreach ( $degreeResults as $degreeResult )
                            <option value="{{ $degreeResult->id }}">{{ $degreeResult->name }}</option>
                            @endforeach
                            <option value="other">Other</option>
                        </select>
                        @include('inputs.degree_graduation_dropdown')
                    </div>
                </div>

                <div class="dark_grey_button" id="add_degree_button">Add Degree +</div>
                <div id="qualifications_container">
                    <div class="qual_box" id="qualifications_box">
                        <div id="school_error" class="error_overlay_header">It's up to you, but this bit matters to employers</div>
                        <div class="box_header">School</div>
                        <div class="delete_box_btn"></div>
                        @include('inputs.school_qualification_types', $schoolQualificationTypes)
                        <select name="qual_subject_type[]" id="qual_subject">
                            <option value="0">Subject Type</option>
                            @foreach($schoolOptions as $option)
                            <option value="{{$option->id}}">{{$option->name}}</option>
                            @endforeach
                        </select>

                        <div id="qual_subject_container" class="text_input_container">
                            <input id="qual_subject_name" placeholder="Subject" type="text" name="qual_subject_name[]" value="" />
                        </div>

                        <select name="qual_result[]" id="qual_result">
                            <option value="default">Result</option>
                            <option value="other">Other</option>
                        </select>

                    </div>
                </div>
                <div class="dark_grey_button" id="add_qualification_button">Add Qualification +</div>
               

                <div id="key_skills_container">
                    <div class="box_header">Skills</div>


                        <?php $_lastGroupId = 0;  $_isOpened = false; ?>
                        @foreach( $skills as $option )
                        @if( $option->skill_group->id != $_lastGroupId && $_lastGroupId != 0 )
                        </div>
                        @endif 
                        @if( $option->skill_group->id != $_lastGroupId || $_lastGroupId == 0 )
                        <div class="skill_divider">{{ $option->skill_group->name }}</div>
                        <div class="sub_skill_container" style="display: none;">
                        @endif    
                           <div class="key_skill">
                                <div class="checkbox_container_option">
                                    <div class="checkbox_option"></div>
                                    <p>{{ $option->name }}</p>
                                    {{Form::checkbox('skills[]', $option->id)}}
                                </div>
                               <select name="skill_levels[]" style="display: none;">
                                    <option value="0">Level</option>
                                    <option value="1">Basic</option>
                                    <option value="2">Intermediate</option>
                                    <option value="3">Expert</option>
                                </select>
                            </div>
                        <?php $_lastGroupId = $option->skill_group->id; $_isOpened = true; ?>
                        @endforeach
                        @if( $_isOpened === true )
                            </div> 
                        @endif
                </div>

                <div id="capabilities_container">
                    <div class="box_header">Capabilities</div>
                    @foreach($capabilites as $capability)
                    <div class="checkbox_container_option">
                        <div class="checkbox_option"></div>
                        <p>{{$capability->name}}</p>
                        <input type="checkbox" name="capabilities[]" value="{{$capability->id}}"/>
                    </div>
                    @endforeach
                </div>	
            
                <div id="form_div_header">...and what about languages?</div>
                <div id="english_language_container">
                    <div id="languages_box_english">
                        <div id="english_language_error" class="error_overlay_header">This bit's required</div> 
                        <div id="english_title">English</div> 
                        <input style="display: none;" id="language_other" placeholder="Other" type="text" name="" />
                        <select name="english_level" id="english_level">
                            <option value="0" selected="selected">Select</option>
                            @foreach ( $languageLevels as $languageLevel )
                            <option value="{{ $languageLevel->id }}">{{ $languageLevel->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div id="second_language_container">
                    <div id="languages_box">
                        <select name="languages[]" id="languages">
                            <option value = "0">Language</option>
                            @foreach ( $languages as $language )
                            <option value="{{ $language->id }}">{{ $language->name }}</option>
                            @endforeach
                            <option value = "other">Other</option>
                        </select>

                        <input style="display: none;" id="language_other" placeholder="Other" type="text" name="" />

                        <select name="languages_level[]" id="languages_level">
                            <option value="0">Level</option>
                            @foreach ( $languageLevels as $languageLevel )
                            <option value="{{ $languageLevel->id }}">{{ $languageLevel->name }}</option>
                            @endforeach
                        </select>
                        <div class="delete_box_btn"></div>
                    </div>
                </div>
                <div class="dark_grey_button" id="add_language_button">Add Language +</div>
                <div id="button_holder">
                    <div id="back_button_education">Back</div>
                    <div class="red_button" id="next_button_education">Next</div>
                </div>
            </div>         

            <div id="experience_form">
                <div id="form_div_header">Now just a bit about your work experience...</div>
                <div id="work_experience_container">
                    <div id="work_experience_box">
                        <div id="work_experience_error" class="error_overlay_header">Something's missing here</div>
                        <div class="box_header">Work Experience</div>
                        <div class="delete_box_btn"></div>

                        <select name="work_type[]" id="work_type">
                            <option value="default">Type</option>
                            @foreach ( $workTypes as $workType )
                            <option value="{{ $workType->id }}">{{ $workType->name }}</option>
                            @endforeach
                            <option value="other">Other</option>
                        </select>

                        <select name="work_length[]" id="work_length">
                            <option value="default">Length</option>
                            <option value="1_week">1 week</option>
                            <option value="2_to_4_weeks">2-4 weeks</option>
                            <option value="1_to_2_months">1-2 months</option>
                            <option value="3_to_4_months">3-4 months</option>
                            <option value="over_4_months">Over 4 months</option>
                        </select>
                        @include('inputs.work_dropdown')
                        <div class="text_input_container"> 
                            <div id="organisation_name_error"></div>
                            <input placeholder="Organisation" name="work_organisation[]" id="work_organisation" type="text" name="" value="" />
                        </div>
                    </div>
                </div>

                <div class="dark_grey_button" id="add_experience_button">Add Experience +</div>

                <div id="form_div_header">...and what you get up to in your spare time</div>
                <div id="positions_container">
                    <div id="society_container">
                        <div id="society_box">
                            <div id="work_experience_error" class="error_overlay_header">Something's missing here</div>
                            <div class="box_header">Society</div>
                            <div class="delete_box_btn"></div>
                            @include('inputs.social_categories_dropdown', $socialCategories)
                            @include('inputs.social_positions_dropdown', $socialPositions)
                            <div class="text_input_container"> 
                                <input id="society_name" placeholder="Name" type="text" name="society_name[]" value="" />
                            </div>
                        </div>
                    </div>

                    <div class="dark_grey_button" id="add_society_button">Add Society +</div>
                    <div id="sport_container">
                        <div id="sport_box">
                            <div id="work_experience_error" class="error_overlay_header">Something's missing here</div>
                            <div class="box_header">Sport</div>
                            <div class="delete_box_btn"></div>

                            <select name="sport_category[]" id="sport_category">
                                <option value="default">Sport</option>
                                @foreach ( $sports as $sport )
                                <option value="{{ $sport->id }}">{{ $sport->name }}</option>
                                @endforeach
                                <option value="other">Other</option>
                            </select>

                            <select id="sport_level" name="sport_level[]">
                                <option value="default">Level</option>
                                @foreach ( $sportLevels as $sportLevel )
                                <option value="{{ $sportLevel->id }}">{{ $sportLevel->name }}</option>
                                @endforeach
                                <option value="other">Other</option>
                            </select>

                            <select name="sport_position[]">
                                <option value="default">Position</option>
                                @foreach ( $sportPositions as $sportPosition )
                                <option value="{{ $sportPosition->id }}">{{ $sportPosition->name }}</option>
                                @endforeach
                                <option value="other">Other</option>
                            </select>
                        </div>    
                    </div>  
                </div>
                <div class="dark_grey_button" id="add_sport_button">Add Sport +</div>
                <div id="key_experience_container">
                <div class="box_header">Specific Experience</div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Managing Small Teams of People</p><input type="checkbox" value="managing_small_teams" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Working to Major Deadlines</p><input type="checkbox" value="major_deadlines" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Liaising with the Media</p><input type="checkbox" value="liaising_with_media" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Managing Social Media Output</p><input type="checkbox" value="managing_social_media" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Writing Press Releases</p><input type="checkbox" value="press_releases" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Managing Client Relationships</p><input type="checkbox" value="client_relationships" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Selling Over the Phone</p><input type="checkbox" value="selling_over_phone" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Managing Large Teams of People</p><input type="checkbox" value="managing_large_teams" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Selling in Person</p><input type="checkbox" value="selling_in_person" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Strategic Decision Making</p><input type="checkbox" value="strategic_decision_making" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Organising Events</p><input type="checkbox" value="organising_events" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Presenting to Groups</p><input type="checkbox" value="presenting_to_groups" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Script/Speech Writing</p><input type="checkbox" value="speech_writing" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Working with VIPs</p><input type="checkbox" value="working_VIPs" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Running Meetings</p><input type="checkbox" value="running_meetings" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Writing Presentations</p><input type="checkbox" value="writing_presentations" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Writing Reports</p><input type="checkbox" value="writing_reports" name="specific_capabilities[]"></div>
                <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Market Research and Analysis</p><input type="checkbox" value="market_research" name="specific_capabilities[]"></div>
                </div>
                <div id="button_holder">
                    <div id="back_button_experience">Back</div>
                    <div class="red_button" id="next_button_experience">Next</div>
                </div>
            </div>
        </div>
    </div>
    <div id="other_form">
        <div id="form_div_header">Time to choose your charity</div>
        <div id="charities_box">
            <p>Each time you get back to an employer who contacts you, we will make a donation to the charity you choose. Click on the boxes below to find out more about our five charity partners and lend one your support!</p>
            <div id="charity-1" class="charity charity_1"><div class="charity_tick"></div></div>
            <div id="charity-2" class="charity charity_2"><div class="charity_tick"></div></div>
            <div id="charity-3" class="charity charity_3"><div class="charity_tick"></div></div>
            <div id="charity-4" class="charity charity_4"><div class="charity_tick"></div></div>
            <div id="charity-5" class="charity charity_5"><div class="charity_tick"></div></div>
            <div id="charity-suggestion-box">Have an idea for a charity we should support? <a href="mailto:contact@gradlist.co.uk">Let us know</a><div class="charity_tick"></div></div>

            <div class="charity-description"  style="display: none;" id="charity-1-description">
                <img src="img/first_story.jpeg" alt="" />
                <div class="charity-name">First Story</div>
                <div class="charity-brief-description">First Story strives to support and inspire creativity, literacy and talent in challenging UK secondary schools and their communities.</div>
                <div class="charity-detailed-description"><p>First Story achieves this by arranging and paying for acclaimed writers to run creative-writing work-shops for students in state schools across the country. The students’ writing is then published in a professionally produced anthology for each school, and the schools host book-launch events at which the students read their stories to their peers, friends, families and teachers. To find out more visit: <a href="www.firststory.org.uk">www.firststory.org.uk</a>.</p>
                </div>
                <div class="charity-button" id="charity_1_button">Support First Story</div>
            </div>

            <div class="charity-description"  style="display: none;" id="charity-2-description">
                <img src="img/lords_taveners.jpeg" alt="" />
                <div class="charity-name">The Lord’s Taverners</div>
                <div class="charity-brief-description">The Lord’s Taverners engage disadvantaged and disabled young people using cricket and other forms of sport and recreation to benefit their self-esteem, health, education and future.</div>
                <div class="charity-detailed-description"><p>The charity supports inner city and girls cricket and donates hundreds of cricket equipment bags across the UK. The Lord’s Taverners also supply specially adapted minibuses, sports wheelchairs, and sensory equipment for special needs schools and fund national programs for Table Cricket, Boccia and Wheelchair Basketball giving young people vital access to sport and recreation. To find out more visit: <a href="www.lordstaverners.org">www.lordstaverners.org</a>.</p>
                    <div class="charity-button" id="charity_2_button">Support The Lord's Taverners</div>
                </div>

            </div>

            <div class="charity-description"  style="display: none;" id="charity-3-description">
                <img src="img/access_project.jpg" alt="" />
                <div class="charity-name">The Access Project</div>
                <div class="charity-brief-description">The Access Project connects students with volunteer tutors. It strives to reduce educational inequality. </div>
                <div class="charity-detailed-description"><p>Access to universities, particularly to top universities, is still far too dependent on affluence. A privately-educated pupil is 22 times more likely to win a place at a highly selective university than a pupil on Free School Meals. TAP aims to change this by giving opportunities to learn in a one-to-one environment to students from disadvantaged backgrounds.  
                    </p>
                    <div class="charity-button" id="charity_3_button">Support The Access Project</div>
                </div>
            </div>

            <div class="charity-description"  style="display: none;" id="charity-4-description">
                <img src="img/student_hubs.jpg" alt="" />
                <div class="charity-name">Student Hubs</div>
                <div class="charity-brief-description">Student Hubs believes that university students have the power and potential to shape a better world.</div>
                <div class="charity-detailed-description"><p>Through a growing network of ‘Hubs’ in universities, this charity facilitates student involvement with social and environmental challenges, enabling more students to do more, more effectively and for longer.</p>
                    <p>Selecting Student Hubs will support LinkAges, a project aiming to combat elderly isolation by connecting university student volunteers to local elderly people to run befriending schemes, activities in elderly peoples' homes and day trips. To find out more visit: <a href="http://www.studenthubs.org/">www.studenthubs.org/</a>.</p>
                    <div class="charity-button" id="charity_4_button">Support Student Hubs</div>
                </div>

            </div>

            <div class="charity-description"  style="display: none;" id="charity-5-description">
                <img src="img/teach_first.png" alt="" />
                <div class="charity-name">TeachFirst</div>
                <div class="charity-brief-description">Teach First is working in partnership towards a day when no child’s success in life is limited by how much their parents earn.</div>
                <div class="charity-detailed-description"><p>The charity does this by supporting brilliant people to teach and lead in schools in low-income communities, working with them to bring about change inside and outside the classroom and partnering with a range of other organisations who are striving for equality in education. To find out more visit: <a href="www.teachfirst.org.uk">www.teachfirst.org.uk</a>.</p>
                    <div class="charity-button" id="charity_5_button">Support TeachFirst</div>
                </div>
            </div>
            {{ Form::hidden('charity_selection', '', ['id' => 'charity-selection']) }}
        </div>

        <div id="attributes_container">
            <div class="box_header">Attributes</div>
            @foreach($attributes as $attribute)
            <div class="checkbox_container_option">
                <div class="checkbox_option"></div>
                <p>{{$attribute->name}}</p>
                <input type="checkbox" name="attributes[]" value="{{$attribute->id}}"/>
            </div>
            @endforeach
        </div>
        
        <div id="form_div_header">Just one or two more questions</div>
        <div id="other_personal_box">
            <div id="dob_error" class="error_overlay_header">You must be over 18 to use GradList</div> 

            <select name="gender" id="gender">
                <option value="0">Gender</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="0">Prefer Not to Say</option>
            </select>
            @include('inputs.ethnicity_dropdown', $ethnicities)
            <div id="dob_title">Date of Birth</div>
            <div id="dob_inputs_container">

                <select name="date_dob" id="date_dob">
                    @for( $i = 1; $i <= 31; $i++ )
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <select name="month_dob" id="month_dob">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>

                <select name="year_dob" id="year_dob">
                    @for ($i = 2007; $i >= 1900; $i--)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div id="form_div_header">We hate spam as much as you do</div>
        <div id="no_spam_box">
            <p>So we let you choose how often companies can contact you. But remember, the more emails you get, the more likely you are to get the job you want, and the more money goes to charity.</p>
            <h3>Employers can contact me</h3>

            <select name="emails_per_week">
                <option value="0">As much as they want</option>
                <option value="1">Once a week</option>
                <option value="2">Once a month</option>
            </select>
        </div>
        <div id="form_div_header">Finally, the boring legal stuff...</div>   
        <div id="terms_and_conditions_box">
            <div id="legal_error" class="error_overlay_header">This bit's required</div> 
            <div id="privacy_policy_container">
                <h1>Privacy Policy</h1>
                <p>
                    This privacy policy sets out how GradList Ltd uses and protects any information that you give GradList Ltd when you use this website.
                </p>
                <p>
                    GradList Ltd is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement.
                </p>
                <p>
                    GradList Ltd may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. This policy is effective from 14th October 2013.
                </p>

                <h3>What we collect</h3>
                <p>We may collect the following information when and if it is provided by Users of this website:</p>
                <ul>
                    <li>Name, university, date of birth and contact information, including email address</li>
                    <li>Career preferences</li>
                    <li>Academic qualifications and work experience information</li>
                    <li>Other information including ethnicity and languages spoken</li>
                </ul>

                <h3>What we do with the information we gather</h3>
                <p>
                    We require this information to enable the efficient delivery of the GradList service for the ultimate benefit of our Users. We provide approved graduate recruiters with access to anonymised profile information. Using this data, recruiters are able to identify the students and graduates which best match their criteria and subsequently request to contact these individuals. 
                </p>
                <p>In addition to this, we may use the information we receive for the following purposes:</p>

                <ul>
                    <li>Internal record keeping.</li>
                    <li>We may use the information to improve our products and services.</li>
                    <li>We may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided.</li>
                    <li>From time to time, we may also use your information to contact you for market research purposes. We may use the information to customise the website according to your interests.</li>
                </ul>

                <h3>Security</h3>
                <p>We are committed to ensuring that your information is secure. In order to prevent unauthorised access or disclosure, we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.</p>
                <h3>How we use cookies</h3>

                <p>A cookie is a small file which asks permission to be placed on your computer's hard drive. Once you agree, the file is added and the cookie helps analyse web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual. The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences.</p>
                <p>We use traffic log cookies to identify which pages are being used. This helps us analyse data about web page traffic and improve our website in order to tailor it to customer needs. We only use this information for statistical analysis purposes and then the data is removed from the system.</p>
                <p>Overall, cookies help us provide you with a better website, by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us.</p>
                <p>You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. This may prevent you from taking full advantage of the website.</p>

                <h3>Links to other websites</h3>

                <p>Our website may contain links to other websites of interest. However, once you have used these links to leave our site, you should note that we do not have any control over that other website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.</p>

                <h3>Controlling your personal information</h3>

                <p>You may choose to restrict the collection or use of your personal information in the following ways:</p>

                <ul>
                    <li>Whenever you are asked for information during the signup process which you do not wish to provide, simply do not provide it. The only information we absolutely require is name, email address, age, university and degree subject.</li>
                    <li>If you have previously agreed to us using your personal information you may change your mind at any time by emailing us at support@gradlist.co.uk</li>
                </ul>

                <br />
                <br />

                <h1>Terms of Use</h1>
                <h3>1. Introduction</h3>

                <p>1.1 This Document sets out the Terms of Use for use of this website (www.gradlist.co.uk). It is intended to be read by all users of the website.</p>

                <h3>2. Definitions</h3>
                <p>2.1 the Document: the Terms of Use to which Users are obliged to adhere, detailed below</p>
                <p>2.2 the Site: www.gradlist.co.uk</p>
                <p>2.3 GradList: GradList Ltd, Company Number 08721054</p>
                <p>2.4 User/Users: student(s) and graduate(s) who create a GradList Account (see definition below) by entering information on the Site and use the Service for Users (see definition below). Also includes all other visitors to the Site. Users must agree to these Terms of Use. </p>
                <p> 2.5 Service for Users: the service offered by GradList to Users whereby Users may create an Account with a view to being contacted by prospective Employers.</p>
                <p> 2.6 Employers: organisations which are approved by GradList to use the GradList Service for Employers (see definition below)</p>
                <p>2.7 Service for Employers: service offered by GradList to companies wishing to identify and contact GradList Users. Enables Employers to search the GradList database of Users, identify appropriate candidates solely on the basis of Other User Information (see definition below) for roles in their organisations and contact those Users.</p>
                <p>2.8 Charity/Charities: the organisation(s) which, at any one time, are featured on the Site and may be selected by Users to be supported financially through the allocation of a proportion of the fee revenue associated with that User.</p>
                <p>2.9 Sign Up Process: the process by which Users may create a GradList Account, by providing information to GradList through the Site</p>
                <p>2.10 Account: the totality of the information provided by a User which relates to that User.</p>
                <p>2.11 Personal Details: includes but not limited to User’s name, email address and date of birth</p>
                <p>2.12 Other User Information: information provided to GradList by the User through the Sign Up Process which is required in order to create a GradList Account. Includes but is not limited to university name; degree level; degree subject; degree grade; public examination grades (e.g. GCSE; A-Level; Scottish Highers; International Baccalaureate); previous work experience; career preferences; ethnic background; language skills; gender.</p> 

                <h3>3. Framework information</h3>
                <p>3.1 The Site is owned and operated by GradList and is available to Users under the Terms of Use detailed in this Document. By accessing and using the services available on the site and by creating an Account, the User accepts these Terms of Use.</p> 
                <p>3.2 The Terms of Use shall be interpreted according to the laws of England.</p> 
                <p>3.3 Users should read these Terms of Use and ensure that they both understand and accept them before creating an Account</p>

                <h3>4. User Obligations</h3>
                <p>4.1 Users agree to provide GradList with information which is entirely accurate and truthful. They will not, under any circumstances, provide information which is either incorrect or misleading.</p> 
                <p>4.2 Users agree only to provide information of which they are the rightful owner and which they are within their rights to divulge. Users understand that it is their responsibility to ensure that this is the case and accept full liability for any damage or loss suffered by any parties should this obligation not be adhered to.</p> 
                <p>4.3 Users understand and accept that it is their responsibility to ensure that their details on their Account are kept up to date. This can be achieved by logging in via the home page of the Site.</p> 
                <p>4.4 While GradList very much hopes that Users will find the Service for Users beneficial, Users accept that the creation of an Account on the Site is no guarantee of any of: receiving messages or information from Employers; gaining a job offer; donations being made to their selected Charity.</p> 
                <p>4.5 Users accept that donations will only be made to their selected Charity when and if they take action on any messages they may receive from Employers. Such action may include clicking on a link provided by an Employer or responding to a message from an Employer.</p> 
                <p>4.6 While GradList will make every effort to ensure that only reputable and honest employers are able to use the Service for Employers, Users accept that GradList accepts no liability for damages or loss caused by the actions of the Employers who use the Service for Employers.</p>
                <p>4.7 Users agree that non-compliance with the terms detailed in the Document will be considered a material breach of these Terms of Use. Should such a breach take place, GradList may:</p>
                <p>4.7.1 Remove the Users Account from the Site and refuse the User further access to the Site or services provided by GradList and/or;</p>
                <p>4.7.2 Take legal action</p>

                <h3>5. Terms of Use</h3>
                <p>5.1 Users may not, for business or commercial ends, reproduce material on the Site. Users are granted a non-exclusive right to use the Site. Users accept that GradList is the sole proprietor of all material and content on the Site and has all intellectual property rights with regard to the Site</p>
                <p>5.2 Access to the Site is granted on a temporary basis only and GradList reserves the right to deny access to any individual at any time without notice and without specifying any reason for doing so.</p>
                <p>5.3 Should for any reason, the Site not be available to individuals or all Users, GradList will be held entirely harmless.</p>

                <h3>6. Limitation of Liability</h3>
                <p>6.1 GradList does not accept any liability for material or content provided by 3rd party websites to which links are featured on the Site. Equally, GradList accepts no liability for the actions of partner Charities which are beneficiaries of GradList’s support or Employers who are granted access to the Site. Users accept that the Terms of Use of engagement with 3rd party organisations will be their own and will differ from the Terms of Use of the Site.</p> 
                <p>6.2 GradList accepts no liability for information provided on the Site which is out of date or inaccurate.</p> 
                <p>6.3 Under no circumstances shall GradList be liable to any Users or User. Users agree to hold GradList entirely harmless with respect to any actions which may be undertaken or any demands/claims made. This includes, but is not limited to, legal fees incurred.</p> 
                <p>6.4 GradList reserves the right to alter or terminate any or all of the Terms of Use detailed in this Document, without notice. Users accept that, should they wish to terminate their obligation to abide by these Terms of Use, they will be required to apply for their Account to be removed by emailing support@gradlist.co.uk to that effect. Users understand and accept that they may not alter any of the Terms of Use detailed in this Document.</p> 

                <h3>7. General</h3>
                <p>7.1 Users accept that these Terms of Use do not constitute any sort of partnership</p>
                <p>7.2 GradList reserves the right to make any changes to the Site it sees fit, without notification to any Users</p>
            </div>
            <label><input id="terms_checkbox" type="checkbox" name="terms_and_conditions_agree" value="accepted" />I agree to the GradList Privacy Policy and Terms of Use</label>
        </div>
        <div id="button_holder">
            <div id="back_button_other">Back</div>
            {{ Form::submit('Sign Up', ['class'=> 'red_button', 'id' => 'next_button_other', 'style' => 'height: 42px;']) }}
        </div>
    </div>
</div>
</form>
<div id="spacer"></div>
<div id="footer">

<div id="footer_container">

<div id="tp_logo_footer"></div>

<div id="footer_icon_container">
<div id="facebook" class="footer_icon"></div>
<div id="twitter" class="footer_icon"></div>
<div id="linkedin" class="footer_icon"></div>
</div>

<div id="copyright_container">&#169; GradList Ltd. 2014. All rights reserved.</div>

<div id="links_container">
{{ link_to_route('terms', 'Terms of Use', [], ['id'=>'terms_link']) }}
{{ link_to_route('policy', 'Privacy Policy', [], ['id'=>'privacy_link']) }}
{{ link_to_route('faq', 'FAQ') }}
</div>

<div id="spacer"></div>

</div>

</div>
@include('common.bottom')
{{ HTML::script('/js/jquery-1.8.3.min.js') }}
{{ HTML::script('js/log_in.js') }}
{{ HTML::script('/js/plugins.js') }}
{{ HTML::script('/js/verimail.jquery.js') }}
{{ HTML::script('/js/main.js') }}
{{ HTML::script('/js/date.js') }}
{{ HTML::script('/js/jquery.ba-bbq.js') }}
{{ HTML::script('/js/sign_up.js') }}
{{ HTML::script('/js/jquery.html5-placeholder-shim.js') }}
</script>
</body>
</html>