<?php

/**
 *

 */
class DegreeSupport extends Eloquent{
    protected $table = 'degrees';
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsToMany('User', 'user_degree');
    }
    
    public function university()
    {
        return $this->belongsTo('University');
    }
    
    public function type()
    {
        return $this->belongsTo('DegreeType', 'degree_type_id');
    }
    
    public function subject()
    {
        return $this->belongsTo('DegreeSubject', 'degree_subject_id');
    }
    
    public function result()
    {
        return $this->belongsTo('DegreeResult', 'degree_result_id');
    }
    
    public static function getDegree()
    {
        return self::with('university')->with('type')->with('subject');
    }
}
