<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserOption
 *

 */
class Useroption extends Eloquent{
    protected $table = 'user_option';
    protected $fillable = ['user_id','option_id'];
    public $timestamps = 'false';
    
    //public function user()
    //{
    //    return $this->belongsToMany('User', 'user_option', 'id');
    //}
    //public function group()
    //{
    //    return $this->belongsTo('Group');
    //}
    
}