<?php

class CandidatesPoolLanguage extends \Eloquent {
    protected $table = 'candidates_pool_language';
    public $timestamps = false;
    protected $fillable = [];
    
    public function candidatesPool()
    {
        return $this->belongsToMany('CandidatesPool');
    }
    
    public function language()
    {
        return $this->belongsTo('LanguageName');
    }
    
    public function languageLevel()
    {
        return $this->belongsTo('LanguageLevel');
    }
    
    
}