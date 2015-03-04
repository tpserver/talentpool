<?php

class SearchController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    function __construct()
    {
        $this->beforeFilter('auth');
        if( isset(Sentry::getUser()->id) )
            $this->_user = User::find(Sentry::getUser()->id);
    }
    
    public function index()
    {       
//        $data = [ 'workTypes'   => WorkType::has('user')->get(),
//            'sports'            => Sport::has('user')->get(),
//            'sportLeves'        => SportLevel::has('user')->get(),
//            'sportPositions'    => SportPosition::has('user')->get(),
//            'workOptions'       => Option::has('user')->where('category_id', '=', 1)->get(),
//            'ethnicities'       => Ethnicity::all(),
//            'academicOptions'   => Option::has('user')->where('category_id', '=', 2)->get(),
//            'skillOptions'      => Option::where('subcategory_id', '=', 9)->get(),
//            'languages'         => Language::orderBy('name', 'ASC')->get(),
//            'languageLevels'    => LanguageLevel::all(),
//            'socialPositions'   => SocialPosition::has('user')->get(),
//            'socialCategories'  => SocialCategory::has('user')->get(),
//            'degreeTypes'       => DegreeType::has('user')->get(),
//            'degreeResults'     => DegreeResult::has('user')->get(),
//            'degreeSubjects'    => DegreeSubject::has('user')->get(),
//            'universities'      => University::has('user')->get(),
//            'socialCategories'  => SocialCategory::has('user')->get(),
//            'socialPositions'   => SocialPosition::has('user')->get(),
//            'workDurations'     => WorkDuration::has('user')->get(),
//            'usersCount'        => User::where('activated', '=', 1)->count(),
//            'campaign'          => Input::get('campaign', 0),
//        ];
        $opportunity_details = '';
        //$usersCount        = User::where('activated', '=', 1)->where('group_id', '=', 1)->count();
        $usersCount        = User::where('group_id', '=', 1)->where('email_activity', 1)->count();
        if(Session::has('opportunity'))
        {
            $oppr_arr = array();
            $locations_array_result ='';
            //$locations = array();
            //$opportunity_details = Opportunity::where('id', '=', Session::get('opportunity'))->get();
            $opportunity_details = Opportunity::where('id', '=', Session::get('opportunity'))->with('workType')->with('locations')->with('workSector')->get();
            
            foreach($opportunity_details as $opportunity_detail)
                $oppr_arr = $opportunity_detail;
            //echo $oppr_arr->id." - ";
            //print_r($oppr_arr['locations']);
            foreach ($oppr_arr['locations'] as $location)
            {
                $locations_array = $location;
                $locations_array_result .= $locations_array->id.",";
            }
            $locations_array_result = substr($locations_array_result, 0, -1);
            //echo $locations_array_result;die();
            if($oppr_arr->opportunity_type==1)
            {
                $work_type_di = $oppr_arr->work_type_id;
                $opportunity_date = $oppr_arr->opportunity_date;
                //$opportunity_time = explode($opportunity_date);
                $locations_array_result = explode(",",$locations_array_result);
                //$usersCount = User::where('activated', '=', 1)->where('group_id', '=', 1)->where('availability_date', '<=', $opportunity_date);
                $usersCount = User::where('group_id', '=', 1)->where('availability_date', '<=', $opportunity_date)->where('email_activity', 1);
                //print_r($locations_array_result);die();
                $l = 0;
                $usersCount = $usersCount->where(function($m) use($locations_array_result,$l){
                    foreach ($locations_array_result as $param)
                    {
                        if($l>0)
                        {
                                $m = $m->orWhereHas('location', function($q) use($param){
                                    $q->where('location_id', '=', $param );
                                });
                        }
                        else
                        {
                                $m = $m->whereHas('location', function($q) use($param){
                                    $q->where('location_id', '=', $param );
                                });
                        }
                        $l++;
                    }
                });
                
                /*$l = 0;
                foreach ($locations_array_result as $param)
                {
                    if($l > 0)
                    {
                        $usersCount = $usersCount->orWhereHas('location', function($q) use($param){
                            $q->where('location_id', '=', $param );
                        });
                    }
                    else
                    {
                        $usersCount = $usersCount->whereHas('location', function($q) use($param){
                            $q->where('location_id', '=', $param );
                        });
                    }
                    $l++;
                    
                }*/
                $usersCount = $usersCount->whereHas('workType', function($q) use($work_type_di) {
                    $q->where('work_type_id', '=', $work_type_di);
                });
                //$usersCount = $usersCount->count();
                //$sqldata = $usersCount->toSql();
                //echo $sqldata;die();
                $users = $usersCount->get();
                
                $usersCount = $users->count();
            }
            
            //echo $opportunity_date;
            //die();
        }
        $data = [ 'workTypes'   => WorkType::where('approved', '=', 1)->get(),
            'workOptions'       => Option::where('category_id', '=', 1)->get(),
            'workDurations'     => WorkDuration::all(),
            'sports'            => Sport::all(),
            'sportNames'        => SportName::where('approved', '=', 1)->get(),
            'sportLevels'       => SportLevel::where('approved', '=', 1)->get(),
            'sportPositions'    => SportPosition::all(),
            'ethnicities'       => Ethnicity::all(),
            'academicOptions'   => Option::where('category_id', '=', 2)->get(),
            'skillOptions'      => Skill::with('SkillGroup')->get(),
            'languages'         => LanguageName::where('approved', '=', 1)->orderBy('name', 'ASC')->get(),
            'languageLevels'    => LanguageLevel::all(),
            'degreeTypes'       => DegreeType::where('approved', '=', 1)->get(),
            'degreeResults'     => DegreeResult::where('approved', '=', 1)->get(),
            'degreeSubjects'    => DegreeSubject::where('approved', '=', 1)->get(),
            'schoolOptions'     => Option::where('subcategory_id', '=', 5)->with('group')->get(),
            'universities'      => University::all(),
            'socialCategories'  => SocialCategory::where('approved', '=', 1)->get(),
            'socialPositions'   => SocialPosition::where('approved', '=', 1)->get(),
            'capabilities'      => Option::where('group_id', '=', 12)->with('group')->get(),
            'attributes'        => Option::where('group_id', '=', 10)->with('group')->get(),
            'experience'        => Option::where('subcategory_id', '=', 10)->with('group')->get(),
            'usersCount'        => $usersCount,
            'campaign'          => Input::get('campaign', 0),
            'opporDetails'      => $opportunity_details,
            'specific_opportunities' => Opportunity::where('employeer_id', '=', $this->_user->id)->get(),
            'specific_talentpools' => CandidatesPool::where('user_id', '=', $this->_user->id)->get(),
        ];
        //print_r($data['specific_opportunities']);die();
//        return View::make('db_search', $data );
        return View::make('db_search_new_dynamic', $data );
    }
    
    public function pooledit($id)
    {
        $employer_id = $this->_user->id;
        
        $candidatesPools = CandidatesPool::with('users')->with('option')->with('social')->with('language')->with('workLength')->with('workType')->with('sportLevel')->with('sportName')->with('socialCategory')->with('socialPosition')->with('skill')->with('degreeTypes')->with('degreeResults')->with('degreeSubjects')->find($id);
	$users = [];
        $candidateOptions = [];
        $usercount = 0;
        $workSectors = [];
        foreach ($candidatesPools->users as $user) {
            $users[] = $user->id;
            $usercount++;
        }
        foreach($candidatesPools->option as $option)
        {
            //print_r($option);
            $candidateOptions['id'] = $option->id;
            $candidateOptions['name'] = $option->name;
            $candidateOptions['category'] = $option->category_id;
            $candidateOptions['subcategory_id'] = $option->subcategory_id;
            $candidateOptions['group_id'] = $option->group_id;
            //$candidateOptions['option_id'] = $option->option_id;
            //$candidateOptions[] = $option;
            //echo $candidateOptions;
            $candidateOptionsArray[] = $candidateOptions;
        }
        if(!isset($candidateOptionsArray))
        {
            $candidateOptionsArray = [];
        }
        foreach($candidatesPools->workLength as $worklengths)
        {
            $worklength[] = $worklengths;
        }
        if(!isset($worklength))
        {
            $worklength = [];
        }
        foreach($candidatesPools->workType as $worktype)
        {
            $worktypes[] = $worktype;
        }
        if(!isset($worktypes))
        {
            $worktypes = [];
        }
        foreach($candidatesPools->sportName as $sportName)
        {
            $sportnames[] = $sportName;
        }
        if(!isset($sportnames))
        {
            $sportnames = [];
        }
        foreach($candidatesPools->sportLevel as $sportLevel)
        {
            $sportlevels[] = $sportLevel;
        }
        if(!isset($sportlevels))
        {
            $sportlevels = [];
        }
        foreach($candidatesPools->socialPosition as $socialPosition)
        {
            $socialpositions[] = $socialPosition;
        }
        if(!isset($socialpositions))
        {
            $socialpositions = [];
        }
        foreach($candidatesPools->socialCategory as $socialCategory)
        {
            $socialcategories[] = $socialCategory;
        }
        if(!isset($socialcategories))
        {
            $socialcategories = []; 
        }
        foreach($candidatesPools->skill as $skill)
        {
            $skills[] = $skill;
        }
        if(!isset($skills))
        {
            $skills = []; 
        }
        foreach($candidatesPools->degreeTypes as $degreeTypes)
        {
            $degreetypes[] = $degreeTypes;
        }
        if(!isset($degreetypes))
        {
            $degreetypes = []; 
        }
        foreach($candidatesPools->degreeResults as $degreeResults)
        {
            $degreeresults[] = $degreeResults;
        }
        if(!isset($degreeresults))
        {
            $degreeresults = []; 
        }
        foreach($candidatesPools->degreeSubjects as $degreeSubjects)
        {
            $degreesubjects[] = $degreeSubjects;
        }
        if(!isset($degreesubjects))
        {
            $degreesubjects = []; 
        }
        //print_r($worklength);die();
        
        //print_r($candidateOptionsArray);
        //die();
        //echo $employer_id;die();
        $opportunity_details = '';
        //$usersCount        = User::where('activated', '=', 1)->where('group_id', '=', 1)->count();
        $usersCount        = User::where('group_id', '=', 1)->count();
        if(Session::has('opportunity'))
        {
            $oppr_arr = array();
            $locations_array_result ='';
            //$locations = array();
            //$opportunity_details = Opportunity::where('id', '=', Session::get('opportunity'))->get();
            $opportunity_details = Opportunity::where('id', '=', Session::get('opportunity'))->with('workType')->with('locations')->with('workSector')->get();
            
            foreach($opportunity_details as $opportunity_detail)
                $oppr_arr = $opportunity_detail;
            //echo $oppr_arr->id." - ";
            //print_r($oppr_arr['locations']);
            foreach ($oppr_arr['locations'] as $location)
            {
                $locations_array = $location;
                $locations_array_result .= $locations_array->id.",";
            }
            $locations_array_result = substr($locations_array_result, 0, -1);
            //echo $locations_array_result;die();
            if($oppr_arr->opportunity_type==1)
            {
                $opportunity_date = $oppr_arr->opportunity_date;
                //$opportunity_time = explode($opportunity_date);
                $locations_array_result = explode(",",$locations_array_result);
                //$usersCount = User::where('activated', '=', 1)->where('group_id', '=', 1)->where('availability_date', '<=', $opportunity_date);
                $usersCount = User::where('group_id', '=', 1)->where('availability_date', '<=', $opportunity_date);
                //print_r($locations_array_result);die();
                foreach ($locations_array_result as $param)
                {
                    $usersCount = $usersCount->whereHas('location', function($q) use($param){
                        $q->where('location_id', '=', $param );
                    });
                }
                //$usersCount = $usersCount->count();
                //$sqldata = $usersCount->toSql();
                //echo $sqldata;die();
                $users = $usersCount->get();
                
                $usersCount = $users->count();
            }
            
            //echo $opportunity_date;
            //die();
        }
        $data = [
            'workTypes'         => WorkType::where('approved', '=', 1)->get(),
            'workOptions'       => Option::where('category_id', '=', 1)->get(),
            'workDurations'     => WorkDuration::all(),
            'sports'            => Sport::all(),
            'sportNames'        => SportName::where('approved', '=', 1)->get(),
            'sportLevels'       => SportLevel::where('approved', '=', 1)->get(),
            'sportPositions'    => SportPosition::all(),
            'ethnicities'       => Ethnicity::all(),
            'academicOptions'   => Option::where('category_id', '=', 2)->get(),
            'skillOptions'      => Skill::with('SkillGroup')->get(),
            'languages'         => LanguageName::orderBy('name', 'ASC')->get(),
            'languageLevels'    => LanguageLevel::all(),
            'degreeTypes'       => DegreeType::where('approved', '=', 1)->get(),
            'degreeResults'     => DegreeResult::where('approved', '=', 1)->get(),
            'degreeSubjects'    => DegreeSubject::where('approved', '=', 1)->get(),
            'schoolOptions'     => Option::where('subcategory_id', '=', 5)->with('group')->get(),
            'universities'      => University::all(),
            'socialCategories'  => SocialCategory::where('approved', '=', 1)->get(),
            'socialPositions'   => SocialPosition::where('approved', '=', 1)->get(),
            'capabilities'      => Option::where('subcategory_id', '=', 10)->with('group')->get(),
            'attributes'        => Option::where('group_id', '=', 10)->with('group')->get(),
            'experience'        => Option::where('subcategory_id', '=', 10)->with('group')->get(),
            'specific_opportunities' => Opportunity::where('employeer_id', '=', $this->_user->id)->get(),
            'specific_talentpools' => CandidatesPool::where('user_id', '=', $this->_user->id)->get(),
            'usersCount'        => $usercount,
            'campaign'          => Input::get('campaign', 0),
            'opporDetails'      => $opportunity_details,
            'candidateOptions'  => $candidateOptionsArray,
            'candidateworkTypes' => $worktypes,
            'candidateworkLengths' => $worklength,
            'candidateSportLevels' => $sportlevels,
            'candidateSportNames' => $sportnames,
            'candidateSocialpositions' => $socialpositions,
            'candidateSocialCategories' => $socialcategories,
            'candiateSkills' => $skills,  
            'candidatedegreeTypes' => $degreetypes,
            'candidatedegreeResults' => $degreeresults,
            'candidatedegreeSubjects' => $degreesubjects,
        ];
	$data['candidatesPools'] = $candidatesPools;
        
        return View::make('db_search_new_dynamic_edit', $data );
    }
    
    public function getCount()
    {
        //$u = User::where('activated', '=', 1)->where('group_id', '=', 1);
        $searchCriteria         = Input::get('search_criteria');
        $languages              = Input::get('language', []);
        $languageLevels         = Input::get('language-level-other', []);
        $gender                 = Input::get('gender', []);
        $ethnicity              = Input::get('ethnicity', []);
        $dob                    = Input::get('dob', []);
        $j=0;
        $eng_lang_level = 0;
        $english_lang = 0;
        //print_r($languages);
        
        $u = User::where('group_id', '=', 1)->where('email_activity', 1);
        
        foreach($languages as $language)
        {
			//echo $languageLevels[$j];
            if($language==32)
            {
                $english_lang = 32;
                $lang_level = Input::get("language-level-32", [0]);
                $lang_levels = (int)$lang_level[0];
                //echo $lang_levels;
                if( $lang_levels > 0 )
                {
                    $u = $u->where('english_level', '<=', $lang_levels);
                }
				/*if(isset($languageLevels[$j]))
				{
					$eng_lang_level = $languageLevels[$j];
				}*/
			}
            $j++;
        }
        //print_r($gender);
        if(!empty($gender))
        {
            $u = $u->where('gender', '=', $gender[0]);
        }
        /*$u = $u->where(function($m) use($gender,$searchCriteria){
            $a = 0;
            foreach ($gender as $param)
            {
                if($a>0 && $searchCriteria == 2)
                {
                    $m = $m->orWhere('gender', '=', $param);
                }
                else
                {
                    $m = $m->where('gender', '=', $param);
                }
                $a++;
            }
        });*/
        if(!empty($ethnicity))
        {
            $u = $u->where('ethnicity_id', '>=', $ethnicity[0]);
        }
        /*$u = $u->where(function($m) use($ethnicity,$searchCriteria){
            $a = 0;
            foreach ($ethnicity as $param)
            {
                if($a>0 && $searchCriteria == 2)
                {
                    $m = $m->orWhere('ethnicity_id', '>=', $param);
                }
                else
                {
                    $m = $m->where('ethnicity_id', '>=', $param);
                }
                $a++;
            }
        });*/
        $u = $u->where(function($m) use($dob,$searchCriteria){
            $a = 0;
            foreach ($dob as $param)
            {
                if($a>0 && $searchCriteria == 2)
                {
                    $param_st = $param.'-01-01';
                    $param_end = $param.'-12-31';
                    $m = $m->orWhereBetween('dob', array($param_st, $param_end));
                }
                else
                {
                    $param_st = $param.'-01-01';
                    $param_end = $param.'-12-31';
                    $m = $m->whereBetween('dob', array($param_st, $param_end));
                }
                $a++;
            }
        });
        
        $i = 0;
        
        if(Session::has('opportunity'))
        {
            $oppr_arr = array();
            $locations_array_result ='';
            
            $opportunity_details = Opportunity::where('id', '=', Session::get('opportunity'))->with('workType')->with('locations')->with('workSector')->get();
            foreach($opportunity_details as $opportunity_detail)
                $oppr_arr = $opportunity_detail;
            
            foreach ($oppr_arr['locations'] as $location)
            {
                $locations_array = $location;
                $locations_array_result .= $locations_array->id.",";
            }
            $locations_array_result = substr($locations_array_result, 0, -1);
            
            if($oppr_arr->opportunity_type==1)
            {
                $work_type_di = $oppr_arr->work_type_id;
                $opportunity_date = $oppr_arr->opportunity_date;
                $locations_array_result = explode(",",$locations_array_result);
                //$u = User::where('activated', '=', 1)->where('group_id', '=', 1)->where('availability_date', '<=', $opportunity_date);
                $u = User::where('group_id', '=', 1)->where('availability_date', '<=', $opportunity_date)->where('email_activity', 1);
                if(!empty($gender))
                {
                    $u = $u->where('gender', '=', $gender[0]);
                }
                if(!empty($ethnicity))
                {
                    $u = $u->where('ethnicity_id', '>=', $ethnicity[0]);
                }
                $l = 0;
                $u = $u->where(function($m) use($locations_array_result,$l){
                    foreach ($locations_array_result as $param)
                    {
                        if($l>0)
                        {
                                $m = $m->orWhereHas('location', function($q) use($param){
                                    $q->where('location_id', '=', $param );
                                });
                        }
                        else
                        {
                                $m = $m->whereHas('location', function($q) use($param){
                                    $q->where('location_id', '=', $param );
                                });
                        }
                        $l++;
                    }
                });
                /*foreach ($locations_array_result as $param)
                {
                    if($l > 0)
                    {
                        $u = $u->orWhereHas('location', function($q) use($param){
                            $q->where('location_id', '=', $param );
                        });
                    }
                    else
                    {
                        $u = $u->whereHas('location', function($q) use($param){
                            $q->where('location_id', '=', $param );
                        });
                    }
                    $l++;
                }*/
                $u = $u->whereHas('workType', function($q) use($work_type_di) {
                    $q->where('work_type_id', '=', $work_type_di);
                
                });
                
            }
        }
        $workExpSector          = Input::get('work_expsector', []);
        $searchingFor           = Input::get('jobtype', []);
        $specific_University    = Input::get('university-specific', []);
        $workOptions            = Input::get('work_option', []);
        $capabilities           = Input::get('capabilities', []);
        $experience             = Input::get('experience', []);
        $workTypes              = Input::get('work_type_option', []);
        $socialCategory         = Input::get('society_category', []);
        $socialPosition         = Input::get('society_position', []);
        $attributes             = Input::get('attributes', []);
        $sportLevels            = Input::get('sport_level', []);
        $sportNames             = Input::get('sport_name', []);
        $skills                 = Input::get('skill', []);
        $skill_levels           = Input::get('skill-level', []);
        $degreeTypeC            = Input::get('degree_type', []);
        $degree_resultC         = Input::get('degree_result', []);
        $schoolSubject          = Input::get('school-subject', []);
		$degree_yearfrom		= Input::get('university_from', [0]);
        $degree_yearto		    = Input::get('university_to', [0]);
        $degree_yearfrom        = (int)$degree_yearfrom[0];
        $degree_yearto          = (int)$degree_yearto[0];
        $degreesubject_specific	= Input::get('university-sub-specific', []);
        $degreeUniversityGroup  = Input::get('university-group', []);
        //$universityYearFrom     = Input::get('university_from');
        //$universityYearTo       = Input::get('university_to', []);
        $universitySubject      = Input::get('university-subject', []);
        $minWorkDuration        = Input::get('min-work-length', [0]);
        $maxWorkDuration        = Input::get('max-work-length', [0]);
        $minWorkDuration        = (int)$minWorkDuration[0];
        $maxWorkDuration        = (int)$maxWorkDuration[0];
        $exclude_by_talentpool  = Input::get('exclude_by_talentpool', [0]);
        $include_exclude_selects = Input::get('include_exclude_select',[0]);
        $include_exclude_select = (int)$include_exclude_selects[0];
        $excluded_by_opportunity = Input::get('excluded_by_opportunity', [0]);
        $exclude_by_opportunity = (int)$excluded_by_opportunity[0];
        //print_r($skills); print_r($skill_levels);
        //echo $searchCriteria;
        $searchqueryMake = 'whereHas';
        $searchwhere = 'where';
        $searchwhereBetween = 'whereBetween';
        if($searchCriteria==2)
        {
            $searchqueryMake = 'whereHas';
            //$searchwhereBetween = 'orWhereBetween';
            $searchwhere = 'orWhere';
        }
        if($eng_lang_level>0 && $english_lang==32)
        {
            if($searchCriteria==2)
            {
                $u = $u->orwhere('english_level',$eng_lang_level);
            }
            else
            {
                $u = $u->where('english_level',$eng_lang_level);
            }
        }
        if( $minWorkDuration > 0 && $maxWorkDuration > 0 )
        {
            if($searchCriteria==2)
            {
                $searchqueryMake = 'orWhereHas';
            }
            $u = $u->whereHas('work', function($q) use($minWorkDuration, $maxWorkDuration){
                $q->whereBetween('work_duration_id', array($minWorkDuration, $maxWorkDuration) );
            });
        }elseif($minWorkDuration > 0 )
        {
            $u = $u->where(function($m) use($minWorkDuration,$searchCriteria){
                $a = 0;
                $searchqueryMake = 'whereHas';
                
                    $m = $m->$searchqueryMake('work', function($q) use($minWorkDuration){
                            $q->where('work_duration_id', '>=', $minWorkDuration );
                    });
            });
        }elseif($maxWorkDuration > 0)
        {
            
            $u = $u->where(function($m) use($maxWorkDuration,$searchCriteria){
                $searchqueryMake = 'whereHas';
                
                    $m = $m->$searchqueryMake('work', function($q) use($maxWorkDuration){
                            $q->where('work_duration_id', '<=', $maxWorkDuration );
                    });
            });
        }
        
        //if( $universityYearFrom > 0 && $universityYearTo > 0 )
        //{
        //    $u = $u->whereHas('degree', function($q) use($universityYearFrom, $universityYearTo){
        //        $q->whereBetween('degree_year', array($universityYearFrom, $universityYearTo) );
        //    });
        //}elseif($universityYearFrom > 0 )
        //{
        //    $u = $u->whereHas('degree', function($q) use($universityYearFrom){
        //        $q->where('degree_year', '=', $universityYearFrom );
        //    });
        //}elseif($universityYearTo > 0)
        //{
        //    $u = $u->whereHas('degree', function($q) use($universityYearTo){
        //        $q->where('degree_year', '=', $universityYearTo );
        //    });
        //}
        
        $options = array_merge($workOptions, $experience, $capabilities, $attributes);
		$a = 0;
        $u = $u->where(function($m) use($options,$a,$searchCriteria){
            $searchqueryMake = 'whereHas';
            foreach ($options as $param)
            {
                if($a>0 && $searchCriteria == 2)
                {
                        $searchqueryMake = 'orWhereHas';
                        $m = $m->$searchqueryMake('option', function($q) use($param){
                                $q->where('option_id', '=', $param );
                        });
                }
                else
                {
                        $m = $m->$searchqueryMake('option', function($q) use($param){
                                $q->where('option_id', '=', $param );
                        });
                }
                $a++;
            }
        });
        $u = $u->where(function($m) use($searchingFor,$searchCriteria){
            $a = 0;
            $searchqueryMake = 'whereHas';
            foreach ($searchingFor as $param)
            {
                if($a>0 && $searchCriteria == 2)
                {
                        $searchqueryMake = 'orWhereHas';
                        $m = $m->$searchqueryMake('desiredWorkType', function($q) use($param){
                                $q->where('work_type_id', '=', $param );
                        });
                }
                else
                {
                        $m = $m->$searchqueryMake('desiredWorkType', function($q) use($param){
                                $q->where('work_type_id', '=', $param );
                        });
                }
                $a++;
            }
        });
        
        //$searchqueryMake = 'whereHas';
        //foreach ($options as $param)
        //{
        //    if($a>0 && $searchCriteria == 2)
        //    {
        //            $searchqueryMake = 'orWhereHas';
        //            $u = $u->$searchqueryMake('option', function($q) use($param){
        //                    $q->where('option_id', '=', $param );
        //            });
        //    }
        //    else
        //    {
        //            $u = $u->$searchqueryMake('option', function($q) use($param){
        //                    $q->where('option_id', '=', $param );
        //            });
        //    }
        //    $a++;
        //}
        $u = $u->where(function($m) use($schoolSubject,$searchCriteria){
            $a = 0;
            $searchqueryMake = 'whereHas';
            foreach ($schoolSubject as $param)
            {
                if($a>0 && $searchCriteria == 2)
                {
                    $searchqueryMake = 'orWhereHas';
                    $m = $m->$searchqueryMake('schoolQualification', function($q) use($param){
                        $q->whereHas('type', function($q) use($param){
                            $q->where('id', '=', $param);
                        });
                    });
                }
                else
                {
                    $m = $m->$searchqueryMake('schoolQualification', function($q) use($param){
                        $q->whereHas('type', function($q) use($param){
                            $q->where('id', '=', $param);
                        });
                    });
                }
                $a++;
            }
        });
		//print_r($skill_levels);
        $u = $u->where(function($m) use($skills,$searchCriteria){
            $i = 0;
			$a = 0;
            $searchqueryMake = 'whereHas';
            foreach ($skills as $param)
            {
                if($a > 0 && $searchCriteria == 2)
                {
                    $searchqueryMake = 'orWhereHas';
                    $m = $m->$searchqueryMake('skill', function($q) use($param, $i){
                        $q->where('skill_id', '=', $param);
                        $skill_level = Input::get("skill-level-$param", [0]);
                        $skill_level = (int)$skill_level[0];
                        if( $skill_level > 0 )
                        {
                            $q = $q->where('level', '>=', $skill_level);
                        }
                    });
                    $i++;
                }
                else
                {
                    $m = $m->$searchqueryMake('skill', function($q) use($param, $i){
                        $q->where('skill_id', '=', $param);
                        $skill_level = Input::get("skill-level-$param", [0]);
                        $skill_level = (int)$skill_level[0];
                        if( $skill_level > 0 )
                        {
                            $q = $q->where('level', '>=', $skill_level);
                        }
                    });
                    $i++;
                }
                $a++;
            }
        });
        $u = $u->where(function($m) use($workExpSector,$searchCriteria){
            $a = 0;
            $searchqueryMake = 'whereHas';
            foreach ($workExpSector as $param)
            {
                if($a>0 && $searchCriteria == 2)
                {
                    $searchqueryMake = 'orWhereHas';
                    $m = $m->$searchqueryMake('work', function($q) use($param){
                        $q->whereHas('sector', function($q) use($param){
                                $q->where('id', '=', $param);
                        });
                    });
                }
                else
                {
                    $m = $m->$searchqueryMake('work', function($q) use($param){
                        $q->whereHas('sector', function($q) use($param){
                                $q->where('id', '=', $param);
                        });
                    });
                }
                $a++;
            }
        });
        $u = $u->where(function($m) use($workTypes,$searchCriteria){
            $a = 0;
            $searchqueryMake = 'whereHas';
            foreach ($workTypes as $param)
            {
                if($a>0 && $searchCriteria == 2)
                {
                    $searchqueryMake = 'orWhereHas';
                    $m = $m->$searchqueryMake('work', function($q) use($param){
                        $q->whereHas('type', function($q) use($param){
                                $q->where('id', '=', $param);
                        });
                    });
                }
                else
                {
                    $m = $m->$searchqueryMake('work', function($q) use($param){
                        $q->whereHas('type', function($q) use($param){
                                $q->where('id', '=', $param);
                        });
                    });
                }
                $a++;
            }
        });
        $u = $u->where(function($m) use($socialCategory,$searchCriteria){
        $a = 0;
        $searchqueryMake = 'whereHas';
            foreach ($socialCategory as $param)
            {
                if($a>0 && $searchCriteria == 2)
                {
                    $searchqueryMake = 'orWhereHas';
                    $m = $m->$searchqueryMake('social', function($q) use($param){
                            $q->whereHas('category', function($q) use($param){
                                    $q->where('id', '=', $param);
                            });
                    });
                }
                else
                {
                    $m = $m->$searchqueryMake('social', function($q) use($param){
                            $q->whereHas('category', function($q) use($param){
                                    $q->where('id', '=', $param);
                            });
                    });
                }
                $a++;
            }
        });
        $u = $u->where(function($m) use($degree_resultC,$searchCriteria){
            $a = 0;
            $searchqueryMake = 'whereHas';
            foreach ($degree_resultC as $param)
            {
                if($param >= 2 )
                {
                    $operator = '>=';
                }
                else
                {
                    $operator = '=';
                }
                if($a>0 && $searchCriteria == 2)
                {
                        $searchqueryMake = 'orWhereHas';
                        $m = $m->$searchqueryMake('degree', function($q) use($param,$operator){
                                $q->whereHas('result', function($q) use($param,$operator){
                                        $q->where('id', $operator, $param);
                                });
                        });
                }
                else
                {
                        $m = $m->$searchqueryMake('degree', function($q) use($param,$operator){
                                $q->whereHas('result', function($q) use($param,$operator){
                                        $q->where('id', $operator, $param);
                                });
                        });
                }
                $a++;
            }
        });
        $a = 0;
        $u = $u->where(function($m) use($specific_University,$a,$searchCriteria){
            $searchqueryMake = 'whereHas';
            foreach ($specific_University as $param)
            {
                if($a>0 && $searchCriteria == 2)
                {
                        $searchqueryMake = 'orWhereHas';
                        $m = $m->$searchqueryMake('degree', function($q) use($param){
                                $q->whereHas('university', function($q) use($param){
                                        $q->where('id', '=', $param);
                                });
                        });
                }
                else
                {
                        $m = $m->$searchqueryMake('degree', function($q) use($param){
                                $q->whereHas('university', function($q) use($param){
                                        $q->where('id', '=', $param);
                                });
                        });
                }
                $a++;
            }
        });
        $a = 0;
        $u = $u->where(function($m) use($degreeUniversityGroup,$a,$searchCriteria){
            $searchqueryMake = 'whereHas';
            foreach ($degreeUniversityGroup as $param)
            {
                if($a>0 && $searchCriteria == 2)
                {
                        $searchqueryMake = 'orWhereHas';
                        $m = $m->$searchqueryMake('degree', function($q) use($param){
                                $q->whereHas('university', function($q) use($param){
                                    if($param==1)
                                    {
                                        $q->where('university_group', '=', $param);
                                    }
                                    else if($param==2)
                                    {
                                        $q->where('russel_group', '=', 1);
                                    }
                                });
                        });
                }
                else
                {
                        $m = $m->$searchqueryMake('degree', function($q) use($param){
                                $q->whereHas('university', function($q) use($param){
                                        if($param==1)
                                        {
                                            $q->where('university_group', '=', $param);
                                        }
                                        else if($param==2)
                                        {
                                            $q->where('russel_group', '=', 1);
                                        }
                                });
                        });
                }
                $a++;
            }
        });
        $u = $u->where(function($m) use($degreeTypeC,$searchCriteria){
            $a = 0;
            $searchqueryMake = 'whereHas';
            foreach ($degreeTypeC as $param)
            {
                if($a>0 && $searchCriteria == 2)
                {
                        $searchqueryMake = 'orWhereHas';
                        $m = $m->$searchqueryMake('degree', function($q) use($param){
                                $q->whereHas('type', function($q) use($param){
                                        $q->where('id', '=', $param);
                                });
                        });
                }
                else
                {
                        $m = $m->$searchqueryMake('degree', function($q) use($param){
                                $q->whereHas('type', function($q) use($param){
                                        $q->where('id', '=', $param);
                                });
                        });
                }
                $a++;
            }
        });
        $u = $u->where(function($m) use($universitySubject,$searchCriteria){
		$a = 0;
        $searchqueryMake = 'whereHas';
        foreach ($universitySubject as $param)
        {
            if($a>0 && $searchCriteria == 2)
            {
                    $searchqueryMake = 'orWhereHas';
                    $m = $m->$searchqueryMake('degree', function($q) use($param){
                            $q->whereHas('subject', function($q) use($param){
                                    $q->where('id', '=', $param);
                            });
                    });
            }
            else
            {
                    $m = $m->$searchqueryMake('degree', function($q) use($param){
                            $q->whereHas('subject', function($q) use($param){
                                    $q->where('id', '=', $param);
                            });
                    });
            }
            $a++;
        }
        });
        if(!empty($degreesubject_specific))
        {
            
            $u = $u->where(function($m) use($degreesubject_specific,$searchCriteria){
			$searchqueryMake = 'whereHas';
			$a = 0;
                //Degree::where('id', '=', "%$param%")->select(['id', 'name'])->get();
                
				foreach($degreesubject_specific as $param){
                $subject_id = Degree::where('id', '=', $param)->select(['id', 'name'])->first();
                $subject_name = $subject_id->name;
				if($a>0)
				{
						$searchqueryMake = 'orWhereHas';
						$m = $m->$searchqueryMake('degree', function($q) use($subject_name){
							 	$q->where('name', 'LIKE', "%$subject_name%");
						});
				}
				else
				{
						$m = $m->$searchqueryMake('degree', function($q) use($subject_name){
								$q->where('name', 'LIKE', "%$subject_name%");
						});
				}
				$a++;
				}
			});
        }
        
        if( $degree_yearfrom > 0 && $degree_yearto > 0 )
        {
            if($searchCriteria==2)
            {
                $searchqueryMake = 'orWhereHas';
            }
            $u = $u->whereHas('degree', function($q) use($degree_yearfrom, $degree_yearto){
                    $q->whereBetween('degree_year', array($degree_yearfrom, $degree_yearto) );
            });
        }elseif($degree_yearfrom > 0 )
        {
            $u = $u->where(function($m) use($degree_yearfrom,$searchCriteria){
                $a = 0;
                $searchqueryMake = 'whereHas';
                
                    $m = $m->$searchqueryMake('degree', function($q) use($degree_yearfrom){
                            $q->where('degree_year', '>=', $degree_yearfrom );
                    });
            });
        }elseif($degree_yearto > 0)
        {
            
            $u = $u->where(function($m) use($degree_yearto,$searchCriteria){
                $searchqueryMake = 'whereHas';
                
                    $m = $m->$searchqueryMake('degree', function($q) use($degree_yearto){
                            $q->where('degree_year', '<=', $degree_yearto );
                    });
            });
        }
		/*if(!empty($degree_yearfrom))
		{
			$u = $u->where(function($m) use($degree_yearfrom,$searchCriteria){
			$searchqueryMake = 'whereHas';
			$a = 0;
				foreach($degree_yearfrom as $param){
				if($a>0)
				{
						$searchqueryMake = 'orWhereHas';
						$m = $m->$searchqueryMake('degree', function($q) use($param){
							 	$q->where('degree_year', '=', $param);
						});
				}
				else
				{
						$m = $m->$searchqueryMake('degree', function($q) use($param){
								$q->where('degree_year', '=', $param);
						});
				}
				$a++;
				}
			});
		}*/
        $u = $u->where(function($m) use($socialPosition,$searchCriteria){
		$a = 0;
        $searchqueryMake = 'whereHas';
        foreach ($socialPosition as $param)
        {
            if($a>0 && $searchCriteria == 2)
            {
                    $searchqueryMake = 'orWhereHas';
                    $m = $m->$searchqueryMake('social', function($q) use($param){
                            $q->whereHas('position', function($q) use($param){
                                    $q->where('id', '=', $param);
                            });
                    });
            }
            else
            {
                    $m = $m->$searchqueryMake('social', function($q) use($param){
                            $q->whereHas('position', function($q) use($param){
                                    $q->where('id', '=', $param);
                            });
                    });
            }
            $a++;
        }
        });
        $u = $u->where(function($m) use($sportLevels,$searchCriteria){
        $a = 0;
        $searchqueryMake = 'whereHas';
        foreach ($sportLevels as $param)
        {
            if($a>0 && $searchCriteria == 2)
            {
                    $searchqueryMake = 'orWhereHas';
                    $m = $m->$searchqueryMake('sport', function($q) use($param){
                            $q->where('sport_level_id', '=', $param );
                    });
            }
            else
            {
                    $m = $m->$searchqueryMake('sport', function($q) use($param){
                            $q->where('sport_level_id', '=', $param );
                    });
            }
            $a++;
        }
        });
        $u = $u->where(function($m) use($sportNames,$searchCriteria){
        $a = 0;
        $searchqueryMake = 'whereHas';
        foreach ($sportNames as $param)
        {
            if($a>0 && $searchCriteria == 2)
            {
                    $searchqueryMake = 'orWhereHas';
                    $m = $m->$searchqueryMake('sport', function($q) use($param){
                            $q->$searchwhere('sport_name_id', '=', $param );
                    });
            }
            else
            {
                    $m = $m->$searchqueryMake('sport', function($q) use($param){
                            $q->$searchwhere('sport_name_id', '=', $param );
                    });
            }
            $a++;
        }
        });
        $u = $u->where(function($m) use($languages, $searchCriteria, $languageLevels){
            $a = 0;
            $i = 0;
            $searchqueryMake = 'whereHas';
            foreach ($languages as $language)
            {
                if($a > 0 && $searchCriteria == 2)
                {
                    $searchqueryMake = 'orWhereHas';
                    if($language != 32) {
                        $m = $m->$searchqueryMake('language', function($q) use($language, $languageLevels, $i){
                                $q = $q->whereHas('name', function($q)  use($language, $languageLevels, $i){
                                    $q->where('name_id', '=', $language);
                                    $lang_level = Input::get("language-level-$language", [0]);
                                    $lang_levels = (int)$lang_level[0];
                                    if( $lang_levels > 0 )
                                    {
                                        $q = $q->where('level_id', '<=', $lang_levels);
                                    }
                                    $language_array = array(38,42,79,57,113,49,131);
                                    if( isset( $languageLevels[$i] ) && (!in_array($language, $language_array)) )
                                    {
                                        $q = $q->where('level_id', '<=', $languageLevels[$i]);
                                        $i++;
                                    }
                                });
                        });
                        
                    }
                }
                else
                {
                    if($language != 32) {
                        $m = $m->$searchqueryMake('language', function($q) use($language, $languageLevels, $i){
                                $q = $q->whereHas('name', function($q)  use($language, $languageLevels, $i){
                                    $q->where('name_id', '=', $language);
                                    $lang_level = Input::get("language-level-$language", [0]);
                                    $lang_levels = (int)$lang_level[0];
                                    if( $lang_levels > 0 )
                                    {
                                        $q = $q->where('level_id', '<=', $lang_levels);
                                    }
                                    $language_array = array(38,42,79,57,113,49,131);
                                    if( isset( $languageLevels[$i] ) && (!in_array($language, $language_array)) )
                                    {
                                        $q = $q->where('level_id', '<=', $languageLevels[$i]);
                                        $i++;
                                    }
                                });
                        });
                        
                    }
                }
                $a++;
            }
        });
        $sqldata = $u->toSql();
        $userList = $u->select('id')->get();
        $users = array();
        foreach ($userList as $ul)
            $users[] = $ul->id;
        $userCount = $u->count();
                
        if($exclude_by_talentpool[0] == 1)
        {
			//echo $exclude_by_talentpool[0];
            $talentPool_id = CandidatesPoolUser::groupBy('user_id')->get();
            foreach($talentPool_id as $ids)
                $talentPoolUsers[] = $ids->user_id;
            $users = array_diff($users, $talentPoolUsers);
            $userCount = count($users);
        }
        if($exclude_by_talentpool[0] == 2)
        {
			//echo $exclude_by_talentpool[0];
            $talentPool_id_values = '';
            $exclude_by_talentPool_ids = Input::get('specific-talentpool',[]);
            foreach($exclude_by_talentPool_ids as $value)
            {
                $talentPool_id = CandidatesPoolUser::select('user_id')->where('candidates_pool_id', '=', $value)->groupBy('user_id')->get();
                foreach($talentPool_id as $ids)
                    $talentPool_id_values .= $ids->user_id.",";
            }
            $talentPool_id_values = explode(",",$talentPool_id_values);
            $users = array_diff($users, $talentPool_id_values);
            $userCount = count($users);
            //print_r($talentPool_id_values);die();
        }
        if($include_exclude_select==2 && $exclude_by_opportunity==1)
        {
            $opportunity_id_values = '';
            $candidatepool_ids = Campaign::with('candidatesPool')->get();
            foreach($candidatepool_ids as $value)
                $values_candidates[] = $value->candidates_pool_id;
            $values_candidates = array_unique($values_candidates);
            foreach($values_candidates as $candidate_id)
            {
                $talentPool_id = CandidatesPoolUser::select('user_id')->where('candidates_pool_id', '=', $candidate_id)->groupBy('user_id')->get();
                foreach($talentPool_id as $ids)
                    $opportunity_id_values .= $ids->user_id.",";
            }
            $opportunity_id_values = explode(",",$opportunity_id_values);
            $users = array_diff($users, $opportunity_id_values);
            $userCount = count($users);
            //print_r($userCount);
        }
        if($include_exclude_select==2 && $exclude_by_opportunity==2)
        {
            $opportunity_id_values = '';
            $specific_opportunity_values = Input::all('specific_opportunity_value', []);
            $specific_values = $specific_opportunity_values['specific_opportunity_value'];
            
            $candidatepool_ids = Campaign::whereIn('opportunity_id', $specific_values)->with('candidatesPool')->get();
            foreach($candidatepool_ids as $value)
                $values_candidates[] = $value->candidates_pool_id;
            
            $values_candidates = array_unique($values_candidates);
            
            foreach($values_candidates as $candidate_id)
            {
                $talentPool_id = CandidatesPoolUser::select('user_id')->where('candidates_pool_id', '=', $candidate_id)->groupBy('user_id')->get();
                foreach($talentPool_id as $ids)
                    $opportunity_id_values .= $ids->user_id.",";
            }
            
            $opportunity_id_values = explode(",",$opportunity_id_values);
            $users = array_diff($users, $opportunity_id_values);
            $userCount = count($users);
        }
        $specific_email_ids = Input::get('excluded_email', []);
        $users = array_diff($users, $specific_email_ids);
        $userCount = count($users);
        
        Session::put('candidates_pool_users', $users);
        $userList = implode( ',' , $users); 
        return ['userCount' => $userCount, 'users' => $userList, 'sqldata' => $sqldata];
    }

    public function getCompanies()
    {
        return University::all();
    }

    public function getUniversities()
    {
        return $this->_getNamesForTextSearch('University');
    }
    
    public function getSpecificSubjectInput()
    {
        return $this->_getNamesForTextSearch('Degree');
    }
    
    function getUsersEmail()
    {
        return $this->_getEmailsForTextSearch('User');
    }
    
    function getDegreeSubjects()
    {
        return $this->_getNamesForTextSearch('DegreeSubject');
    }

    public function getUniversityDegrees()
    {
        return $this->_getNamesForTextSearch('DegreeType');
    }

    public function getSports()
    {
        return $this->_getNamesForTextSearch('SportName');
    }


    public function getSocials()
    {
        return $this->_getNamesForTextSearch('Social');
    }

    private function _getNamesForTextSearch($modelName)
    {
        $name = Input::get('q', '');
        return $modelName::where('name', 'LIKE', "%$name%")->select(['id', 'name'])->get();
    }
    
    //private function _getEmailsForTextSearch($modelName)
    //{
    //    $email = Input::get('q', '');
    //    return $modelName::where('email', 'LIKE', "$email%")->where('group_id', '1')->where('activated', '1')->select(['id', 'email'])->get();
    //}
    private function _getEmailsForTextSearch($modelName)
    {
        $email = Input::get('q', '');
        return $modelName::where('email', 'LIKE', "$email%")->where('group_id', '1')->select(['id', 'email'])->get();
    }
}
