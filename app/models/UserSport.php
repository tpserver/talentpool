<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserSport
 *

 */
class UserSport extends Eloquent{
    protected $table = 'sport';
    
    public function user()
    {
        return $this->hasMany('User');
    }
}
