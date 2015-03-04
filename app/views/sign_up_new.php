<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>TalentPool - Sign Up</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/base_new.css">
        <meta name="viewport" content="width=1030, maximum-scale=1.0" />
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-45195160-1', 'gradlist.co.uk');
          ga('send', 'pageview');
        
        </script>
        
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
	<div class="progress_segment_text">Education &#38; Skills</div>
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
	
        <form id="gl_sign_up" method="post" action="/index.php/sign_up_simplified/success">
        
        <div id="basic_form">
        
        <div id="form_div_header">Just a few basic details</div>
        
        <div id="personal_box">
        
        
        
        <div class="text_input_container">
        
        	<div class="error_overlay" id="first_name_error">First name required</div>
        	
        	<input id="first_name_input" type="text" name="first_name" value="<?php echo $first_name;?>" placeholder="First Name"/>
        
        </div>
        
        <div class="text_input_container">
        
        	<div class="error_overlay" id="last_name_error">Last name required</div>
        
        	<input id="last_name_input" type="text" name="last_name" value="<?php echo $last_name;?>" placeholder="Last Name"/>
        
        </div>
        
        <div class="text_input_container">
        
        	<div class="error_overlay" id="email_formatting_error"></div>
        	
        	<div class="error_overlay" id="email_in_use">Email in use</div>    
            <div class="error_overlay" id="email_error">Email required</div>
             	
       		<input id="email_input" type="email" name="email" value="<?php echo $email;?>" placeholder="Email"/>
        
        	<div id="status_message"></div>

		</div>
		
		<div class="text_input_container">
			
			<div class="error_overlay" id="password_error">Password required</div>
				
        	<input id="password_input" type="password" name="password" value="<?php echo $password;?>" placeholder="Password"/>
		
		</div>
        
        </div>
        
        <div id="form_div_header">So what kind of jobs are you interested in?</div>
        
        <div id="industry_interest_error" class="error_overlay_header">It's up to you, but this bit's useful to match you with employers.</div>       
        
        
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
     
     <label class="agnostic_box_labels"><input type="radio" name="sector_agnostic" value="no" />Only the sectors I've chosen </label>
     <label class="agnostic_box_labels"><input type="radio" name="sector_agnostic" value="yes" checked="checked"/>I'm open to suggestions</label>
     
     </div> 
     
     <div id="job_type_box">
     <div id="agnostic_box_header" class="sector_grouping_header">I'm looking for a...</div>
     
     <div id="job_type_container">
     
     <div class="checkbox_container_option"><div class="checkbox_option"><input type="checkbox" name="job_type[]" value="full-time"/>
     </div><p>Full-Time Job</p></div>
     <div class="checkbox_container_option"><div class="checkbox_option"><input type="checkbox" name="job_type[]" value="part-time"/></div><p>Part-Time Job</p></div>
     <div class="checkbox_container_option"><div class="checkbox_option"><input type="checkbox" name="job_type[]" value="internship"/></div><p>Internship</p></div>
     
     </div>
     
     <div id="agnostic_box_header" class="sector_grouping_header">...and I'd like work in the...</div>
     
     <div id="job_location_container">
     
     <div class="checkbox_container_option"><div class="checkbox_option"><input type="checkbox" name="job_location[]" value="north_east"/>
     </div><p>North East</p></div>
     
     <div class="checkbox_container_option"><div class="checkbox_option"><input type="checkbox" name="job_location[]" value="north_west"/>
     </div><p>North West</p></div>
     
     <div class="checkbox_container_option"><div class="checkbox_option"><input type="checkbox" name="job_location[]" value="yorkshire_and_the_humber"/>
     </div><p>Yorkshire and the Humber</p></div>
     
     <div class="checkbox_container_option"><div class="checkbox_option"><input type="checkbox" name="job_location[]" value="east_midlands"/>
     </div><p>East Midlands</p></div>
     
     <div class="checkbox_container_option"><div class="checkbox_option"><input type="checkbox" name="job_location[]" value="west_midlands"/>
     </div><p>West Midlands</p></div>
     
     <div class="checkbox_container_option"><div class="checkbox_option"><input type="checkbox" name="job_location[]" value="east_of_england"/>
     </div><p>East of England</p></div>
     
     <div class="checkbox_container_option"><div class="checkbox_option"><input type="checkbox" name="job_location[]" value="london"/>
     </div><p>London</p></div>
     
     <div class="checkbox_container_option"><div class="checkbox_option"><input type="checkbox" name="job_location[]" value="south_east"/>
     </div><p>South East</p></div>
     
     <div class="checkbox_container_option"><div class="checkbox_option"><input type="checkbox" name="job_location[]" value="south_west"/>
     </div><p>South West</p></div>
     
     </div>
     
     
     <div id="agnostic_box_header" class="sector_grouping_header">...and I'm available for work...</div>
     
     <label class="availability_option"><input class="radio_availability" type="radio" name="availability" value="immediately"/>Immediately </label>
     <label class="availability_option"><input class="radio_availability" type="radio" name="availability" value="summer" />This summer</label>
      <label class="availability_option"><input class="radio_availability" type="radio" name="availability" value="other" />Other</label>
     
     <div id="availability_other_details">
     
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
     
     </div> 
     
     <div id="spacer"></div>
     
     </div>
     
     <div id="button_holder">
     
     <div class="red_button" id="next_button_basic">Next</div>
     
     </div>
     
     </div>     
    
    
    
    
    <div id="education_form">
    
    
	    <div id="form_div_header">Great! So now a bit about your education...</div>
    

    
  
    
    
    
    <div id="education_container">
    
    <div box-count="1" class="uni_details_box">
    
    <div id="university_error" class="error_overlay_header">This bit's required</div>   

    <div id="box_header">
    
    <div class="box_header">University</div>
    
    </div>
    
    <div class="delete_box_btn"></div>
    
    <select name="degree_1_type[]" id="degree_type">
    <option value="default">Degree Type</option>
    <option value="undergraduate">Undergraduate</option>
    <option value="postgraduate">Postgraduate</option>
    <option value="diploma">Diploma</option>
    <option value="other">Other</option>
    </select>

    
 	<select name="degree_1_university[]" id="degree_uni">
<option value="default">University</option>
<option value="other">Other</option>
<optgroup label="UK">UK
<option value="aberystwyth_university">Aberystwyth University</option>
<option value="bangor_university">Bangor University</option>
<option value="birkbec">Birkbec</option>
<option value="brunel_university">Brunel University</option>
<option value="cardiff_university">Cardiff University</option>
<option value="durham_university">Durham University</option>
<option value="heriot-watt_university">Heriot-Watt University</option>
<option value="imperial_college_london">Imperial College London</option>
<option value="keele_university">Keele University</option>
<option value="king's_college_london">King's College London</option>
<option value="lancaster_university">Lancaster University</option>
<option value="lse">LSE</option>
<option value="loughborough_university">Loughborough University</option>
<option value="newcastle_university">Newcastle University</option>
<option value="queen_mary">Queen Mary</option>
<option value="queen's_university_belfast">Queen's University Belfast</option>
<option value="royal_holloway">Royal Holloway</option>
<option value="st_george's">St George's</option>
<option value="university_college_london">University College London</option>
<option value="university_of_aberdeen">University of Aberdeen</option>
<option value="university_of_bath">University of Bath</option>
<option value="university_of_birmingham">University of Birmingham</option>
<option value="university_of_bristol">University of Bristol</option>
<option value="university_of_cambridge">University of Cambridge</option>
<option value="university_of_dundee">University of Dundee</option>
<option value="university_of_east_anglia">University of East Anglia</option>
<option value="university_of_edinburgh">University of Edinburgh</option>
<option value="university_of_essex">University of Essex</option>
<option value="university_of_exeter">University of Exeter</option>
<option value="university_of_glasgow">University of Glasgow</option>
<option value="university_of_hertfordshire">University of Hertfordshire</option>
<option value="university_of_leeds">University of Leeds</option>
<option value="university_of_leicester">University of Leicester</option>
<option value="university_of_liverpool">University of Liverpool</option>
<option value="university_of_manchester">University of Manchester</option>
<option value="university_of_nottingham">University of Nottingham</option>
<option value="university_of_oxford">University of Oxford</option>
<option value="university_of_portsmouth">University of Portsmouth</option>
<option value="university_of_reading">University of Reading</option>
<option value="university_of_sheffield">University of Sheffield</option>
<option value="university_of_southampton">University of Southampton</option>
<option value="university_of_st_andrews">University of St Andrews</option>
<option value="university_of_stirling">University of Stirling</option>
<option value="university_of_strathclyde">University of Strathclyde</option>
<option value="university_of_surrey">University of Surrey</option>
<option value="university_of_sussex">University of Sussex</option>
<option value="university_of_warwick">University of Warwick</option>
<option value="university_of_york">University of York</option>
</optgroup>
 <optgroup label="Austria">Austria
<option value="johannes_kepler_universitat_linz">Johannes Kepler Universit&auml;t Linz</option>
<option value="karl-franzens-universitat_graz">Karl-Franzens-Universit&auml;t Graz</option>
<option value="medical_university_of_vienna">Medical University of Vienna</option>
<option value="university_of_innsbruck">University of Innsbruck</option>
<option value="university_of_vienna">University of Vienna</option>
<option value="vienna_university_of_technology">Vienna University of Technology</option>
</optgroup>
 <optgroup label="Belgium">Belgium
<option value="ghent_university">Ghent University</option>
<option value="ku_leuven">KU Leuven</option>
<option value="universite_catholique_de_louvain">Universit&eacute; Catholique de Louvain</option>
<option value="universite_de_liege">Universit&eacute; de Li&egrave;ge</option>
<option value="universite_libre_de_bruxelles">Universit&eacute; Libre de Bruxelles</option>
<option value="university_of_antwerp">University of Antwerp</option>
<option value="vrije_universiteit_brussel">Vrije Universiteit Brussel</option>
</optgroup>
 <optgroup label="Czech_Republic">Czech Republic
<option value="charles_university_in_prague">Charles University in Prague</option>
</optgroup>
 <optgroup label="Denmark">Denmark
<option value="aalborg_university">Aalborg University</option>
<option value="aarhus_university">Aarhus University</option>
<option value="technical_university_of_denmark">Technical University of Denmark</option>
<option value="university_of_copenhagen">University of Copenhagen</option>
<option value="university_of_southern_denmark">University of Southern Denmark</option>
</optgroup>
 <optgroup label="Estonia">Estonia
<option value="university_of_tartu">University of Tartu</option>
</optgroup>
 <optgroup label="Finland">Finland
<option value="aalto_university">Aalto University</option>
<option value="university_of_eastern_finland">University of Eastern Finland</option>
<option value="university_of_helsinki">University of Helsinki</option>
<option value="university_of_jyvaskyla">University of Jyv&auml;skyl&auml;</option>
<option value="university_of_tampere">University of Tampere</option>
</optgroup>
 <optgroup label="France">France
<option value="ecole_normale_superieure">&Eacute;cole Normale Sup&eacute;rieure</option>
<option value="ecole_normale_superieure_de_lyon">&Eacute;cole Normale Sup&eacute;rieure de Lyon</option>
<option value="ecole_polytechnique">&Eacute;cole Polytechnique</option>
<option value="mines_paristech">Mines ParisTech</option>
<option value="universite_claude_bernard_lyon_1">Universit&eacute; Claude Bernard Lyon 1</option>
<option value="universite_joseph_fourier_-_grenoble">Universit&eacute; Joseph Fourier, Grenoble</option>
<option value="universite_montpellier_2">Universit&eacute; Montpellier 2</option>
<option value="universite_paris_dauphine">Universit&eacute; Paris Dauphine</option>
<option value="universite_paris_diderot_-_paris_7">Universit&eacute; Paris Diderot - Paris 7</option>
<option value="universite_paris-sud">Universit&eacute; Paris-Sud</option>
<option value="universite_pierre_et_marie_curie">Universit&eacute; Pierre et Marie Curie</option>
<option value="university_of_strasbourg">University of Strasbourg</option>
</optgroup>
 <optgroup label="Germany">Germany
<option value="albert-ludwigs-universitat_freiburg">Albert-Ludwigs-Universit&auml;t Freiburg</option>
<option value="christian-albrechts-universitat_zu_kiel">Christian-Albrechts-Universit&auml;t zu Kiel</option>
<option value="eberhard_karls_universitat_tübingen">Eberhard Karls Universit&auml;t T&uuml;bingen</option>
<option value="freie_universitat_berlin">Freie Universit&auml;t Berlin</option>
<option value="friedrich-alexander-universitat_erlangen-nürnberg">Friedrich-Alexander-Universit&auml;t Erlangen-N&uuml;rnberg</option>
<option value="georg-august-universitat_gottingen">Georg-August-Universit&auml;t G&ouml;ttingen</option>
<option value="humboldt-universitat_zu_berlin">Humboldt-Universit&auml;t zu Berlin</option>
<option value="johann_wolfgang_goethe-universitat_frankfurt_am_main">Johann Wolfgang Goethe-Universit&auml;t Frankfurt am Main</option>
<option value="johannes_gutenberg-universitat_mainz">Johannes Gutenberg-Universit&auml;t Mainz</option>
<option value="karlsruhe_institute_of_technology">Karlsruhe Institute of Technology</option>
<option value="leibniz_universitat_hannover">Leibniz Universit&auml;t Hannover</option>
<option value="ludwig-maximilians-universitat_münchen">Ludwig-Maximilians-Universit&auml;t M&uuml;nchen</option>
<option value="ruhr-universitat_bochum">Ruhr-Universit&auml;t Bochum</option>
<option value="rwth_aachen_university">RWTH Aachen University</option>
<option value="technische_universitat_darmstadt">Technische Universit&auml;t Darmstadt</option>
<option value="technische_universitat_dresden">Technische Universit&auml;t Dresden</option>
<option value="technische_universitat_munchen">Technische Universit&auml;t M&uuml;nchen</option>
<option value="universitat_bayreuth">Universit&auml;t Bayreuth</option>
<option value="universitat_bielefeld">Universit&auml;t Bielefeld</option>
<option value="universitat_bonn">Universit&auml;t Bonn</option>
<option value="universitat_duisburg-essen">Universit&auml;t Duisburg-Essen</option>
<option value="universitat_heidelberg">Universit&auml;t Heidelberg</option>
<option value="universitat_konstanz">Universit&auml;t Konstanz</option>
<option value="universitat_wurzburg">Universit&auml;t W&uuml;rzburg</option>
<option value="westfalische_wilhelms-universitat_münster">Westf&auml;lische Wilhelms-Universit&auml;t M&uuml;nster</option>
</optgroup>
 <optgroup label="Greece">Greece
<option value="university_of_crete">University of Crete</option>
</optgroup>
 <optgroup label="Iceland">Iceland
<option value="university_of_iceland">University of Iceland</option>
</optgroup>
 <optgroup label="Italy">Italy
<option value="polytechnic_university_of_milan">Polytechnic University of Milan</option>
<option value="sapienza_university_of_rome">Sapienza University of Rome</option>
<option value="university_of_bologna">University of Bologna</option>
<option value="university_of_ferrara">University of Ferrara</option>
<option value="university_of_milan">University of Milan</option>
<option value="university_of_milan-bicocca">University of Milan-Bicocca</option>
<option value="university_of_modena_and_reggio_emilia">University of Modena and Reggio Emilia</option>
<option value="university_of_padua">University of Padua</option>
<option value="university_of_pavia">University of Pavia</option>
<option value="university_of_pisa">University of Pisa</option>
<option value="university_of_salento">University of Salento</option>
<option value="university_of_trento">University of Trento</option>
<option value="university_of_trieste">University of Trieste</option>
<option value="university_of_turin">University of Turin</option>
</optgroup>
 <optgroup label="Netherlands">Netherlands
<option value="delft_university_of_technology">Delft University of Technology</option>
<option value="eindhoven_university_of_technology">Eindhoven University of Technology</option>
<option value="erasmus_university_rotterdam">Erasmus University Rotterdam</option>
<option value="leiden_university">Leiden University</option>
<option value="maastricht_university">Maastricht University</option>
<option value="radboud_university_nijmegen">Radboud University Nijmegen</option>
<option value="tilburg_university">Tilburg University</option>
<option value="university_of_amsterdam">University of Amsterdam</option>
<option value="university_of_groningen">University of Groningen</option>
<option value="university_of_twente">University of Twente</option>
<option value="utrecht_university">Utrecht University</option>
<option value="vu_university_amsterdam">VU University Amsterdam</option>
<option value="wageningen_university_and_research_center">Wageningen University and Research Center</option>
</optgroup>
 <optgroup label="Norway">Norway
<option value="norwegian_university_of_science_and_technology">Norwegian University of Science and Technology</option>
<option value="university_of_bergen">University of Bergen</option>
<option value="university_of_oslo">University of Oslo</option>
<option value="university_of_tromsø">University of Tromsø</option>
</optgroup>
 <optgroup label="Poland">Poland
<option value="jagiellonian_university">Jagiellonian University</option>
<option value="university_of_warsaw">University of Warsaw</option>
</optgroup>
 <optgroup label="Portugal">Portugal
<option value="aveiro_university">Aveiro University</option>
<option value="university_of_minho">University of Minho</option>
<option value="university_of_porto">University of Porto</option>
</optgroup>
 <optgroup label="Ireland">Ireland
<option value="national_university_of_ireland_-_galway">National University of Ireland, Galway</option>
<option value="national_university_of_ireland_-_maynooth">National University of Ireland, Maynooth</option>
<option value="trinity_college_dublin">Trinity College Dublin</option>
<option value="university_college_cork">University College Cork</option>
<option value="university_college_dublin">University College Dublin</option>
</optgroup>
 <optgroup label="Russia">Russia
<option value="lomonosov_moscow_state_university">Lomonosov Moscow State University</option>
<option value="moscow_state_engineering_physics_institute">Moscow State Engineering Physics Institute</option>
</optgroup>
 <optgroup label="Spain">Spain
<option value="autonomous_university_of_barcelona">Autonomous University of Barcelona</option>
<option value="autonomous_university_of_madrid">Autonomous University of Madrid</option>
<option value="polytechnic_university_of_valencia">Polytechnic University of Valencia</option>
<option value="pompeu_fabra_university">Pompeu Fabra University</option>
<option value="university_of_barcelona">University of Barcelona</option>
<option value="university_of_valencia">University of Valencia</option>
<option value="university_of_vigo">University of Vigo</option>
</optgroup>
 <optgroup label="Sweden">Sweden
<option value="chalmers_university_of_technology">Chalmers University of Technology</option>
<option value="karolinska_institute">Karolinska Institute</option>
<option value="kth_royal_institute_of_technology">KTH Royal Institute of Technology</option>
<option value="linkoping_university">Link&ouml;ping University</option>
<option value="lund_university">Lund University</option>
<option value="stockholm_university">Stockholm University</option>
<option value="swedish_university_of_agricultural_sciences">Swedish University of Agricultural Sciences</option>
<option value="umea_university">Ume&aring; University</option>
<option value="university_of_gothenburg">University of Gothenburg</option>
<option value="uppsala_university">Uppsala University</option>
</optgroup>
 <optgroup label="Switzerland">Switzerland
<option value="ecole_polytechnique_federale_de_lausanne">&Eacute;cole Polytechnique F&eacute;d&eacute;rale de Lausanne</option>
<option value="eth_zürich_–_swiss_federal_institute_of_technology_zürich">ETH Z&uuml;rich – Swiss Federal Institute of Technology Z&uuml;rich</option>
<option value="universitat_basel">Universit&auml;t Basel</option>
<option value="universite_de_lausanne">Universit&eacute; de Lausanne</option>
<option value="university_of_bern">University of Bern</option>
<option value="university_of_fribourg">University of Fribourg</option>
<option value="university_of_geneva">University of Geneva</option>
<option value="university_of_zurich">University of Z&uuml;rich</option>
</optgroup>
 <optgroup label="USA">USA
<option value="boston_college">Boston College </option>
<option value="brandeis_university">Brandeis University </option>
<option value="brown_university">Brown University </option>
<option value="california_institute_of_technology">California Institute of Technology </option>
<option value="carnegie_mellon_university">Carnegie Mellon University </option>
<option value="college_of_william_and_mary">College of William and Mary </option>
<option value="columbia_university">Columbia University </option>
<option value="cornell_university">Cornell University </option>
<option value="dartmouth_college">Dartmouth College </option>
<option value="duke_university">Duke University </option>
<option value="emory_university">Emory University </option>
<option value="georgetown_university">Georgetown University </option>
<option value="harvard_university">Harvard University </option>
<option value="johns_hopkins_university">Johns Hopkins University </option>
<option value="mit">MIT</option>
<option value="northwestern_university">Northwestern University </option>
<option value="princeton_university">Princeton University </option>
<option value="rice_university">Rice University </option>
<option value="stanford_university">Stanford University</option>
<option value="tufts_university">Tufts University </option>
<option value="uc_berkeley">UC Berkeley</option>
<option value="ucla">UCLA</option>
<option value="university_of_chicago">University of Chicago </option>
<option value="university_of_michigan–​ann_arbor">University of Michigan–​Ann Arbor </option>
<option value="university_of_north_carolina–​chapel_hill">University of North Carolina–​Chapel Hill </option>
<option value="university_of_notre_dame">University of Notre Dame </option>
<option value="university_of_pennsylvania">University of Pennsylvania </option>
<option value="university_of_southern_california">University of Southern California </option>
<option value="university_of_virginia">University of Virginia </option>
<option value="vanderbilt_university">Vanderbilt University </option>
<option value="wake_forest_university">Wake Forest University </option>
<option value="washington_university_in_st._louis">Washington University in St. Louis </option>
<option value="yale_university">Yale University </option>
</optgroup>
<option value="other">Other</option>
 	</select>
 	
 	<select name="degree_1_subject_type[]" id="degree_subject">
 	<option value="default">Subject Type</option>
	<option value="humanities">Humanities</option>
	<option value="language">Languages</option>
	<option value="maths">Maths</option>
	<option value="science">Science</option>
	<option value="social_science">Social Science</option>
	<option value="vocational">Vocational</option>
 	<option value="other">Other</option>
 	</select>
 	
 	<div id="uni_subject_container" class="text_input_container">
 	<input id="uni_subject_name" placeholder="Subject" type="text" name="degree_1_subject_name[]" value="" />
 	</div>
 	
 	
 	<select name="degree_1_result[]" id="degree_result">
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
 	
 	<select name="degree_1_graduation_year[]" id="degree_graduation">
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
 	<option value="2014">2014</option>
 	<option value="2015">2015</option>
 	<option value="2016">2016</option>
 	<option value="2017">2017</option>
 	<option value="2018">2018</option>
 	<option value="2019">2019</option>
 	<option value="other">Other</option>
 	</select>
 	
    </div>
 	
 	</div>
 	
 	<div class="dark_grey_button" id="add_degree_button">Add Degree +</div>
 	
 	<div id="qualifications_container">
 	
 	<div box-count="1" class="qualifications_box">
 	
 	<div id="school_error" class="error_overlay_header">It's up to you, but this bit matters to employers</div>
 	
 	 	<div class="box_header">School</div>
 	 	<div class="delete_box_btn"></div>
 	 	
 	 	<select class="qual_type" name="qual_1_type[]" id="qual_type">
 	 	<option value="default">Qualification Type</option>
 	 	<option value="a_level">A Level</option>
 	 	<option value="highers">Highers</option>
 	 	<option value="ib">IB</option>
 	 	<option value="pre_u">Pre-U</option>
 	 	<option value="other">Other</option>
 	
 	 	</select>
 	 	
 	 		<select name="qual_1_subject_type[]" id="qual_subject">
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
 	 		<input id="qual_subject_name" placeholder="Subject" type="text" name="qual_1_subject_name[]" value="" />
 	 		</div>
 	 		
 	 		<select name="qual_1_result[]" id="qual_result">
 	 		<option value="default">Result</option>
 	 		<option value="other">Other</option>
 	 		</select>
 	 
 	 
 	 		
 	 	</div>
 	
 	</div>
 	
 	<div class="dark_grey_button" id="add_qualification_button">Add Qualification +</div>
 	
 	<div id="key_skills_container">
 	    <div class="box_header">Skills</div>
 	    
 	    <div class="skill_divider">Computer Programming Languages</div>
 	    
 	    <div class="sub_skill_container">
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>C</p><input type="checkbox" name="skills[]" value="c"/>
 	    </div>
 	    <select name="c_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>    
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>C#</p><input type="checkbox" name="skills[]" value="c_sharp"/>
 	    </div>
 	    <select name="c_sharp_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>C++</p><input type="checkbox" name="skills[]" value="c_plus_plus"/>
 	    </div>
 	    <select name="c_plus_plus_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Java</p><input type="checkbox" name="skills[]" value="java"/>
 	    </div>
 	    <select name="java_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Objective-C</p><input type="checkbox" name="skills[]" value="objective_c"/>
 	    </div>
 	    <select name="objective_c_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Pearl</p><input type="checkbox" name="skills[]" value="pearl"/>
 	    </div>
 	    <select name="pearl_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Python</p><input type="checkbox" name="skills[]" value="python"/>
 	    </div>
 	    <select name="python_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Ruby</p><input type="checkbox" name="skills[]" value="ruby"/>
 	    </div>
 	    <select name="ruby_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>SQL</p><input type="checkbox" name="skills[]" value="sql"/>
 	    </div>
 	    <select name="sql_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Visual Basic</p><input type="checkbox" name="skills[]" value="visual_basic"/>
 	    </div>
 	    <select name="visual_basic_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>XML</p><input type="checkbox" name="skills[]" value="xml"/>
 	    </div>
 	    <select name="xml_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    </div>
 	    
 	    <div class="skill_divider">Web Programming Languages</div>
 	    
 	    <div class="sub_skill_container">
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>CSS</p><input type="checkbox" name="skills[]" value="css"/>
 	    </div>
 	    <select name="css_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>HTML</p><input type="checkbox" name="skills[]" value="html"/>
 	    </div>
 	    <select name="html_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>JavaScript</p><input type="checkbox" name="skills[]" value="javascript"/>
 	    </div>
 	    <select name="javascript_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>jQuery</p><input type="checkbox" name="skills[]" value="jquery"/>
 	    </div>
 	    <select name="jquery_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    </div>
 	    
 	    <div class="skill_divider">Programs</div>
 	    
 	    <div class="sub_skill_container">
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Access</p><input type="checkbox" name="skills[]" value="access"/>
 	    </div>
 	    <select name="access_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Excel</p><input type="checkbox" name="skills[]" value="excel"/>
 	    </div>
 	    <select name="excel_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Illustrator</p><input type="checkbox" name="skills[]" value="illustrator"/>
 	    </div>
 	    <select name="illustrator_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>InDesign</p><input type="checkbox" name="skills[]" value="inDesign"/>
 	    </div>
 	    <select name="inDesign_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Photoshop</p><input type="checkbox" name="skills[]" value="photoshop"/>
 	    </div>
 	    <select name="photoshop_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>PowerPoint</p><input type="checkbox" name="skills[]" value="powerpoint"/>
 	    </div>
 	    <select name="powerpoint_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    <div class="key_skill">
 	    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Word</p><input type="checkbox" name="skills[]" value="word"/>
 	    </div>
 	    <select name="word_level">
 	    <option value="default">Level</option>
 	    <option value="basic">Basic</option>
 	    <option value="intermediate">Intermediate</option>
 	    <option value="expert">Expert</option>
 	    </select>
 	    </div>
 	    
 	    </div>
 	    
 	    </div>
 	
 		<div id="capabilities_container">
 		    <div class="box_header">Capabilities</div>
 		    
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Working at Pace</p><input type="checkbox" name="capabilities[]" value="pace"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Paying Attention to Detail</p><input type="checkbox" name="capabilities[]" value="detail"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Taking on Responsibilities</p><input type="checkbox" name="capabilities[]" value="responsibilities"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Inspiring Confidence</p><input type="checkbox" name="capabilities[]" value="confidence"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Being a Team Player</p><input type="checkbox" name="capabilities[]" value="team_player"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Working Hard</p><input type="checkbox" name="capabilities[]" value="working_hard"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Leading and Managing People</p><input type="checkbox" name="capabilities[]" value="leading"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Being Structured and Organised</p><input type="checkbox" name="capabilities[]" value="structured"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Digesting Information</p><input type="checkbox" name="capabilities[]" value="digesting_information"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Taking the Initiative</p><input type="checkbox" name="capabilities[]" value="initiative"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Written Communication</p><input type="checkbox" name="capabilities[]" value="written_communication"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Verbal Communication</p><input type="checkbox" name="capabilities[]" value="verbal_communication"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Numerical Analysis</p><input type="checkbox" name="capabilities[]" value="numerical_analysis"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Quantitative Analysis</p><input type="checkbox" name="capabilities[]" value="quantiative_analysis"/></div>
 		<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Juggling Responsibilities</p><input type="checkbox" name="capabilities[]" value="juggling_responsibilities"/></div>
 		        
 		    
 		    </div>	
 	
 
          
     
    
   
    
     <div id="form_div_header">...and what about languages?</div>
     
         <div id="english_language_container">
     
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
     
     </div>
     
     <div id="second_language_container">
     
     <div box-count="1" class="languages_box">
     
     <select name="languages_1_language[]" id="languages">
     <option value = "default">Language</option>
     <option value ='(Afan) Oromo'>(Afan) Oromo</option>
     <option value ='Abkhazian'>Abkhazian</option>
     <option value ='Afar'>Afar</option>
     <option value ='Afrikaans'>Afrikaans</option>
     <option value ='Albanian'>Albanian</option>
     <option value ='Amharic'>Amharic</option>
     <option value ='Arabic'>Arabic</option>
     <option value ='Armenian'>Armenian</option>
     <option value ='Assamese'>Assamese</option>
     <option value ='Austrian'>Austrian</option>
     <option value ='Aymara'>Aymara</option>
     <option value ='Azerbaijani'>Azerbaijani</option>
     <option value ='Bashkir'>Bashkir</option>
     <option value ='Basque'>Basque</option>
     <option value ='Bengali'>Bengali</option>
     <option value ='Bhutani'>Bhutani</option>
     <option value ='Bihari'>Bihari</option>
     <option value ='Bislama'>Bislama</option>
     <option value ='Breton'>Breton</option>
     <option value ='Bulgarian'>Bulgarian</option>
     <option value ='Burmese'>Burmese</option>
     <option value ='Byelorussian'>Byelorussian</option>
     <option value ='Cambodian'>Cambodian</option>
     <option value ='Cantonese'>Cantonese</option>
     <option value ='Catalan'>Catalan</option>
     <option value ='Chinese'>Chinese</option>
     <option value ='Corsican'>Corsican</option>
     <option value ='Croatian'>Croatian</option>
     <option value ='Czech'>Czech</option>
     <option value ='Danish'>Danish</option>
     <option value ='Dutch'>Dutch</option>
     <option value ='English'>English</option>
     <option value ='Esperanto'>Esperanto</option>
     <option value ='Estonian'>Estonian</option>
     <option value ='Faeroese'>Faeroese</option>
     <option value ='Fiji'>Fiji</option>
     <option value ='Finnish'>Finnish</option>
     <option value ='French'>French</option>
     <option value ='Frisian'>Frisian</option>
     <option value ='Galician'>Galician</option>
     <option value ='Georgian'>Georgian</option>
     <option value ='German'>German</option>
     <option value ='Greek'>Greek</option>
     <option value ='Greenlandic'>Greenlandic</option>
     <option value ='Guarani'>Guarani</option>
     <option value ='Gujarati'>Gujarati</option>
     <option value ='Hausa'>Hausa</option>
     <option value ='Hebrew'>Hebrew</option>
     <option value ='Hindi'>Hindi</option>
     <option value ='Hungarian'>Hungarian</option>
     <option value ='Icelandic'>Icelandic</option>
     <option value ='Indonesian'>Indonesian</option>
     <option value ='Interlingua'>Interlingua</option>
     <option value ='Interlingue'>Interlingue</option>
     <option value ='Inupiak'>Inupiak</option>
     <option value ='Irish'>Irish</option>
     <option value ='Italian'>Italian</option>
     <option value ='Japanese'>Japanese</option>
     <option value ='Javanese'>Javanese</option>
     <option value ='Kannada'>Kannada</option>
     <option value ='Kashmiri'>Kashmiri</option>
     <option value ='Kazakh'>Kazakh</option>
     <option value ='Kinyarwanda'>Kinyarwanda</option>
     <option value ='Kirghiz'>Kirghiz</option>
     <option value ='Kirundi'>Kirundi</option>
     <option value ='Korean'>Korean</option>
     <option value ='Kurdish'>Kurdish</option>
     <option value ='Laothian'>Laothian</option>
     <option value ='Latin'>Latin</option>
     <option value ='Latvian, Lettish'>Latvian, Lettish</option>
     <option value ='Lingala'>Lingala</option>
     <option value ='Lithuanian'>Lithuanian</option>
     <option value ='Luxembourgeois'>Luxembourgeois</option>
     <option value ='Macedonian'>Macedonian</option>
     <option value ='Malagasy'>Malagasy</option>
     <option value ='Malay'>Malay</option>
     <option value ='Malayalam'>Malayalam</option>
     <option value ='Maltese'>Maltese</option>
     <option value ='Mandarin'>Mandarin</option>
     <option value ='Maori'>Maori</option>
     <option value ='Marathi'>Marathi</option>
     <option value ='Moldavian'>Moldavian</option>
     <option value ='Mongolian'>Mongolian</option>
     <option value ='Nauru'>Nauru</option>
     <option value ='Nepali'>Nepali</option>
     <option value ='Norwegian'>Norwegian</option>
     <option value ='Occitan'>Occitan</option>
     <option value ='Oriya'>Oriya</option>
     <option value ='Pashto, Pushto'>Pashto, Pushto</option>
     <option value ='Persian'>Persian</option>
     <option value ='Polish'>Polish</option>
     <option value ='Portuguese'>Portuguese</option>
     <option value ='Punjabi'>Punjabi</option>
     <option value ='Quechua'>Quechua</option>
     <option value ='Rhaeto-Romance'>Rhaeto-Romance</option>
     <option value ='Romanian'>Romanian</option>
     <option value ='Russian'>Russian</option>
     <option value ='Samoan'>Samoan</option>
     <option value ='Sangro'>Sangro</option>
     <option value ='Sanskrit'>Sanskrit</option>
     <option value ='Scots Gaelic'>Scots Gaelic</option>
     <option value ='Serbian'>Serbian</option>
     <option value ='Serbo-Croatian'>Serbo-Croatian</option>
     <option value ='Sesotho'>Sesotho</option>
     <option value ='Setswana'>Setswana</option>
     <option value ='Shona'>Shona</option>
     <option value ='Sindhi'>Sindhi</option>
     <option value ='Singhalese'>Singhalese</option>
     <option value ='Siswati'>Siswati</option>
     <option value ='Slovak'>Slovak</option>
     <option value ='Slovenian'>Slovenian</option>
     <option value ='Somali'>Somali</option>
     <option value ='Spanish'>Spanish</option>
     <option value ='Sundanese'>Sundanese</option>
     <option value ='Swahili'>Swahili</option>
     <option value ='Swedish'>Swedish</option>
     <option value ='Tagalog'>Tagalog</option>
     <option value ='Tajik'>Tajik</option>
     <option value ='Tamil'>Tamil</option>
     <option value ='Tatar'>Tatar</option>
     <option value ='Telugu'>Telugu</option>
     <option value ='Thai'>Thai</option>
     <option value ='Tibetan'>Tibetan</option>
     <option value ='Tigrinya'>Tigrinya</option>
     <option value ='Tonga'>Tonga</option>
     <option value ='Tsonga'>Tsonga</option>
     <option value ='Turkish'>Turkish</option>
     <option value ='Turkmen'>Turkmen</option>
     <option value ='Twi'>Twi</option>
     <option value ='Ukrainian'>Ukrainian</option>
     <option value ='Urdu'>Urdu</option>
     <option value ='Uzbek'>Uzbek</option>
     <option value ='Vietnamese'>Vietnamese</option>
     <option value ='Volapuk'>Volapuk</option>
     <option value ='Welsh'>Welsh</option>
     <option value ='Wolof'>Wolof</option>
     <option value ='Xhosa'>Xhosa</option>
     <option value ='Yiddish'>Yiddish</option>
     <option value ='Yoruba'>Yoruba</option>
     <option value ='Zulu'>Zulu</option>
     <option value = "other">Other</option>
     </select>
    
    <input style="display: none;" id="language_other" placeholder="Other" type="text" name="" />
    
    <select name="languages_1_level[]" id="languages_level">
    <option value="level">Level</option>
    <option value="native">Native</option>
    <option value="fluent">Fluent</option>
    <option value="intermediate">Intermediate</option>
    <option value="basic">Basic</option>
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
     
     <div box-count="1" class="work_experience_box">
     
     <div id="work_experience_error" class="error_overlay_header">Something's missing here</div>
     
     <div class="box_header">Work Experience</div>
     <div class="delete_box_btn"></div>
     
     <select name="experience_1_type[]" id="work_type">
<option value="default">Type</option>
<option value="full_time">Full Time</option>
<option value="internship">Internship</option>
<option value="holiday_job">Holiday Job</option>
<option value="part_time_job">Part Time Job</option>
<option value="gap_year_job">Gap Year Job</option>
<option value="other">Other</option>
     </select>
     
     <select name="experience_1_length[]" id="work_length">
     <option value="default">Length</option>
     <option value="1_week">1 week</option>
     <option value="2_to_4_weeks">2-4 weeks</option>
     <option value="1_to_2_months">1-2 months</option>
     <option value="3_to_4_months">3-4 months</option>
     <option value="over_4_months">Over 4 months</option>
     </select>
     
     <select id="work_sector_select" name="experience_1_sector[]">
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
     

     
     <div id="organisation_name_error"></div>
     
     <input placeholder="Organisation" name="experience_1_organisation[]" id="work_organisation" type="text" name="" value="" />

     
     </div>
    
    
    </div>
    
    <div class="dark_grey_button" id="add_experience_button">Add Experience +</div>
    
   
     <div id="form_div_header">...and what you get up to in your spare time</div>
     
     <div id="positions_container">
     
     <div id="society_container">
     
     <div box-count="1" class="society_box">
     
     <div id="work_experience_error" class="error_overlay_header">Something's missing here</div>
     
     <div class="box_header">Society</div>
     <div class="delete_box_btn"></div>
     
     <select name="society_1_category[]" id="society_category">
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
     <option value="other">Other</option>
     </select>
     
     <select id="society_position" name="society_1_position[]">
     <option value="default">Position</option>
     <option value="president">President</option>
     <option value="vice_president">Vice-President</option>
     <option value="committee_member">Committee Member</option>
     <option value="press_officer">Press Officer</option>
     <option value="secretary">Secretary</option>
     <option value="treasurer">Treasurer</option>
     <option value="events_officer">Events Officer</option>
     <option value="guests_officer">Guests Officer</option>
     <option value="website_manager">Website Manager</option>
     <option value="other">Other</option>
     </select>
     
     <input id="society_name" placeholder="Name" type="text" name="society_1_name[]" value="" />
          
     </div>
     
     
     </div>
     
     <div class="dark_grey_button" id="add_society_button">Add Society +</div>

<div id="sport_container">

<div box-count="1" class="sport_box">
 
 <div id="work_experience_error" class="error_overlay_header">Something's missing here</div>
 
 <div class="box_header">Sport</div>
 <div class="delete_box_btn"></div>
 
 <select name="sport_1_category[]" id="sport_category">
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
 
 <select id="sport_level" name="sport_1_level[]">
 <option value="default">Level</option>
 <option value="university">University</option>
 <option value="college">College</option>
 <option value="school">School</option>
 <option value="other">Other</option>
 </select>
 
 <select name="sport_1_position[]">
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
   
     </div>
    
     
     <div class="dark_grey_button" id="add_sport_button">Add Sport +</div>
    
    
    
    <div id="key_experience_container">
    <div class="box_header">Specific Experience</div>
    
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Managing Small Teams of People</p><input type="checkbox" name="specific_capabilities[]" value="managing_small_teams"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Working to Major Deadlines</p><input type="checkbox" name="specific_capabilities[]" value="major_deadlines"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Liaising with the Media</p><input type="checkbox" name="specific_capabilities[]" value="liaising_with_media"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Managing Social Media Output</p><input type="checkbox" name="specific_capabilities[]" value="managing_social_media"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Writing Press Releases</p><input type="checkbox" name="specific_capabilities[]" value="press_releases"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Managing Client Relationships</p><input type="checkbox" name="specific_capabilities[]" value="client_relationships"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Selling Over the Phone</p><input type="checkbox" name="specific_capabilities[]" value="selling_over_phone"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Managing Large Teams of People</p><input type="checkbox" name="specific_capabilities[]" value="managing_large_teams"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Selling in Person</p><input type="checkbox" name="specific_capabilities[]" value="selling_in_person"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Strategic Decision Making</p><input type="checkbox" name="specific_capabilities[]" value="strategic_decision_making"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Organising Events</p><input type="checkbox" name="specific_capabilities[]" value="organising_events"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Presenting to Groups</p><input type="checkbox" name="specific_capabilities[]" value="presenting_to_groups"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Script/Speech Writing</p><input type="checkbox" name="specific_capabilities[]" value="speech_writing"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Working with VIPs</p><input type="checkbox" name="specific_capabilities[]" value="working_VIPs"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Running Meetings</p><input type="checkbox" name="specific_capabilities[]" value="running_meetings"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Writing Presentations</p><input type="checkbox" name="specific_capabilities[]" value="writing_presentations"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Writing Reports</p><input type="checkbox" name="specific_capabilities[]" value="writing_reports"/></div>
<div class="checkbox_container_option"><div class="checkbox_option"></div><p>Market Research and Analysis</p><input type="checkbox" name="specific_capabilities[]" value="market_research"/></div>
        
    
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
     
     <div id="charity" class="charity_1"><div class="charity_tick"></div></div>
     <div id="charity" class="charity_2"><div class="charity_tick"></div></div>
     <div id="charity" class="charity_3"><div class="charity_tick"></div></div>
     <div id="charity" class="charity_4"><div class="charity_tick"></div></div>
     <div id="charity" class="charity_5"><div class="charity_tick"></div></div>
     <div id="charity_suggestion_box">Have an idea for a charity we should support? <a href="mailto:contact@talentpool.com">Let us know</a><div class="charity_tick"></div></div>
    
    <div class="charity_description" id="charity_description_1">
    
    <img src="../img/first_story.jpeg" alt="" />
    
    <div id="charity_name">First Story</div>
    <div id="charity_brief_description">First Story strives to support and inspire creativity, literacy and talent in challenging UK secondary schools and their communities.</div>
    <div id="charity_detailed_description"><p>First Story achieves this by arranging and paying for acclaimed writers to run creative-writing work-shops for students in state schools across the country. The students’ writing is then published in a professionally produced anthology for each school, and the schools host book-launch events at which the students read their stories to their peers, friends, families and teachers. To find out more visit: <a href="www.firststory.org.uk">www.firststory.org.uk</a>.</p>
    </div>
    
    <div class="charity_button" id="charity_1_button">Support First Story</div>
    
    </div>
    
    <div class="charity_description" id="charity_description_2">
    
    <img src="../img/lords_taveners.jpeg" alt="" />
    
    <div id="charity_name">The Lord’s Taverners</div>
    <div id="charity_brief_description">The Lord’s Taverners engage disadvantaged and disabled young people using cricket and other forms of sport and recreation to benefit their self-esteem, health, education and future.</div>
    <div id="charity_detailed_description"><p>The charity supports inner city and girls cricket and donates hundreds of cricket equipment bags across the UK. The Lord’s Taverners also supply specially adapted minibuses, sports wheelchairs, and sensory equipment for special needs schools and fund national programs for Table Cricket, Boccia and Wheelchair Basketball giving young people vital access to sport and recreation. To find out more visit: <a href="www.lordstaverners.org">www.lordstaverners.org</a>.</p>
    
  
    
    <div class="charity_button" id="charity_2_button">Support The Lord's Taverners</div>
    
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
    <div id="charity_brief_description">Student Hubs believes that university students have the power and potential to shape a better world.</div>
    <div id="charity_detailed_description"><p>Through a growing network of ‘Hubs’ in universities, this charity facilitates student involvement with social and environmental challenges, enabling more students to do more, more effectively and for longer.</p>
    
    <p>Selecting Student Hubs will support LinkAges, a project aiming to combat elderly isolation by connecting university student volunteers to local elderly people to run befriending schemes, activities in elderly peoples' homes and day trips. To find out more visit: <a href="http://www.studenthubs.org/">www.studenthubs.org/</a>.</p>
    
    <div class="charity_button" id="charity_4_button">Support Student Hubs</div>
    
    </div>
    
    
    
    </div>
    
    <div class="charity_description" id="charity_description_5">
    
    <img src="../img/teach_first.png" alt="" />
    
    <div id="charity_name">TeachFirst</div>
    <div id="charity_brief_description">Teach First is working in partnership towards a day when no child’s success in life is limited by how much their parents earn.</div>
    <div id="charity_detailed_description"><p>The charity does this by supporting brilliant people to teach and lead in schools in low-income communities, working with them to bring about change inside and outside the classroom and partnering with a range of other organisations who are striving for equality in education. To find out more visit: <a href="www.teachfirst.org.uk">www.teachfirst.org.uk</a>.</p>

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
    
    <div id="attributes_container">
        <div class="box_header">Attributes</div>
        
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Adaptable</p><input type="checkbox" name="capabilities[]" value="adaptable"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Cautious</p><input type="checkbox" name="capabilities[]" value="cautious"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Aware</p><input type="checkbox" name="capabilities[]" value="aware"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Confident</p><input type="checkbox" name="capabilities[]" value="confident"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Entertaining</p><input type="checkbox" name="capabilities[]" value="entertaining"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Decisivie</p><input type="checkbox" name="capabilities[]" value="decisive"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Charismatic</p><input type="checkbox" name="capabilities[]" value="charismatic"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Creative</p><input type="checkbox" name="capabilities[]" value="creative"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Enthusiastic</p><input type="checkbox" name="capabilities[]" value="ethusiastic"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Helpful</p><input type="checkbox" name="capabilities[]" value="helpful"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Patient</p><input type="checkbox" name="capabilities[]" value="patient"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Focussed</p><input type="checkbox" name="capabilities[]" value="focussed"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Determined</p><input type="checkbox" name="capabilities[]" value="determined"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Thoughtful</p><input type="checkbox" name="capabilities[]" value="thoughtful"/></div>
    <div class="checkbox_container_option"><div class="checkbox_option"></div><p>Energetic</p><input type="checkbox" name="capabilities[]" value="energetic"/></div>
            
        
        </div>
    
    
    <div id="form_div_header">Just one or two more questions</div>
    
    
    <div id="other_personal_box">
    
    <div id="dob_error" class="error_overlay_header">You must be over 18 to use TalentPool</div> 
     
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
   
   <div id="dob_inputs_container">
     
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
    
     </div>
    
    
    <div id="form_div_header">We hate spam as much as you do</div>
     
     <div id="no_spam_box">
     
     <p>So we let you choose how often companies can contact you. But remember, the more emails you get, the more likely you are to get the job you want, and the more money goes to charity.</p>
     
     <h3>Employers can contact me</h3>
     
     
     <select name="emails_per_week">
     <option value="unlimited">As much as they want</option>
     <option value="weekly">Once a week</option>
     <option value="monthly">Once a month</option>
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
                        We require this information to enable the efficient delivery of the TalentPool service for the ultimate benefit of our Users. We provide approved graduate recruiters with access to anonymised profile information. Using this data, recruiters are able to identify the students and graduates which best match their criteria and subsequently request to contact these individuals. 
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
                        <li>If you have previously agreed to us using your personal information you may change your mind at any time by emailing us at support@TalentPool.co.uk</li>
                    </ul>
    
                    <br>
                    <br>
    
                    <h1>Terms of Use</h1>
                    <h3>1. Introduction</h3>
    
                    <p>1.1 This Document sets out the Terms of Use for use of this website (www.TalentPool.co.uk). It is intended to be read by all users of the website.</p>
    
                    <h3>2. Definitions</h3>
                    <p>2.1 the Document: the Terms of Use to which Users are obliged to adhere, detailed below</p>
                    <p>2.2 the Site: www.TalentPool.co.uk</p>
                    <p>2.3 TalentPool: GradList Ltd, Company Number 08721054</p>
                    <p>2.4 User/Users: student(s) and graduate(s) who create a TalentPool Account (see definition below) by entering information on the Site and use the Service for Users (see definition below). Also includes all other visitors to the Site. Users must agree to these Terms of Use. </p>
                    <p> 2.5 Service for Users: the service offered by TalentPool to Users whereby Users may create an Account with a view to being contacted by prospective Employers.</p>
                    <p> 2.6 Employers: organisations which are approved by TalentPool to use the TalentPool Service for Employers (see definition below)</p>
                    <p>2.7 Service for Employers: service offered by TalentPool to companies wishing to identify and contact TalentPool Users. Enables Employers to search the TalentPool database of Users, identify appropriate candidates solely on the basis of Other User Information (see definition below) for roles in their organisations and contact those Users.</p>
                    <p>2.8 Charity/Charities: the organisation(s) which, at any one time, are featured on the Site and may be selected by Users to be supported financially through the allocation of a proportion of the fee revenue associated with that User.</p>
                    <p>2.9 Sign Up Process: the process by which Users may create a TalentPool Account, by providing information to TalentPool through the Site</p>
                    <p>2.10 Account: the totality of the information provided by a User which relates to that User.</p>
                    <p>2.11 Personal Details: includes but not limited to User’s name, email address and date of birth</p>
                    <p>2.12 Other User Information: information provided to TalentPool by the User through the Sign Up Process which is required in order to create a TalentPool Account. Includes but is not limited to university name; degree level; degree subject; degree grade; public examination grades (e.g. GCSE; A-Level; Scottish Highers; International Baccalaureate); previous work experience; career preferences; ethnic background; language skills; gender.</p> 
    
                    <h3>3. Framework information</h3>
                    <p>3.1 The Site is owned and operated by TalentPool and is available to Users under the Terms of Use detailed in this Document. By accessing and using the services available on the site and by creating an Account, the User accepts these Terms of Use.</p> 
                    <p>3.2 The Terms of Use shall be interpreted according to the laws of England.</p> 
                    <p>3.3 Users should read these Terms of Use and ensure that they both understand and accept them before creating an Account</p>
    
                    <h3>4. User Obligations</h3>
                    <p>4.1 Users agree to provide TalentPool with information which is entirely accurate and truthful. They will not, under any circumstances, provide information which is either incorrect or misleading.</p> 
                    <p>4.2 Users agree only to provide information of which they are the rightful owner and which they are within their rights to divulge. Users understand that it is their responsibility to ensure that this is the case and accept full liability for any damage or loss suffered by any parties should this obligation not be adhered to.</p> 
                    <p>4.3 Users understand and accept that it is their responsibility to ensure that their details on their Account are kept up to date. This can be achieved by logging in via the home page of the Site.</p> 
                    <p>4.4 While TalentPool very much hopes that Users will find the Service for Users beneficial, Users accept that the creation of an Account on the Site is no guarantee of any of: receiving messages or information from Employers; gaining a job offer; donations being made to their selected Charity.</p> 
                    <p>4.5 Users accept that donations will only be made to their selected Charity when and if they take action on any messages they may receive from Employers. Such action may include clicking on a link provided by an Employer or responding to a message from an Employer.</p> 
                    <p>4.6 While TalentPool will make every effort to ensure that only reputable and honest employers are able to use the Service for Employers, Users accept that TalentPool accepts no liability for damages or loss caused by the actions of the Employers who use the Service for Employers.</p>
                    <p>4.7 Users agree that non-compliance with the terms detailed in the Document will be considered a material breach of these Terms of Use. Should such a breach take place, TalentPool may:</p>
                    <p>4.7.1 Remove the Users Account from the Site and refuse the User further access to the Site or services provided by TalentPool and/or;</p>
                    <p>4.7.2 Take legal action</p>
    
                    <h3>5. Terms of Use</h3>
                    <p>5.1 Users may not, for business or commercial ends, reproduce material on the Site. Users are granted a non-exclusive right to use the Site. Users accept that TalentPool is the sole proprietor of all material and content on the Site and has all intellectual property rights with regard to the Site</p>
                    <p>5.2 Access to the Site is granted on a temporary basis only and TalentPool reserves the right to deny access to any individual at any time without notice and without specifying any reason for doing so.</p>
                    <p>5.3 Should for any reason, the Site not be available to individuals or all Users, TalentPool will be held entirely harmless.</p>
    
                    <h3>6. Limitation of Liability</h3>
                    <p>6.1 TalentPool does not accept any liability for material or content provided by 3rd party websites to which links are featured on the Site. Equally, TalentPool accepts no liability for the actions of partner Charities which are beneficiaries of TalentPool’s support or Employers who are granted access to the Site. Users accept that the Terms of Use of engagement with 3rd party organisations will be their own and will differ from the Terms of Use of the Site.</p> 
                    <p>6.2 TalentPool accepts no liability for information provided on the Site which is out of date or inaccurate.</p> 
                    <p>6.3 Under no circumstances shall TalentPool be liable to any Users or User. Users agree to hold TalentPool entirely harmless with respect to any actions which may be undertaken or any demands/claims made. This includes, but is not limited to, legal fees incurred.</p> 
                    <p>6.4 TalentPool reserves the right to alter or terminate any or all of the Terms of Use detailed in this Document, without notice. Users accept that, should they wish to terminate their obligation to abide by these Terms of Use, they will be required to apply for their Account to be removed by emailing support@TalentPool.co.uk to that effect. Users understand and accept that they may not alter any of the Terms of Use detailed in this Document.</p> 
    
                    <h3>7. General</h3>
                    <p>7.1 Users accept that these Terms of Use do not constitute any sort of partnership</p>
                    <p>7.2 TalentPool reserves the right to make any changes to the Site it sees fit, without notification to any Users</p>
                </div>
    
    <label><input id="terms_checkbox" type="checkbox" name="terms_and_conditions_agree" value="accepted" />I agree to the TalentPool Privacy Policy and Terms of Use</label>

   
    </div>
    
    <div id="button_holder">
    
    <div id="back_button_other">Back</div>
    
    <div class="red_button" id="next_button_other">Sign Up</div>
    
    </div>
    
    </div> 
     
                     
        </div>
        
        <input class="degree_count" type="hidden" name="degree_count" value="1" />
        <input class="qual_count" type="hidden" name="qual_count" value="1" />
        <input class="experience_count" type="hidden" name="experience_count" value="1" />
        <input class="society_count" type="hidden" name="society_count" value="1" />
        <input class="sport_count" type="hidden" name="sport_count" value="1" />
        <input class="languages_count" type="hidden" name="languages_count" value="1" />
        
        
        </form>
        
        
        <div id="spacer"></div>
	
	<div id="footer"></div>
		
		
        <script src="/js/jquery-1.8.3.min.js"></script>
        <script src="/js/jquery-ui-1.10.4.custom.js"></script>
        <script src="/js/jquery.hoverIntent.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/verimail.jquery.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/date.js"></script>
        <script src="/js/jquery.ba-bbq.js"></script>
        <script src="/js/sign_up_new.js"></script>
        <script src="/js/jquery.html5-placeholder-shim.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
