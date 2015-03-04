<?php

class UserDesiredWorkType extends \Eloquent {
    protected $table = 'user_desired_work_type';
    
    protected $fillable = [];
    
    public function user()
    {
        return $this->belongsToMany('');
    }
}