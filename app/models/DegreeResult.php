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
class DegreeResult extends Eloquent{
    protected $table = 'degree_results';
    protected $fillable = ['name', 'approved'];
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsToMany('User', 'user_degree');
    }
    public function degree()
    {
        return $this->belongsTo('degree');
    }
}

