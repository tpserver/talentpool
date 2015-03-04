<?php

class CandidatesPoolUser extends \Eloquent {
    protected $table = 'candidates_pool_user';
    public $timestamps = false;
    protected $fillable = [];
    
    public function candidatesPool()
    {
        return $this->belongsToMany('CandidatesPool');
    }

}