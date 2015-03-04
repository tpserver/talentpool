<?php

class WorkSector extends \Eloquent {
    protected $table = 'work_sectors';
    protected $fillable = ['name', 'approved'];
    public $timestamps = false;
    
    public function category()
    {
        return $this->belongsTo('Category');
    }
}