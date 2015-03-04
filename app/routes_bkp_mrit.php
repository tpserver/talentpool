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
    return View::make('home');
}]);

Route::get('test', ['as' => 'test', function()
{
    $t = EmailTemplate::find(5);
    echo $t->subject;
    echo '<hr>';
    echo $t->body;
}]);
Route::get('mailchimp-stats-update', ['as' => 'mailchimp.updateStats', 'uses' => 'MailchimpStatsController@updateAllStats']);
Route::get('login', ['as' => 'login', 'uses' => 'SessionController@create']);
Route::get('login/recover-password', ['as' => 'login.recoverPassword', 'uses' => 'SessionController@recoverPassword']);
Route::post('login/recover-password', ['as' => 'login.recoverPassword', 'uses' => 'SessionController@sendRecoverPassword']);
Route::get('login/set-new-password', ['as' => 'login.setNewPassword', 'uses' => 'SessionController@setNewPassword']);
Route::post('login/set-new-password', ['as' => 'login.saveNewPassword', 'uses' => 'SessionController@saveNewPassword']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionController@destroy']);
Route::resource('session', 'SessionController');
Route::resource('user', 'UserController');
Route::post('user/update', ['as' => 'user.update', 'uses' => 'UserController@update']);
Route::get('profile', ['as' => 'profile.edit', 'uses' => 'UserController@edit']);
Route::get('profile/change-password', ['as' => 'profile.changePassword', 'uses' => 'UserController@changePassword']);
Route::post('profile/change-password', ['as' => 'profile.saveChangedPassword', 'uses' => 'UserController@saveChangedPassword']);
Route::get('profile/change-email', ['as' => 'profile.changeEmail', 'uses' => 'UserController@changeEmail']);
Route::post('profile/change-email', ['as' => 'profile.changeEmail', 'uses' => 'UserController@saveChangeEmail']);
Route::get('profile/email-notificationservice', ['as' => 'profile.emailNotificationService', 'uses' => 'UserController@emailNotificationService']);
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

Route::get('campaign-email-preview', ['as' => 'campaign-email-preview', function()
{
    $data = [
            'opportunity'       => Opportunity::find(Session::get('opportunity', 0)),
            'candidatesPool'    => CandidatesPool::find(Session::get('candidates-pool', 0)),
            'emailTemplate'     => EmailTemplate::find(Session::get('email-template', 0)),
    ];
    return View::make('email/campaign-html')->with($data);
}]);

Route::any('sign-up', ['as' => 'sign_up', 'uses' => 'SignupController@index']);
Route::any('generate-csv', ['as' => 'generate-csv', 'uses' => 'GenerateCsv@index']);
Route::post('candidate-list', ['as' => 'candidatelist.submit', 'uses' => 'GenerateCsv@filterCandidate']);
Route::post('download-csv', ['as' => 'candidatelist.csvgenerate', 'uses' => 'GenerateCsv@getCSVLink']);
//Route::get('candidate-list/users', ['as' => 'candidatelist.userlisting', function()
//{
//    return View::make('filter_csv.filteruserlisting',['userlisitings' => Session::get('email')]);
//}]);
Route::any('sign-up/employee', ['as' => 'signup.empcreate', 'uses' => 'SignupController@empcreate']);
Route::post('sign-up/checkEmail', ['as' => 'emailCheck', 'uses' => 'SignupController@checkForEmail']);
Route::post('sign-up/submit', ['as' => 'signup.submit', 'uses' => 'SignupController@submit']);
Route::post('sign-up/register', ['as' => 'signup.empsubmit', 'uses' => 'SignupController@empsubmit']);
Route::get('sign-up/activate', ['as' => 'signup.activate', 'uses' => 'SignupController@activate']);
Route::get('sign-up/success', ['as' => 'signup.success', function()
{
    return View::make('signup.success', ['email' => Session::get('email')]);
}]);

Route::get('search', ['as' => 'search', 'uses' => 'SearchController@index']);
Route::post('candidate-pool-edit-success', ['as' => 'candidatesPool.edit_store', 'uses' => 'CandidatesPoolController@edit_store']);
Route::post('search', ['as' => 'search', 'uses' => 'SearchController@getCount']);
Route::post('candidate-pool-edit/search', ['as' => 'editsearch', 'uses' => 'SearchController@getCount']);
Route::get('search/get-companies', ['as' => 'search.getCompanies', 'uses' => 'SearchController@getCompanies']);
Route::get('search/get-degree-subjects', ['as' => 'search.getDegreeSubjects', 'uses' => 'SearchController@getDegreeSubjects']);
Route::get('search/get-sports', ['as' => 'search.getSports', 'uses' => 'SearchController@getSports']);
Route::get('search/get-society-names', ['as' => 'search.getSocietyNames', 'uses' => 'SearchController@getSocials']);
Route::get('search/get-university-names', ['as' => 'search.getUniversities', 'uses' => 'SearchController@getUniversities']);
Route::get('search/get-useremail-names', ['as' => 'search.getUsersEmail', 'uses' => 'SearchController@getUsersEmail']);


Route::resource('email-template', 'EmailTemplateController');
Route::resource('campaign', 'CampaignController');
//Route::get('campaign-sent', ['as' => 'campaign.sent', function()
//{
//    return View::make('campaign.sent');
//}]);
Route::get('campaign-sent', ['as' => 'campaign.sent', 'uses' => 'CampaignSent@index']);
Route::resource('opportunity', 'OpportunityController');
Route::resource('employers', 'EmployerController');
Route::resource('candidatesPool', 'CandidatesPoolController');
Route::any('opportunity-edit/{any}', ['as' => 'opportunity.edit', 'uses' => 'OpportunityController@edit']);
Route::get('candidate-pool-edit/{any}', ['as' => 'candidatepool.edit', 'uses' => 'SearchController@pooledit']);

Route::any('settings', ['as' => 'employers.settings', 'uses' => 'EmployerController@settings']);

Route::get('campaign', [ 'as' => 'campaign', 'uses' => 'CampaignController@index']);
Route::any('new_opportunity/up-coming-event', ['as' => 'opportunity.upcomingevent', 'uses' => 'OpportunityController@upcomingevent']);
Route::any('new_opportunity/general-intro', ['as' => 'opportunity.generalintro', 'uses' => 'OpportunityController@generalintro']);
Route::any('campaign_details', ['as' => 'campaign_details', 'uses' => 'CampaignController@details']);
//Route::any('opportunity', ['as' => 'opportunity', 'uses' => 'CampaignController@opportunity']);
Route::any('new_opportunity', ['as' => 'new_opportunity', 'uses' => 'OpportunityController@newOpportunity']);
Route::any('candidate_details', ['as' => 'candidate_details', 'uses' => 'CandidateController@details']);
Route::any('candidate_pool_details', ['as' => 'candidate_pool_details', 'uses' => 'CandidateController@pool_details']);
Route::any('candidates', ['as' => 'candidates', 'uses' => 'CandidateController@index']);

Route::get('new-email-template-view', ['as' => 'new-email-template-view', function(){
    return View::make('campaign.email-templates.create');
}]);
Route::get('migrate', 'migrateController@data_migrate');
Route::get('new-campaign/opportunity', ['as' => 'new-campaign.opportunity', 'uses' => 'CampaignController@opportunity']);
Route::get('new-campaign/candidates', ['as' => 'new-campaign.candidates', 'uses' => 'CampaignController@candidates']);
Route::get('new-campaign/email', ['as' => 'new-campaign.email', 'uses' => 'CampaignController@email']);
Route::get('new-campaign/preview', ['as' => 'new-campaign.preview', 'uses' => 'CampaignController@preview']);
Route::get('new-campaign/payment', ['as' => 'new-campaign.payment', 'uses' => 'CampaignController@payment']);
Route::get('new-campaign/sent', ['as' => 'new-campaign.sent', function()
{
    return View::make('campaign.sent');
}]);
Route::post('opportunity-create/upcoming-event', ['as' => 'opportunity.eventStore', 'uses' => 'OpportunityController@eventStore']);
Route::post('opportunity-create/general-intro', ['as' => 'opportunity.introStore', 'uses' => 'OpportunityController@introStore']);
Route::post('opportunity-update/specific-role', ['as' => 'opportunity.editstore', 'uses' => 'OpportunityController@editstore']);
Route::post('opportunity-update/company-introduction', ['as' => 'opportunity.editintroStore', 'uses' => 'OpportunityController@editintroStore']);
Route::post('opportunity-update/event-invitation', ['as' => 'opportunity.editeventStore', 'uses' => 'OpportunityController@editeventStore']);
Route::post('new-campaign/save-step', ['as' => 'new-campaign.save-step', 'uses' => 'CampaignController@saveStep']);
Route::post('new-campaign/create-new', ['as' => 'new-campaign.save-step-types', 'uses' => 'CampaignController@saveStepTypes']);

//Andrew
Route::any('new_campaign', ['uses' => 'CampaignController@new_campaign']);
Route::any('new_campaign_search', ['uses' => 'CampaignController@new_campaign_search']);
Route::any('opportunities', ['uses' => 'CampaignController@opportunity']);
Route::any('new_opportunity', ['uses' => 'CampaignController@new_opportunity']);
Route::any('campaigns', ['uses' => 'CampaignController@index']);
Route::get('new_search', ['as' => 'new_search', 'uses' => 'SearchController@index_new']);