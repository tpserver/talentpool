<?php

/**
 *

 */
class Ethnicity extends Eloquent{
    protected $table = 'ethnicities';
    public $timestamps = false;
    public $fillable = ['name', 'approved'];
    
    public function user()
    {
        return $this->belongsTo('User', 'users', `ethnicity_id`);
    }
    public function group()
    {
        return $this->belongsTo('EthnicityGroup');
    }
}
