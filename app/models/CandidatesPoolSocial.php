<?php

class CandidatesPoolSocial extends \Eloquent {
    protected $table = 'candidates_pool_social';
    public $timestamps = false;
    protected $fillable = [];
    
    public function candidatesPool()
    {
        return $this->belongsToMany('CandidatesPool')->withPivot('social_category_id');
    }
    
    public function socialCategory()
    {
        return $this->belongsTo('SocialCategory');
    }
    public function socialPosition()
    {
        return $this->belongsTo('SocialPosition');
    }
}

