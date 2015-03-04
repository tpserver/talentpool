<?php
/**
 * Description of DegreeType
 *

 */
class DegreeType extends Eloquent{
    protected $table = 'degree_types';
    protected $fillable = ['name', 'approved'];
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsToMany('User', 'user_degree');
    }
}

