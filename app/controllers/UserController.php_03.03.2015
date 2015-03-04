<?php

class UserController extends BaseController
{

    private $_user;

    public function __construct()
    {
        $this->beforeFilter('auth');
        if(Sentry::check() && (Sentry::getUser()->group_id==1))
        {
            $this->_user = User::find(Sentry::getUser()->id); // Previous code
            return Redirect::route('profile.edit');
            //$this->_user = Sentry::getUser()->id;
        }
        else if(Sentry::check() && (Sentry::getUser()->group_id==2))
        {
            return Redirect::route('employers.settings');
        }
        else
        {
            Sentry::logout();
            return Redirect::route('homepage');
        }
    }

    public function edit()
    {
        if(Sentry::getUser()->group_id==2)
        {
            return Redirect::route('employers.settings');
        }
        $userId = $this->_user->id;
        $user = User::with('option')->with('desiredLocation')->with('desiredWorkType')->with('skill')
            ->with('university')->with('schoolQualification')->with('social')->with('sport')->find($userId); // previous code
        //print_r($user->sport);die();
        $_userOptions           = $user->option;
        $userOptions            = [];
        $userLocations          = [];
        $userDesiredWorkType    = [];
        $userSkills             = [];
        foreach ($_userOptions as $userOption) {
            $userOptions[] = $userOption->id;
        }
        foreach ($user->desiredLocation as $location) {
            $userLocations[] = $location->id;
        }
        foreach ($user->desiredWorkType as $workType) {
            $userDesiredWorkType[] = $workType->id;
        }
        foreach ($user->skill as $skill) {
            $userSkills[$skill->id] = [$skill->id, $skill->pivot->level];
        }

        $data = ['user'         => $user,
            'sportNames'        => SportName::all(),
            'sportLevels'       => SportLevel::all(),
            'sportPositions'    => SportPosition::all(),
            'languages'         => LanguageName::orderBy('name', 'ASC')->get(),
            'languageLevels'    => LanguageLevel::all(),
            'userDesiredWorkType' => $userDesiredWorkType,
            'degreeTypes'       => DegreeType::all(),
            'degreeSubjects'    => DegreeSubject::all(),
            'degreeResults'     => DegreeResult::all(),
            'userLocations'     => $userLocations,
            'workTypes'         => WorkType::where('approved', '=', 1)->get(),
            'workSectors'       => WorkSector::with('category')->get(),
            'workDurations'     => WorkDuration::all(),
            'skills'            => Skill::with('SkillGroup')->get(),
            'userSkills'        => $userSkills,
            'locations'         => Location::all(),
            'ethnicities'       => Ethnicity::with('group')->get(),
            'firstName'         => Input::get('first_name', ''),
            'lastName'          => Input::get('last_name', ''),
            'email'             => Input::get('email', ''),
            'password'          => Input::get('password', ''),
            'universities'      => University::with('country')->get(),
            'schoolQualificationTypes' => SchoolQualificationType::with('results')->get(),
            'socialPositions'   => SocialPosition::where('approved', '=', 1)->get(),
            'socialCategories'  => SocialCategory::where('approved', '=', 1)->get(),
            'userOptions'       => $userOptions,
            'workOptions'       => Option::where('category_id', '=', 1)->with('group')->get(),
            'capabilites'       => Option::where('subcategory_id', '=', 10)->with('group')->get(),
            'attributes'        => Option::where('group_id', '=', 10)->with('group')->get(),
            'experience'        => Option::where('subcategory_id', '=', 10)->with('group')->get(),
            'schoolOptions'     => SchoolSubject::all(),
        ];
        //print_r($data['skills']);die();
        //foreach($data['workDurations'] as $_result)
        //{
        //    print_r($_result);
        //}
        //die();
        return View::make('profile.candidate.edit', $data);
    }

    public function update()
    {
        //echo Input::get('availability_month'); echo Input::get('availability_year'); die();
        //print_r(Input::get('skills', [])); print_r(Input::get('skill_levels', []));die();
        $user = $this->_user;
        $user->update(Input::only(['first_name', 'last_name']));

        $dob = Input::get('year_dob', '0000') . '-' . Input::get('month_dob', '00') . '-' . Input::get('date_dob', '00');

        if ($dob != '0000-00-00' && $dob != $user->dob)
        $user->dob = $dob;
        $user->contact_frequency = Input::get('emails_per_week', 0);
        $user->first_name        = Input::get('first_name');
        $user->last_name         = Input::get('last_name');
        $user->english_level     = Input::get('english_level');
        $user->ethnicity_id      = Input::get('ethnicity');
        $user->gender            = Input::get('gender');
        $user->contact_frequency = Input::get('emails_per_week');

        if( Input::has('desired_payment') )
        {
            if( is_array(Input::get('desired_payment')) )
                $user->desired_payment = array_sum(Input::get('desired_payment'));
        }

        $options = array_merge(Input::get('attributes', []), Input::get('capabilities', []), Input::get('work_option', []));

        $user->option()->sync($options);
        $user->desiredWorkType()->sync(Input::get('desired_job_type'));
        $user->desiredLocation()->sync(Input::get('job_location'));

        $user->massUpdateSchoolQualification(Input::get('qual_type', []), Input::get('qual_subject_type', []),
            Input::get('qual_subject_name', []), Input::get('qual_result', []), Input::get('school-id', []));

        $user->massUpdateLanguage(Input::get('languages', []), Input::get('languages_level', []), Input::get('language-id', []));
        $user->updateAvailability(Input::get('availability'), Input::get('availability_month'), Input::get('availability_year'));
        $user->massUpdateSkills(Input::get('skills', []), Input::get('skill_levels', []));
        $user->massUpdateDegree(Input::get('degree_type', []), Input::get('degree_uni', []), Input::get('degree_subject', []),
            Input::get('degree_subject_name', []), Input::get('degree_result', []), Input::get('degree_graduation', []),
            Input::get('degree-id', []));
        $user->massUpdateSocial(Input::get('society_category', []), Input::get('society_position', []), Input::get('society_name'), Input::get('social-id'));
        $user->massUpdateSport(Input::get('sport_category'), Input::get('sport_level', []), Input::get('sport_position', []), Input::get('sport-id', []));
        $user->massUpdateWork(Input::get('work_type', []), Input::get('work_length', []), Input::get('work_sector', []),
            Input::get('work_organisation', []), Input::get('work-experience-id', []));

        $user->save();
        
        return Redirect::to(route('profile.edit'));
    }

    public function changePassword()
    {
        return View::make('profile.change-password.index');
    }

    public function saveChangedPassword()
    {
        $user = Sentry::getUser();
        $data = Input::all();
        $errorMsg = false;

        $validationRules = [
            'password' => 'required|min:5',
            'new_password' => 'required|min:5|confirmed',
            'new_password_confirmation' => 'required|min:5',
        ];
        $validator = Validator::make($data, $validationRules);

        try {
            $userAuth = Sentry::authenticate(['email' => $user->email, 'password' => $data['password']], false);
        } catch (Exception $e) {
            $currentPasswordError = 'Current password is wrong.';
        }

        if ($validator->fails()) {
            if (isset($currentPasswordError))
                $validator->errors()->add('password', $currentPasswordError);
            return Redirect::back()->withErrors($validator);
        }

        $user->password = $data['new_password'];
        $user->save();
        Sentry::logout();
        return View::make('profile.change-password.success');

    }

    public function changeEmail()
    {
        return View::make('profile.change-email.index');
    }

    public function saveChangeEmail()
    {
        //$user = $this->_user;
        $user = Sentry::getUser();
        $validator = Validator::make(Input::all(), [
            'password' => 'required',
            'new_email' => 'required|email|unique:users,email|confirmed',
            //'new_email_confirmation' => 'required|email|unique:users,email|confirmed',
        ]);

        if($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else {
            try {
                $userAuth = Sentry::authenticate(['email' => $user->email, 'password' => Input::get('password')], false);
            }
            catch (Exception $e) {
                $currentPasswordError = 'Current password is wrong.';
            }
            if (isset($currentPasswordError)) {
                $validator->errors()->add('password', $currentPasswordError);
                return Redirect::back()->withErrors($validator);
            }
            //$user_check_authenticate = User::where('email', $input['email_or_username'])->orWhere('username', $input['email_or_username'])->first();
            //if($this->user->checkPassword(Input::get('email')))
            //if($this->user->checkEmailPassword(Input::all()))
            //{
            //    $user->email = Input::get('new_email');
            //    $user->save();
            //}
            //echo $user->id;die();
            $user->email_change = Input::get('new_email');
            //$user->email_change_activation_code = md5($user->id);
            $user->save();
            
            //Mail::send('email.activate-change-email', ['siteName' => 'gradslist.co.uk', 'username'=> $user->first_name, 'email' => $user->email, 'code' => $user->getActivationCode(), 'activationPeriod' => 48], function($message) use($user)
            //{
            //    $message->to($user->email)->subject('Welcome to GradList');
            //});
            
            Sentry::logout();
            //return View::make('profile.change-email.success');
        }
        return View::make('profile.change-email.success');
    }
    public function emailNotificationService()
    {
        $user = $this->_user;
        $useremailNotification_status = $user->email_notification;
        if($useremailNotification_status==0)
        {
            $user->email_notification = 1;
        }
        else
        {
            $user->email_notification = 0;
        }
        $user->save();
        return Redirect::to(route('profile.edit'));
        //echo $useremailNotification_status;die();
    }
    public function profileStatusON()
    {
        $user = $this->_user;
        
        $user->email_activity = 1;
        $user->save();
        return Redirect::to(route('profile.edit'));
    }
    public function profileStatusOFF()
    {
        $user = $this->_user;
        
        $user->email_activity = 2;
        $user->save();
        return Redirect::to(route('profile.edit'));
    }

} 