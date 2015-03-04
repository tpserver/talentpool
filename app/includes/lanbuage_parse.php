<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
include "simple_html_dom.php";
	$html='<select name="languages[]" id="languages">
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
     </select>';
$language_names = array(
  array('id' => '1','name' => '(Afan) Oromo','approved' => '1'),
  array('id' => '2','name' => 'Abkhazian','approved' => '1'),
  array('id' => '3','name' => 'Afar','approved' => '1'),
  array('id' => '4','name' => 'Afrikaans','approved' => '1'),
  array('id' => '5','name' => 'Albanian','approved' => '1'),
  array('id' => '6','name' => 'Amharic','approved' => '1'),
  array('id' => '7','name' => 'Arabic','approved' => '1'),
  array('id' => '8','name' => 'Armenian','approved' => '1'),
  array('id' => '9','name' => 'Assamese','approved' => '1'),
  array('id' => '10','name' => 'Austrian','approved' => '1'),
  array('id' => '11','name' => 'Aymara','approved' => '1'),
  array('id' => '12','name' => 'Azerbaijani','approved' => '1'),
  array('id' => '13','name' => 'Bashkir','approved' => '1'),
  array('id' => '14','name' => 'Basque','approved' => '1'),
  array('id' => '15','name' => 'Bengali','approved' => '1'),
  array('id' => '16','name' => 'Bhutani','approved' => '1'),
  array('id' => '17','name' => 'Bihari','approved' => '1'),
  array('id' => '18','name' => 'Bislama','approved' => '1'),
  array('id' => '19','name' => 'Breton','approved' => '1'),
  array('id' => '20','name' => 'Bulgarian','approved' => '1'),
  array('id' => '21','name' => 'Burmese','approved' => '1'),
  array('id' => '22','name' => 'Byelorussian','approved' => '1'),
  array('id' => '23','name' => 'Cambodian','approved' => '1'),
  array('id' => '24','name' => 'Cantonese','approved' => '1'),
  array('id' => '25','name' => 'Catalan','approved' => '1'),
  array('id' => '26','name' => 'Chinese','approved' => '1'),
  array('id' => '27','name' => 'Corsican','approved' => '1'),
  array('id' => '28','name' => 'Croatian','approved' => '1'),
  array('id' => '29','name' => 'Czech','approved' => '1'),
  array('id' => '30','name' => 'Danish','approved' => '1'),
  array('id' => '31','name' => 'Dutch','approved' => '1'),
  array('id' => '32','name' => 'English','approved' => '1'),
  array('id' => '33','name' => 'Esperanto','approved' => '1'),
  array('id' => '34','name' => 'Estonian','approved' => '1'),
  array('id' => '35','name' => 'Faeroese','approved' => '1'),
  array('id' => '36','name' => 'Fiji','approved' => '1'),
  array('id' => '37','name' => 'Finnish','approved' => '1'),
  array('id' => '38','name' => 'French','approved' => '1'),
  array('id' => '39','name' => 'Frisian','approved' => '1'),
  array('id' => '40','name' => 'Galician','approved' => '1'),
  array('id' => '41','name' => 'Georgian','approved' => '1'),
  array('id' => '42','name' => 'German','approved' => '1'),
  array('id' => '43','name' => 'Greek','approved' => '1'),
  array('id' => '44','name' => 'Greenlandic','approved' => '1'),
  array('id' => '45','name' => 'Guarani','approved' => '1'),
  array('id' => '46','name' => 'Gujarati','approved' => '1'),
  array('id' => '47','name' => 'Hausa','approved' => '1'),
  array('id' => '48','name' => 'Hebrew','approved' => '1'),
  array('id' => '49','name' => 'Hindi','approved' => '1'),
  array('id' => '50','name' => 'Hungarian','approved' => '1'),
  array('id' => '51','name' => 'Icelandic','approved' => '1'),
  array('id' => '52','name' => 'Indonesian','approved' => '1'),
  array('id' => '53','name' => 'Interlingua','approved' => '1'),
  array('id' => '54','name' => 'Interlingue','approved' => '1'),
  array('id' => '55','name' => 'Inupiak','approved' => '1'),
  array('id' => '56','name' => 'Irish','approved' => '1'),
  array('id' => '57','name' => 'Italian','approved' => '1'),
  array('id' => '58','name' => 'Japanese','approved' => '1'),
  array('id' => '59','name' => 'Javanese','approved' => '1'),
  array('id' => '60','name' => 'Kannada','approved' => '1'),
  array('id' => '61','name' => 'Kashmiri','approved' => '1'),
  array('id' => '62','name' => 'Kazakh','approved' => '1'),
  array('id' => '63','name' => 'Kinyarwanda','approved' => '1'),
  array('id' => '64','name' => 'Kirghiz','approved' => '1'),
  array('id' => '65','name' => 'Kirundi','approved' => '1'),
  array('id' => '66','name' => 'Korean','approved' => '1'),
  array('id' => '67','name' => 'Kurdish','approved' => '1'),
  array('id' => '68','name' => 'Laothian','approved' => '1'),
  array('id' => '69','name' => 'Latin','approved' => '1'),
  array('id' => '70','name' => 'Latvian, Lettish','approved' => '1'),
  array('id' => '71','name' => 'Lingala','approved' => '1'),
  array('id' => '72','name' => 'Lithuanian','approved' => '1'),
  array('id' => '73','name' => 'Luxembourgeois','approved' => '1'),
  array('id' => '74','name' => 'Macedonian','approved' => '1'),
  array('id' => '75','name' => 'Malagasy','approved' => '1'),
  array('id' => '76','name' => 'Malay','approved' => '1'),
  array('id' => '77','name' => 'Malayalam','approved' => '1'),
  array('id' => '78','name' => 'Maltese','approved' => '1'),
  array('id' => '79','name' => 'Mandarin','approved' => '1'),
  array('id' => '80','name' => 'Maori','approved' => '1'),
  array('id' => '81','name' => 'Marathi','approved' => '1'),
  array('id' => '82','name' => 'Moldavian','approved' => '1'),
  array('id' => '83','name' => 'Mongolian','approved' => '1'),
  array('id' => '84','name' => 'Nauru','approved' => '1'),
  array('id' => '85','name' => 'Nepali','approved' => '1'),
  array('id' => '86','name' => 'Norwegian','approved' => '1'),
  array('id' => '87','name' => 'Occitan','approved' => '1'),
  array('id' => '88','name' => 'Oriya','approved' => '1'),
  array('id' => '89','name' => 'Pashto, Pushto','approved' => '1'),
  array('id' => '90','name' => 'Persian','approved' => '1'),
  array('id' => '91','name' => 'Polish','approved' => '1'),
  array('id' => '92','name' => 'Portuguese','approved' => '1'),
  array('id' => '93','name' => 'Punjabi','approved' => '1'),
  array('id' => '94','name' => 'Quechua','approved' => '1'),
  array('id' => '95','name' => 'Rhaeto-Romance','approved' => '1'),
  array('id' => '96','name' => 'Romanian','approved' => '1'),
  array('id' => '97','name' => 'Russian','approved' => '1'),
  array('id' => '98','name' => 'Samoan','approved' => '1'),
  array('id' => '99','name' => 'Sangro','approved' => '1'),
  array('id' => '100','name' => 'Sanskrit','approved' => '1'),
  array('id' => '101','name' => 'Scots Gaelic','approved' => '1'),
  array('id' => '102','name' => 'Serbian','approved' => '1'),
  array('id' => '103','name' => 'Serbo-Croatian','approved' => '1'),
  array('id' => '104','name' => 'Sesotho','approved' => '1'),
  array('id' => '105','name' => 'Setswana','approved' => '1'),
  array('id' => '106','name' => 'Shona','approved' => '1'),
  array('id' => '107','name' => 'Sindhi','approved' => '1'),
  array('id' => '108','name' => 'Singhalese','approved' => '1'),
  array('id' => '109','name' => 'Siswati','approved' => '1'),
  array('id' => '110','name' => 'Slovak','approved' => '1'),
  array('id' => '111','name' => 'Slovenian','approved' => '1'),
  array('id' => '112','name' => 'Somali','approved' => '1'),
  array('id' => '113','name' => 'Spanish','approved' => '1'),
  array('id' => '114','name' => 'Sundanese','approved' => '1'),
  array('id' => '115','name' => 'Swahili','approved' => '1'),
  array('id' => '116','name' => 'Swedish','approved' => '1'),
  array('id' => '117','name' => 'Tagalog','approved' => '1'),
  array('id' => '118','name' => 'Tajik','approved' => '1'),
  array('id' => '119','name' => 'Tamil','approved' => '1'),
  array('id' => '120','name' => 'Tatar','approved' => '1'),
  array('id' => '121','name' => 'Telugu','approved' => '1'),
  array('id' => '122','name' => 'Thai','approved' => '1'),
  array('id' => '123','name' => 'Tibetan','approved' => '1'),
  array('id' => '124','name' => 'Tigrinya','approved' => '1'),
  array('id' => '125','name' => 'Tonga','approved' => '1'),
  array('id' => '126','name' => 'Tsonga','approved' => '1'),
  array('id' => '127','name' => 'Turkish','approved' => '1'),
  array('id' => '128','name' => 'Turkmen','approved' => '1'),
  array('id' => '129','name' => 'Twi','approved' => '1'),
  array('id' => '130','name' => 'Ukrainian','approved' => '1'),
  array('id' => '131','name' => 'Urdu','approved' => '1'),
  array('id' => '132','name' => 'Uzbek','approved' => '1'),
  array('id' => '133','name' => 'Vietnamese','approved' => '1'),
  array('id' => '134','name' => 'Volapuk','approved' => '1'),
  array('id' => '135','name' => 'Welsh','approved' => '1'),
  array('id' => '136','name' => 'Wolof','approved' => '1'),
  array('id' => '137','name' => 'Xhosa','approved' => '1'),
  array('id' => '138','name' => 'Yiddish','approved' => '1'),
  array('id' => '139','name' => 'Yoruba','approved' => '1'),
  array('id' => '140','name' => 'Zulu','approved' => '1'),
  array('id' => '141','name' => 'Vrtatchanski','approved' => '0'),
  array('id' => '142','name' => 'Other lang','approved' => '0'),
  array('id' => '143','name' => 'Strange Language','approved' => '0'),
  array('id' => '144','name' => 'TSHIVENDA','approved' => '0')
);
$html1=str_get_html ( $html );
$counter=1;
$uni=[];

foreach($html1->find('option') as $element) {
    //echo $v =  $element->value .$element->innertext. '</br>';
     foreach($language_names as $aa){
                        //echo $aa['name'];
                        if($element->innertext==$aa['name'])
                        {
                          $array1['id']=$aa['id'];
                          $array1['name']=$element->innertext;
                          $array1['value_string']=$element->value;
                        }                
                    }
                    array_push($uni,$array1);
    
}

echo "<pre>";
echo var_export($uni);

?>