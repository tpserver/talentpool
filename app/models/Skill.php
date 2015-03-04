<?php

class Skill extends \Eloquent {
    protected $table = 'skills';
    protected $fillable = array('name');
    
    public function SkillGroup()
    {
        return $this->belongsTo('SkillGroup');
    }
}