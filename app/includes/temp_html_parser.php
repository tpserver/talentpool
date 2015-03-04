<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
    include "simple_html_dom.php";
	$html='<option value="default">Sport</option>
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
<option value="other">Other</option>';
     
     $html1=str_get_html ( $html );
$counter=1;
$uni=[];

foreach($html1->find('option') as $element) {
    //echo $v =  $element->value .$element->innertext. '</br>';

                        //echo $aa['name'];
                       
                       
                         
                          $array1['name']=$element->innertext;
                          $array1['value']=$element->value;
                                       
                    
                    array_push($uni,$array1);
    
}

echo "<pre>";
echo var_export($uni);