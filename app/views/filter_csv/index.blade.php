<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', ['title' => 'TalentPool - Find a Job'] )
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
                    <!--<div id="segment_1" class="progress_segment pos_8">
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
                    </div>-->
                </div>
                <div id="spacer"></div>
            </div>
        </div>
        <form id="gl_sign_up" method="post" action="candidate-list">
            <div id="basic_form">
                <div id="form_div_header">Sector preferences</div>
                <div id="industry_interest_error" class="error_overlay_header">Choose opportunity sector.</div>       
                <div id="sector_box">
                    @include('signup.inputs.work', $workOptions)
                    <div id="spacer"></div>
                </div>
                <div id="job_type_box">
                    <div id="agnostic_box_header" class="sector_grouping_header">Job type</div>
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
                                {{Form::checkbox('job_location[]', $location->id, false)}}
                            </div>
                            <p>{{$location->name}}</p>
                        </div>
                        @endforeach
                    </div>
                    <!--<div id="agnostic_box_header" class="sector_grouping_header">...and I'm available for work...</div>
                    <label class="availability_option">{{Form::radio('availability', 1, false, ['class' => 'radio_availability'])}}Immediately </label>
                    <label class="availability_option">{{Form::radio('availability', 2, false, ['class' => 'radio_availability'])}}This summer</label>
                    <label class="availability_option">{{Form::radio('availability', 'other', false, ['class' => 'radio_availability'])}}Other</label>

                    <div id="availability_other_details" style="display: none;">
                        <select name="availability_month" id="month_available">
                            <?php
                            for($i=1;$i<=12;$i++){
                            $month_val = sprintf("%02s", $i);
                            ?>
                            <option value="<?php echo $month_val;?>"><?php echo date("F", mktime(0, 0, 0, $month_val, 10));?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <select name="availability_year" id="degree_graduation">
                            <?php
                            $current_year = date("Y");
                            for($j=$current_year;$j<=$current_year+4;$j++){
                            ?>
                            <option value="<?php echo $j;?>"><?php echo $j;?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <label class="availability_option">{{Form::checkbox('not_want_to_move', 1, false, ['class' => 'radio_availability'])}}I am not looking to move right now</label>
                    <div id="agnostic_box_header" class="sector_grouping_header">...Some text needed here...</div>
                    <label class="availability_option">{{Form::radio('payment[]', 4, false, ['class' => 'radio_availability'])}}I am only interested in paid roles</label>
                    <label class="availability_option">{{Form::radio('payment[]', 8, false, ['class' => 'radio_availability'])}}I am open to unpaid roles</label>
                    <label class="availability_option">{{Form::checkbox('payment[]', 2, false, ['class' => 'radio_availability'])}}I am willing to consider equity in place of / alongside payment</label>-->
                </div>
            
                <div id="form_div_header">Here are your details about your education</div>

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
                        <!--<div id="uni_subject_container" class="text_input_container">
                            <input id="uni_subject_name" placeholder="Subject" type="text" name="degree_subject_name[]" value="" />
                        </div>-->

                        <select name="degree_result[]" id="degree_result">
                            <option value="default">Result</option>
                            @foreach ( $degreeResults as $degreeResult )
                            <option value="{{ $degreeResult->id }}">{{ $degreeResult->name }}</option>
                            @endforeach
                        </select>
                        @include('inputs.degree_graduation_dropdown')
                    </div>
                </div>
                <div id="key_skills_container">
                    <div class="box_header">And you tell employers about your skills here?</div>
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
                                    {{Form::checkbox('skills[]', $option->id, false)}}
                                </div>
                                <!--<select name="skill_levels[]" style="display: none;">
                                    <option value="0">Level</option>
                                    <option value="1">Basic</option>
                                    <option value="2">Intermediate</option>
                                    <option value="3">Expert</option>
                                </select>-->
                            </div>
                        <?php $_lastGroupId = $option->skill_group->id; $_isOpened = true; ?>
                        @endforeach
                        @if( $_isOpened === true )
                        </div> 
                        @endif
                </div>
                <div id="form_div_header">Learned any new languages recently?</div>
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
            
                <div id="form_div_header">Or got any new work experience to share?</div>
                <div id="work_experience_container">
                    <div id="work_experience_box">
                        <div id="work_experience_error" class="error_overlay_header">Something's missing here</div>
                        <div class="box_header">Work Experience</div>
                        <div class="delete_box_btn"></div>

                        <select name="work_type[]" id="work_type">
                            <option value="0">Type</option>
                            @foreach ( $workTypes as $workType )
                            <option value="{{ $workType->id }}">{{ $workType->name }}</option>
                            @endforeach
                        </select>

                        <select name="work_length[]" id="work_length">
                            <option value="0">Length</option>
                            @foreach ( $workDuration as $workDurations )
                            <option value="{{ $workDurations->id }}">{{ $workDurations->name }}</option>
                            @endforeach
                            <!--<option value="2_to_4_weeks">2-4 weeks</option>
                            <option value="1_to_2_months">1-2 months</option>
                            <option value="3_to_4_months">3-4 months</option>
                            <option value="over_4_months">Over 4 months</option>-->
                        </select>
                        @include('inputs.work_dropdown')
                    </div>
                </div>
                <div id="button_holder">
                    {{ Form::button('Search Candidate', ['class'=> 'red_button', 'id' => 'filter_record_button_other', 'style' => 'height: 42px;', 'type' => 'submit']) }}
                </div>   
            </div>
        </div>
    </div>
</div>
</form>
<div id="spacer"></div>
<div id="footer"></div>
@include('common.bottom')
{{ HTML::script('/js/jquery-1.8.3.min.js') }}
{{ HTML::script('js/log_in.js') }}
{{ HTML::script('/js/plugins.js') }}
{{ HTML::script('/js/verimail.jquery.js') }}
{{ HTML::script('/js/main.js') }}
{{ HTML::script('/js/date.js') }}
{{ HTML::script('/js/jquery.ba-bbq.js') }}
{{ HTML::script('/js/generateCsv.js') }}
{{ HTML::script('/js/jquery.html5-placeholder-shim.js') }}
<script>
    @if($errors->has('first_name'))
        $('#first_name_error').fadeIn();
    @endif
    @if($errors->has('last_name'))
        $('#last_name_error').fadeIn();
    @endif
    @if($errors->has('email'))
        $('#email_error').text('{{$errors->first('email')}}').fadeIn();
    @endif


</script>
</body>
</html>