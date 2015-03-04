<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sport
 *

 */
class Sport extends Eloquent{
    protected $table = 'sports';
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsToMany('User', 'user_sport');
    }
    
    public function level()
    {
        return $this->belongsTo('SportLevel', 'sport_level_id');
    }
    
    public function position()
    {
        return $this->belongsTo('SportPosition', 'sport_position_id');
    }
    
    public function name()
    {
        return $this->belongsTo('SportName', 'sport_name_id');
    }
    
}
