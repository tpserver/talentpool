<?php

/**
 *

 */
class EmailTemplate extends Eloquent{
    protected $table = 'email_templates';
    protected $fillable = ['name', 'subject', 'body', 'email_text_type'];
    public $timestamps = false;
    
    public static $rules = [
        //'name'      => 'required',
        'subject'   => 'required',
        'body'      => 'required',
    ];
    
    public function user()
    {
        return $this->belongsTo('User');
    }
    
    public function campaign()
    {
        return $this->hasMany('Campaign');
    }
}