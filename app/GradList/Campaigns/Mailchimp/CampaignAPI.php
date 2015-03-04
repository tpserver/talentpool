<?php

namespace Gradlist\Campaigns\Mailchimp;

use Gradlist\Campaigns\CampaignAPI as CampaignInterface;
use Mailchimp;
/**
 * Description of CampaignList
 *

 */
//class CampaignAPI implements CampaignInterface{
class CampaignAPI {
    
    protected $mailchimp;
    protected $list = [
        'campaignList' => '7811874cb2'
    ];
    
    public function __construct(\MailChimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
        echo 'this';
    }
    
    public function create()
    {
        echo 'created';
    }
    public  function send()
    {
        echo 'send';
    }
}
