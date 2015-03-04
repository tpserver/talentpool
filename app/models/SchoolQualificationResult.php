<?php

class SchoolQualificationResult extends \Eloquent {
	protected $table = 'school_qualification_results';
    protected $fillable = ['name', 'approved'];
    public $timestamps = false;

    public function type()
    {
        return $this->belongsTo('SchoolQualificationType');
    }
}