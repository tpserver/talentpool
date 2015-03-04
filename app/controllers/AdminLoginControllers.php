<?php

class AdminLoginControllers extends \BaseController {

    /**
     * @var \GradList\Forms\Opportunit
     */
    //protected $opportunity;

    /**
     * @param Opportunity $opportunity
     */
    function __construct()
    {
        return Redirect::to(route('adminlogin.login'));
    }

    public function index()
    {
        
    }
    public function login()
    {
        return View::make('admin.admin-login');
    }
    public function create()
    {
        
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