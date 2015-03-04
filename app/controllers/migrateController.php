<?php

class migrateController extends \BaseController {

public function __construct()
    {
      $first_name;
  include("app/includes/db_csv_pharser.php");
// print_r($first_name);
 //echo $row;
 for($i=1;$i<$row;$i++){
            
            $void_array=array();
        $data = array('first_name'=>$first_name[$i]['first_name'],
                      'last_name'=>$last_name[$i]['last_name'],
                      'email'=> $email[$i]['email'],
                      'password'=>$password[$i]['password']
                      );
       //print_r($data);die();
        $validator = Validator::make($data,User::$validationRules);
        //if( $validator->fails() )
        //{
        //    return Redirect::back()->withErrors($validator)->withInput();
        //}
        $workOptions = Option::where('category_id', '=', 1)->get();
        $user = new User;
        $user->first_name        = $first_name[$i]['first_name'];
        $user->last_name         = $last_name[$i]['last_name'];
        $user->email             = $email[$i]['email'];
        $user->password          = $password[$i]['password'];
        $user->group_id          = 1;
        $user->agnostic          = 0;
        $user->desired_payment   = 4;
        $user->english_level     = $language_levels[$i][0];
        $user->ethnicity_id      = $ethnicity[$i][0];
        $user->dob               = $dob[$i][0];
        $user->gender            =$gender[$i][0];
        $user->contact_frequency = $user_contact_freq[$i][0];
          //print_r($user);die();
        if( isset($data['availability']) )
        {
            $user->availability      = $data['availability'];
            $availabilityDate  = date('Y-m-d');
            if($data['availability'] == 'other')
            {
                $availabilityDate = $data['availability_year'].'-'.sprintf("%02s", $data['availability_month']).'-01';
                $user->availability_date   = $availabilityDate;
            }
        }
        else
        {
            $user->availability  = 0;
        }
        if( isset($data['payment']) )
        {
            $user->desired_payment = array_sum($data['payment']);
        }
        //$qual_type[$i],$school_subjects[$i], $school_qualifications_subject[$i],  $school_qualification_results_name[$i]
        //print_r($qual_type[$i]);
        for($j=0;$j<count($qual_type[$i]);$j++)
        {
         if($qual_type[$i][$j]==0 || $qual_type[$i][$j]=='0')
         {
            unset( $qual_type[$i][$j]);
            unset( $school_subjects[$i][$j]);
            unset( $school_qualifications_subject[$i][$j]);
            unset( $school_qualification_results_name[$i][$j]);
            
         }
        }
        for($j=0;$j<count($degree_type[$i]);$j++)
        {
         if($degree_type[$i][$j]==0)
         {
            unset( $degree_type[$i][$j]);
            unset( $degree_uni[$i][$j]);
            unset( $degree_result[$i][$j]);
            unset( $degree_subject_name[$i][$j]);
            unset( $degree_graduation[$i][$j]);
             unset( $degree_subject_type[$i][$j]);
            
         }
        }
        for($j=0;$j<count($sport_names_talent[$i]);$j++)
        {
         if($sport_names_talent[$i][$j]==0)
         {
            unset( $sport_names_talent[$i][$j]);
            unset( $sport_level[$i][$j]);
            unset( $sport_position[$i][$j]);
           
            
         }
        }
        for($j=0;$j<count($work_type[$i]);$j++)
        {
         if($work_type[$i][$j]==0)
         {
            unset( $work_type[$i][$j]);
            unset( $work_durations[$i][$j]);
            unset( $work_sector_id[$i][$j]);
             unset( $works_name_talent[$i][$j]);
           
            
         }
        }
         echo "</br>";
        echo "<pre>";
        echo "<h4>";
        print_r( $sport_names_talent[$i]);
       
        print_r( $sport_level[$i]);
       
        print_r( $sport_position[$i]);
        //print_r( $works_name_talent[$i]);
         // print_r( $degree_result[$i]);
         //   print_r( $degree_graduation[$i]);
         echo $i;
         echo "</h4>";
     
       
       // print_r( $degree_graduation[$i]);
       // echo "</br>";
       // print_r( $degree_subject_type[$i])*/;
       // echo "</br>";
                
       // print_r( $degree_graduation[$i])*/;
       // 
        //die();
      
        $user->save();
      
        if( isset($languages[$i]) )
        {
            $user->massUpdateLanguage($languages[$i], $language_level_other[$i], $void_array);
        }
        $user->massUpdateSport($sport_names_talent[$i],$sport_level[$i],$sport_position[$i],$void_array);
        
        if( isset($degree_type[$i]) )
        {
            $user->massUpdateDegree($degree_type[$i], $degree_uni[$i], $degree_subject_type[$i],
                $degree_subject_name[$i],$degree_result[$i],$degree_graduation[$i],
               $void_array);
        }
        if( isset($society_category[$i]) )
        {
            $user->massUpdateSocial($society_category[$i], $society_position[$i],   $society_name[$i], $void_array);
        }
        
        if( isset($work_type[$i]) )
        {
            $user->massUpdateWork($work_type[$i], $work_durations[$i], $work_sector_id[$i],
           $works_name_talent[$i], $void_array);
        }


        //if( isset($data['desired_job_type']) )
        //{
        //    $_i = 0;
        //    
        //        $user->desiredWorkType()->attach(1);
        //     
        //}
        //if( isset($data['job_location']) )
        //{
        //    foreach($data['job_location'] as $location)
        //    {
        //        $user->desiredLocation()->attach($location);
        //    }
        //}
        //if( isset($data['skills']) )
        //{
        //    $_i = 0;
        //    foreach($data['skills'] as $skill)
        //    {
        //        if(isset($data['skill_levels'][$_i]))
        //            $level = $data['skill_levels'][$_i];
        //        else
        //            $level = 0;
        //        $user->skill()->attach($skill, ['level' => $level]);
        //        $_i++;
        //    }
        //}
        if(isset($sector_interest[$i]))
        {
            foreach($sector_interest[$i] as $work_option)
            {
                $user->option()->attach($work_option);
            }
        }
        //if( isset($data['attributes']) )
        //{
        //    foreach($data['attributes'] as $attribute)
        //    {
        //        $user->option()->attach($attribute);
        //    }
        //}
        //if( isset($data['experience']) )
        //{
        //    foreach($data['experience'] as $experience)
        //    {
        //        $user->option()->attach($experience);
        //    }
        //}
        //if( isset($data['capabilities']) )
        //{
        //    foreach($data['capabilities'] as $attribute)
        //    {
        //        $user->option()->attach($attribute);
        //    }
        //}
        $options = array();
        foreach ($workOptions as $workOption)
        {
            if( isset($data[str_replace( ' ', '-', strtolower($workOption->group->name) )]) )
            {
                $paramName = str_replace( ' ', '-', strtolower($workOption->group->name) );
                foreach ($data[$paramName] as $param)
                {
                    $options[] = Option::find($param);
                }
            }
        }

        $user->massUpdateSchoolQualification($qual_type[$i],$school_subjects[$i], $school_qualifications_subject[$i],  $school_qualification_results_name[$i],$void_array);
        
        if( !empty($options) )
            $user->option()->saveMany(array_unique($options));
            echo "success";
 }
    }
public function data_migrate()
{
    $row=1;
    //print_r($first_name);
}
public function submit($row)
    {
        
        $void_array=array();
        $data = $all_data;
        
        $workOptions = Option::where('category_id', '=', 1)->get();
        $user = new User;
        $user->first_name        = $first_name[$row]['first_name'];
        $user->last_name         = $$last_name[$row]['last_name'];
        $user->email             = $email[$row]['email'];
        $user->password          =  $password[$row]['password'];
        $user->group_id          = 1;
        $user->agnostic          = 0;
        $user->desired_payment   = 4;
        $user->english_level     = $language_levels[$row][0];
        $user->ethnicity_id      = $data['ethnicity'];
        $user->dob               = $data['year_dob'] . '-' . $data['month_dob'] . '-' . $data['date_dob'];
        $user->gender            = $data['gender'];
        $user->contact_frequency = $data['emails_per_week'];
        
        if( isset($data['availability']) )
        {
            $user->availability      = $data['availability'];
            $availabilityDate  = date('Y-m-d');
            if($data['availability'] == 'other')
            {
                $availabilityDate = $data['availability_year'].'-'.sprintf("%02s", $data['availability_month']).'-01';
                $user->availability_date   = $availabilityDate;
            }
        }
        else
        {
            $user->availability  = 0;
        }
        //if( isset($data['payment']) )
        //{
        //    $user->desired_payment = array_sum($data['payment']);
        //}
        $user->save();
        //die();
        if( isset($languages[$row]) )
        {
            $user->massUpdateLanguage($languages[$row], $language_level_other[$row], $void_array);
        }
        $user->massUpdateSport($sport_names_talent[$row],$sport_level[$row],$sport_position[$row],$void_array);
        
        if( isset($degree_type[$row]) )
        {
            $user->massUpdateDegree($degree_type[$row], $degree_uni[$row], $degree_result[$row],
                $degree_subject_name[$row],$degree_result[$row],$degrees_degree_year[$row],
               $void_array);
        }
        if( isset($society_category[$row]) )
        {
            $user->massUpdateSocial($society_category[$row], $society_position[$row],   $society_name[$row], $void_array);
        }
        
        if( isset($work_type[$row]) )
        {
            $user->massUpdateWork($work_type[$row], $work_durations[$row], $work_sector_id[$row],
           $works_name_talent[$row], $void_array);
        }


        //if( isset($data['desired_job_type']) )
        //{
        //    $_i = 0;
        //    
        //        $user->desiredWorkType()->attach(1);
        //     
        //}
        //if( isset($data['job_location']) )
        //{
        //    foreach($data['job_location'] as $location)
        //    {
        //        $user->desiredLocation()->attach($location);
        //    }
        //}
        //if( isset($data['skills']) )
        //{
        //    $_i = 0;
        //    foreach($data['skills'] as $skill)
        //    {
        //        if(isset($data['skill_levels'][$_i]))
        //            $level = $data['skill_levels'][$_i];
        //        else
        //            $level = 0;
        //        $user->skill()->attach($skill, ['level' => $level]);
        //        $_i++;
        //    }
        //}
        if(isset($sector_interest[$row]))
        {
            foreach($sector_interest[$row] as $work_option)
            {
                $user->option()->attach($work_option);
            }
        }
        //if( isset($data['attributes']) )
        //{
        //    foreach($data['attributes'] as $attribute)
        //    {
        //        $user->option()->attach($attribute);
        //    }
        //}
        //if( isset($data['experience']) )
        //{
        //    foreach($data['experience'] as $experience)
        //    {
        //        $user->option()->attach($experience);
        //    }
        //}
        //if( isset($data['capabilities']) )
        //{
        //    foreach($data['capabilities'] as $attribute)
        //    {
        //        $user->option()->attach($attribute);
        //    }
        //}
        $options = array();
        foreach ($workOptions as $workOption)
        {
            if( isset($data[str_replace( ' ', '-', strtolower($workOption->group->name) )]) )
            {
                $paramName = str_replace( ' ', '-', strtolower($workOption->group->name) );
                foreach ($data[$paramName] as $param)
                {
                    $options[] = Option::find($param);
                }
            }
        }

        $user->massUpdateSchoolQualification($qual_type[$row],$school_subjects[$row], $school_qualifications_subject[$row],  $school_qualification_results_name[$row],$void_array);

        if( !empty($options) )
            $user->option()->saveMany(array_unique($options));

        //$user = Sentry::findUserById($user->id);
        ////echo $user->activation_code;die();
        ////echo $user->getActivationCode();die();
        //Mail::send('email.activate-html', ['siteName' => 'gradslist.co.uk', 'username'=> $user->first_name, 'email' => $user->email, 'code' => $user->getActivationCode(), 'activationPeriod' => 48], function($message) use($user)
        //{
        //    $message->to($user->email)->subject('Welcome to GradList');
        //});
        //
        //return Redirect::route('signup.success')->with('email', $user->email);
    }
}