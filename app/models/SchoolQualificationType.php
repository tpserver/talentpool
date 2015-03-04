<?php


/**
 * Description of SchoolQualificationType
 *

 */
class SchoolQualificationType extends Eloquent{
    protected $table = 'school_qualification_types';
    protected $fillable = ['name', 'approved'];
    public $timestamps = false;

    public function results()
    {
        return $this->hasMany('SchoolQualificationResult');
    }
}
