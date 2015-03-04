<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
    
Route::get('/', ['as' => 'homepage', function()
{   
//     $user = Sentry::register(array(
//        'email'    => 'john2.doe@example.com',
//        'password' => 'test',
//    ));
//
//    // Let's get the activation code
//    $activationCode = $user->getActivationCode();
//    var_dump($activationCode);
    
    return View::make('home');
}]);

Route::get('login', ['as' => 'login', 'uses' => 'SessionController@create']);
Route::get('login/recover-passord', ['as' => 'login.recoverPassowrd', 'uses' => 'SessionController@recoverPassword']);
Route::post('login/recover-passord', ['as' => 'login.recoverPassowrd', 'uses' => 'SessionController@sendRecoverPassword']);
Route::get('login/set-new-passord', ['as' => 'login.setNewPassword', 'uses' => 'SessionController@setNewPassword']);
Route::post('login/set-new-passord', ['as' => 'login.saveNewPassword', 'uses' => 'SessionController@saveNewPassword']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionController@destroy']);
Route::resource('session', 'SessionController');

Route::get('privacy-policy', ['as' => 'policy', function()
{
    return View::make('privacy_policy');
}]);

Route::get('faqs', ['as' => 'faq', function()
{
    return View::make('faqs');
}]);

Route::get('terms-of-use', ['as' => 'terms', function()
{
    return View::make('terms_of_use');
}]);

Route::get('campaign-email-preview', ['as' => 'campaing-email-preview', function()
{
    return View::make('email/campaign-html');
}]);
Route::get('campaign-sent', ['as' => 'campaign.sent', function()
{
    return View::make('campaign.sent');
}]);
Route::any('sign-up', ['as' => 'sign_up', 'uses' => 'SignupController@index']);
Route::post('sign-up/checkEmail', ['as' => 'emailCheck', 'uses' => 'SignupController@checkForEmail']);
Route::post('sign-up/submit', ['as' => 'signup.submit', 'uses' => 'SignupController@submit']);
Route::get('sign-up/activate', ['as' => 'signup.activate', 'uses' => 'SignupController@activate']);
Route::get('sign-up/success', ['as' => 'signup.success', function()
{
    return View::make('sign_up_success', ['email' => Session::get('email')]);
}]);

Route::get('search', ['as' => 'search', 'uses' => 'SearchController@index_new']);
Route::post('search', ['as' => 'search', 'uses' => 'SearchController@getCount']);

Route::resource('email-template', 'EmailTemplateController');
Route::resource('campaign', 'CampaignController');
Route::resource('opportunity', 'OpportunityController');
Route::resource('employers', 'EmployerController');
Route::resource('candidatesPool', 'CandidatesPoolController');
Route::get('employer/sign-up', ['as' => 'employers.create', 'uses' => 'EmployerController@create']);

//Route::any('campaign', [ 'as' => 'campaign', 'uses' => 'CampaignController@index']);

Route::any('campaign_details', ['as' => 'campaign_details', 'uses' => 'CampaignController@details']);
//Route::any('opportunity', ['as' => 'opportunity', 'uses' => 'CampaignController@opportunity']);
Route::any('new_opportunity', ['as' => 'new_opportunity', 'uses' => 'OpportunityController@newOpportunity']);
Route::any('candidate_details', ['as' => 'candidate_details', 'uses' => 'CandidateController@details']);
Route::any('candidate_pool_details', ['as' => 'candidate_pool_details', 'uses' => 'CandidateController@pool_details']);
Route::any('candidates', ['as' => 'candidates', 'uses' => 'CandidateController@index']);


Route::get('new-email-template-view', ['as' => 'new-email-template-view', function(){
    return View::make('campaign.email-templates.create');
}]);

//Andrew
Route::any('new_campaign', ['uses' => 'CampaignController@new_campaign']);
Route::any('new_campaign_search', ['uses' => 'CampaignController@new_campaign_search']);
Route::any('opportunities', ['uses' => 'CampaignController@opportunity']);
Route::any('new_opportunity', ['uses' => 'CampaignController@new_opportunity']);
Route::any('campaigns', ['uses' => 'CampaignController@index']);
Route::get('new_search', ['as' => 'search', 'uses' => 'SearchController@index']);
