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
    </head>
    <body>
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                <div id="total_label">
                    Candidates selected
                </div>
                <div id="total">1,112</div>
            </div>
        </div>
        <div id="db_search_container">
            <div id="db_search_align_container">  
                <div id="current-filter" style="display: none;">
                    {{ Form::open(array('url' => 'foo/bar', 'id' => 'search-form-filter')) }}
                    <?php /*
                    <div class="filter-element" style="box-shadow: 0 4px #2ecc71;">Advertising<input type="hidden" name="test" value="23" />
                        <a class="remove-from-filter" onclick="removeElementFromFIlter(this);" id="x-work_type_option-5"></a>
                    </div>
                    <div class="filter-element" style="box-shadow: 0 4px #2ecc71;">Start Ups<input type="hidden" name="test" value="23" />
                        <a class="remove-from-filter" onclick="removeElementFromFIlter(this);" id="x-work_type_option-2"></a>
                    </div>
                    <div class="filter-element" style="box-shadow: 0 4px #2ecc71;">Internship
                        <a class="remove-from-filter" onclick="removeElementFromFIlter(this);"></a>
                    </div>
                    <div class="filter-element" style="box-shadow: 0 4px #9b59b6;">Art and Design
                        <a class="remove-from-filter" onclick="removeElementFromFIlter(this);"></a>
                    </div>
                    <div class="filter-element" style="box-shadow: 0 4px #3498db;">Football
                        <a class="remove-from-filter" onclick="removeElementFromFIlter(this);"></a>
                    </div>
                    <div class="filter-element" style="box-shadow: 0 4px #3498db;">College
                        <a class="remove-from-filter" onclick="removeElementFromFIlter(this);"></a>
                    </div>
                    <div class="filter-element" style="box-shadow: 0 4px #3498db;">Captain
                        <a class="remove-from-filter" onclick="removeElementFromFIlter(this);"></a>
                    </div>
                    <div class="filter-element" style="box-shadow: 0 4px #e74c3c;">Born in 1991
                        <a class="remove-from-filter" onclick="removeElementFromFIlter(this);"></a>
                    </div>            
                     *   */?>
                     
                    <div class="clear"></div>
                    <div id="create-campaign-button">Create Campaign</div>
                    {{ Form::close() }}
                </div>
                {{ Form::open(array('url' => 'foo/bar', 'id' => 'search-form')) }}
                <div id="filter_header">Filter</div>  
                <div id="categories_box">
                    <div class="option_icon_box" id="work_option">
                        <div id="border_1" class="option_icon_top_border"></div>
                        <div class="option_icon" id="icon_1"></div>
                        <div class="option_text">Work Experience</div>
                    </div>
                    <div class="option_icon_box" id="academic_option">
                        <div id="border_2" class="option_icon_top_border"></div>
                        <div class="option_icon" id="icon_2"></div>
                        <div class="option_text">Academics</div>
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
                </div>
                <div class="sub_option_container" id="sub_option_container_sport">
                    <div id="sub_option_sport" class="sub_option ">Sport</div>
                    <div id="sub_option_society" class="sub_option ">Society</div>
                </div>
                <div class="sub_option_filter" id="sub_option_work_filter_length">
                    <label for="min-work-length">Minumum</label>
                    <select name="min-work-length" id="min-work-length">
                        <option value="0">No Minumum</option>
                        <option value="1_week">1 week</option>
                        <option value="2_to_4_weeks">2-4 weeks</option>
                        <option value="1_to_2_months">1-2 months</option>
                        <option value="3_to_4_months">3-4 months</option>
                        <option value="over_4_months">Over 4 months</option>
                    </select>
                    <label for="max-work-length">Maximum</label>
                    <select name="max-work-length" id="max-work-length">
                        <option value="0">No Maxiumum</option>
                        <option value="1_week">1 week</option>
                        <option value="2_to_4_weeks">2-4 weeks</option>
                        <option value="1_to_2_months">1-2 months</option>
                        <option value="3_to_4_months">3-4 months</option>
                        <option value="over_4_months">Over 4 months</option>
                    </select>
                    <div class="add_to_filter_btn">Add to Filter</div>
                    <div class="clear"></div>
                </div>
                <div class="sub_option_filter" id="sub_option_work_filter_sector">
                    @include('inputs.work', $workOptions)
                    <div class="search-filterbox-50">
                        <div class="sector_grouping_header industry">Industry</div>  
                        <label class="checkbox"><input value="agriculture" name="sector_interest[]" type="checkbox">Agriculture</label>
                        <label class="checkbox"><input value="consumer_goods" name="sector_interest[]" type="checkbox">Consumer Goods</label>
                        <label class="checkbox"><input value="energy_utilities" name="sector_interest[]" type="checkbox">Energy and Utilities</label>
                        <label class="checkbox"><input value="health_pharma" name="sector_interest[]" type="checkbox">Health and Pharma</label>
                        <label class="checkbox"><input value="industrials_mining" name="sector_interest[]" type="checkbox">Industrials and Mining</label>
                        <label class="checkbox"><input value="infrastructure" name="sector_interest[]" type="checkbox">Infrastructure</label>
                        <label class="checkbox"><input value="retail_hospitality" name="sector_interest[]" type="checkbox">Retail and Hospitality</label>
                        <label class="checkbox"><input value="technology_media" name="sector_interest[]" type="checkbox">Technology and Media</label>
                    </div>     
                    <div class="search-filterbox-50">
                        <div class="sector_grouping_header public_sector">Other</div>
                        <label class="checkbox"><input value="charity" name="sector_interest[]" type="checkbox">Charity</label>
                        <label class="checkbox"><input value="education" name="sector_interest[]" type="checkbox">Education</label>
                        <label class="checkbox"><input value="hr" name="sector_interest[]" type="checkbox">Human Resources</label>
                        <label class="checkbox"><input value="local_government" name="sector_interest[]" type="checkbox">Local Government</label>
                        <label class="checkbox"><input value="central_government" name="sector_interest[]" type="checkbox">Central Government</label>
                        <label class="checkbox"><input value="politics" name="sector_interest[]" type="checkbox">Politics</label>
                        <label class="checkbox"><input value="sports" name="sector_interest[]" type="checkbox">Sports</label>
                        <label class="checkbox"><input value="startups" name="sector_interest[]" type="checkbox">Start Ups</label>
                    </div>
                    <div class="add_to_filter_btn">Add to Filter</div>
                    <div class="clear"></div>
                </div>
                <div class="sub_option_filter" id="sub_option_work_filter_type">
                    @foreach($workTypes as $userType)
                    <label for="work_type_option-{{$userType->id}}">{{ Form::checkbox('work_type_option[]', $userType->id, false, ['id' => 'work_type_option-'.$userType->id] ) }}{{$userType->name}}</label>
                    @endforeach
                    <div class="add_to_filter_btn">Add to Filter</div>
                    <div class="clear"></div>
                </div>
                <div class="sub_option_filter" id="sub_option_work_filter_company">
                    <input id="company_text_box" type="text" name="company" value="" placeholder="Company Name" />
                    <div class="add_to_filter_btn">Add to Filter</div>
                    <div class="clear"></div>
                </div>
                <div class="sub_option_filter" id="sub_option_academic_filter_school">
                    @include('inputs.academic', $academicOptions) 
                    <div class="add_to_filter_btn">Add to Filter</div>
                    <div class="clear"></div>
                </div> 
                <div class="sub_option_filter" id="sub_option_academic_filter_university">
                    <h4>University</h4>
                    @include('inputs.degree_type_dropdown', $degreeTypes)
                    @include('inputs.university_dropdown', $universities)
                    @include('inputs.degree_graduation_dropdown')
                    @include('inputs.degree_subject_dropdown', $degreeSubjects)
                    <div class="clear"></div>
                    <h4>UCAS Points</h4>
                    {{ Form::text('ucas_points', '', ['id' => 'ucas_points']) }}
                    <div id="equivalent_to_box">
                        <h4>Equivalent To</h4>
                        <div id="a_level_box">
                            <h1>AAAA</h1>
                            <h5>A Levels</h5>
                        </div>
                        <div id="highers_box">
                            <h1>AAA</h1>
                            <h5>Advanced Highers</h5>
                        </div>
                        <div id="ib_box">
                            <h1>29</h1>
                            <h5>IB Diploma Points</h5>
                        </div>
                    </div>
                    <div class="add_to_filter_btn">Add to Filter</div>
                    <div class="clear"></div>
                </div>
                <div class="sub_option_filter" id="sub_option_academic_filter_languages">
                    <div id="second_language_container">
                        <div id="language-box">
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
                        </div>
                    </div>
                    <div class="add_to_filter_btn">Add to Filter</div>
                    <div class="clear"></div>
                </div> 
                <div class="sub_option_filter" id="sub_option_sport_filter_sport">
                    <h4 class="sector_grouping_header creative">Sports</h4>
                    <div class="clear"></div>
                    @foreach($sports as $sport)
                    <label style="width:230px;">{{ Form::checkbox('sports[]', $sport->id, false, ['id' => 'sports-' . $sport->id]) }}{{$sport->name}}</label>
                    @endforeach
                    <div class="add_to_filter_btn">Add to Filter</div>
                    <div class="clear"></div>
                </div>
                <div class="sub_option_filter" id="sub_option_sport_filter_society">
                    <h4 class="sector_grouping_header creative">Social Involvement</h4>
                    <div class="clear"></div>
                    @include('inputs.social_categories_dropdown', $socialCategories)
                    @include('inputs.social_positions_dropdown', $socialPositions)
                    <div class="add_to_filter_btn">Add to Filter</div>
                    <div class="clear"></div>
                </div>
                <div class="sub_option_filter" id="sub_option_other_filter">
                    <div>
                        {{ Form::label('gender') }} {{ Form::select('gender', ['Not Specified', 'Male', 'Female']) }}
                        {{ Form::label('ethnicity') }} @include('inputs.ethnicity_dropdown', $ethnicities)
                        {{ Form::label('birth year')}}{{ Form::select('dob', range(2005, 1930)) }}
                    </div>
                    <div class="clear"></div>
                    <div class="add_to_filter_btn">Add to Filter</div>
                </div>
            {{ Form::close() }}
            </div>
        </div>
        <div id="footer">
        </div>
        @include('common.bottom')
        {{ HTML::script('js/db_search.js') }}        
    </body>
</html>
