<?php


class Language extends Eloquent{
    protected $table = 'languages';
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsToMany('User', 'user_language');
    }
    
    public function name()
    {
        return $this->belongsTo('LanguageName', 'name_id');
    }
    
    public function level()
    {
        return $this->belongsTo('LanguageLevel', 'level_id');
    }

}
