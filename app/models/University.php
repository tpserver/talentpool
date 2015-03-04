<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of University
 *

 */
class University extends Eloquent{
    protected $table = 'universities';
    protected $fillable = ['name', 'approved'];
    public $timestamps = false;
    
    public function country()
    {
        return $this->belongsTo('Country');
    }
    
    public function user()
    {
        return $this->belongsToMany('User', 'user_degree');
    }
    
    public static function getUniversityGroupedWithCountry()
    {
        $t = self::orderBy('country_id', 'ASC')->with('Country')->get();
        return $t;
    }
}
