<?php

class SchoolSubject extends \Eloquent {
    protected $table = 'school_subjects';
    protected $fillable = ['name', 'approved'];
    public $timestamps = false;
    
}