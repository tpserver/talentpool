<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WorkDuration
 *

 */
class WorkDuration extends Eloquent{
    protected $table = 'work_durations';
    protected $fillable = array('name');
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsToMany('User', 'user_work');
    }
}

