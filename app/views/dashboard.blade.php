<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', array('title', 'GradList - User Dashboard') )
        {{ HTML::style('css/dashboard.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/base.css') }}
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div id="hidden_form">
            <input type="hidden" id="id_hidden" name="" value="{{ $id }}" />
            <input type="hidden" id="first_name_hidden" name="" value="{{ $first_name }}" />
            <input type="hidden" id="last_name_hidden" name="" value="{{ $last_name }}" />
            <input type="hidden" id="email_hidden" name="" value="{{ $email }}" />
            <input type="hidden" id="sector_interest_hidden" name="" value="{{ $sector_interest }}" />
            <input type="hidden" id="sector_agnostic_hidden" name="" value="{{ $sector_agnostic }}" />
            <input type="hidden" id="degree_type_hidden" name="" value="{{ $degree_type }}" />
            <input type="hidden" id="degree_uni_hidden" name="" value="{{ $degree_uni }}" />
            <input type="hidden" id="degree_subject_type_hidden" name="" value="{{ $degree_subject_type }}" />
            <input type="hidden" id="degree_subject_name_hidden" name="" value="{{ $degree_subject_name }}" />
            <input type="hidden" id="degree_result_hidden" name="" value="{{ $degree_result }}" />
            <input type="hidden" id="degree_graduation_hidden" name="" value="{{ $degree_graduation }}" />
            <input type="hidden" id="qual_type_hidden" name="" value="{{ $qual_type }}" />
            <input type="hidden" id="qual_subject_type_hidden" name="" value="{{ $qual_subject_type }}" />
            <input type="hidden" id="qual_subject_name_hidden" name="" value="{{ $qual_subject_name }}" />
            <input type="hidden" id="qual_result_hidden" name="" value="{{ $qual_result }}" />
            <input type="hidden" id="work_type_hidden" name="" value="{{ $work_type }}" />
            <input type="hidden" id="work_length_hidden" name="" value="{{ $work_length }}" />
            <input type="hidden" id="work_sector_hidden" name="" value="{{ $work_sector }}" />
            <input type="hidden" id="work_organisation_hidden" name="" value="{{ $work_organisation }}" />
            <input type="hidden" id="english_level_hidden" name="" value="{{ $english_level }}" />
            <input type="hidden" id="languages_hidden" name="" value="{{ $languages }}" />
            <input type="hidden" id="languages_level_hidden" name="" value="{{ $languages_level }}" />
            <input type="hidden" id="society_category_hidden" name="" value="{{ $society_category }}" />
            <input type="hidden" id="society_position_hidden" name="" value="{{ $society_position }}" />
            <input type="hidden" id="society_name_hidden" name="" value="{{ $society_name }}" />
            <input type="hidden" id="sport_category_hidden" name="" value="{{ $sport_category }}" />
            <input type="hidden" id="sport_position_hidden" name="" value="{{ $sport_position }}" />
            <input type="hidden" id="sport_level_hidden" name="" value="{{ $sport_level }}" />
            <input type="hidden" id="charity_selection_hidden" name="" value="{{ $charity_selection }}" />
            <input type="hidden" id="gender_hidden" name="" value="{{ $gender }}" />
            <input type="hidden" id="ethnicity_hidden" name="" value="{{ $ethnicity }}" />
            <input type="hidden" id="date_dob_hidden" name="" value="{{ $date_dob }}" />
            <input type="hidden" id="month_dob_hidden" name="" value="{{ $month_dob }}" />
            <input type="hidden" id="year_dob_hidden" name="" value="{{ $year_dob }}" />
            <input type="hidden" id="emails_per_week_hidden" name="" value="{{ $emails_per_week }}" />
        </div>
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                <a href="/index.php/user/sign_out"><div id="sign_out_btn">Sign Out</div></a>
                <div id="save_changes_btn">Save Changes</div>
            </div>
            <div id="spacer"></div>
        </div>
        <div id="change_password_modal">
            <div class="box_header">Change Password</div>
            <div class="text_input_container">
                <div class="error_overlay" id="old_password_error">Password incorrect</div>
                <input id="old_password_input" type="password" name="password" value="" placeholder="Old Password"/>
            </div>
            <div class="text_input_container">
                <div class="error_overlay" id="new_password_error">Passwords don't match!</div>
                <input id="new_password_input" type="password" name="password" value="" placeholder="New Password"/>
            </div>
            <div class="text_input_container">
                <div class="error_overlay" id="new_password_repeat_error">Passwords don't match!</div>
                <input id="new_password_repeat_input" type="password" name="password" value="" placeholder="Repeat New Password"/>
            </div>
            <div class="red_button" id="reset_password_btn">Reset Password</div>
        </div>
        <div id="modal_background"></div>
        <form id="gl_user_update" method="post" action="/index.php/user/update">
            <input type="hidden" id="id_hidden" name="id" value="{{ $id }}" />
            <div id="basic_form">
                @if (isset($data_updated))
                    {{<div id="update_success_container"><div id="update_success">Details updated!</div></div>}}
        	@endif
                <div id="password_changed_success_container"><div id="password_changed_success">Password changed!</div></div>
                <div id="personal_box">
                    <div class="text_input_container">
                        <div class="error_overlay" id="first_name_error">First name required</div>
                        <input id="first_name_input" type="text" name="first_name" value="" placeholder="First Name"/>
                    </div>
                    <div class="text_input_container">
                        <div class="error_overlay" id="last_name_error">Last name required</div>
                        <input id="last_name_input" type="text" name="last_name" value="" placeholder="Last Name"/>
                    </div>
                    <div class="text_input_container">
                        <div class="error_overlay" id="email_formatting_error"></div>
                        <div class="error_overlay" id="email_error">Email required</div>
                        <input id="email_input" type="text" name="email" value="" placeholder="Email"/>
                        <div id="status_message"></div>
                    </div>
                    <div class="text_input_container">
                        <div id="change_password">Change password</div>
                    </div>
                </div>
                <div id="form_div_header">Sector preferences</div>
                <div id="industry_interest_error" class="error_overlay_header">This bit's required!</div>       
                <div id="sector_box">
                    <div id="creative_box" class="sector_sub_box">
                        <div class="sector_grouping_header creative">Creative</div>
                        <label class="checkbox"><input value="advertising" name="sector_interest[]" type="checkbox">Advertising</label>
                        <label class="checkbox"><input value="art_usic" name="sector_interest[]" type="checkbox">Art and Music</label>
                        <label class="checkbox"><input value="design" name="sector_interest[]" type="checkbox">Design</label>
                        <label class="checkbox"><input value="journalism" name="sector_interest[]" type="checkbox">Journalism</label>
                        <label class="checkbox"><input value="marketing" name="sector_interest[]" type="checkbox">Marketing</label>
                        <label class="checkbox"><input value="pr" name="sector_interest[]" type="checkbox">PR </label>
                        <label class="checkbox"><input value="publishing" name="sector_interest[]" type="checkbox">Publishing </label>
                        <label class="checkbox"><input value="theatre_events" name="sector_interest[]" type="checkbox">Theatre and Events</label>
                    </div>
                    <div id="professional_box" class="sector_sub_box">
                        <div class="sector_grouping_header professional">Professional Services</div>
                        <label class="checkbox"><input value="accounting" name="sector_interest[]" type="checkbox">Accountancy</label>
                        <label class="checkbox"><input value="asset_management" name="sector_interest[]" type="checkbox">Asset Management</label>
                        <label class="checkbox"><input value="consulting" name="sector_interest[]" type="checkbox">Consulting</label>
                        <label class="checkbox"><input value="finance" name="sector_interest[]" type="checkbox">Finance</label>
                        <label class="checkbox"><input value="insurance" name="sector_interest[]" type="checkbox">Insurance</label>
                        <label class="checkbox"><input value="investment_banking" name="sector_interest[]" type="checkbox">Investment Banking</label>
                        <label class="checkbox"><input value="law" name="sector_interest[]" type="checkbox">Law</label>
                        <label class="checkbox"><input value="tax" name="sector_interest[]" type="checkbox">Tax</label>
                    </div>  
                    <div id="industry_box" class="sector_sub_box">
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
                    <div id="public_sector_box" class="sector_sub_box">
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
                    <div id="sector_agnostic_box">
                        <div id="agnostic_box_header" class="sector_grouping_header">I want to be contacted by...</div>
                        <label class="agnostic_box_labels"><input id="sector_agnostic_no" type="radio" name="sector_agnostic" value="no" checked="checked" />Only the sectors I've chosen </label>
                        <label class="agnostic_box_labels"><input id="sector_agnostic_yes" type="radio" name="sector_agnostic" value="yes" />I'm open to suggestions</label>
                    </div>  
                    <div id="spacer"></div>
                </div>
            </div>     
            <div id="education_form">
                <div id="form_div_header">Education</div>
                <div id="education_container">
                    <div id="uni_details_box">
                        <div id="university_error" class="error_overlay_header">This bit's required</div>   
                        <div id="box_header">
                            <div class="box_header">University</div>
                        </div>
                        <div class="delete_box_btn"></div>
                        <select class="degree_type_input" name="degree_type[]" id="degree_type">
                            <option value="default">Degree Type</option>
                            <option value="undergraduate">Undergraduate</option>
                            <option value="postgraduate">Postgraduate</option>
                            <option value="diploma">Diploma</option>
                            <option value="other">Other</option>
                        </select>
                        <select class="degree_uni_input" name="degree_uni[]" id="degree_uni">
                            <option value="default">University</option>
                            <option value="birmingham">Birmingham</option>
                            <option value="bristol">Bristol</option>
                            <option value="cambridge">Cambridge</option>
                            <option value="cardiff">Cardiff</option>
                            <option value="durham">Durham</option>
                            <option value="edinburgh">Edinburgh</option>
                            <option value="exeter">Exeter</option>
                            <option value="glasgow">Glasgow</option>
                            <option value="imperial">Imperial</option>
                            <option value="kings">King's</option>
                            <option value="edinburgh">Leeds</option>
                            <option value="liverpool">Liverpool</option>
                            <option value="lse">LSE</option>
                            <option value="manchester">Manchester</option>
                            <option value="newcastle">Newcastle</option>
                            <option value="nottingham">Nottingham</option>
                            <option value="oxford">Oxford</option>
                            <option value="queen_mary">Queen Mary</option>
                            <option value="queens_belfast">Queen's Belfast</option>
                            <option value="sheffield">Sheffield</option>
                            <option value="southampton">Southampton</option>
                            <option value="ucl">UCL</option>
                            <option value="warwick">Warwick</option>
                            <option value="york">York</option>
                            <option value="other">Other</option>
                        </select>
                        <select class="degree_subject_type_input" name="degree_subject_type[]" id="degree_subject_type">
                            <option value="default">Subject Type</option>
                            <optgroup label="Humanities">
                                <option value="history">History</option>
                                <option value="linguistics">Linguistics</option>
                                <option value="literature">Literature</option>
                                <option value="performing_arts">Performing Arts</option>
                                <option value="philosophy">Philosophy</option>
                                <option value="religion">Religion</option>
                                <option value="visual_arts">Visual Arts</option>
                            </optgroup>
                            <optgroup label="Sciences">
                                <option value="chemistry">Chemistry</option>
                                <option value="computer_science">Computer Science</option>
                                <option value="earth_science">Earth Science</option>
                                <option value="life_sciences">Life Sciences</option>
                                <option value="mathematics">Mathematics</option>
                                <option value="physics">Physics</option>
                                <option value="space_sciences">Space Sciences</option>
                                <option value="statistics">Statistics</option>
                            </optgroup>
                            <optgroup label="Social Sciences">
                                <option value="anthropology">Anthropology</option>
                                <option value="archaeology">Archaeology</option>
                                <option value="cultural studies">Cultural Studies</option>
                                <option value="economics">Economics</option>
                                <option value="gender_studies">Gender Studies</option>
                                <option value="geography">Geography</option>
                                <option value="political_sciences">Political Sciences</option>
                                <option value="psychology">Psychology</option>
                                <option value="sociology">Sociology</option>
                            </optgroup>
                            <option value="other">Other</option>
                        </select>
                        <div id="uni_subject_container" class="text_input_container">
                            <input class="degree_subject_name_input" id="degree_subject_name" placeholder="Subject" type="text" name="degree_subject_name[]" value="" />
                        </div>
                        <select class="degree_result_input" name="degree_result[]" id="degree_result">
                            <option value="default">Result</option>
                            <option value="1">1st</option>
                            <option value="2">2:1</option>
                            <option value="3">2:2</option>
                            <option value="4">3rd</option>
                            <option value="distinction">Distinction</option>
                            <option value="merit">Merit</option>
                            <option value="pass">Pass</option>
                            <option value="na">N/A</option>
                            <option value="other">Other</option>
                        </select>
                        <select class="degree_graduation_input" name="degree_graduation[]" id="degree_graduation">
                            <option value="default">Graduation Date</option>
                            @for ( $i = 2000; $i <= 2019; $i++ )
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="dark_grey_button" id="add_degree_button">Add Degree +</div>
                <div id="qualifications_container">
                    <div class="qual_box" id="qualifications_box">
                        <div id="school_error" class="error_overlay_header">It's up to you, but this bit matters to employers</div>
                        <div class="box_header">School</div>
                        <div class="delete_box_btn"></div>
                        <select class="qual_type_input" name="qual_type[]" id="qual_type">
                            <option value="default">Qualification Type</option>
                            <option value="a_level">A Level</option>
                            <option value="highers">Highers</option>
                            <option value="ib">IB</option>
                            <option value="pre_u">Pre-U</option>
                            <option value="other">Other</option> 	 	
                        </select>
                        <select class="qual_subject_type_input" name="qual_subject_type[]" id="qual_subject">
                            <option value="default">Subject Type</option>
                            <option value="humanities">Humanities</option>
                            <option value="language">Languages</option>
                            <option value="maths">Maths</option>
                            <option value="science">Science</option>
                            <option value="social_science">Social Science</option>
                            <option value="vocational">Vocational</option>
                            <option value="other">Other</option>
                        </select>
                        <div id="qual_subject_container" class="text_input_container">
                            <input class="qual_subject_name_input" id="qual_subject_name" placeholder="Subject" type="text" name="qual_subject_name[]" value="" />
                        </div>
                        <select class="qual_result_input" name="qual_result[]" id="qual_result">
                            <option value="default">Result</option>
                        </select>
                    </div>
                </div>
                <div class="dark_grey_button" id="add_qualification_button">Add Qualification +</div>
                <div id="form_div_header">Languages</div>
                <div id="language_container">
                    <div id="languages_box_english">
                        <div id="english_language_error" class="error_overlay_header">This bit's required</div> 
                        <div id="english_title">English</div> 
                        <input style="display: none;" id="language_other" placeholder="Other" type="text" name="" />
                        <select name="english_level" id="english_level">
                            <option value="default" selected="selected">Select</option>
                            <option value="native">Native</option>
                            <option value="fluent">Fluent</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="basic">Basic</option>
                        </select>
                    </div>
                    <div id="languages_box">
                        <select class="language_input" name="languages[]" id="languages">
                            <option value="language">Language</option>
                            <option value="om">(Afan) Oromo</option>
                            <option value="ab">Abkhazian</option>
                            <option value="aa">Afar</option>
                            <option value="af">Afrikaans</option>
                            <option value="sq">Albanian</option>
                            <option value="am">Amharic</option>
                            <option value="ar">Arabic</option>
                            <option value="hy">Armenian</option>
                            <option value="as">Assamese</option>
                            <option value="at">Austrian</option>
                            <option value="ay">Aymara</option>
                            <option value="az">Azerbaijani</option>
                            <option value="ba">Bashkir</option>
                            <option value="eu">Basque</option>
                            <option value="bn">Bengali; Bangla</option>
                            <option value="dz">Bhutani</option>
                            <option value="bh">Bihari</option>
                            <option value="bi">Bislama</option>
                            <option value="br">Breton</option>
                            <option value="bg">Bulgarian</option>
                            <option value="my">Burmese</option>
                            <option value="be">Byelorussian</option>
                            <option value="km">Cambodian</option>
                            <option value="ct">Cantonese</option>
                            <option value="ca">Catalan</option>
                            <option value="zh">Chinese</option>
                            <option value="co">Corsican</option>
                            <option value="hr">Croatian</option>
                            <option value="cs">Czech</option>
                            <option value="da">Danish</option>
                            <option value="nl">Dutch</option>
                            <option value="en">English</option>
                            <option value="eo">Esperanto</option>
                            <option value="et">Estonian</option>
                            <option value="fo">Faeroese</option>
                            <option value="fj">Fiji</option>
                            <option value="fi">Finnish</option>
                            <option value="fr">French</option>
                            <option value="fy">Frisian</option>
                            <option value="gl">Galician</option>
                            <option value="ka">Georgian</option>
                            <option value="de">German</option>
                            <option value="el">Greek</option>
                            <option value="kl">Greenlandic</option>
                            <option value="gn">Guarani</option>
                            <option value="gu">Gujarati</option>
                            <option value="ha">Hausa</option>
                            <option value="iw">Hebrew</option>
                            <option value="hi">Hindi</option>
                            <option value="hu">Hungarian</option>
                            <option value="is">Icelandic</option>
                            <option value="in">Indonesian</option>
                            <option value="ia">Interlingua</option>
                            <option value="ie">Interlingue</option>
                            <option value="ik">Inupiak</option>
                            <option value="ga">Irish</option>
                            <option value="it">Italian</option>
                            <option value="ja">Japanese</option>
                            <option value="jw">Javanese</option>
                            <option value="kn">Kannada</option>
                            <option value="ks">Kashmiri</option>
                            <option value="kk">Kazakh</option>
                            <option value="rw">Kinyarwanda</option>
                            <option value="ky">Kirghiz</option>
                            <option value="rn">Kirundi</option>
                            <option value="ko">Korean</option>
                            <option value="ku">Kurdish</option>
                            <option value="lo">Laothian</option>
                            <option value="la">Latin</option>
                            <option value="lv">Latvian, Lettish</option>
                            <option value="ln">Lingala</option>
                            <option value="lt">Lithuanian</option>
                            <option value="lb">Luxembourgeois</option>
                            <option value="mk">Macedonian</option>
                            <option value="mg">Malagasy</option>
                            <option value="ms">Malay</option>
                            <option value="ml">Malayalam</option>
                            <option value="mt">Maltese</option>
                            <option value="ma">Mandarin</option>
                            <option value="mi">Maori</option>
                            <option value="mr">Marathi</option>
                            <option value="mo">Moldavian</option>
                            <option value="mn">Mongolian</option>
                            <option value="na">Nauru</option>
                            <option value="ne">Nepali</option>
                            <option value="no">Norwegian</option>
                            <option value="oc">Occitan</option>
                            <option value="or">Oriya</option>
                            <option value="ps">Pashto, Pushto</option>
                            <option value="fa">Persian</option>
                            <option value="pl">Polish</option>
                            <option value="pt">Portuguese</option>
                            <option value="pa">Punjabi</option>
                            <option value="qu">Quechua</option>
                            <option value="rm">Rhaeto-Romance</option>
                            <option value="ro">Romanian</option>
                            <option value="ru">Russian</option>
                            <option value="sm">Samoan</option>
                            <option value="sg">Sangro</option>
                            <option value="sa">Sanskrit</option>
                            <option value="gd">Scots Gaelic</option>
                            <option value="sr">Serbian</option>
                            <option value="sh">Serbo-Croatian</option>
                            <option value="st">Sesotho</option>
                            <option value="tn">Setswana</option>
                            <option value="sn">Shona</option>
                            <option value="sd">Sindhi</option>
                            <option value="si">Singhalese</option>
                            <option value="ss">Siswati</option>
                            <option value="sk">Slovak</option>
                            <option value="sl">Slovenian</option>
                            <option value="so">Somali</option>
                            <option value="es">Spanish</option>
                            <option value="su">Sundanese</option>
                            <option value="sw">Swahili</option>
                            <option value="sv">Swedish</option>
                            <option value="tl">Tagalog</option>
                            <option value="tg">Tajik</option>
                            <option value="ta">Tamil</option>
                            <option value="tt">Tatar</option>
                            <option value="te">Telugu</option>
                            <option value="th">Thai</option>
                            <option value="bo">Tibetan</option>
                            <option value="ti">Tigrinya</option>
                            <option value="to">Tonga</option>
                            <option value="ts">Tsonga</option>
                            <option value="tr">Turkish</option>
                            <option value="tk">Turkmen</option>
                            <option value="tw">Twi</option>
                            <option value="uk">Ukrainian</option>
                            <option value="ur">Urdu</option>
                            <option value="uz">Uzbek</option>
                            <option value="vi">Vietnamese</option>
                            <option value="vo">Volapuk</option>
                            <option value="cy">Welsh</option>
                            <option value="wo">Wolof</option>
                            <option value="xh">Xhosa</option>
                            <option value="ji">Yiddish</option>
                            <option value="yo">Yoruba</option>
                            <option value="zu">Zulu</option>
                            <option value="other">Other</option>
                        </select>
                        <input style="display: none;" id="language_other" placeholder="Other" type="text" name="" />
                        <select class="language_level_input" name="languages_level[]" id="languages_level">
                            <option value="level">Level</option>
                            <option value="native">Native</option>
                            <option value="fluent">Fluent</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="basic">Basic</option>
                        </select>
                    </div>
                </div>
                <div class="dark_grey_button" id="add_language_button">Add Language +</div>
            </div>         
            <div id="experience_form">
                <div id="form_div_header">Work Experience</div>
                <div id="work_experience_container">
                    <div id="work_experience_box">
                        <div id="work_experience_error" class="error_overlay_header">Something's missing here</div>
                        <div class="box_header">Work Experience</div>
                        <div class="delete_box_btn"></div>
                        <select class="work_type_input" name="work_type[]" id="work_type">
                            <option value="default">Type</option>
                            <option value="full_time">Full Time</option>
                            <option value="internship">Internship</option>
                            <option value="holiday_job">Holiday Job</option>
                            <option value="part_time_job">Part Time Job</option>
                            <option value="gap_year_job">Gap Year Job</option>
                            <option value="other">Other</option>
                        </select>
                        <select class="work_length_input" name="work_length[]" id="work_length">
                            <option value="default">Length</option>
                            <option value="1_week">1 week</option>
                            <option value="2_to_4_weeks">2-4 weeks</option>
                            <option value="1_to_2_months">1-2 months</option>
                            <option value="3_to_4_months">3-4 months</option>
                            <option value="over_4_months">Over 4 months</option>
                        </select>
                        <select class="work_sector_input" id="work_sector_select" name="work_sector[]">
                            <option value="default">Job Sector</option>
                            <optgroup label="Creative">
                                <option value="advertising">Advertising</option>
                                <option value="art_music">Art and Music</option>
                                <option value="design">Design</option>
                                <option value="journalism">Journalism</option>
                                <option value="marketing">Marketing</option>
                                <option value="pr">PR</option>
                                <option value="publishing">Publishing</option>
                                <option value="theatre_events">Theatre and Events</option>
                            </optgroup>
                            <optgroup label="Professional Services">
                                <option value="accounting">Accounting</option>
                                <option value="asset_management">Asset Management</option>
                                <option value="consulting">Consulting</option>
                                <option value="finance">Finance</option>
                                <option value="insurance">Insurance</option>
                                <option value="investment_banking">Investment Banking</option>
                                <option value="law">Law</option>
                                <option value="tax">Tax</option>
                            </optgroup>
                            <optgroup label="Industry">
                                <option value="agriculture">Agriculture</option>
                                <option value="consumer_goods">Consumer Goods</option>
                                <option value="energy_utilities">Energy and Utilities</option>
                                <option value="health_pharma">Health and Pharma</option>
                                <option value="industrials_mining">Industrials and Mining</option>
                                <option value="transport">Infrastructure</option>
                                <option value="retail_hospitality">Retail and Hospitality</option>
                                <option value="technology_media">Technology and Media</option>
                            </optgroup>
                            <optgroup label="Other">
                                <option value="charity">Charity</option>
                                <option value="education">Education</option>
                                <option value="hr">Human Resources</option>
                                <option value="local_government">Local Government</option>
                                <option value="central_government">Central Government</option>
                                <option value="politics">Politics</option>
                                <option value="sports">Sports</option>
                                <option value="start_ups">Start Ups</option>
                            </optgroup>
                            <option value="other">Other</option>
                        </select>
                        <input name="work_organisation[]" class="work_organisation_input" placeholder="Organisation" id="work_organisation" type="text" value="" />
                    </div>
                </div>
                <div class="dark_grey_button" id="add_experience_button">Add Experience +</div>
                <div id="form_div_header">Extra-curricular</div>
                <div id="positions_container">
                    <div id="society_container">
                        <div id="society_box">
                            <div id="work_experience_error" class="error_overlay_header">Something's missing here</div>
                            <div class="box_header">Society</div>
                            <div class="delete_box_btn"></div>
                            <select class="society_category_input" name="society_category[]" id="society_category">
                                <option value="default">Category</option>
                                <option value="academic">Academic</option>
                                <option value="appreciation">Appreciation</option>
                                <option value="artistic">Artistic and Cultural</option>
                                <option value="campaigning">Campaigning</option>
                                <option value="careers">Careers and Industry</option>
                                <option value="charity">Charity</option>
                                <option value="faith">Faith and Spiritual</option>
                                <option value="hobbies">Hobbies</option>
                                <option value="international">International</option>
                                <option value="military">Military and Adventure</option>
                                <option value="music_dance_theatre">Music, Dance and Theatre</option>
                                <option value="political">Political</option>
                                <option value="social">Social</option>
                                <option value="sports">Sports</option>
                                <option value="student_media">Student Media</option>
                                <option value="travel">Travel</option>
                                <option value="volunteering">Volunteering</option>
                            </select>
                            <select class="society_position_input" id="society_position" name="society_position[]">
                                <option value="default">Position</option>
                                <option value="president">President</option>
                                <option value="vice_president">Vice-President</option>
                                <option value="committee_member">Committee Member</option>
                                <option value="press_officer">Press Officer</option>
                                <option value="secretary">Secretary</option>
                                <option value="treasurer">Tresurer</option>
                                <option value="events_officer">Events Officer</option>
                                <option value="guests_officer">Guests Officer</option>
                                <option value="website_manager">Website Manager</option>
                                <option value="other">Other</option>
                            </select>
                            <div class="text_input_container"> 
                                <input class"society_name_input" id="society_name" placeholder="Name" type="text" name="society_name[]" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="dark_grey_button" id="add_society_button">Add Society +</div>
                    <div id="sport_container">
                        <div id="sport_box">
                            <div id="work_experience_error" class="error_overlay_header">Something's missing here</div>
                            <div class="box_header">Sport</div>
                            <div class="delete_box_btn"></div>
                            <select class="sport_category_input" name="sport_category[]" id="sport_category">
                                <option value="default">Sport</option>
                                <option value="athletics">Athletics</option>
                                <option value="badminton">Badminton</option>
                                <option value="baseball">Baseball</option>
                                <option value="basketball">Basketball</option>
                                <option value="boxing">Boxing</option>
                                <option value="cricket">Cricket</option>
                                <option value="cross_country">Cross Country</option>
                                <option value="darts">Darts</option>
                                <option value="decathalon">Decathlon</option>
                                <option value="football">Football</option>
                                <option value="golf">Golf</option>
                                <option value="gymnastics">Gymnastics</option>
                                <option value="hockey">Hockey</option>
                                <option value="horse_riding">Horse Riding</option>
                                <option value="golf">Golf</option>
                                <option value="gymnastics">Gymnastics</option>
                                <option value="hockey">Hockey</option>
                                <option value="horse_riding">Horse Riding</option>
                                <option value="lacrosse">Lacrosse</option>
                                <option value="modern_pentathlon">Modern Pentathlon</option>
                                <option value="motor_racing">Motor Racing</option>
                                <option value="netball">Netball</option>
                                <option value="polo">Polo</option>
                                <option value="rounders">Rounders</option>
                                <option value="rowing">Rowing</option>
                                <option value="rugby_league">Rugby League</option>
                                <option value="rugby_union">Rugby Union</option>
                                <option value="sailing">Sailing</option>
                                <option value="skiing">Skiing</option>
                                <option value="snooker">Snooker</option>
                                <option value="squash">Squash</option>
                                <option value="swimming">Swimming</option>
                                <option value="tennis">Tennis</option>
                                <option value="tetrathlon">Tetrathlon</option>
                                <option value="triathlon">Triathlon</option>
                                <option value="water_polo">Water Polo</option>
                                <option value="water_sports">Water Sports</option>
                                <option value="other">Other</option>
                            </select>
                            <select class="sport_level_input" id="sport_level" name="sport_level[]">
                                <option value="default">Level</option>
                                <option value="university">University</option>
                                <option value="college">College</option>
                                <option value="school">School</option>
                                <option value="other">Other</option>
                            </select>
                            <select class="sport_position_input" name="sport_position[]">
                                <option value="default">Position</option>
                                <option value="first_captain">First Team Captain</option>
                                <option value="captain">Captain</option>
                                <option value="first_vice_captain">First Team Vice Captain</option>
                                <option value="first_member">First Team Member</option>
                                <option value="member">Team Member</option>
                                <option value="other">Other</option>
                            </select>
                        </div>    
                    </div>  
                    <div class="dark_grey_button" id="add_sport_button">Add Sport +</div>
                </div> 
            </div>
        </div>
    </div>
    <div id="other_form">
        <div id="form_div_header">Charity preference</div>
        <div id="charities_box">
            <p>Each time you get back to an employer who contacts you, we will make a donation to the charity you choose. Click on the boxes below to find out more about our five charity partners and lend one your support!</p>
            <div id="charity" class="charity_1"><div class="charity_tick"></div></div>
            <div id="charity" class="charity_2"><div class="charity_tick"></div></div>
            <div id="charity" class="charity_3"><div class="charity_tick"></div></div>
            <div id="charity" class="charity_4"><div class="charity_tick"></div></div>
            <div id="charity" class="charity_5"><div class="charity_tick"></div></div>
            <div id="charity_suggestion_box">Have an idea for a charity we should support? <a href="mailto:contact@gradlist.co.uk">Let us know</a><div class="charity_tick"></div></div>
            <div class="charity_description" id="charity_description_1">
                <img src="img/first_story.jpeg" alt="" />
                <div id="charity_name">First Story</div>
                <div id="charity_brief_description">First Story strives to support and inspire creativity, literacy and talent in challenging UK secondary schools and their communities.</div>
                <div id="charity_detailed_description"><p>First Story achieves this by arranging and paying for acclaimed writers to run creative-writing work-shops for students in state schools across the country. The students’ writing is then published in a professionally produced anthology for each school, and the schools host book-launch events at which the students read their stories to their peers, friends, families and teachers. To find out more visit: <a href="www.firststory.org.uk">www.firststory.org.uk</a>.</p>
                </div>
                <div class="charity_button" id="charity_1_button">Support First Story</div>
            </div>
            <div class="charity_description" id="charity_description_2">
                <img src="img/lords_taveners.jpeg" alt="" />
                <div id="charity_name">The Lord’s Taverners</div>
                <div id="charity_brief_description">The Lord’s Taverners engage disadvantaged and disabled young people using cricket and other forms of sport and recreation to benefit their self-esteem, health, education and future.</div>
                <div id="charity_detailed_description"><p>The charity supports inner city and girls cricket and donates hundreds of cricket equipment bags across the UK. The Lord’s Taverners also supply specially adapted minibuses, sports wheelchairs, and sensory equipment for special needs schools and fund national programs for Table Cricket, Boccia and Wheelchair Basketball giving young people vital access to sport and recreation. To find out more visit: <a href="www.lordstaverners.org">www.lordstaverners.org</a>.</p>
                    <div class="charity_button" id="charity_2_button">Support The Lord's Taverners</div>
                </div>
            </div>
            <div class="charity_description" id="charity_description_3">
                <img src="img/access_project.jpg" alt="" />
                <div id="charity_name">The Access Project</div>
                <div id="charity_brief_description">The Access Project connects students with volunteer tutors. It strives to reduce educational inequality. </div>
                <div id="charity_detailed_description"><p>Access to universities, particularly to top universities, is still far too dependent on affluence. A privately-educated pupil is 22 times more likely to win a place at a highly selective university than a pupil on Free School Meals. TAP aims to change this by giving opportunities to learn in a one-to-one environment to students from disadvantaged backgrounds.  
                    </p>
                    <div class="charity_button" id="charity_3_button">Support The Access Project</div>
                </div>
            </div>
            <div class="charity_description" id="charity_description_4">
                <img src=img/student_hubs.jpg" alt="" />
                <div id="charity_name">Student Hubs</div>
                <div id="charity_brief_description">Student Hubs works across the UK to transform student involvement in social action. </div>
                <div id="charity_detailed_description"><p>Student Hubs believes that university students have the power and potential to shape a better world. Through a growing network of ‘Hubs’ in universities, this charity facilitates student involvement with social and environmental challenges, enabling more students to do more, more effectively and for longer.</p>
                    <p>Selecting Student Hubs will support LinkAges, a project aiming to combat elderly isolation by connecting university student volunteers to local elderly people to run befriending schemes, activities in elderly peoples' homes and day trips. To find out more visit: <a href="http://www.studenthubs.org/">www.studenthubs.org/</a>.</p>
                    <div class="charity_button" id="charity_4_button">Support Student Hubs</div>
                </div>         
            </div>
            <div class="charity_description" id="charity_description_5">
                <img src="img/teach_first.png" alt="" />
                <div id="charity_name">TeachFirst</div>
                <div id="charity_brief_description">Teach First was founded with the ambition of closing the educational attainment gap within our society by placing graduates into teaching roles in UK state schools. </div>
                <div id="charity_detailed_description"><p>Teach First is working in partnership towards a day when no child’s success in life is limited by how much their parents earn. The charity does this by supporting brilliant people to teach and lead in schools in low-income communities, working with them to bring about change inside and outside the classroom and partnering with a range of other organisations who are striving for equality in education. To find out more visit: <a href="www.teachfirst.org.uk">www.teachfirst.org.uk</a>.</p>
                    <div class="charity_button" id="charity_5_button">Support TeachFirst</div>
                </div>
            </div>
            <div id="charity_radio_buttons">
                <input id="charity_radio_1" type="radio" name="charity_selection" value="charity_1" />
                <input id="charity_radio_2" type="radio" name="charity_selection" value="charity_2" />
                <input id="charity_radio_3" type="radio" name="charity_selection" value="charity_3" />
                <input id="charity_radio_4" type="radio" name="charity_selection" value="charity_4" />
                <input id="charity_radio_5" type="radio" name="charity_selection" value="charity_5" />
                <input id="charity_radio_6" type="radio" name="charity_selection" value="charity_6" />
            </div>
        </div>
        <div id="form_div_header">General information</div>
        <div id="other_personal_box">
            <select name="gender" id="gender">
                <option value="default">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="not_stated">Prefer Not to Say</option>
            </select>
            <select name="ethnicity" id="ethnicity">
                <option value="default">Ethnicity</option>
                <option value="white">White</option>
                <optgroup label="Mixed">Mixed
                    <option value="white_caribbean">White and Black Caribbean</option>
                    <option value="white_african">White and Black African</option>
                    <option value="white_asian">White and Asian</option>
                </optgroup>
                <optgroup label="Asian">
                    <option value="indian">Indian</option>
                    <option value="pakistani">Pakistani</option>
                    <option value="bangladeshi">Bangladeshi</option>
                    <option value="chinese">Chinese</option>
                    <option value="other_asian">Other Asian</option>
                </optgroup>
                <optgroup label="Black">
                    <option value="african">African</option>
                    <option value="caribbean">Caribbean</option>
                </optgroup>
                <option value="other">Other</option>
                <option value="not_stated">Prefer Not to Say</option>
            </select>
            <div id="dob_title">Date of Birth</div>
            <select name="date_dob" id="date_dob">
                @for( $i = 1; $i <= 31; $i++ )
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <select name="month_dob" id="month_dob">
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
            <select name="year_dob" id="year_dob">
                @for ($i = 2007; $i >= 1900; $i--)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div id="form_div_header">We hate spam as much as you do</div>
        <div id="no_spam_box">
            <p>So we let you choose how often companies can contact you. But remember, the more emails you get, the more likely you are to get the job you want, and the more money goes to charity.</p>
            <h3>Employers can contact me up to</h3>
            <select name="emails_per_week">
                <option value="unlimited">As much as they want</option>
                <option value="weekly">Once a week</option>
                <option value="monthly">Once a month</option>
            </select>
        </div>
    </div> 
</div>
</form>
<div id="spacer"></div>
<div id="footer"></div>
@include('common.bottom')
{{ HTML::script('js/verimail.jquery.js') }}
{{ HTML::script('js/date.js') }}
{{ HTML::script('js/sisyphus.js') }}
{{ HTML::script('js/dashboard.js') }}
{{ HTML::script('js/dashboard_form.js') }}
{{ HTML::script('js/jquery.html5-placeholder-shim.js') }}
</body>
</html>
