<?php

class AdminController extends \BaseController {

    /**
     * @var \GradList\Forms\Opportunit
     */
    //protected $opportunity;

    /**
     * @param Opportunity $opportunity
     */
    function __construct()
    {
        
    }

    public function index()
    {
        
        return View::make('admin.admin-dashboard', ['left_status' => 'dashboard']);
    }
    public function logout()
    {
        return Redirect::to(route('adminlogin.login'));
    }
    public function create()
    {
        
        
    }
    public function usersList()
    {
        $employeers = User::where('group_id', '=', 1)->orderBy('id', 'desc')->get();
        return View::make('admin.admin-users-list', ['employeerList' => $employeers, 'left_status' => 'user-list'] );
    }
    public function userEmployeerList()
    {
        $employeers = User::where('group_id', '=', 2)->orderBy('id', 'desc')->get();
        return View::make('admin.employeer-list-users', ['employeerList' => $employeers, 'left_status' => 'employeer-list'] );
    }
    public function campaignList()
    {
        $campaigns = Campaign::orderBy('id', 'desc')->get();
        return View::make('admin.all-campaign-list', ['campaignList' => $campaigns, 'left_status' => 'campaign-list'] );
    }
     public function CandidatePoolList()
    {
        $candidate_pool = CandidatesPool::orderBy('id', 'desc')->get();
        return View::make('admin.all_candidate_pool_list', ['candidatePool' => $candidate_pool, 'left_status' => 'candidatespool-list'] );
    }
    public function store()
    {
        
    }
    
    public function show($id)
    {
        
    }
    
    public function edit($id)
    {
        
    }
    
    public function destroy($id)
    {
       
    }

}