<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Option
 *

 */
class Option extends Eloquent{
    protected $table = 'options';
    protected $fillable = array('name');
    public $timestamps = 'false';
    
    public function user()
    {
        return $this->belongsToMany('User', 'user_option', 'id');
    }
    public function group()
    {
        return $this->belongsTo('Group');
    }
    
}
