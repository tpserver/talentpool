<?php

class GenerateCsv extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = [   'sports'            => SportName::all(), 
                    'sportLevels'       => SportLevel::all(), 
                    'sportPositions'    => SportPosition::all(),
                    'languages'         => LanguageName::orderBy('name', 'ASC')->where('approved', '=', 1)->get(),
                    'languageLevels'    => LanguageLevel::all(),
                    'degreeTypes'       => DegreeType::where('approved', '=', 1)->get(),
                    'degreeSubjects'    => DegreeSubject::where('approved', '=', 1)->get(),
                    'degreeResults'     => DegreeResult::where('approved', '=', 1)->get(),
                    'workTypes'         => WorkType::where('approved', '=', 1)->get(),
                    'workDuration'      => WorkDuration::all(),
                    'workSectors'       => WorkSector::with('category')->get(),
                    'skills'            => Skill::with('SkillGroup')->get(),
                    'locations'         => Location::all(),
                    'ethnicities'       => Ethnicity::with('group')->get(),
                    'universities'      => University::with('country')->where('approved', '=', 1)->get(),
                    'schoolQualificationTypes' => SchoolQualificationType::with('results')->where('approved', '=', 1)->get(),
                    'socialPositions'   => SocialPosition::where('approved', '=', 1)->get(),
                    'socialCategories'  => SocialCategory::where('approved', '=', 1)->get(),
                    'workOptions'       => Option::where('category_id', '=', 1)->with('group')->get(),
                    'capabilites'       => Option::where('group_id', '=', 12)->with('group')->get(),
                    'attributes'        => Option::where('group_id', '=', 10)->with('group')->with('group')->get(),
                    'experience'        => Option::where('subcategory_id', '=', 10)->with('group')->get(),
                    'schoolOptions'     => Option::where('subcategory_id', '=', 5)->with('group')->get()
                ];
        return View::make('filter_csv.index', $data );
    }
    public function filterCandidate()
    {
       // //select * from users   inner join user_desired_location on users.id=user_desired_location.user_id where user_option.option_id in(1,5,6,10) and user_desired_work_type.work_type_id in (1,2,4) and user_desired_location.location_id in (1,5,7,8,3) group by users.id
       // $data = Input::all();
       // $query_string = "select users.id as Candidateid,GROUP_CONCAT(universities.name SEPARATOR '; '),GROUP_CONCAT(options.name SEPARATOR '; '),GROUP_CONCAT(degree_subjects.name SEPARATOR '; '),GROUP_CONCAT(degrees.degree_year SEPARATOR '; '), users.first_name as Firstname, users.last_name as Lastname, users.email as Email, universities.name as University, GROUP_CONCAT(degree_types.name SEPARATOR '; ') from users ";
       //// $temp_left_join="left outer join user_degree on users.id=user_degree.user_id left outer join degrees on degrees.id=user_degree.degree_id left outer join degree_types on degree_types.id=degrees.degree_type_id left outer join universities on universities.id=degrees.university_id ";
       // $group_by_string = 'group by users.id;';
       // $where_array = array();
       //  $work_string ='left outer join user_option on users.id=user_option.user_id left outer join options on options.id=user_option.option_id ';
       // if(isset($data['work_option']))
       // {
       //     $string_work_option = implode(",",$data['work_option']);
       //    
       //     $where_work = 'user_option.option_id in ('.$string_work_option.') ';
       //     $where_array[] = $where_work;
       // }
       // else{
       //    // $work_string ='';
       //     $where_work = '';
       // }
       // if(isset($data['desired_job_type']))
       // {
       //     $string_jobtype_option = implode(",",$data['desired_job_type']);
       //     $jobtype_string ='inner join user_desired_work_type on users.id=user_desired_work_type.user_id ';
       //     $where_jobtype = 'user_desired_work_type.work_type_id in ('.$string_jobtype_option.') ';
       //     $where_array[] = $where_jobtype;
       // }
       // else{
       //     $jobtype_string ='';
       //     $where_jobtype = '';
       // }
       // if(isset($data['job_location']))
       // {
       //     $string_joblocation_option = implode(",",$data['job_location']);
       //     $joblocation_string ='inner join user_desired_location on users.id=user_desired_location.user_id ';
       //     $where_joblocation = 'user_desired_location.location_id in ('.$string_joblocation_option.') ';
       //     $where_array[] = $where_joblocation;
       // }
       // else{
       //     $joblocation_string ='';
       //     $where_joblocation = '';
       // }
       // if(isset($data['job_location']))
       // {
       //     $string_joblocation_option = implode(",",$data['job_location']);
       //     $joblocation_string ='inner join user_desired_location on users.id=user_desired_location.user_id ';
       //     $where_joblocation = 'user_desired_location.location_id in ('.$string_joblocation_option.') ';
       //     $where_array[] = $where_joblocation;
       // }
       // else{
       //     $joblocation_string ='';
       //     $where_joblocation = '';
       // }
       // //echo $data['degree_type'];die();
       // $degree_string ='left outer join user_degree on users.id=user_degree.user_id left outer join degrees on degrees.id=user_degree.degree_id left outer join degree_types on degree_types.id=degrees.degree_type_id left outer join universities on universities.id=degrees.university_id left outer join degree_subjects on degree_subjects.id=degrees.degree_subject_id left outer join degree_results on degree_results.id=degrees.degree_result_id ';
       // if(isset($data['degree_type'][0]) && $data['degree_type'][0]>0)
       // {
       //     
       //     //$string_joblocation_option = implode(",",$data['job_location']);
       //     
       //     //$where_degree = 'user_desired_location.location_id in ('.$string_joblocation_option.') ';
       //     $degree_type_string = 'degrees.degree_type_id="'.$data['degree_type'][0].'" ';
       //     
       //     if(isset($data['degree_uni'][0]) && $data['degree_uni'][0]>0)
       //     {
       //         $where_array[] = 'degrees.university_id="'.$data['degree_uni'][0].'" ';
       //     }
       //     if(isset($data['degree_subject'][0]) && $data['degree_subject'][0]>0)
       //     {
       //         $where_array[] = 'degrees.degree_subject_id="'.$data['degree_subject'][0].'" ';
       //     }
       //     if(isset($data['degree_result'][0]) && $data['degree_result'][0]>0)
       //     {
       //         $where_array[] = 'degrees.degree_result_id="'.$data['degree_result'][0].'" ';
       //     }
       //     if(isset($data['degree_graduation'][0]) && $data['degree_graduation'][0]>0)
       //     {
       //         $where_array[] = 'degrees.degree_year="'.$data['degree_graduation'][0].'" ';
       //     }
       //     $where_array[] = $degree_type_string;
       // }
       // else{
       //     //$degree_string ='';
       // }
       // if(isset($data['skills']))
       // {
       //     $string_skill_option = implode(",",$data['skills']);
       //     $skill_string ='inner join user_skill on users.id=user_skill.user_id ';
       //     $where_skill = 'user_skill.skill_id in ('.$string_skill_option.') ';
       //     $where_array[] = $where_skill;
       // }
       // else{
       //     $skill_string ='';
       //     $where_skill = '';
       // }
       // if(isset($data['english_level']) && $data['english_level']>0)
       // {
       //     $where_array[] = 'users.english_level="'.$data['english_level'].'" ';
       // }
       // if(isset($data['languages'][0]) && $data['languages'][0]>0)
       // {
       //     $language_string ='inner join user_language on users.id=user_language.user_id inner join languages on languages.id=user_language.language_id ';
       //     $language_type_string = 'languages.name_id="'.$data['languages'][0].'" ';
       //     
       //     if(isset($data['languages_level'][0]) && $data['languages_level'][0]>0)
       //     {
       //         $where_array[] = 'languages.level_id="'.$data['languages_level'][0].'" ';
       //     }
       //     
       //     $where_array[] = $language_type_string;
       // }
       // else{
       //     $language_string ='';
       // }
       // $workexp_string ='left outer join user_work on users.id=user_work.user_id left outer join works on works.id=user_work.work_id left outer join work_sectors on work_sectors.id=works.work_sector_id ';
       // if((isset($data['work_type'][0]) && $data['work_type'][0]>0)||(isset($data['work_length'][0]) && $data['work_length'][0]>0)||(isset($data['work_sector'][0]) && $data['work_sector'][0]>0))
       // {
       //     
       //     if(isset($data['work_type'][0]) && $data['work_type'][0]>0)
       //     {
       //         $where_array[] = 'works.work_type_id="'.$data['work_type'][0].'" ';
       //     }
       //     if(isset($data['work_length'][0]) && $data['work_length'][0]>0)
       //     {
       //         $where_array[] = 'works.work_duration_id="'.$data['work_length'][0].'" ';
       //     }
       //     if(isset($data['work_sector'][0]) && $data['work_sector'][0]>0)
       //     {
       //         $where_array[] = 'works.work_sector_id="'.$data['work_sector'][0].'" ';
       //     }
       // }
       // else{
       //    // $workexp_string ='';
       // }
       // $where_array[]="options.category_id=1 and users.id >203";
       // if(!empty($where_array))
       // {
       //     $explode_array = 'where '.implode(' and ',$where_array);
       // }
       // else
       // {
       //     $explode_array = '';
       // }
       // echo $query_string = $query_string.$work_string.$jobtype_string.$joblocation_string.$degree_string.$skill_string.$language_string.$workexp_string.$explode_array.$group_by_string;
       // die();
        $query_string="select users.id as Candidateid,users.created_at,GROUP_CONCAT(universities.name SEPARATOR '; '),GROUP_CONCAT(options.name SEPARATOR '; '), users.first_name as Firstname, users.last_name as Lastname, users.email as Email, universities.name as University, GROUP_CONCAT(degree_types.name SEPARATOR '; ') from users left outer join user_option on users.id=user_option.user_id left outer join options on options.id=user_option.option_id left outer join user_degree on users.id=user_degree.user_id left outer join degrees on degrees.id=user_degree.degree_id left outer join degree_types on degree_types.id=degrees.degree_type_id left outer join universities on universities.id=degrees.university_id left outer join degree_subjects on degree_subjects.id=degrees.degree_subject_id left outer join degree_results on degree_results.id=degrees.degree_result_id left outer join user_work on users.id=user_work.user_id left outer join works on works.id=user_work.work_id left outer join work_sectors on work_sectors.id=works.work_sector_id where users.id > '202' group by users.id";
        $results = DB::select( DB::raw($query_string) );
        $this->getCSVLink($results);
        //$user_lists['result'] = $results;
        //$user_lists['user_data'] = $data;
        
      //  return View::make('filter_csv.filteruserlisting', $user_lists );
    }
    public function getCSVLink($results)
    {
        // setting the fields that I want to select
        //$data = Input::all();
        //$query_string = 'select users.id as Candidateid, users.first_name as Firstname, users.last_name as Lastname, users.email as Email, universities.name as University, degree_types.name as Degree from users ';
        //$group_by_string = 'group by users.id;';
        //$where_array = array();
        //if(isset($data['work_option']))
        //{
        //    $string_work_option = implode(",",$data['work_option']);
        //    $work_string ='inner join user_option on users.id=user_option.user_id ';
        //    $where_work = 'user_option.option_id in ('.$string_work_option.') ';
        //    $where_array[] = $where_work;
        //}
        //else{
        //    $work_string ='';
        //    $where_work = '';
        //}
        //if(isset($data['desired_job_type']))
        //{
        //    $string_jobtype_option = implode(",",$data['desired_job_type']);
        //    $jobtype_string ='inner join user_desired_work_type on users.id=user_desired_work_type.user_id ';
        //    $where_jobtype = 'user_desired_work_type.work_type_id in ('.$string_jobtype_option.') ';
        //    $where_array[] = $where_jobtype;
        //}
        //else{
        //    $jobtype_string ='';
        //    $where_jobtype = '';
        //}
        //if(isset($data['job_location']))
        //{
        //    $string_joblocation_option = implode(",",$data['job_location']);
        //    $joblocation_string ='inner join user_desired_location on users.id=user_desired_location.user_id ';
        //    $where_joblocation = 'user_desired_location.location_id in ('.$string_joblocation_option.') ';
        //    $where_array[] = $where_joblocation;
        //}
        //else{
        //    $joblocation_string ='';
        //    $where_joblocation = '';
        //}
        //if(isset($data['job_location']))
        //{
        //    $string_joblocation_option = implode(",",$data['job_location']);
        //    $joblocation_string ='inner join user_desired_location on users.id=user_desired_location.user_id ';
        //    $where_joblocation = 'user_desired_location.location_id in ('.$string_joblocation_option.') ';
        //    $where_array[] = $where_joblocation;
        //}
        //else{
        //    $joblocation_string ='';
        //    $where_joblocation = '';
        //}
        ////echo $data['degree_type'];die();
        //$degree_string ='left outer join user_degree on users.id=user_degree.user_id left outer join degrees on degrees.id=user_degree.degree_id left outer join degree_types on degree_types.id=degrees.degree_type_id left outer join universities on universities.id=degrees.university_id ';
        //if(isset($data['degree_type'][0]) && $data['degree_type'][0]>0)
        //{
        //    
        //    $degree_type_string = 'degrees.degree_type_id="'.$data['degree_type'][0].'" ';
        //    
        //    if(isset($data['degree_uni'][0]) && $data['degree_uni'][0]>0)
        //    {
        //        $where_array[] = 'degrees.university_id="'.$data['degree_uni'][0].'" ';
        //    }
        //    if(isset($data['degree_subject'][0]) && $data['degree_subject'][0]>0)
        //    {
        //        $where_array[] = 'degrees.degree_subject_id="'.$data['degree_subject'][0].'" ';
        //    }
        //    if(isset($data['degree_result'][0]) && $data['degree_result'][0]>0)
        //    {
        //        $where_array[] = 'degrees.degree_result_id="'.$data['degree_result'][0].'" ';
        //    }
        //    if(isset($data['degree_graduation'][0]) && $data['degree_graduation'][0]>0)
        //    {
        //        $where_array[] = 'degrees.degree_year="'.$data['degree_graduation'][0].'" ';
        //    }
        //    $where_array[] = $degree_type_string;
        //}
        //else{
        //    //$degree_string ='';
        //}
        //if(isset($data['skills']))
        //{
        //    $string_skill_option = implode(",",$data['skills']);
        //    $skill_string ='inner join user_skill on users.id=user_skill.user_id ';
        //    $where_skill = 'user_skill.skill_id in ('.$string_skill_option.') ';
        //    $where_array[] = $where_skill;
        //}
        //else{
        //    $skill_string ='';
        //    $where_skill = '';
        //}
        //if(isset($data['english_level']) && $data['english_level']>0)
        //{
        //    $where_array[] = 'users.english_level="'.$data['english_level'].'" ';
        //}
        //if(isset($data['languages'][0]) && $data['languages'][0]>0)
        //{
        //    $language_string ='inner join user_language on users.id=user_language.user_id inner join languages on languages.id=user_language.language_id ';
        //    $language_type_string = 'languages.name_id="'.$data['languages'][0].'" ';
        //    
        //    if(isset($data['languages_level'][0]) && $data['languages_level'][0]>0)
        //    {
        //        $where_array[] = 'languages.level_id="'.$data['languages_level'][0].'" ';
        //    }
        //    
        //    $where_array[] = $language_type_string;
        //}
        //else{
        //    $language_string ='';
        //}
        //if((isset($data['work_type'][0]) && $data['work_type'][0]>0)||(isset($data['work_length'][0]) && $data['work_length'][0]>0)||(isset($data['work_sector'][0]) && $data['work_sector'][0]>0))
        //{
        //    $workexp_string ='inner join user_work on users.id=user_work.user_id inner join works on works.id=user_work.work_id ';
        //    if(isset($data['work_type'][0]) && $data['work_type'][0]>0)
        //    {
        //        $where_array[] = 'works.work_type_id="'.$data['work_type'][0].'" ';
        //    }
        //    if(isset($data['work_length'][0]) && $data['work_length'][0]>0)
        //    {
        //        $where_array[] = 'works.work_duration_id="'.$data['work_length'][0].'" ';
        //    }
        //    if(isset($data['work_sector'][0]) && $data['work_sector'][0]>0)
        //    {
        //        $where_array[] = 'works.work_sector_id="'.$data['work_sector'][0].'" ';
        //    }
        //}
        //else{
        //    $workexp_string ='';
        //}
        //if(!empty($where_array))
        //{
        //    $explode_array = 'where '.implode(' and ',$where_array);
        //}
        //else
        //{
        //    $explode_array = '';
        //}
        //$query_string = $query_string.$work_string.$jobtype_string.$joblocation_string.$degree_string.$skill_string.$language_string.$workexp_string.$explode_array.$group_by_string;
        //
        ////$query_string = $query_string.$work_string.$jobtype_string.$joblocation_string.$degree_string.$skill_string.$language_string.$workexp_string.'where '.implode(' and ',$where_array).$group_by_string;
        //$results = DB::select( DB::raw($query_string) );
        //$user_lists['result'] = $results;
        //$values = $user_lists;
        $firstrow = array('Candidateid','Firstname','Lastname','Email','University','Degree');
        
       // $data = $values['result'];
        $data=$results;
        // passing the columns which I want from the result set. Useful when we have not selected required fields
        //$arrColumns = array('OrderId', 'ContactName', 'ContactTitle', 'Address', 'City', 'Country', 'Phone', 'OrderDate');
        $arrColumns = $firstrow;
          
        // define the first row which will come as the first row in the csv
        //$arrFirstRow = array('Order Id', 'Contact Name', 'Contact Title', 'Address', 'City', 'Country', 'Phone', 'Order Date');
        $arrFirstRow = $firstrow;
          
        // building the options array
        $options = array(
            'columns' => $arrColumns,
            'firstRow' => $arrFirstRow,
        );
       
        // creating the Files object from the Utility package.
        //$Files = new Files;
         
        return $this->convertToCSV($data, $options);
    }
    public function convertToCSV($data, $options)
    {
         
        // setting the csv header
        if (is_array($options) && isset($options['headers']) && is_array($options['headers'])) {
            $headers = $options['headers'];
        } else {
            $headers = array(
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="ExportFileName.csv"'
            );
        }
         
        $output = '';
         
        // setting the first row of the csv if provided in options array
        if (isset($options['firstRow']) && is_array($options['firstRow'])) {
            $output .= implode(',', $options['firstRow']);
            $output .= "\n"; // new line after the first line
        }
         
        // setting the columns for the csv. if columns provided, then fetching the or else object keys
        if (isset($options['columns']) && is_array($options['columns'])) {
            $columns = $options['columns'];
        } else {
            $objectKeys = get_object_vars($data[0]);
            $columns = array_keys($objectKeys);
        }
         
        // populating the main output string
        //print_r($data);
        foreach ($data as $row) {
            //echo "<pre>";
            //print_r($row);
            foreach ($columns as $column) {
                //print_r($column);
                
                $output .= str_replace(',', ';', $row->$column);
                $output .= ',';
            }
            $output .= "\n";
        }
        // calling the Response class make function inside my class to send the response.
        // if our class is not a controller, this is required.
        return Response::make($output, 200, $headers);
    }
}
