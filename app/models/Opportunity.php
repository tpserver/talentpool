<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Group
 *

 */
class Opportunity extends Eloquent{
    protected $table = 'opportunities';
    protected $fillable = array('name');
    
     public static $rules = [
        'name'                      => 'required',
        'work-type'                 => 'required|numeric|min:1',
        'opportunity_start_date'    => 'required',
        'expected_hire_date'        => 'required',
        'employer_name'             => 'required',
        'employer_sector'           => 'required',
    ];
    
    public static $rules_event = [
        'event_title'   => 'required',
        'work-type'     => 'required|numeric|min:1',
        'event_date'    => 'required',
        'rsvp'          => 'required|email',
        'close_date'    => 'required',
        'event_location'=> 'required',
    ];
    
    public static $rules_intro = [
        'company_name'  => 'required',
        'work-type'     => 'required|numeric|min:1',
    ];
    
    public function workType()
    {
        return $this->belongsTo('WorkType');
    }
    
    public function workSector()
    {
        return $this->belongsToMany('WorkSector');
    }

    public function locations()
    {
        return $this->belongsToMany('Location');
    }
}
