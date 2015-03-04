<?php

class SchoolQualification extends \Eloquent {
    protected $table = 'school_qualifications';
    public $timestamps = false;
    
    public function type()
    {
        return $this->belongsTo('SchoolQualificationType', 'school_qualification_type_id');
    }
    
    public function subjectType()
    {
        return $this->belongsTo('SchoolSubject', 'school_subject_id');
    }

    public function result()
    {
        return $this->belongsTo('SchoolQualificationResult', 'school_qualification_result_id');
    }

    public function user()
    {
        return $this->belongsToMany('User', 'user_school_qualification');
    }
    
    public static function getQualification()
    {
        return self::with('subjectType')->with('type')->with('subject');
    }
}