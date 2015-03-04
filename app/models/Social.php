<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Socail
 *

 */
class Social extends Eloquent{
    protected $table = 'socials';
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsToMany('User', 'user_social');
    }
    
    public function category()
    {
        return $this->belongsTo('SocialCategory', 'social_category_id');
    }
    
    public function position()
    {
        return $this->belongsTo('SocialPosition', 'social_position_id');
    }
}
