<?php

class Work extends \Eloquent {
    protected $fillable = [];
    protected $table_name = 'works';
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsToMany('User', 'user_work');
    }
    
    public function sector()
    {
        return $this->belongsTo('WorkSector', 'work_sector_id');
    }
    
    public function type()
    {
        return $this->belongsTo('WorkType', 'work_type_id');
    }
    
    public function duration()
    {
        return $this->belongsTo('WorkDuration', 'work_duration_id');
    }
    
    public static function getWork()
    {
        return self::with('sector')->with('type')->with('duration');
    }
}