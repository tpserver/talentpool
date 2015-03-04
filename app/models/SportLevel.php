<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SportLevels
 *

 */
class SportLevel extends Eloquent{
    protected $table = 'sport_levels';
    protected $fillable = ['name', 'approved'];
    public $timestamps = false;
    
    public function sport()
    {
        return $this->hasMany('sport', 'id');
    }
    
}

