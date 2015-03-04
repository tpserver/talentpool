<?php

class MailchimpCampaign extends \Eloquent {
    private $mailchimp  = null;
    protected $table    = 'mailchimp_campaigns';
    protected $fillable = ['campaign_id', 'campaign_identifier', 'list_identifier', 'segment_identifier'];
    public $timestamps  = false;
    public static $list = '7811874cb2';
    
//    public static $rules = [
//        'name'      => 'required',
//        'subject'   => 'required|min:4',
//        'body'      => 'required|min:250',
//    ];
    
    public function __construct()
    {
        $this->mailchimp = new Mailchimp();
    }
    
    public function getCampaignStats($cid)
    {
        $mailchimp = new Mailchimp();
        $mailchimpStats =  $mailchimp->reports->summary($cid);
        $openRate = $this->calculateOpenRate($mailchimpStats['unique_opens'], $mailchimpStats['hard_bounces'] + $mailchimpStats['soft_bounces'], $mailchimpStats['emails_sent']);
        
        return ['openRate'      => $openRate,
                'clickRate'     => $this->calculateClickRate($mailchimpStats['unique_clicks'], $mailchimpStats['unique_opens']),
                'emailsSent'    => $mailchimpStats['emails_sent'],
            ];
    }
    
    public function campaign()
    {
        return $this->belongsTo('Campaign');
    }
    
    private function calculateOpenRate($opens, $bounces, $sent)
    {
        return ($opens / $sent - $bounces) * 100;
    }
    
    private function calculateClickRate($clicks, $opens)
    {
        return ($clicks / $opens)*100;
    }
    
    private function calcuateBounceRate()
    {
        
    }

}