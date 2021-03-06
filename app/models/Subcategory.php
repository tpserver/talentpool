<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Subcategory
 *

 */
class Subcategory extends Eloquent{
    protected $table = 'subcategories';
    protected $fillable = array('name');
    
    public function user()
    {
        return $this->belongsToMany('User', 'user_sport');
    }
    public function level()
    {
        return $this->belongsToMany('SportLevel', 'sport_level');
    }
    
}
