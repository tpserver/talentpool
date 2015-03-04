<?php

class CampaignSent extends \BaseController  {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        echo "<pre>";
        print_r(MailChimpWrapper::lists()->getList());
        print_r( MailChimpWrapper::lists()->memberInfo('b3431463e9', array('email' => 'alexolley@gmail.com')));
    }
    
     /**
     * @uses Input
     * @return string Positive if the email is already taken, else - Negative
     */

    
 
}
