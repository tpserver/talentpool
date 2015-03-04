<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
include "lanbuage_array.php";
include "university_array.php";
include "work_sectors_hmtl.php";
include "work_sectors.php";
//include "work_sector_temp.php";
include "subscribers.php";
include "social_categories_gradlist.php";
include "social_categories.php";
include "sports_names_gradlist.php";
include "sport_names.php";
include "options.php";


//public $first_name;
//public $last_name;
//public $email;
//    public $password;
//    public $sector_interest;
//    
//    public $sector_agnostic;
//   
//    $degree_type[$row]=array();
//    $degree_uni[$row]=array();
//    $degree_subject_type[$row]=array();
//    $degree_result[$row]=array();
//    $degrees_degree_year[$row]=array();
//    $degree_subject_name[$row]=array();
//    $degree_graduation[$row]=array();
//    $qual_type[$row]=array();
//    $school_subjects[$row]=array();
//    $school_qualifications_subject[$row]=array();
//    $school_qualification_results_name[$row]=array();
//    
//    $language_levels[$row]=array();
//    $languages[$row]=array();
//    $language_level_other[$row]=array();
//   
//    $work_type[$row]=array();
//    $work_durations[$row]=array();
//    $work_sector_id[$row]=array();
//    $works_name_talent[$row]=array();
//    
//    $society_category[$row]=array();
//    $society_position[$row]=array();
//    $society_name[$row]=array();
//    
//    $sport_names_talent[$row]=array();
//    $sport_level[$row]=array();
//    $sport_position[$row]=array();
//    
//    $charity_selection[$row]=array();
//    $gender[$row]=array();
//    $ethnicity[$row]=array();
//    $dob[$row]=array();
//    $terms_and_conditions_agree[$row]=array();
//    $user_contact_freq[$row]=array();


$row = 0;
$counter=0;


foreach($subscribers as $user)
{
    $first_name[$row]=array();
    $last_name[$row]=array();
    $email[$row]=array();
    $password[$row]=array();
    $sector_interest[$row]=array();
    
    $sector_agnostic[$row]=array();
   
    $degree_type[$row]=array();
    $degree_uni[$row]=array();
    $degree_subject_type[$row]=array();
    $degree_result[$row]=array();
    $degrees_degree_year[$row]=array();
    $degree_subject_name[$row]=array();
    $degree_graduation[$row]=array();
    $qual_type[$row]=array();
    $school_subjects[$row]=array();
    $school_qualifications_subject[$row]=array();
    $school_qualification_results_name[$row]=array();
    
    $language_levels[$row]=array();
    $languages[$row]=array();
    $language_level_other[$row]=array();
   
    $work_type[$row]=array();
    $work_durations[$row]=array();
    $work_sector_id[$row]=array();
    $works_name_talent[$row]=array();
    
    $society_category[$row]=array();
    $society_position[$row]=array();
    $society_name[$row]=array();
    
    $sport_names_talent[$row]=array();
    $sport_level[$row]=array();
    $sport_position[$row]=array();
    
    $charity_selection[$row]=array();
    $gender[$row]=array();
    $ethnicity[$row]=array();
    $dob[$row]=array();
    $terms_and_conditions_agree[$row]=array();
    $user_contact_freq[$row]=array();
    
    //-----------------------first_name------------------------
    $first_name[$row]['first_name']=$user['first_name'];
     //-----------------------last_name------------------------
    $last_name[$row]['last_name']=$user['last_name'];
     //-----------------------email------------------------
    $email[$row]['email']=$user['email'];
     //-----------------------password------------------------
    $password[$row]['password']=$user['password'];
//---------------sector_agnostic-----------------------------
    if($user['sector_agnostic']=='yes')
    {
        $sector_agnostic[$row]['agnostic']=1;
    }else{
       $sector_agnostic[$row]['agnostic']=0; 
    }
    
//------------sector_interest-----------------------------

        $str=explode('; ',$user['sector_interest']);
        for($i=0;$i<count($str);$i++)
                {
                    if($str[$i]=='default' || $str[$i]=='other')
                    {
                         array_push($sector_interest[$row],0);
                        }
                    else{
                        foreach($work_sector as $aa)
                        {
                            if($str[$i]==$aa['value'])
                            {
                               foreach($options as $ab)
                                {
                                  if($aa['name']==$ab['name']){
                                    
                                        array_push($sector_interest[$row],$ab['id']);
                                        
                                    }
                                }
                            }
                            
                        }
                    }
                    
                    
                }
    //------------degree_type-----------------------------
        $degree_types=explode('; ',$user['degree_type']);
        //print_r($degree_types);
        for($i=0;$i<count($degree_types);$i++)
        {
         if($degree_types[$i]=='default' || $degree_types[$i]=='other'){
            array_push($degree_type[$row],0);
         }
         if($degree_types[$i]=='undergraduate' ){
            array_push($degree_type[$row],1);
         }
         if($degree_types[$i]=='postgraduate' ){
            array_push($degree_type[$row],2);
         }
         if($degree_types[$i]=='diploma' ){
            array_push($degree_type[$row],3);
         }
        }
        // print_r($degree_type[$row]);
        //------------degree_uni-----------------------------
    
     
                $str=explode('; ',$user['degree_uni']);
                for($i=0;$i<count($str);$i++)
                {
                    if($str[$i]=='default' || $str[$i]=='other' || $str[$i]==''){
                         array_push($degree_uni[$row],255);
                        }
                        else if($str[$i]=='cambridge')
                        {
                            array_push($degree_uni[$row],25);
                            }else{
                                foreach($universities as $aa){
                               
                                if($str[$i]==$aa['value_string']){
                                  
                                    //$array_uni['university_id']=$aa['id'];
                                    array_push($degree_uni[$row],$aa['id']);
                                   
                                }
                            }
                        }
                    
                    
                }
 
    //------------degree_subject-----------------------------
    
//     <option value="default">Subject Type</option>
//	<option value="humanities">Humanities</option>
//	<option value="language">Languages</option>
//	<option value="maths">Maths</option>
//	<option value="science">Science</option>
//	<option value="social_science">Social Science</option>
//	<option value="vocational">Vocational</option>
// 	<option value="other">Other</option>
                $str=explode('; ',$user['degree_subject_type']);
                for($i=0;$i<count($str);$i++)
                {
                    if($str[$i]=='default' || $str[$i]=='other'){
                         array_push($degree_subject_type[$row],10);
                        }
                        else{
                            if($str[$i]=="humanities")
                              {
                                 array_push($degree_subject_type[$row],1);
                              }
                              else if($str[$i]=="language")
                              {
                                 array_push($degree_subject_type[$row],2);
                              }
                              else if($str[$i]=="maths")
                              {
                                 array_push($degree_subject_type[$row],3);
                              }
                              else if($str[$i]=="science")
                              {
                                 array_push($degree_subject_type[$row],4);
                              }
                              else if($str[$i]=="social_science")
                              {
                                 array_push($degree_subject_type[$row],5);
                              }
                              else if($str[$i]=="vocational")
                              {
                                 array_push($degree_subject_type[$row],6);
                              }else{
                                 array_push($degree_subject_type[$row],10);
                              }
                              
                    }
                    
                }
                
    
    //------------degree_result-----------------------------

     
                $str=explode('; ',$user['degree_result']);
                for($i=0;$i<count($str);$i++)
                {
                    if($str[$i]=='default' || $str[$i]=='other')
                    {
                          array_push($degree_result[$row],0);
                              } 
                              if($str[$i]=="1")
                              {
                                 array_push($degree_result[$row],1);
                              }
                              if($str[$i]=="2")
                              {
                                 array_push($degree_result[$row],2);
                              }
                              if($str[$i]=="3")
                              {
                                 array_push($degree_result[$row],3);
                              }
                              if($str[$i]=="4")
                              {
                                 array_push($degree_result[$row],4);
                              }
                              if($str[$i]=="distinction")
                              {
                                 array_push( $degree_result[$row],5);
                              }
                              if($str[$i]=="merit")
                              {
                                 array_push($degree_result[$row],6);
                              }
                              if($str[$i]=="pass")
                              {
                                 array_push($degree_result[$row],7);
                              }
                              if($str[$i]=="na")
                              {
                                 array_push( $degree_result[$row],8);
                              }
                              
                              
                   
                    
                }
                
    //--------------------------------------------------------
    //------------degree_graduation-----------------------------

     
                $str=explode('; ',$user['degree_graduation']);
                for($i=0;$i<count($str);$i++)
                {
                   
                        if($str[$i]=='default' || $str[$i]=='other')
                        {
                        array_push($degree_graduation[$row],0);
                        }else{
                            array_push($degree_graduation[$row],$str[$i]);
                        }
                    
                    
                }
                
    //-------------------------------------------------------- 
          
    //------------degree_subject_name-----------------------------

     
                $str=explode('; ',$user['degree_subject_name']);
                for($i=0;$i<count($str);$i++)
                {
                    //if($str[$i]!='')
                    //{
                        array_push($degree_subject_name[$row],$str[$i]);
                    //}
                    
                }
    //------------qual_type-----------------------------
             $str=explode('; ',$user['qual_type']);
                for($i=0;$i<count($str);$i++)
                {
                    if($str[$i]=='default' || $str[$i]=='other'){
                        
                          array_push($qual_type[$row],10);
                    }else{
                              
                              if($str[$i]=="a_level")
                              {
                                 array_push($qual_type[$row],1);
                              }
                              if($str[$i]=="highers")
                              {
                                 array_push($qual_type[$row],7);
                              }
                              if($str[$i]=="ib")
                              {
                                 array_push($qual_type[$row],3);
                              }
                              if($str[$i]=="pre_u")
                              {
                                 array_push($qual_type[$row],9);
                              }
                              
                              
                    }
                    
                }

//------------school_subjects-----------------------------
             $str=explode('; ',$user['qual_subject_type']);
                for($i=0;$i<count($str);$i++)
                {
                    if($str[$i]=='default' || $str[$i]=='other'){
                        
                          array_push($school_subjects[$row],0);
                    }else{
                        if($str[$i]=="humanities")
                              {
                                 array_push($school_subjects[$row],27);
                              }
                              if($str[$i]=="language")
                              {
                                 array_push($school_subjects[$row],28);
                              }
                              if($str[$i]=="maths")
                              {
                                 array_push($school_subjects[$row],29);
                              }
                              if($str[$i]=="science")
                              {
                                 array_push($school_subjects[$row],30);
                              }
                              if($str[$i]=="social_science")
                              {
                                 array_push($school_subjects[$row],31);
                              }
                              
                    }
                    
                }

//------------qual_subject_name-----------------------------
             $str=explode('; ',$user['qual_subject_name']);
                for($i=0;$i<count($str);$i++)
                {
                    
                        array_push($school_qualifications_subject[$row],$str[$i]);
                    
                    
                }
//------------qual_result-----------------------------
             $str=explode('; ',$user['qual_result']);
                for($i=0;$i<count($str);$i++)
                {
                    //if($str[$i]!='' && $str[$i]!='default' && $str[$i]!='other')
                    //{
                    if(is_numeric($str[$i]))
                    {
                        $str[$i]='A';
                    }
                        array_push($school_qualification_results_name[$row],$str[$i]);
                    //}
                    
                }
//------------english_level-----------------------------
                if($user['english_level']=="default" || $user=='other')
                  {
                     array_push($language_levels[$row],1);
                  }
                  if($user['english_level']=="native")
                  {
                     array_push($language_levels[$row],1);
                  }
                  if($user['english_level']=="fluent")
                  {
                     array_push($language_levels[$row],2);
                  }
                  if($user['english_level']=="intermediate")
                  {
                     array_push($language_levels[$row],3);
                  }
                  if($user['english_level']=="basic")
                  {
                     array_push($language_levels[$row],4);
                  }

//------------languages-----------------------------
                $str=explode('; ',$user['languages']);
                for($i=0;$i<count($str);$i++)
                {
                    if($str[$i]!='language' ){
                        foreach($language_array as $aa){
                       
                        if($str[$i]==$aa['value_string']){
                           if($str[$i] != '')
                            {
                            //$array_uni['university_id']=$aa['id'];
                            array_push($languages[$row],$aa['id']);
                            }
                        }
                    }
                    }
                    
                }
//------------language_level_other-----------------------------
                if($user['languages_level']!='level')
                {
                    if($user['languages_level']=="default" || $user=='other')
                      {
                         array_push($language_level_other[$row],1);
                      }
                      if($user['languages_level']=="native")
                      {
                         array_push($language_level_other[$row],1);
                      }
                      if($user['languages_level']=="fluent")
                      {
                         array_push($language_level_other[$row],2);
                      }
                      if($user['languages_level']=="intermediate")
                      {
                         array_push($language_level_other[$row],3);
                      }
                      if($user['languages_level']=="basic")
                      {
                         array_push($language_level_other[$row],4);
                      }               
                }      
                 
//------------work_type-----------------------------

        $str=explode('; ',$user['work_type']);
           for($i=0;$i<count($str);$i++)
           {
              if($str[$i]=='default' || $str[$i]=='other'){
                        
                         array_push($work_type[$row],10);
                    }else{
                        
                        if($str[$i]=="full_time")
                         {
                            array_push($work_type[$row],1);
                         }
                         else if($str[$i]=="part_time_job")
                         {
                            array_push($work_type[$row],2);
                         }
                         else if($str[$i]=="internship")
                         {
                            array_push($work_type[$row],3);
                         }else{
                            array_push($work_type[$row],10);
                         }
                        
                         
               }
               
           }

//------------work_type-----------------------------

        $str=explode('; ',$user['work_length']);
           for($i=0;$i<count($str);$i++)
           {
                if($str[$i]=='default' || $str[$i]=='other'){
                        
                         array_push($work_durations[$row],0);
                    }else{
                        if($str[$i]=="1_week")
                         {
                            array_push($work_durations[$row],1);
                         }
                         if($str[$i]=="2_to_4_weeks")
                         {
                            array_push($work_durations[$row],2);
                         }
                         if($str[$i]=="1_to_2_months")
                         {
                            array_push($work_durations[$row],3);
                         }
                        if($str[$i]=="3_to_4_months")
                         {
                            array_push($work_durations[$row],4);
                         }
                         if($str[$i]=="over_4_months")
                         {
                            array_push($work_durations[$row],5);
                         }
                         
               }
               
           }
//------------work_sector-----------------------------

        $str=explode('; ',$user['work_sector']);
        for($i=0;$i<count($str);$i++)
                {
                    
                    if($str[$i]=='default' || $str[$i]=='other'){
                        
                         array_push($work_sector_id[$row],0);
                    }else if($str[$i]=='start_ups' || $str[$i]=='startups')
                    {
                        array_push($work_sector_id[$row],32);
                    }
                    else{
                        
                        foreach($work_sector as $aa)
                        {
                            //if($row==12)
                            //{
                            //echo $str[$i].'--'.$aa['value']."</br>";
                            //}   
                            if($str[$i]==$aa['value'])
                            {
                                
                               foreach($work_sectors as $ab)
                                {
                                  if($aa['name']==$ab['name']){
                                    
                                        array_push($work_sector_id[$row],$ab['id']);
                                        
                                    }
                                }
                            }
                            
                        }
                    }
                    
                }
//------------work_organisation-----------------------------
             $str=explode('; ',$user['work_organisation']);
                for($i=0;$i<count($str);$i++)
                {
                    if($str[$i]!='')
                    {
                        array_push($works_name_talent[$row],$str[$i]);
                    }
                    
                }
//------------society_category-----------------------------

        $str=explode('; ',$user['society_category']);
        for($i=0;$i<count($str);$i++)
                {
                    if($str[$i]=='default' || $str[$i]=='other'){
                        
                         array_push($society_category[$row],0);
                         
                    }else{
                        foreach($social_cat as $aa)
                        {
                            if($str[$i]==$aa['value_string'])
                            {
                               foreach($social_categories as $ab)
                                {
                                  if($aa['name']==$ab['name']){
                                    
                                        array_push($society_category[$row],$ab['id']);
                                        
                                    }
                                }
                            }
                            
                        }
                    }
                    
                }
//------------society_position-----------------------------

        $str=explode('; ',$user['society_position']);
        for($i=0;$i<count($str);$i++)
                {
                       if($str[$i]=='default' || $str[$i]=='other'){
                        
                          array_push($society_position[$row],0);
                         
                    }else{
                        
                         if($str[$i]=="president")
                         {
                            array_push($society_position[$row],1);
                         }
                         if($str[$i]=="vice_president")
                         {
                            array_push($society_position[$row],2);
                         }
                         if($str[$i]=="committee_member")
                         {
                            array_push($society_position[$row],3);
                         }
                        if($str[$i]=="press_officer")
                         {
                            array_push($society_position[$row],4);
                         }
                         if($str[$i]=="secretary")
                         {
                            array_push($society_position[$row],5);
                         }
                         if($str[$i]=="treasurer")
                         {
                            array_push($society_position[$row],6);
                         }
                        if($str[$i]=="events_officer")
                         {
                            array_push($society_position[$row],7);
                         }
                         if($str[$i]=="guests_officer")
                         {
                            array_push($society_position[$row],8);
                         }
                         if($str[$i]=="website_manager")
                         {
                            array_push($society_position[$row],9);
                         }
                    }
                }
//------------society_name-----------------------------
             $str=explode('; ',$user['society_name']);
                for($i=0;$i<count($str);$i++)
                {
                    
                        array_push($society_name[$row],$str[$i]);
                   
                    
                }
                
//------------sports_name-----------------------------

        $str=explode('; ',$user['sport_category']);
        for($i=0;$i<count($str);$i++)
                {
                    if($str[$i]=='default' || $str[$i]=='other')
                    {
                        array_push($sport_names_talent[$row],40);
                    }
                    else
                    {
                        foreach($sports_name as $aa)
                        {
                            if($str[$i]==$aa['value'])
                            {
                               // echo $str[$i].'</br>';
                               foreach($sport_names as $ab)
                                {
                                  if($aa['name']==$ab['name']){
                                    
                                        array_push($sport_names_talent[$row],$ab['id']);
                                        
                                    }
                                }
                            }
                            
                        }
                    }
                    
                }
//------------sport_level-----------------------------

        $str=explode('; ',$user['sport_level']);
        for($i=0;$i<count($str);$i++)
                {
                    if($str[$i]=='default' || $str[$i]=='other')
                    {
                      array_push($sport_level[$row],6);
                    }
                    else
                    {
                        if($str[$i]=="university")
                         {
                            array_push($sport_level[$row],1);
                         }
                         else if($str[$i]=="college")
                         {
                            array_push($sport_level[$row],2);
                         }
                         else if($str[$i]=="school")
                         {
                            array_push($sport_level[$row],3);
                         }else{
                            array_push($sport_level[$row],5);
                         }
                    }
                }

 //------------sport_level--------------------------------

        $str=explode('; ',$user['sport_position']);
        for($i=0;$i<count($str);$i++)
                {
                    if($str[$i]=='default' || $str[$i]=='other' || $str[$i]=='')
                    {
                       array_push($sport_position[$row],6);
                    }
                    else
                    {
                        if($str[$i]=="first_captain")
                         {
                            array_push($sport_position[$row],1);
                         }
                         else if($str[$i]=="captain")
                         {
                            array_push($sport_position[$row],2);
                         }
                         else if($str[$i]=="first_vice_captain")
                         {
                            array_push($sport_position[$row],3);
                         }
                         else if($str[$i]=="first_member")
                         {
                            array_push($sport_position[$row],4);
                         }
                         else if($str[$i]=="member")
                         {
                            array_push($sport_position[$row],5);
                         }else{
                            array_push($sport_position[$row],6);
                         }
                    }
                }
                
 //------------charity_selection--------------------------------

        $str=explode('; ',$user['charity_selection']);
        for($i=0;$i<count($str);$i++)
                {
                    if($str[$i]=='default' || $str[$i]=='other')
                    {
                       array_push($charity_selection[$row],0);
                    }
                    else
                    {
                        if($str[$i]=="charity_1")
                         {
                            array_push($charity_selection[$row],1);
                         }
                         if($str[$i]=="charity_2")
                         {
                            array_push($charity_selection[$row],2);
                         }
                         if($str[$i]=="charity_3")
                         {
                            array_push($charity_selection[$row],3);
                         }
                         if($str[$i]=="charity_4")
                         {
                            array_push($charity_selection[$row],4);
                         }
                         if($str[$i]=="charity_5")
                         {
                            array_push($charity_selection[$row],5);
                         }
                         if($str[$i]=="charity_6")
                         {
                            array_push($charity_selection[$row],5);
                         }
                        }
                }

 //------------gender--------------------------------

        $str=explode('; ',$user['gender']);
        for($i=0;$i<count($str);$i++)
                {
                      
                         
                         if($str[$i]=="male")
                         {
                            array_push($gender[$row],1);
                         }
                         if($str[$i]=="female")
                         {
                            array_push($gender[$row],2);
                         }
                         if($str[$i]=="not_stated")
                         {
                            array_push($gender[$row],3);
                         }
                          if($str[$i]=='default'){
                             array_push($gender[$row],3);
                        }
                }

 //------------gender--------------------------------

        $str=explode('; ',$user['ethnicity']);
        for($i=0;$i<count($str);$i++)
                {
                        if($str[$i]=='default' || $str[$i]=='other')
                        {
                               array_push($ethnicity[$row],0);
                        }
                        if($str[$i]=="not_stated")
                         {
                            array_push($ethnicity[$row],0);
                         }
                        if($str[$i]=="white")
                         {
                            array_push($ethnicity[$row],1);
                         }
                         if($str[$i]=="white_caribbean")
                         {
                            array_push($ethnicity[$row],2);
                         }
                          if($str[$i]=='white_african'){
                             array_push($ethnicity[$row],3);
                        }
                        if($str[$i]=="white_asian")
                         {
                            array_push($ethnicity[$row],4);
                         }
                         if($str[$i]=="indian")
                         {
                            array_push($ethnicity[$row],5);
                         }
                         if($str[$i]=="pakistani")
                         {
                            array_push($ethnicity[$row],6);
                         }
                          if($str[$i]=='bangladeshi'){
                             array_push($ethnicity[$row],7);
                        }
                        if($str[$i]=="chinese")
                         {
                            array_push($ethnicity[$row],8);
                         }
                          if($str[$i]=='other_asian'){
                             array_push($ethnicity[$row],9);
                        }
                        if($str[$i]=="african")
                         {
                            array_push($ethnicity[$row],10);
                         }
                          if($str[$i]=='caribbean'){
                             array_push($ethnicity[$row],11);
                        }
                    
                }
//---------------------- $user->dob ---------------------------
    $dob_date=sprintf("%02s",$user['year_dob'] ).'-'.sprintf("%02s",$user['month_dob'] ).'-'.sprintf("%02s",$user['date_dob'] );
    array_push($dob[$row],$dob_date);

//---------------------- emails_per_week ---------------------------
                    if( $user['emails_per_week']=="unlimited")
                         {
                            array_push($user_contact_freq[$row],0);
                         }
                          if( $user['emails_per_week']=='weekly'){
                             array_push($user_contact_freq[$row],1);
                        }
                        if( $user['emails_per_week']=="monthly")
                         {
                            array_push($user_contact_freq[$row],2);
                         }
                         
//---------------------- terms_and_conditions_agree ---------------------------
                if( $user['terms_and_conditions_agree']=="accepted")
                {
                   array_push($terms_and_conditions_agree[$row],0);
                }
               

$row++;
          //echo "</br>".$row;
}
//echo $row;
//echo"<pre>";
//echo $counter;
//print_r($degree_type);
//print_r($sector_interest);
//echo var_export($language_levels);
//echo var_export($first_name);
//echo var_export($last_name);
//echo var_export($email);
//echo var_export($password);
//
//echo var_export($sector_interest);
//echo var_export($sector_agnostic);
//echo var_export($degree_type);
//echo var_export($degree_uni);
//echo var_export($degree_subject_type);
//
//echo var_export($degree_result);
//echo var_export($degrees_degree_year);
//echo var_export($degree_subject_name);
//echo var_export($qual_type);
//echo var_export($school_subjects);
//
//echo var_export($school_qualifications_subject);
//echo var_export($school_qualification_results_name);
//echo var_export($language_levels);
//echo var_export($languages);
//echo var_export($language_level_other);
//
//echo var_export($work_type);
//echo var_export($work_durations);
//echo var_export($work_sector_id);
//echo var_export($works_name_talent);
//echo var_export($society_category);
//
//echo var_export($society_position);
//echo var_export($society_name);
//echo var_export($sport_names_talent);
//echo var_export($sport_level);
//echo var_export($sport_position);
//
//echo var_export($charity_selection);
//echo var_export($gender);
//echo var_export($ethnicity);
//echo var_export($dob);
//echo var_export($terms_and_conditions_agree);
//echo var_export($user_contact_freq);


    

//if (($handle = fopen("subscribers.csv", "r")) !== FALSE) {
//    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//        $num = count($data);
//        echo "<p> $num fields in line $row: <br /></p>\n";
//        $row++;
//        for ($c=0; $c < $num; $c++) {
//            if($c==1){
//                $user['fname']=$data[$c];
//            }
//            if($c==2){
//                $user['lname']=$data[$c];
//            }
//            if($c==3){
//                $user['email']=$data[$c];
//            }
//            if($c==4){
//                $user['password']=$data[$c];
//            }
//            if($c==5){
//                $user['password']=$data[$c];
//            }
//            $degree_type[$c]=array();
//            if($c==6)//degree_type
//            {
//                $degree_types=explode(';',$data[$c]);
//                for($i=0;$i<=count($degree_types);$i++){
//                 if($degree_types[$i]=='undergraduate' ){
//                    array_push($degree_type[$c],'1');
//                 }
//                 if($degree_types[$i]==' postgraduate' ){
//                    array_push($degree_type[$c],'2');
//                 }
//                 if($degree_types[$i]==' diploma' ){
//                    array_push($degree_type[$c],'3');
//                 }
//                }
//            }
//            
//            //print_r($degree_type[$c]);
//            $degree_uni[$c]=array();
//           
//            if($c==7){
//                $str=explode('; ',$data[7]);
//                echo $str[0];
//                echo $str[1];
//                //for($i=0;$i<=count($str);$i++)
//                //{
//                //    
//                //    foreach($universities as $aa){
//                //       
//                //        if($str[$i]==$aa['value_string']){
//                //            $array_uni['university_id']=$aa['id'];
//                //            array_push($degree_uni[$c],$aa['id']);
//                //        }
//                //    }
//                //}
//                //$user['degree_uni']=$data[$c];
//            }
//            //echo $data[$c] . "<br />\n";
//            print_r($str);
//            print_r($degree_uni[$c]);
//            
//        }
//    }
//    fclose($handle);
//}

/*
 *1# user table : first_name,
 *                 last_name
 *                 email
 *                 password
 *                 agnostic
 *                 availability
 *                 desired_payment
 *                 english_level
 *                 ethnicity_id
 *                 dob
 *                 gender
 *                 contact_frequency



*/
?>