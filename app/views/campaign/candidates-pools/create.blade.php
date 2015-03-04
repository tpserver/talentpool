    <div id="new-candidates-pool-container">
                <div id="total_label">
                    Candidates selected
                </div>
                <div id="total">0</div>
        <div id="db_search_align_container">  
            {{ Form::open(array('url' => 'foo/bar', 'id' => 'search-form-filter')) }}
            <div class="clear"></div>
            {{ Form::close() }}
        </div>
        {{ Form::open(array('url' => 'foo/bar', 'id' => 'search-form')) }}
        <div id="categories_box" style="margin-bottom: 40px;">
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
                    <div class="add_to_filter_btn add-to-filter-btn work_experience_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="clear"></div>
        </div>
        <div class="sub_option_filter" id="sub_option_work_filter_sector">
            <div class="sub_sub_option work_experience">
                    <div class="box_header">Sector</div>
                    @include('inputs.work', $workOptions)
                    <div class="add_to_filter_holder">                    
                        <div class="add_to_filter_btn add-to-filter-btn work_experience_btn">Add to Filter +</div>
                        <div id="spacer"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        <div class="sub_option_filter" id="sub_option_work_filter_type">
            <div class="sub_sub_option work_experience">
                <div class="box_header">Type</div>
                @foreach($workTypes as $userType)
                    <label for="work_type_option-{{$userType->id}}"class="work_sector">{{ Form::checkbox('work_type_option[]', $userType->id, false, ['id' => 'work_type_option-'.$userType->id] ) }}{{$userType->name}}</label>
                @endforeach
                <div class="clear"></div>
                <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn add-to-filter-btn work_experience_btn">Add to Filter +</div>
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
                    <div class="add_to_filter_btn add-to-filter-btn work_experience_btn">Add to Filter +</div>
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
                    <div class="add_to_filter_btn add-to-filter-btn academic_btn">Add to Filter +</div>
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
                    <div class="add_to_filter_btn add-to-filter-btn academic_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                </div>
                <div class="clear"></div>
            </div>

        </div> 

        <div class="sub_option_filter" id="sub_option_academic_filter_university">
            <div class="sub_sub_option university">
                <div class="box_header">Degree Type</div>
                @include('search.degree_types', $degreeTypes)
                <div class="clear"></div>
                <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn add-to-filter-btn academic_btn">Add to Filter +</div>
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
                    <div class="add_to_filter_btn add-to-filter-btn academic_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="sub_sub_option university">
                <div class="box_header">Degree Subject</div>
                <div class="sub_option_divider">Subject Category</div>
                @include('search.degree_subjects', $degreeSubjects)
                <div class="sub_option_divider">Specific Subjects</div>
                <input id="degree_subject_input" type="text" name="" value="" />
                <div class="subject_input_helper">Type a Subject Above &#8593;</div>
                <div class="clear"></div>
                <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn add-to-filter-btn academic_btn">Add to Filter +</div>
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
                    <div class="add_to_filter_btn add-to-filter-btn academic_btn">Add to Filter +</div>
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
                    <div class="add_to_filter_btn add-to-filter-btn academic_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="sub_option_filter skills" id="sub_option_academic_filter_skills">
            <div class="sub_sub_option">
                @include('search.skills', $skillOptions)
                <div class="clear"></div>
                <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn add-to-filter-btn academic_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div> 
        <div class="sub_option_filter" id="sub_option_sport_filter_sport">
            <div class="sub_sub_option">
                <div class="box_header">Sport Level</div>
                <label style="width:230px;"><input type="radio" name="sports[]" value="0" />Any Level</label>
                 @foreach($sports as $sport)
                    <label style="width:230px;">{{ Form::checkbox('sports[]', $sport->id, false, ['id' => 'sports-' . $sport->id]) }}{{$sport->name}}</label>
                    @endforeach
                <div class="clear"></div>
                <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn add-to-filter-btn sports_and_societies_btn">Add to Filter +</div>
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
                    <div class="add_to_filter_btn add-to-filter-btn sports_and_societies_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="sub_option_filter" id="sub_option_sport_filter_society">
            <div class="sub_sub_option">
                <div class="box_header">Society Category</div>
                @include('search.social_categories', $socialCategories)
                <div class="clear"></div>
                <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn add-to-filter-btn sports_and_societies_btn">Add to Filter +</div>
                    <div id="spacer"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="sub_sub_option">
                <div class="box_header">Society Position</div>
                @include('search.social_positions', $socialPositions)
                <div class="clear"></div>
                <div class="add_to_filter_holder">                    
                    <div class="add_to_filter_btn add-to-filter-btn sports_and_societies_btn">Add to Filter +</div>
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
                    <div class="add_to_filter_btn add-to-filter-btn sports_and_societies_btn">Add to Filter +</div>
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
            <div class="add_to_filter_btn add-to-filter-btn academic_btn">Add to Filter</div>
        </div>
        {{ Form::close() }}
    </div>
</div>
