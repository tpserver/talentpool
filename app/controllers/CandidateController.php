<?php

class CandidateController extends BaseController {

/*
|--------------------------------------------------------------------------
| Default Home Controller
|--------------------------------------------------------------------------
|
| You may wish to use controllers instead of, or in addition to, Closure
| based routes. That's great! Here is an example controller method to
| get you started. To route to this controller, just add the route:
|
| Route::get('/', 'HomeController@showWelcome');
|
*/

    public function index()
    {
        return View::make('candidates', ['currentPage' => 'candidates']);
    }

    public function details()
    {
        return View::make('candidate_details', ['currentPage' => 'candidates']);
    }

    public function pool_details()
    {
        return View::make('candidate_pool_details', ['currentPage' => 'candidates']);
    }


}