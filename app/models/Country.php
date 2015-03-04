<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Country
 *

 */
class Country extends Eloquent{
    protected $table = 'countries';
    protected $fillable = array('name');

    public static $OTHER = 23;

    public function university()
    {
        return $this->belongsToMany('University');
    }
}
