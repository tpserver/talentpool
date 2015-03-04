<?php

class OpportunityController extends BaseController {

    /**
     * @var \GradList\Forms\Opportunit
     */
    protected $opportunity;

    /**
     * @param Opportunity $opportunity
     */
    function __construct(Opportunity $opportunity)
    {
        $this->$opportunity = $opportunity;
        $this->beforeFilter('auth');
        if( isset(Sentry::getUser()->id) )
            $this->_user = User::find(Sentry::getUser()->id);
    }

    public function index()
    {
        $opportunities = Opportunity::where('employeer_id','=',Sentry::getUser()->id)->with('workType')->with('locations')->with('workSector')->get();
        //print_r($opportunities);die();
        return View::make('opportunity.index', ['currentPage' => 'opportunity', 'opportunities' => $opportunities]);
    }

    public function create()
    {
        $data = [
            'workTypes'     => WorkType::where('approved', '=', 1)->get(),
            'workOptions'   => Option::where('category_id', '=', 1)->get(),
            'locations'     => Location::all(),
            'currentPage'   => 'opportunity',
        ];
        
        return View::make('opportunity.create', $data);
        
    }
    public function upcomingevent()
    {
        $data = [
            'workTypes'     => WorkType::where('approved', '=', 1)->get(),
            'workOptions'   => Option::where('category_id', '=', 1)->get(),
            'locations'     => Location::all(),
            'currentPage'   => 'opportunity',
        ];
        return View::make('opportunity.createevent', $data);
    }
    public function generalintro()
    {
        $data = [
            'workTypes'     => WorkType::where('approved', '=', 1)->get(),
            'workOptions'   => Option::where('category_id', '=', 1)->get(),
            'locations'     => Location::all(),
            'currentPage'   => 'opportunity',
        ];
        return View::make('opportunity.createintro', $data);
    }
    public function store()
    {
        $opportunity_start_date = explode("/",Input::get('opportunity_start_date'));
        $opportunity_start_date = $opportunity_start_date[2]."-".$opportunity_start_date[1]."-".$opportunity_start_date[0];
        $expected_hire_date = explode("/",Input::get('expected_hire_date'));
        $expected_hire_date = $expected_hire_date[2]."-".$expected_hire_date[1]."-".$expected_hire_date[0];
        $data = [
            'work-type'                 => Input::get('work-type.0', ''),
            'work-sector'               => Input::get('work_option', []),
            'name'                      => Input::get('name'),
            'salary'                    => Input::get('salary', 0),
            'opportunity_start_date'    => $opportunity_start_date,
            'expected_hire_date'        => $expected_hire_date,
            'employer_name'             => Input::get('employer_name'),
            'employer_sector'           => Input::get('employer_sector'),
            'location'                  => Input::get('opportunity_location', []),
        ];
        $validator = Validator::make($data, Opportunity::$rules);
        
        if ($validator->fails()) {
            if (Request::ajax())
                return $validator;
            return Redirect::to(route('opportunity.create'))->withInput()->withErrors($validator);
        } else {
            $opportunity = new Opportunity($data);
            $opportunity->employeer_id      = $this->_user->id;
            $opportunity->work_type_id      = $data['work-type'];
            $opportunity->name              = $data['name'];
            $opportunity->salary            = $data['salary'];
            $opportunity->opportunity_date  = $data['opportunity_start_date'];
            $opportunity->hire_date         = $data['expected_hire_date'];
            $opportunity->emp_name          = $data['employer_name'];
            $opportunity->emp_sector        = $data['employer_sector'];
            $opportunity->opportunity_type  = 1;
            $opportunity->save();
            foreach($data['location'] as $location)
            {
                $opportunity->locations()->attach($location);
            }
            foreach($data['work-sector'] as $sector)
            {
                $opportunity->workSector()->attach($sector);
            }
        }
        Session::set('opportunity', $opportunity->id);
        //if( Input::has('returnTo') )
        //    return Redirect::to( route(Input::get('returnTo')) );
        //return Redirect::to(route('opportunity.index'));
        //return Redirect::to(route('new-campaign.opportunity'));
        return Redirect::to(route('new-campaign.candidates'));
    }
    public function eventStore()
    {
        $data = [
            'work-type'             => Input::get('work-type.0', ''),
            'event_title'           => Input::get('event_title'),
            'event_date'            => Input::get('event_date'),
            'rsvp'                  => Input::get('rsvp'),
            'close_date'            => Input::get('close_date'),
            'event_location'        => Input::get('event_location'),
        ];
        $validator = Validator::make($data, Opportunity::$rules_event);
        
        if ($validator->fails()) {
            if (Request::ajax())
                return $validator;
            return Redirect::to(route('opportunity.upcomingevent'))->withInput()->withErrors($validator);
        } else {
            $opportunity = new Opportunity($data);
            $opportunity->employeer_id      = $this->_user->id;
            $opportunity->name              = $data['event_title'];
            $opportunity->work_type_id      = $data['work-type'];
            $opportunity->event_start_date  = $data['event_date'];
            $opportunity->rsvp              = $data['rsvp'];
            $opportunity->event_end_date    = $data['close_date'];
            $opportunity->event_location    = $data['event_location'];
            $opportunity->opportunity_type  = 2;
            $opportunity->save();
            //foreach($data['location'] as $location)
            //{
            //    $opportunity->locations()->attach($location);
            //}
            
        }
        Session::set('opportunity', $opportunity->id);
        //if( Input::has('returnTo') )
        //    return Redirect::to( route(Input::get('returnTo')) );
        //return Redirect::to(route('opportunity.index'));
        return Redirect::to(route('new-campaign.candidates'));
    }
    public function introStore()
    {
        $data = [
            'work-type'     => Input::get('work-type.0', ''),
            'work-sector'   => Input::get('work_option', []),
            'company_name'  => Input::get('company_name'),
            'location'      => Input::get('opportunity_location', []),
        ];
        $validator = Validator::make($data, Opportunity::$rules_intro);
        
        if ($validator->fails()) {
            if (Request::ajax())
                return $validator;
            return Redirect::to(route('opportunity.generalintro'))->withInput()->withErrors($validator);
        } else {
            $opportunity = new Opportunity($data);
            $opportunity->employeer_id      = $this->_user->id;
            $opportunity->name              = $data['company_name'];
            $opportunity->work_type_id      = $data['work-type'];
            $opportunity->opportunity_type  = 3;
            $opportunity->save();
            foreach($data['location'] as $location)
            {
                $opportunity->locations()->attach($location);
            }
            foreach($data['work-sector'] as $sector)
            {
                $opportunity->workSector()->attach($sector);
            }
        }
        Session::set('opportunity', $opportunity->id);
        //if( Input::has('returnTo') )
        //    return Redirect::to( route(Input::get('returnTo')) );
        //return Redirect::to(route('opportunity.index'));
        return Redirect::to(route('new-campaign.candidates'));
    }
    public function show($id)
    {
        $opportunity = Opportunity::with('workType')->with('locations')->find($id);
        if (Request::ajax())
            return $opportunity;
        return View::make('opportunity.show', ['opportunity' => $opportunity, 'currentPage' => 'opportunity']);
    }
    
    public function edit($id)
    {
        $employer_id = $this->_user->id;
        //$opportunities = Opportunity::with('workType')->with('locations')->with('workSector')->get();
        $opportunityAvail = Opportunity::with('workType')->with('locations')->with('workSector')->find($id); 
        //print_r($opportunityAvail->workSector); die();
        $opportunityLocation = [];
        $workSectors = [];
        foreach ($opportunityAvail->locations as $location) {
            $opportunityLocation[] = $location->id;
        }
        foreach ($opportunityAvail->workSector as $worksector) {
            $workSectors[] = $worksector->id;
        }
        
        if($employer_id == $opportunityAvail->employeer_id)
        {
            $data = [
                    'opprtunities_avail'    => $opportunityAvail,
                    'workTypes'             => WorkType::where('approved', '=', 1)->get(),
                    'workOptions'           => Option::where('category_id', '=', 1)->get(),
                    'locations'             => Location::all(),
                    'opportunity_location'  => $opportunityLocation,
                    'workSectors'           => $workSectors,
                    'currentPage'           => 'opportunity',
                ];
            if($opportunityAvail->opportunity_type==1)
            {
                return View::make('opportunity.edit.create', $data);
            }
            if($opportunityAvail->opportunity_type==2)
            {
                return View::make('opportunity.edit.createevent', $data);
            }
            if($opportunityAvail->opportunity_type==3)
            {
                return View::make('opportunity.edit.createintro', $data);
            }
        }
        else
        {
            echo "Nope! you are not the right person to see this.";die();
        }
    }
    
    public function editstore()
    {
        $opportunity = Opportunity::find(Input::get('opportunity_code'));
        
        $opportunity_start_date = explode("/",Input::get('opportunity_start_date'));
        $opportunity_start_date = $opportunity_start_date[2]."-".$opportunity_start_date[1]."-".$opportunity_start_date[0];
        $expected_hire_date = explode("/",Input::get('expected_hire_date'));
        $expected_hire_date = $expected_hire_date[2]."-".$expected_hire_date[1]."-".$expected_hire_date[0];
        
        $opportunity->name = Input::get('name');
        $opportunity->work_type_id = Input::get('work-type.0', '');
        $opportunity->salary = Input::get('salary',0);
        $opportunity->opportunity_date = $opportunity_start_date;
        $opportunity->hire_date = $expected_hire_date;
        $opportunity->emp_name = Input::get('employer_name');
        $opportunity->emp_sector = Input::get('employer_sector');
        //$opportunity->opportunity_progress = Input::get('what_to_do');
        $opportunity->save();
        
        $data['work-sector'] = Input::get('work_option', []);
        $data['location']    = Input::get('opportunity_location', []);
        
        $opportunity->locations()->detach();
        foreach($data['location'] as $location)
        {
            $opportunity->locations()->attach($location);
        }
        $opportunity->workSector()->detach();
        foreach($data['work-sector'] as $sector)
        {
            $opportunity->workSector()->attach($sector);
        }
        //print_r($data['work-sector']);die();
        
        //$user->massUpdateSkills(Input::get('skills', []), Input::get('skill_levels', []));
        Session::set('opportunity', Input::get('opportunity_code'));
        return Redirect::to(route('new-campaign.opportunity'));
    }
    
    public function editeventStore()
    {
        $opportunity = Opportunity::find(Input::get('opportunity_code'));
        
        $opportunity->name = Input::get('event_title');
        $opportunity->work_type_id = Input::get('work-type.0', '');
        $opportunity->event_start_date = Input::get('event_date');
        $opportunity->rsvp = Input::get('rsvp');
        $opportunity->event_end_date = Input::get('close_date');
        $opportunity->event_location = Input::get('event_location');
        $opportunity->save();
        
        Session::set('opportunity', Input::get('opportunity_code'));
        return Redirect::to(route('new-campaign.opportunity'));
    }
    
    public function editintroStore()
    {
        $opportunity = Opportunity::find(Input::get('opportunity_code'));
        
        $opportunity->name = Input::get('company_name');
        $opportunity->work_type_id = Input::get('work-type.0', '');
        
        $opportunity->save();
        
        $data['work-sector'] = Input::get('work_option', []);
        $data['location']    = Input::get('opportunity_location', []);
        
        $opportunity->locations()->detach();
        foreach($data['location'] as $location)
        {
            $opportunity->locations()->attach($location);
        }
        $opportunity->workSector()->detach();
        foreach($data['work-sector'] as $sector)
        {
            $opportunity->workSector()->attach($sector);
        }
        
        Session::set('opportunity', Input::get('opportunity_code'));
        return Redirect::to(route('new-campaign.opportunity'));
    }
    
    public function destroy($id)
    {
        $opportunity = Opportunity::find($id);
        $opportunity->delete();
        return Redirect::to(route('opportunity.index'));
    }

}
