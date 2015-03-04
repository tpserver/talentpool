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

Route::get('login', ['as' => 'login', 'uses' => 'SessionController@create']);

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

Route::any('sign-up', ['as' => 'sign_up', 'uses' => 'SignupController@index']);
Route::post('sign-up/checkEmail', ['as' => 'emailCheck', 'uses' => 'SignupController@checkForEmail']);
Route::post('sign-up/submit', ['as' => 'signup.submit', 'uses' => 'SignupController@submit']);
Route::get('sign-up/success', ['as' => 'signup.success', function()
{
    return View::make('sign_up_success', ['email' => Session::get('email')]);
}]);

Route::get('search', ['as' => 'search', 'uses' => 'SearchController@index']);

Route::post('search', ['as' => 'search', 'uses' => 'SearchController@getCount']);