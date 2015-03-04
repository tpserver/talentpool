<?php

class Campaign extends Eloquent{
    protected $table = 'campaigns';
    protected $fillable = array('name');
    

    public function candidatesPool()
    {
       return $this->belongsTo('CandidatesPool'); 
    }
    
    public function opportunity()
    {
        return $this->belongsTo('Opportunity');
    }
  
    public function user()
    {
        return $this->belongsTo('User');
    }
   
    public function mailchimp()
    {
        return $this->hasOne('MailchimpCampaign');
    }
}
