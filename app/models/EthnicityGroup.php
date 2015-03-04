<?php

/**
 *

 */
class EthnicityGroup extends Eloquent{
    protected $table = 'ethnicitiy_groups';
    public $timestamps = false;
    
    public function Ethnicity()
    {
        return $this->hasMany('Ethnicity', 'ethnicities', `group_id`);
    }
}
