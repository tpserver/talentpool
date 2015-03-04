<?php

class SkillGroup extends \Eloquent {
    protected $table = 'skill_groups';
    protected $fillable = array('name');
    
    public function skill()
    {
        return $this->hasMany('Skill');
    }
}