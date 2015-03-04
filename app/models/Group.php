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
class Group extends Eloquent{
    protected $table = 'option_groups';
    protected $fillable = array('name');
    

    public function option()
    {
        return $this->hasMany('Option');
    }
    
}
