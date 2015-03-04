<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>GradList - Find a Job</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/base.css">
        
        <link rel="stylesheet" type="text/css" media="only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="/css/mobile_sign_up.css" />
        
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
	
	<div id="segment_3" class="progress_segment pos_3">
	<div class="progress_segment_text">Other</div>
	<div class="progress_segment_icon"></div>
	</div>
	
	</div>
	
	<div id="spacer"></div>
	
	</div>
	
	</div>
	
        <form id="gl_sign_up" method="post" action="/index.php/sign_up/success">
        
        <div id="basic_form">
        
        <div id="form_div_header">Just a few basic details</div>
        
        <div id="personal_box">
        
        
        
        <div class="text_input_container">
        
        <div class="error_overlay" id="first_name_error">First name required</div>
        
        <input id="first_name_input" type="text" name="first_name" value="" placeholder="First Name"/>
        
        </div>
        
        <div id="first_name_tooltip" class="val_tooltip">This bit's required, sorry! 
        <div class="val_tooltip_arrow_up"></div>
        </div>
        
        <div class="error_overlay" id="last_name_error">Last name required</div>
        
        <input id="last_name_input" type="text" name="last_name" value="" placeholder="Last Name"/>
        
       	<div id="last_name_tooltip" class="val_tooltip">This bit's required, sorry!
       	<div class="val_tooltip_arrow_up"></div>
       	</div>
       	
        <input id="email_input" type="text" name="email" value="" placeholder="Email"/>
        
        <div id="status_message"></div>
		
		<div id="email_tooltip" class="val_tooltip"><div id="email_tooltip_text">We won't send you spam but we do need your email!</div>
		<div class="val_tooltip_arrow_down"></div>
		</div>
		
        <input id="password_input" type="password" name="password" value="" placeholder="Password"/>
		
		<div id="password_tooltip" class="val_tooltip">We're not the CIA but we need something!
		<div class="val_tooltip_arrow_down"></div>
		</div>
        
        </div>
        
        <div id="form_div_header">So what kind of jobs are you interested in?</div>
        
        <div id="header_error"></div>
        
        <div id="header_tooltip" class="val_tooltip">You must be interested in something!
        <div class="val_tooltip_arrow_up"></div>
        </div>
        
        <div id="sector_box">
        
        <div id="creative_box" class="sector_sub_box">
        <div class="sector_grouping_header creative">Creative</div>
        
        <label name="sector_interest[]" value="advertising" class="checkbox"><input type="checkbox">Advertising </label>
        <label name="sector_interest[]" value="journalism" class="checkbox"><input type="checkbox">Journalism </label>
        <label name="sector_interest[]" value="marketing" class="checkbox"><input type="checkbox">Marketing </label>
        <label name="sector_interest[]" value="publishing" class="checkbox"><input type="checkbox">Publishing </label>
        <label name="sector_interest[]" value="pr" class="checkbox"><input type="checkbox">PR </label>
        
        </div>
     
     <div id="professional_box" class="sector_sub_box">
     <div class="sector_grouping_header professional">Professional Services</div>
     
     <label name="sector_interest[]" value="accounting" class="checkbox"><input type="checkbox">Accounting </label>
     <label name="sector_interest[]" value="banking" class="checkbox"><input type="checkbox">Banking </label>
     <label name="sector_interest[]" value="consulting" class="checkbox"><input type="checkbox">Consulting </label>
     <label name="sector_interest[]" value="finance" class="checkbox"><input type="checkbox">Finance </label>
     <label name="sector_interest[]" value="investment_banking" class="checkbox"><input type="checkbox">Investment Banking </label>
     <label name="sector_interest[]" value="law" class="checkbox"><input type="checkbox">Law </label>
     
     </div>  
     
     <div id="industry_box" class="sector_sub_box">
     <div class="sector_grouping_header industry">Industry</div>
     <label name="sector_interest[]" value="consumer_goods" class="checkbox"><input type="checkbox">Consumer Goods</label>
     <label name="sector_interest[]" value="energy" class="checkbox"><input type="checkbox">Energy and Utilities</label>
     <label name="sector_interest[]" value="it_telecoms" class="checkbox"><input type="checkbox">IT and Telecoms</label>
     <label name="sector_interest[]" value="management" class="checkbox"><input type="checkbox">Management</label>
     <label name="sector_interest[]" value="hr" class="checkbox"><input type="checkbox">Human Resources</label>
     <label name="sector_interest[]" value="logistics" class="checkbox"><input type="checkbox">Logistics</label>
     <label name="sector_interest[]" value="retail" class="checkbox"><input type="checkbox">Retail</label>
     <label name="sector_interest[]" value="transport" class="checkbox"><input type="checkbox">Transport</label>
     </div>     
      
     <div id="public_sector_box" class="sector_sub_box">
     <div class="sector_grouping_header public_sector">Public Sector</div>
    
    <label name="sector_interest[]" value="education" class="checkbox"><input type="checkbox">Education</label>
    <label name="sector_interest[]" value="government" class="checkbox"><input type="checkbox">Government</label>
    <label name="sector_interest[]" value="politics" class="checkbox"><input type="checkbox">Politics</label>
     </div>  
     
     <div id="spacer"></div>
     
     </div>
     
     <div id="button_holder">
     
     <div id="next_button_basic">Next</div>
     
     </div>
     
     </div>     
    
    
    
    
    <div id="education_form">
    
    
	    <div id="form_div_header">Great! So now a bit about your education...</div>
    

    
  
    
    
    
    <div id="education_container">
    
    <div id="uni_details_box">
    

    <div id="box_header">
    
    <div class="box_header">University</div>
    
    </div>
    
    <select name="degree_type[]" id="degree_type">
    <option value="default">Degree Type</option>
    <option value="undergraduate">Undergraduate</option>
    <option value="graduate">Graduate</option>
    <option value="postgraduate">Postgraduate</option>
    </select>
    
 	<select name="degree_uni[]" id="degree_uni">
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
 	</select>
 	
 	<select name="degree_subject[]" id="degree_subject">
 	<option value="default">Subject</option>
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
 	
 	</select>
 	
 	<select name="degree_result[]" id="degree_result">
 	<option value="default">Result</option>
 	<option value="1">1st</option>
 	<option value="2">2:1</option>
 	<option value="3">2:2</option>
 	<option value="4">3rd</option>
 	</select>
 	
 	<select name="degree_graduation[]" id="degree_graduation">
 	<option value="default">Graduation Date</option>
 	<option value="2000">2000</option>
 	<option value="2001">2001</option>
 	<option value="2002">2002</option>
 	<option value="2003">2003</option>
 	<option value="2004">2004</option>
 	<option value="2005">2005</option>
 	<option value="2006">2006</option>
 	<option value="2007">2007</option>
 	<option value="2008">2008</option>
 	<option value="2009">2009</option>
 	<option value="2010">2010</option>
 	<option value="2011">2011</option>
 	<option value="2012">2012</option>
 	<option value="2013">2013</option>
 	
 	</select>
 	
    </div>
 	
 	</div>
 	
 	<div id="add_degree_button">Add Degree +</div>
 	
 	<div id="qualifications_container">
 	
 	<div id="qualifications_box">
 	 	<div class="box_header">School</div>
 	 	<div class="delete_box_btn"></div>
 	 	
 	 	<select name="qual_type[]" id="qual_type">
 	 	<option value="default">Qualification Type</option>
 	 	<option value="a_level">A Level</option>
 	 	<option value="highers">Highers</option>
 	 	<option value="ib">IB</option>
 	 	<option value="pre_u">Pre-U</option>
 	
 	 	</select>
 	 	
 	 		<select name="qual_subject[]" id="qual_subject">
 	 	<option value="default">Subject</option>
 	 	<option value="art_history">Art History</option>
 	 	<option value="biology">Biology</option>
 	 	<option value="chemistry">Chemistry</option>
 	 	<option value="chinese">Chinese</option>
 	 	<option value="classics">Classics</option>
 	 	<option value="economics">Economics</option>
 	 	<option value="english">English Literature</option>
 	 	<option value="french">French</option>
 	 	<option value="further_maths">Further Maths</option>
 	 	<option value="geography">Geography</option>
 	 	<option value="german">German</option>
 	 	<option value="greek">Greek</option>
 	 	<option value="history">History</option>
 	 	<option value="irish">Irish</option>
 	 	<option value="italian">Italian</option>
 	 	<option value="japanese">Japanese</option>
 	 	<option value="latin">Latin</option>
 	 	<option value="mathematics">Mathematics</option>
 	 	<option value="music">Music</option>
 	 	<option value="philosophy">Philosophy</option>
 	 	<option value="phyiscs">Physics</option>
 	 	<option value="religious_studies">Religious Studies</option>
 	 	<option value="russian">Russian</option>
 	 	<option value="spanish">Spanish</option>
 	 	<option value="welsh">Welsh</option>
 	
 	 		</select>
 	 		
 	 		<select name="qual_result[]" id="qual_result">
 	 		<option value="default">Result</option>
 	 
 	 		
 	 		</select>
 	 
 	 
 	 		
 	 	</div>
 	
 	</div>
 	
 	<div id="add_qualification_button">Add Qualification +</div>
 	
 	
 	
 	
 	
 
          
     
    
   
    
     <div id="form_div_header">...and what about languages?</div>
     
         <div id="language_container">
     
     <div id="languages_box_english">
      
     <div id="english_title">English</div> 
     
     <input style="display: none;" id="language_other" placeholder="Other" type="text" name="" />
     
     <select name="english_level" id="languages_level">
     <option value="default" selected="selected">Select</option>
     <option value="native">Native</option>
     <option value="fluent">Fluent</option>
     <option value="intermediate">Intermediate</option>
     <option value="basic">Basic</option>
     </select>
     
     </div>
     
     <div id="languages_box">
     
     <select name="languages[]" id="languages">
     <option value = "language">Language</option>
     <option value = "om">(Afan) Oromo</option>
     <option value = "ab">Abkhazian</option>
     <option value = "aa">Afar</option>
     <option value = "af">Afrikaans</option>
     <option value = "sq">Albanian</option>
     <option value = "am">Amharic</option>
     <option value = "ar">Arabic</option>
     <option value = "hy">Armenian</option>
     <option value = "as">Assamese</option>
     <option value = "at">Austrian</option>
     <option value = "ay">Aymara</option>
     <option value = "az">Azerbaijani</option>
     <option value = "ba">Bashkir</option>
     <option value = "eu">Basque</option>
     <option value = "bn">Bengali; Bangla</option>
     <option value = "dz">Bhutani</option>
     <option value = "bh">Bihari</option>
     <option value = "bi">Bislama</option>
     <option value = "br">Breton</option>
     <option value = "bg">Bulgarian</option>
     <option value = "my">Burmese</option>
     <option value = "be">Byelorussian</option>
     <option value = "km">Cambodian</option>
     <option value = "ct">Cantonese</option>
     <option value = "ca">Catalan</option>
     <option value = "zh">Chinese</option>
     <option value = "co">Corsican</option>
     <option value = "hr">Croatian</option>
     <option value = "cs">Czech</option>
     <option value = "da">Danish</option>
     <option value = "nl">Dutch</option>
     <option value = "en">English</option>
     <option value = "eo">Esperanto</option>
     <option value = "et">Estonian</option>
     <option value = "fo">Faeroese</option>
     <option value = "fj">Fiji</option>
     <option value = "fi">Finnish</option>
     <option value = "fr">French</option>
     <option value = "fy">Frisian</option>
     <option value = "gl">Galician</option>
     <option value = "ka">Georgian</option>
     <option value = "de">German</option>
     <option value = "el">Greek</option>
     <option value = "kl">Greenlandic</option>
     <option value = "gn">Guarani</option>
     <option value = "gu">Gujarati</option>
     <option value = "ha">Hausa</option>
     <option value = "iw">Hebrew</option>
     <option value = "hi">Hindi</option>
     <option value = "hu">Hungarian</option>
     <option value = "is">Icelandic</option>
     <option value = "in">Indonesian</option>
     <option value = "ia">Interlingua</option>
     <option value = "ie">Interlingue</option>
     <option value = "ik">Inupiak</option>
     <option value = "ga">Irish</option>
     <option value = "it">Italian</option>
     <option value = "ja">Japanese</option>
     <option value = "jw">Javanese</option>
     <option value = "kn">Kannada</option>
     <option value = "ks">Kashmiri</option>
     <option value = "kk">Kazakh</option>
     <option value = "rw">Kinyarwanda</option>
     <option value = "ky">Kirghiz</option>
     <option value = "rn">Kirundi</option>
     <option value = "ko">Korean</option>
     <option value = "ku">Kurdish</option>
     <option value = "lo">Laothian</option>
     <option value = "la">Latin</option>
     <option value = "lv">Latvian, Lettish</option>
     <option value = "ln">Lingala</option>
     <option value = "lt">Lithuanian</option>
     <option value = "lb">Luxembourgeois</option>
     <option value = "mk">Macedonian</option>
     <option value = "mg">Malagasy</option>
     <option value = "ms">Malay</option>
     <option value = "ml">Malayalam</option>
     <option value = "mt">Maltese</option>
     <option value = "ma">Mandarin</option>
     <option value = "mi">Maori</option>
     <option value = "mr">Marathi</option>
     <option value = "mo">Moldavian</option>
     <option value = "mn">Mongolian</option>
     <option value = "na">Nauru</option>
     <option value = "ne">Nepali</option>
     <option value = "no">Norwegian</option>
     <option value = "oc">Occitan</option>
     <option value = "or">Oriya</option>
     <option value = "ps">Pashto, Pushto</option>
     <option value = "fa">Persian</option>
     <option value = "pl">Polish</option>
     <option value = "pt">Portuguese</option>
     <option value = "pa">Punjabi</option>
     <option value = "qu">Quechua</option>
     <option value = "rm">Rhaeto-Romance</option>
     <option value = "ro">Romanian</option>
     <option value = "ru">Russian</option>
     <option value = "sm">Samoan</option>
     <option value = "sg">Sangro</option>
     <option value = "sa">Sanskrit</option>
     <option value = "gd">Scots Gaelic</option>
     <option value = "sr">Serbian</option>
     <option value = "sh">Serbo-Croatian</option>
     <option value = "st">Sesotho</option>
     <option value = "tn">Setswana</option>
     <option value = "sn">Shona</option>
     <option value = "sd">Sindhi</option>
     <option value = "si">Singhalese</option>
     <option value = "ss">Siswati</option>
     <option value = "sk">Slovak</option>
     <option value = "sl">Slovenian</option>
     <option value = "so">Somali</option>
     <option value = "es">Spanish</option>
     <option value = "su">Sundanese</option>
     <option value = "sw">Swahili</option>
     <option value = "sv">Swedish</option>
     <option value = "tl">Tagalog</option>
     <option value = "tg">Tajik</option>
     <option value = "ta">Tamil</option>
     <option value = "tt">Tatar</option>
     <option value = "te">Telugu</option>
     <option value = "th">Thai</option>
     <option value = "bo">Tibetan</option>
     <option value = "ti">Tigrinya</option>
     <option value = "to">Tonga</option>
     <option value = "ts">Tsonga</option>
     <option value = "tr">Turkish</option>
     <option value = "tk">Turkmen</option>
     <option value = "tw">Twi</option>
     <option value = "uk">Ukrainian</option>
     <option value = "ur">Urdu</option>
     <option value = "uz">Uzbek</option>
     <option value = "vi">Vietnamese</option>
     <option value = "vo">Volapuk</option>
     <option value = "cy">Welsh</option>
     <option value = "wo">Wolof</option>
     <option value = "xh">Xhosa</option>
     <option value = "ji">Yiddish</option>
     <option value = "yo">Yoruba</option>
     <option value = "zu">Zulu</option>
     <option value = "1">Other</option>
     </select>
    
    <input style="display: none;" id="language_other" placeholder="Other" type="text" name="" />
    
    <select name="languages_level[]" id="languages_level">
    <option value="level">Level</option>
    <option value="native">Native</option>
    <option value="fluent">Fluent</option>
    <option value="intermediate">Intermediate</option>
    <option value="basic">Basic</option>
    </select>
    
    </div>
    
    </div>
    
    <div id="add_language_button">Add Language +</div>
    
    <div id="button_holder">
    
    <div id="back_button_education">Back</div>
    
    <div id="next_button_education">Next</div>
    
    </div>
    
    </div>         
    
    <div id="experience_form">
    
    <div id="form_div_header">Now just a bit about your work experience...</div>
    
    
    

     
     <div id="work_experience_container">
     
     <div id="work_experience_box">
     
     <div class="box_header">Work Experience</div>
     <div class="delete_box_btn"></div>
     
     <select name="work_type[]" id="work_type">
     <option value="default">Type</option>
     <option value="full_time">Full Time</option>
     <option value="internship">Internship</option>
     <option value="summer_job">Summer Job</option>
     </select>
     
     <select name="work_length[]" id="work_length">
     <option value="default">Length</option>
     <option value="1_week">1 week</option>
     <option value="2_to_4_weeks">2-4 weeks</option>
     <option value="1_to_2_months">1-2 months</option>
     <option value="3_to_4_months">3-4 months</option>
     <option value="over_4_months">Over 4 months</option>
     </select>
     
     <select name="work_sector[]">
     <option value="default">Job Sector</option>
     <optgroup label="Creative">
     <option value="advertising">Advertising</option>
     <option value="marketing">Marketing</option>
     <option value="public_relations">Public Relations</option>
     <option value="publishing">Publishing</option>
     <option value="journalism">Journalism</option>
     </optgroup>
     <optgroup label="Industry">
     <option value="consumer_goods">Consumer Goods</option>
     <option value="energy_and_utilities">Energy and Utilities</option>
     <option value="it_and_telecoms">IT and Telecoms</option>
     <option value="management">Management</option>
     <option value="human_resources">Human Resources</option>
     <option value="retail">Retail</option>
     <option value="transport_and_logistics">Transport and Logistics</option>
     </optgroup>
     <optgroup label="Public Sector">
     <option value="education">Education</option>
     <option value="government">Government</option>
     <option value="politics">Politics</option>
     </optgroup>
     
     <optgroup label="Science">
     <option value="engineering">Engineering</option>
     <option value="healthcare">Healthcare</option>
     <option value="pharmaceuticals">Pharmaceuticals</option>
     <option value="research">Research</option>
     </optgroup>
     </select>
     
     <input placeholder="Organisation" id="work_organisation" type="text" name="" value="" />
     
     </div>
    
    
    </div>
    
    <div id="add_experience_button">Add Experience +</div>
    
   
     <div id="form_div_header">...and what you get up to in your spare time</div>
     
     <div id="work_experience_box">
     
     <div class="box_header">Positions</div>
     <div class="delete_box_btn"></div>
    
     <label name="society_type[]" value="society" class="radio"><input id="society_radio" name="experience_type" type="radio" checked="checked">Society </label>
     <label name="society_type[]" value="sport" class="radio"><input id="sports_radio" name="experience_type" type="radio">Sport</label>
     
     <select name="category[]" id="work_length">
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
     
     <select id="sport_level" name="sport_level[]">
     <option value="default">Level</option>
     <option value="president">University</option>
     <option value="vice_president">College</option>
     <option value="committee_member">Other</option>
     </select>
     
     <select name="position[]">
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
          
     </div>
    
     <div id="add_experience_button">Add Position +</div>
    
    <div id="button_holder">
    
    <div id="back_button_experience">Back</div>
    
    <div id="next_button_experience">Next</div>
    
    </div>
    
    </div>
    
   
    
    </div>
    
    </div>
    
     
    <div id="other_form">
    
    <div id="form_div_header">Time to choose your charity</div>
     
     <div id="charities_box">
     
     <p>Every time an employer contacts you, we'll make a donation to the charity of your choice. Simply choose one of these great educational charities, and lend them your support.</p>
     
     <div id="charity" class="charity_1"><div class="charity_tick"></div></div>
     <div id="charity" class="charity_2"><div class="charity_tick"></div></div>
     <div id="charity" class="charity_3"><div class="charity_tick"></div></div>
     <div id="charity" class="charity_4"><div class="charity_tick"></div></div>
     <div id="charity" class="charity_5"><div class="charity_tick"></div></div>
     <div id="charity" class="charity_6"><div class="charity_tick"></div></div>
    
    <div class="charity_description" id="charity_description_1">
    
    <img src="../img/first_story.jpeg" alt="" />
    
    <div id="charity_name">First Story</div>
    <div id="charity_brief_description">First Story strives to support and inspire creativity, literacy and talent in challenging UK secondary schools and their communities.</div>
    <div id="charity_detailed_description"><p>First Story arranges and pays for acclaimed writers to run creative-writing workshops for students in state schools across the country. Each writer-in-residence leads weekly, after-school workshops for a group of up to twenty-one students. We publish the students’ writing in a professionally produced anthology for each school, and the schools host book-launch events at which the students read their stories to their peers, friends, families and teachers.</p>
    <p>We focus on schools in which more than 50% of pupils are considered deprived according to the Income Deprivation Affecting Children Index and/or GCSE results fall in the lowest third of the national distribution.</p></div>
    
    <div class="charity_button" id="charity_1_button">Support First Story</div>
    
    </div>
    
    <div class="charity_description" id="charity_description_2">
    
    <img src="../img/lords_taveners.jpeg" alt="" />
    
    <div id="charity_name">The Lord's Tavenders</div>
    <div id="charity_brief_description">The Lord's Taveners mission is to enhance the prospects of disadvantaged and disabled young people using cricket and other forms of sport and recreation to engage with them.</div>
    <div id="charity_detailed_description"><p>We aim to enhance the prospects of disadvantaged and disabled young people using cricket and other forms of sport and recreation to engage with them.</p>
    
    <p>We envisage a future where all young people, irrespective of background and ability, have the everyday opportunity to play cricket and enjoy other sports and physical activities to the benefit of their self-esteem, health, education and future socio-economic potential.</p>
    
    <div class="charity_button" id="charity_2_button">Support The Lord's Tavenders</div>
    
    </div>
    
    </div>
    
    <div class="charity_description" id="charity_description_3">
    
    <img src="../img/access_project.jpg" alt="" />
    
    <div id="charity_name">The Access Project</div>
    <div id="charity_brief_description">The Access Project connects students with volunteer tutors. It strives to reduce educational inequality. </div>
    <div id="charity_detailed_description"><p>Access to universities, particularly to top universities, is still far too dependent on affluence. A privately-educated pupil is 22 times more likely to win a place at a highly selective university than a pupil on Free School Meals. TAP aims to change this by giving opportunities to learn in a one-to-one environment to students from disadvantaged backgrounds.  
    </p>
    
    <div class="charity_button" id="charity_3_button">Support The Access Project</div>
    
    </div>
    
    </div>
    
    <div class="charity_description" id="charity_description_4">
    
    <img src="../img/student_hubs.jpg" alt="" />
    
    <div id="charity_name">Student Hubs</div>
    <div id="charity_brief_description">Student Hubs works across the UK to transform student involvement in social action. </div>
    <div id="charity_detailed_description"><p>We act as a catalyst, empowering students to become active members of their community by promoting social action, social entrepreneurship and citizenship.</p>
    
    <p>We have a growing network of ‘Hubs’ in universities that increase student involvement in social action and ensure these efforts are effective and sustainable. We currently work in the universities of Bristol, Cambridge, Oxford, Oxford Brookes, Imperial, Southampton and Warwick – with a membership of over 20,000 students, 100 student groups and 20 national NGOs.</p>
    
    <div class="charity_button" id="charity_4_button">Support Student Hubs</div>
    
    </div>
    
    
    
    </div>
    
    <div class="charity_description" id="charity_description_5">
    
    <img src="../img/nofa.jpg" alt="" />
    
    <div id="charity_name">National Orchestra for All</div>
    <div id="charity_brief_description">The National Orchestra for All (NOFA) challenges disadvantage through music and gives 11-18 year olds the life-changing experience of making music with others.</div>
    <div id="charity_detailed_description"><p>Set up in 2011 and inspired by El Sistema’s vision of music as a vehicle for social transformation, NOFA is aimed at young people who are passionate about music but who, through no fault of their own, face barriers to musical progress and music making. At NOFA, musical young people find a place they belong with a measurable impact on their confidence, self-esteem, resilience and life-satisfaction. </p>
    
    <div class="charity_button" id="charity_5_button">Support NOFA</div>
    
    </div>
    
    
    
    </div>
    
    <div class="charity_description" id="charity_description_6">
    
    <img src="../img/teach_first.png" alt="" />
    
    <div id="charity_name">TeachFirst</div>
    <div id="charity_brief_description">Teach First was founded with the ambition of closing the educational attainment gap within our society by placing recent graduates into teaching roles in UK state schools. </div>
    <div id="charity_detailed_description"><p>At Teach First we are working in partnership with others to ensure that no child’s educational success is limited by their socio-economic background. We believe that the scale of change needed will only be achieved through the collective effort of leaders in classrooms, in schools and throughout society.</p>
    
    <p>Each must challenge and change the status quo child by child, classroom by classroom, school by school, community by community until educational inequality becomes a work of fiction, not fact.</p>
    
    <div class="charity_button" id="charity_6_button">Support TeachFirst</div>
    
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
    
    <div id="form_div_header">Just one or two more questions</div>
    
    
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
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
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
    <option value="2007">2007</option>
    	<option value="2006">2006</option>
    	<option value="2005">2005</option>
    	<option value="2004">2004</option>
    	<option value="2003">2003</option>
    	<option value="2002">2002</option>
    	<option value="2001">2001</option>
    	<option value="2000">2000</option>
    	<option value="1999">1999</option>
    	<option value="1998">1998</option>
    	<option value="1997">1997</option>
    	<option value="1996">1996</option>
    	<option value="1995">1995</option>
    	<option value="1994">1994</option>
    	<option value="1993">1993</option>
    	<option value="1992">1992</option>
    	<option value="1991">1991</option>
    	<option value="1990">1990</option>
    	<option value="1989">1989</option>
    	<option value="1988">1988</option>
    	<option value="1987">1987</option>
    	<option value="1986">1986</option>
    	<option value="1985">1985</option>
    	<option value="1984">1984</option>
    	<option value="1983">1983</option>
    	<option value="1982">1982</option>
    	<option value="1981">1981</option>
    	<option value="1980">1980</option>
    	<option value="1979">1979</option>
    	<option value="1978">1978</option>
    	<option value="1977">1977</option>
    	<option value="1976">1976</option>
    	<option value="1975">1975</option>
    	<option value="1974">1974</option>
    	<option value="1973">1973</option>
    	<option value="1972">1972</option>
    	<option value="1971">1971</option>
    	<option value="1970">1970</option>
    	<option value="1969">1969</option>
    	<option value="1968">1968</option>
    	<option value="1967">1967</option>
    	<option value="1966">1966</option>
    	<option value="1965">1965</option>
    	<option value="1964">1964</option>
    	<option value="1963">1963</option>
    	<option value="1962">1962</option>
    	<option value="1961">1961</option>
    	<option value="1960">1960</option>
    	<option value="1959">1959</option>
    	<option value="1958">1958</option>
    	<option value="1957">1957</option>
    	<option value="1956">1956</option>
    	<option value="1955">1955</option>
    	<option value="1954">1954</option>
    	<option value="1953">1953</option>
    	<option value="1952">1952</option>
    	<option value="1951">1951</option>
    	<option value="1950">1950</option>
    	<option value="1949">1949</option>
    	<option value="1948">1948</option>
    	<option value="1947">1947</option>
    	<option value="1946">1946</option>
    	<option value="1945">1945</option>
    	<option value="1944">1944</option>
    	<option value="1943">1943</option>
    	<option value="1942">1942</option>
    	<option value="1941">1941</option>
    	<option value="1940">1940</option>
    	<option value="1939">1939</option>
    	<option value="1938">1938</option>
    	<option value="1937">1937</option>
    	<option value="1936">1936</option>
    	<option value="1935">1935</option>
    	<option value="1934">1934</option>
    	<option value="1933">1933</option>
    	<option value="1932">1932</option>
    	<option value="1931">1931</option>
    	<option value="1930">1930</option>
    	<option value="1929">1929</option>
    	<option value="1928">1928</option>
    	<option value="1927">1927</option>
    	<option value="1926">1926</option>
    	<option value="1925">1925</option>
    	<option value="1924">1924</option>
    	<option value="1923">1923</option>
    	<option value="1922">1922</option>
    	<option value="1921">1921</option>
    	<option value="1920">1920</option>
    	<option value="1919">1919</option>
    	<option value="1918">1918</option>
    	<option value="1917">1917</option>
    	<option value="1916">1916</option>
    	<option value="1915">1915</option>
    	<option value="1914">1914</option>
    	<option value="1913">1913</option>
    	<option value="1912">1912</option>
    	<option value="1911">1911</option>
    	<option value="1910">1910</option>
    	<option value="1909">1909</option>
    	<option value="1908">1908</option>
    	<option value="1907">1907</option>
    	<option value="1906">1906</option>
    	<option value="1905">1905</option>
    	<option value="1904">1904</option>
    	<option value="1903">1903</option>
    	<option value="1902">1902</option>
    	<option value="1901">1901</option>
    	<option value="1900">1900</option>
    </select>
     </div>
    
    
    <div id="form_div_header">We hate spam as much as you do</div>
     
     <div id="no_spam_box">
     
     <p>So we let you choose how often companies can contact you. But remember, the more emails you get, the more likely you are to get the job you want, and the more money goes to charity.</p>
     
     <h3>Employers can contact me up to</h3>
     
     
     <select name="emails_per_week">
     <option value="5">5 times a week</option>
     <option value="4">4 times a week</option>
     <option value="3">3 times a week</option>
     <option value="2">2 times a week</option>
     <option value="1">once a week</option>
     </select>
      
    
     </div>
    
    
     <div id="form_div_header">Finally, the boring legal stuff...</div>
     
     <div id="legal_error"></div>     
     
    <div id="terms_and_conditions_box">
    
    <input id="terms_checkbox" type="checkbox" name="terms_and_conditions_agree" value="accepted" />
    
    <p>I agree to the GradList <a href="">Terms of Service</a> and <a href="">Privacy Policy</a></p>
   
    </div>
    
    <div id="button_holder">
    
    <div id="next_button_other">Sign Up</div>
    
    </div>
    
    </div> 
     
                     
        </div>
        
        </form>
        
        
        <div id="spacer"></div>
	
	<div id="footer"></div>
		
		
        <script src="/js/jquery-1.8.3.min.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/verimail.jquery.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/date.js"></script>
        <script src="/js/sign_up.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
