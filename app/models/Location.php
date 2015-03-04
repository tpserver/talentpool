<?php

class Location extends \Eloquent {
    protected $table = 'locations';
    protected $fillable = array('name');
    
    public function country()
    {
        return $this->belongsTo('Country');
    }
    public function user()
    {
        return $this->belongsToMany('User', 'location_id');
    }
}