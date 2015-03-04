<?php
namespace admin;

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
        
        return View::make('admin.admin-dashboard');
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