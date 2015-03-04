<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include "simple_html_dom.php";
	$html='<select name="degree_uni[]" id="degree_uni">
<option value="default">University</option>
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
<option value="king\'s_college_london">King\'s College London</option>
<option value="lancaster_university">Lancaster University</option>
<option value="lse">LSE</option>
<option value="loughborough_university">Loughborough University</option>
<option value="newcastle_university">Newcastle University</option>
<option value="queen_mary">Queen Mary</option>
<option value="queen\'s_university_belfast">Queen\'s University Belfast</option>
<option value="royal_holloway">Royal Holloway</option>
<option value="st_george\'s">St George\'s</option>
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
<option value="ecole_polytechnique_federale_de_lausanne">&eacute;cole Polytechnique F&eacute;d&eacute;rale de Lausanne</option>
<option value="eth_zürich_?_swiss_federal_institute_of_technology_zürich">ETH Z&uuml;rich ? Swiss Federal Institute of Technology Z&uuml;rich</option>
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
<option value="university_of_michigan??ann_arbor">University of Michigan??Ann Arbor </option>
<option value="university_of_north_carolina??chapel_hill">University of North Carolina??Chapel Hill </option>
<option value="university_of_notre_dame">University of Notre Dame </option>
<option value="university_of_pennsylvania">University of Pennsylvania </option>
<option value="university_of_southern_california">University of Southern California </option>
<option value="university_of_virginia">University of Virginia </option>
<option value="vanderbilt_university">Vanderbilt University </option>
<option value="wake_forest_university">Wake Forest University </option>
<option value="washington_university_in_st._louis">Washington University in St. Louis </option>
<option value="yale_university">Yale University </option>
<option value="other">Other</option>
</optgroup>
<option value="other">Other</option>
 	</select>';
$universities = array(
  array('id' => '1','country_id' => '1','name' => 'Aberystwyth University','approved' => '1'),
  array('id' => '2','country_id' => '1','name' => 'Bangor University','approved' => '1'),
  array('id' => '3','country_id' => '1','name' => 'Bangor University','approved' => '1'),
  array('id' => '4','country_id' => '1','name' => 'Birkbec','approved' => '1'),
  array('id' => '5','country_id' => '1','name' => 'Brunel University','approved' => '1'),
  array('id' => '6','country_id' => '1','name' => 'Cardiff University','approved' => '1'),
  array('id' => '7','country_id' => '1','name' => 'Durham University','approved' => '1'),
  array('id' => '8','country_id' => '1','name' => 'Heriot-Watt University','approved' => '1'),
  array('id' => '9','country_id' => '1','name' => 'Imperial College London','approved' => '1'),
  array('id' => '10','country_id' => '1','name' => 'Keele University','approved' => '1'),
  array('id' => '11','country_id' => '1','name' => 'King\'s College London','approved' => '1'),
  array('id' => '12','country_id' => '1','name' => 'Lancaster University','approved' => '1'),
  array('id' => '13','country_id' => '1','name' => 'LSE','approved' => '1'),
  array('id' => '14','country_id' => '1','name' => 'Loughborough University','approved' => '1'),
  array('id' => '15','country_id' => '1','name' => 'Newcastle University','approved' => '1'),
  array('id' => '16','country_id' => '1','name' => 'Queen Mary','approved' => '1'),
  array('id' => '17','country_id' => '1','name' => 'Queen\'s University Belfast','approved' => '1'),
  array('id' => '18','country_id' => '1','name' => 'Royal Holloway','approved' => '1'),
  array('id' => '19','country_id' => '1','name' => 'St George\'s','approved' => '1'),
  array('id' => '20','country_id' => '1','name' => 'University College London','approved' => '1'),
  array('id' => '21','country_id' => '1','name' => 'University of Aberdeen','approved' => '1'),
  array('id' => '22','country_id' => '1','name' => 'University of Bath','approved' => '1'),
  array('id' => '23','country_id' => '1','name' => 'University of Birmingham','approved' => '1'),
  array('id' => '24','country_id' => '1','name' => 'University of Bristol','approved' => '1'),
  array('id' => '25','country_id' => '1','name' => 'University of Cambridge','approved' => '1'),
  array('id' => '26','country_id' => '1','name' => 'University of Dundee','approved' => '1'),
  array('id' => '27','country_id' => '1','name' => 'University of East Anglia','approved' => '1'),
  array('id' => '28','country_id' => '1','name' => 'University of Edinburgh','approved' => '1'),
  array('id' => '29','country_id' => '1','name' => 'University of Essex','approved' => '1'),
  array('id' => '30','country_id' => '1','name' => 'University of Exeter','approved' => '1'),
  array('id' => '31','country_id' => '1','name' => 'University of Glasgow','approved' => '1'),
  array('id' => '32','country_id' => '1','name' => 'University of Hertfordshire','approved' => '1'),
  array('id' => '33','country_id' => '1','name' => 'University of Leeds','approved' => '1'),
  array('id' => '34','country_id' => '1','name' => 'University of Leicester','approved' => '1'),
  array('id' => '35','country_id' => '1','name' => 'University of Liverpool','approved' => '1'),
  array('id' => '36','country_id' => '1','name' => 'University of Manchester','approved' => '1'),
  array('id' => '37','country_id' => '1','name' => 'University of Nottingham','approved' => '1'),
  array('id' => '38','country_id' => '1','name' => 'University of Oxford','approved' => '1'),
  array('id' => '39','country_id' => '1','name' => 'University of Portsmouth','approved' => '1'),
  array('id' => '40','country_id' => '1','name' => 'University of Reading','approved' => '1'),
  array('id' => '41','country_id' => '1','name' => 'University of Sheffield','approved' => '1'),
  array('id' => '42','country_id' => '1','name' => 'University of Southampton','approved' => '1'),
  array('id' => '43','country_id' => '1','name' => 'University of St Andrews','approved' => '1'),
  array('id' => '44','country_id' => '1','name' => 'University of Stirling','approved' => '1'),
  array('id' => '45','country_id' => '1','name' => 'University of Strathclyde','approved' => '1'),
  array('id' => '46','country_id' => '1','name' => 'University of Surrey','approved' => '1'),
  array('id' => '47','country_id' => '1','name' => 'University of Sussex','approved' => '1'),
  array('id' => '48','country_id' => '1','name' => 'University of Warwick','approved' => '1'),
  array('id' => '49','country_id' => '1','name' => 'University of York','approved' => '1'),
  array('id' => '50','country_id' => '22','name' => 'Boston College','approved' => '1'),
  array('id' => '51','country_id' => '22','name' => 'Brandeis University','approved' => '1'),
  array('id' => '52','country_id' => '22','name' => 'Brown University','approved' => '1'),
  array('id' => '53','country_id' => '22','name' => 'California Institute of Technology','approved' => '1'),
  array('id' => '54','country_id' => '22','name' => 'Carnegie Mellon University','approved' => '1'),
  array('id' => '55','country_id' => '22','name' => 'College of William and Mary','approved' => '1'),
  array('id' => '56','country_id' => '22','name' => 'Columbia University','approved' => '1'),
  array('id' => '57','country_id' => '22','name' => 'Cornell University','approved' => '1'),
  array('id' => '58','country_id' => '22','name' => 'Dartmouth College','approved' => '1'),
  array('id' => '59','country_id' => '22','name' => 'Duke University','approved' => '1'),
  array('id' => '60','country_id' => '22','name' => 'Emory University','approved' => '1'),
  array('id' => '61','country_id' => '22','name' => 'Georgetown University','approved' => '1'),
  array('id' => '62','country_id' => '22','name' => 'Harvard University','approved' => '1'),
  array('id' => '63','country_id' => '22','name' => 'Johns Hopkins University','approved' => '1'),
  array('id' => '64','country_id' => '22','name' => 'MIT','approved' => '1'),
  array('id' => '65','country_id' => '22','name' => 'Northwestern University','approved' => '1'),
  array('id' => '66','country_id' => '22','name' => 'Princeton University','approved' => '1'),
  array('id' => '67','country_id' => '22','name' => 'Rice University','approved' => '1'),
  array('id' => '68','country_id' => '22','name' => 'Stanford University','approved' => '1'),
  array('id' => '69','country_id' => '22','name' => 'Tufts University','approved' => '1'),
  array('id' => '70','country_id' => '22','name' => 'UC Berkeley','approved' => '1'),
  array('id' => '71','country_id' => '22','name' => 'UCLA','approved' => '1'),
  array('id' => '72','country_id' => '22','name' => 'University of Chicago','approved' => '1'),
  array('id' => '73','country_id' => '22','name' => 'University of Michigan??Ann Arbor','approved' => '1'),
  array('id' => '74','country_id' => '22','name' => 'University of North Carolina??Chapel Hill','approved' => '1'),
  array('id' => '75','country_id' => '22','name' => 'University of Notre Dame','approved' => '1'),
  array('id' => '76','country_id' => '22','name' => 'University of Pennsylvania','approved' => '1'),
  array('id' => '77','country_id' => '22','name' => 'University of Southern California','approved' => '1'),
  array('id' => '78','country_id' => '22','name' => 'University of Virginia','approved' => '1'),
  array('id' => '79','country_id' => '22','name' => 'Vanderbilt University','approved' => '1'),
  array('id' => '80','country_id' => '22','name' => 'Wake Forest University','approved' => '1'),
  array('id' => '81','country_id' => '22','name' => 'Washington University in St. Louis','approved' => '1'),
  array('id' => '82','country_id' => '22','name' => 'Yale University','approved' => '1'),
  array('id' => '83','country_id' => '4','name' => 'Charles University in Prague','approved' => '1'),
  array('id' => '84','country_id' => '2','name' => 'Johannes Kepler Universit&auml;t Linz','approved' => '1'),
  array('id' => '85','country_id' => '2','name' => 'Karl-Franzens-Universit&auml;t Graz','approved' => '1'),
  array('id' => '86','country_id' => '2','name' => 'Medical University of Vienna','approved' => '1'),
  array('id' => '87','country_id' => '2','name' => 'University of Innsbruck','approved' => '1'),
  array('id' => '88','country_id' => '2','name' => 'University of Vienna','approved' => '1'),
  array('id' => '89','country_id' => '2','name' => 'Vienna University of Technology','approved' => '1'),
  array('id' => '90','country_id' => '3','name' => 'Ghent University','approved' => '1'),
  array('id' => '91','country_id' => '3','name' => 'KU Leuven','approved' => '1'),
  array('id' => '92','country_id' => '3','name' => 'Universit&eacute; Catholique de Louvain','approved' => '1'),
  array('id' => '93','country_id' => '3','name' => 'Universit&eacute; de Li&egrave;ge','approved' => '1'),
  array('id' => '94','country_id' => '3','name' => 'Universit&eacute; Libre de Bruxelles','approved' => '1'),
  array('id' => '95','country_id' => '3','name' => 'University of Antwerp','approved' => '1'),
  array('id' => '96','country_id' => '3','name' => 'Vrije Universiteit Brussel','approved' => '1'),
  array('id' => '97','country_id' => '3','name' => 'Ghent University','approved' => '1'),
  array('id' => '98','country_id' => '3','name' => 'KU Leuven','approved' => '1'),
  array('id' => '99','country_id' => '3','name' => 'Universit&eacute; Catholique de Louvain','approved' => '1'),
  array('id' => '100','country_id' => '3','name' => 'Universit&eacute; de Li&egrave;ge','approved' => '1'),
  array('id' => '101','country_id' => '3','name' => 'Universit&eacute; Libre de Bruxelles','approved' => '1'),
  array('id' => '102','country_id' => '3','name' => 'University of Antwerp','approved' => '1'),
  array('id' => '103','country_id' => '3','name' => 'Vrije Universiteit Brussel','approved' => '1'),
  array('id' => '104','country_id' => '5','name' => 'Aalborg University','approved' => '1'),
  array('id' => '105','country_id' => '5','name' => 'Aarhus University','approved' => '1'),
  array('id' => '106','country_id' => '5','name' => 'Technical University of Denmark','approved' => '1'),
  array('id' => '107','country_id' => '5','name' => 'University of Copenhagen','approved' => '1'),
  array('id' => '108','country_id' => '5','name' => 'University of Southern Denmark','approved' => '1'),
  array('id' => '109','country_id' => '6','name' => 'University of Tartu','approved' => '1'),
  array('id' => '110','country_id' => '7','name' => 'Aalto University','approved' => '1'),
  array('id' => '111','country_id' => '7','name' => 'University of Eastern Finland','approved' => '1'),
  array('id' => '112','country_id' => '7','name' => 'University of Helsinki','approved' => '1'),
  array('id' => '113','country_id' => '7','name' => 'University of Jyv&auml;skyl&auml;','approved' => '1'),
  array('id' => '114','country_id' => '7','name' => 'University of Tampere','approved' => '1'),
  array('id' => '115','country_id' => '8','name' => '&Eacute;cole Normale Sup&eacute;rieure','approved' => '1'),
  array('id' => '116','country_id' => '8','name' => '&Eacute;cole Normale Sup&eacute;rieure de Lyon','approved' => '1'),
  array('id' => '117','country_id' => '8','name' => '&Eacute;cole Polytechnique','approved' => '1'),
  array('id' => '118','country_id' => '8','name' => 'Mines ParisTech','approved' => '1'),
  array('id' => '119','country_id' => '8','name' => 'Universit&eacute; Claude Bernard Lyon 1','approved' => '1'),
  array('id' => '120','country_id' => '8','name' => 'Universit&eacute; Joseph Fourier, Grenoble','approved' => '1'),
  array('id' => '121','country_id' => '8','name' => 'Universit&eacute; Montpellier 2','approved' => '1'),
  array('id' => '122','country_id' => '8','name' => 'Universit&eacute; Paris Dauphine','approved' => '1'),
  array('id' => '123','country_id' => '8','name' => 'Universit&eacute; Paris Diderot - Paris 7','approved' => '1'),
  array('id' => '124','country_id' => '8','name' => 'Universit&eacute; Paris-Sud','approved' => '1'),
  array('id' => '125','country_id' => '8','name' => 'Universit&eacute; Pierre et Marie Curie','approved' => '1'),
  array('id' => '126','country_id' => '8','name' => 'University of Strasbourg','approved' => '1'),
  array('id' => '127','country_id' => '9','name' => 'Albert-Ludwigs-Universit&auml;t Freiburg','approved' => '1'),
  array('id' => '128','country_id' => '9','name' => 'Christian-Albrechts-Universit&auml;t zu Kiel','approved' => '1'),
  array('id' => '129','country_id' => '9','name' => 'Eberhard Karls Universit&auml;t T&uuml;bingen','approved' => '1'),
  array('id' => '130','country_id' => '9','name' => 'Freie Universit&auml;t Berlin','approved' => '1'),
  array('id' => '131','country_id' => '9','name' => 'Friedrich-Alexander-Universit&auml;t Erlangen-N&uuml;rnberg','approved' => '1'),
  array('id' => '132','country_id' => '9','name' => 'Georg-August-Universit&auml;t G&ouml;ttingen','approved' => '1'),
  array('id' => '133','country_id' => '9','name' => 'Humboldt-Universit&auml;t zu Berlin','approved' => '1'),
  array('id' => '134','country_id' => '9','name' => 'Johann Wolfgang Goethe-Universit&auml;t Frankfurt am Main','approved' => '1'),
  array('id' => '135','country_id' => '9','name' => 'Johannes Gutenberg-Universit&auml;t Mainz','approved' => '1'),
  array('id' => '136','country_id' => '9','name' => 'Karlsruhe Institute of Technology','approved' => '1'),
  array('id' => '137','country_id' => '9','name' => 'Leibniz Universit&auml;t Hannover','approved' => '1'),
  array('id' => '138','country_id' => '9','name' => 'Ludwig-Maximilians-Universit&auml;t M&uuml;nchen','approved' => '1'),
  array('id' => '139','country_id' => '9','name' => 'Ruhr-Universit&auml;t Bochum','approved' => '1'),
  array('id' => '140','country_id' => '9','name' => 'RWTH Aachen University','approved' => '1'),
  array('id' => '141','country_id' => '9','name' => 'Technische Universit&auml;t Darmstadt','approved' => '1'),
  array('id' => '142','country_id' => '9','name' => 'Technische Universit&auml;t Dresden','approved' => '1'),
  array('id' => '143','country_id' => '9','name' => 'Technische Universit&auml;t M&uuml;nchen','approved' => '1'),
  array('id' => '144','country_id' => '9','name' => 'Universit&auml;t Bayreuth','approved' => '1'),
  array('id' => '145','country_id' => '9','name' => 'Universit&auml;t Bielefeld','approved' => '1'),
  array('id' => '146','country_id' => '9','name' => 'Universit&auml;t Bonn','approved' => '1'),
  array('id' => '147','country_id' => '9','name' => 'Universit&auml;t Duisburg-Essen','approved' => '1'),
  array('id' => '148','country_id' => '9','name' => 'Universit&auml;t Heidelberg','approved' => '1'),
  array('id' => '149','country_id' => '9','name' => 'Universit&auml;t Konstanz','approved' => '1'),
  array('id' => '150','country_id' => '9','name' => 'Universit&auml;t W&uuml;rzburg','approved' => '1'),
  array('id' => '151','country_id' => '9','name' => 'Westf&auml;lische Wilhelms-Universit&auml;t M&uuml;nster','approved' => '1'),
  array('id' => '152','country_id' => '10','name' => 'University of Crete','approved' => '1'),
  array('id' => '153','country_id' => '11','name' => 'University of Iceland','approved' => '1'),
  array('id' => '154','country_id' => '12','name' => 'Polytechnic University of Milan','approved' => '1'),
  array('id' => '155','country_id' => '12','name' => 'Sapienza University of Rome','approved' => '1'),
  array('id' => '156','country_id' => '12','name' => 'University of Bologna','approved' => '1'),
  array('id' => '157','country_id' => '12','name' => 'University of Ferrara','approved' => '1'),
  array('id' => '158','country_id' => '12','name' => 'University of Milan','approved' => '1'),
  array('id' => '159','country_id' => '12','name' => 'University of Milan-Bicocca','approved' => '1'),
  array('id' => '160','country_id' => '12','name' => 'University of Modena and Reggio Emilia','approved' => '1'),
  array('id' => '161','country_id' => '12','name' => 'University of Padua','approved' => '1'),
  array('id' => '162','country_id' => '12','name' => 'University of Pavia','approved' => '1'),
  array('id' => '163','country_id' => '12','name' => 'University of Pisa','approved' => '1'),
  array('id' => '164','country_id' => '12','name' => 'University of Salento','approved' => '1'),
  array('id' => '165','country_id' => '12','name' => 'University of Trento','approved' => '1'),
  array('id' => '166','country_id' => '12','name' => 'University of Trieste','approved' => '1'),
  array('id' => '167','country_id' => '12','name' => 'University of Turin','approved' => '1'),
  array('id' => '168','country_id' => '13','name' => 'Delft University of Technology','approved' => '1'),
  array('id' => '169','country_id' => '13','name' => 'Eindhoven University of Technology','approved' => '1'),
  array('id' => '170','country_id' => '13','name' => 'Erasmus University Rotterdam','approved' => '1'),
  array('id' => '171','country_id' => '13','name' => 'Leiden University','approved' => '1'),
  array('id' => '172','country_id' => '13','name' => 'Maastricht University','approved' => '1'),
  array('id' => '173','country_id' => '13','name' => 'Radboud University Nijmegen','approved' => '1'),
  array('id' => '174','country_id' => '13','name' => 'Tilburg University','approved' => '1'),
  array('id' => '175','country_id' => '13','name' => 'University of Amsterdam','approved' => '1'),
  array('id' => '176','country_id' => '13','name' => 'University of Groningen','approved' => '1'),
  array('id' => '177','country_id' => '13','name' => 'University of Twente','approved' => '1'),
  array('id' => '178','country_id' => '13','name' => 'Utrecht University','approved' => '1'),
  array('id' => '179','country_id' => '13','name' => 'VU University Amsterdam','approved' => '1'),
  array('id' => '180','country_id' => '13','name' => 'Wageningen University and Research Center','approved' => '1'),
  array('id' => '181','country_id' => '14','name' => 'Norwegian University of Science and Technology','approved' => '1'),
  array('id' => '182','country_id' => '14','name' => 'University of Bergen','approved' => '1'),
  array('id' => '183','country_id' => '14','name' => 'University of Oslo','approved' => '1'),
  array('id' => '184','country_id' => '14','name' => 'University of Tromsø','approved' => '1'),
  array('id' => '185','country_id' => '15','name' => 'Jagiellonian University','approved' => '1'),
  array('id' => '186','country_id' => '15','name' => 'University of Warsaw','approved' => '1'),
  array('id' => '187','country_id' => '16','name' => 'Aveiro University','approved' => '1'),
  array('id' => '188','country_id' => '16','name' => 'University of Minho','approved' => '1'),
  array('id' => '189','country_id' => '16','name' => 'University of Porto','approved' => '1'),
  array('id' => '190','country_id' => '17','name' => 'National University of Ireland, Galway','approved' => '1'),
  array('id' => '191','country_id' => '17','name' => 'National University of Ireland, Maynooth','approved' => '1'),
  array('id' => '192','country_id' => '17','name' => 'Trinity College Dublin','approved' => '1'),
  array('id' => '193','country_id' => '17','name' => 'University College Cork','approved' => '1'),
  array('id' => '194','country_id' => '17','name' => 'University College Dublin','approved' => '1'),
  array('id' => '195','country_id' => '18','name' => 'Lomonosov Moscow State University','approved' => '1'),
  array('id' => '196','country_id' => '18','name' => 'Moscow State Engineering Physics Institute','approved' => '1'),
  array('id' => '197','country_id' => '19','name' => 'Autonomous University of Barcelona','approved' => '1'),
  array('id' => '198','country_id' => '19','name' => 'Autonomous University of Madrid','approved' => '1'),
  array('id' => '199','country_id' => '19','name' => 'Polytechnic University of Valencia','approved' => '1'),
  array('id' => '200','country_id' => '19','name' => 'Pompeu Fabra University','approved' => '1'),
  array('id' => '201','country_id' => '19','name' => 'University of Barcelona','approved' => '1'),
  array('id' => '202','country_id' => '19','name' => 'University of Valencia','approved' => '1'),
  array('id' => '203','country_id' => '19','name' => 'University of Vigo','approved' => '1'),
  array('id' => '204','country_id' => '20','name' => 'Chalmers University of Technology','approved' => '1'),
  array('id' => '205','country_id' => '20','name' => 'Karolinska Institute','approved' => '1'),
  array('id' => '206','country_id' => '20','name' => 'KTH Royal Institute of Technology','approved' => '1'),
  array('id' => '207','country_id' => '20','name' => 'Link&ouml;ping University','approved' => '1'),
  array('id' => '208','country_id' => '20','name' => 'Lund University','approved' => '1'),
  array('id' => '209','country_id' => '20','name' => 'Stockholm University','approved' => '1'),
  array('id' => '210','country_id' => '20','name' => 'Swedish University of Agricultural Sciences','approved' => '1'),
  array('id' => '211','country_id' => '20','name' => 'Ume&aring; University','approved' => '1'),
  array('id' => '212','country_id' => '20','name' => 'University of Gothenburg','approved' => '1'),
  array('id' => '213','country_id' => '20','name' => 'Uppsala University','approved' => '1'),
  array('id' => '214','country_id' => '21','name' => '&eacute;cole Polytechnique F&eacute;d&eacute;rale de Lausanne','approved' => '1'),
  array('id' => '215','country_id' => '21','name' => 'ETH Z&uuml;rich ? Swiss Federal Institute of Technology Z&uuml;rich','approved' => '1'),
  array('id' => '216','country_id' => '21','name' => 'Universit&auml;t Basel','approved' => '1'),
  array('id' => '217','country_id' => '21','name' => 'Universit&eacute; de Lausanne','approved' => '1'),
  array('id' => '218','country_id' => '21','name' => 'University of Bern','approved' => '1'),
  array('id' => '219','country_id' => '21','name' => 'University of Fribourg','approved' => '1'),
  array('id' => '220','country_id' => '21','name' => 'University of Geneva','approved' => '1'),
  array('id' => '221','country_id' => '21','name' => 'University of Z&uuml;rich','approved' => '1'),
  array('id' => '233','country_id' => '23','name' => 'UNSS','approved' => '0'),
  array('id' => '240','country_id' => '23','name' => 'Tuni','approved' => '0'),
  array('id' => '241','country_id' => '23','name' => 'Technical University of Sofia','approved' => '0'),
  array('id' => '245','country_id' => '23','name' => 'Technical University of Varna','approved' => '0'),
  array('id' => '246','country_id' => '23','name' => 'Auburn University','approved' => '0'),
  array('id' => '247','country_id' => '23','name' => 'Auburn University','approved' => '0'),
  array('id' => '248','country_id' => '23','name' => 'Auburn University','approved' => '0'),
  array('id' => '249','country_id' => '23','name' => 'Auburn University','approved' => '0'),
  array('id' => '250','country_id' => '23','name' => 'Sofia Software Uni','approved' => '0'),
  array('id' => '251','country_id' => '23','name' => 'Plovdiv Uni','approved' => '0'),
  array('id' => '252','country_id' => '23','name' => 'Southwest Uni','approved' => '0'),
  array('id' => '253','country_id' => '23','name' => 'University of Pernik','approved' => '0'),
  array('id' => '254','country_id' => '23','name' => 'my uni','approved' => '0'),
  array('id' => '255','country_id' => '0','name' => '','approved' => '0'),
  array('id' => '256','country_id' => '0','name' => '','approved' => '0'),
  array('id' => '257','country_id' => '0','name' => '','approved' => '0'),
  array('id' => '258','country_id' => '0','name' => '','approved' => '0'),
  array('id' => '259','country_id' => '0','name' => 'Other Uni 1','approved' => '0'),
  array('id' => '260','country_id' => '0','name' => 'Strange Uni','approved' => '0'),
  array('id' => '261','country_id' => '0','name' => 'VHEMBE FET COLLEGE','approved' => '0')
);
$html1=str_get_html ( $html );
$counter=1;
$uni=[];

foreach($html1->find('option') as $element) {
    //echo $v =  $element->value .$element->innertext. '</br>';
     foreach($universities as $aa){
                        //echo $aa['name'];
                        if($element->innertext==$aa['name'])
                        {
                          $array1['id']=$aa['id'];
                          $array1['name']=$element->innertext;
                          $array1['value_string']=$element->value;
                          $array1['country']=$aa['country_id'];                      }
                    }
                    array_push($uni,$array1);
    
}
echo "<pre>";
//print_r($uni);
$str = serialize($uni);
print $str . "\n";
echo var_export($uni);