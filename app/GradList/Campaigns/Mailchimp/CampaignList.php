<?php

namespace Gradlist\Campaigns\Mailchimp;

use Gradlist\CampaignList\CampaignList as CampaignListInterface;
/**
 * Description of CampaignList
 *

 */
class CampaignList implements CampaignListInterface{
    
    protected $mailchimp;
    protected $list = [
        'campaignList' => '7811874cb2'
    ];
    
    public function __construct(\Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }
    
    public function subscribeTo($listName, $email)
    {
        return $this->mailchimp->lists->subscribe(
            $this->list[$listName], 
            ['email' => $email],
            null,
            'html',
            false,
            true
        );
    }
    
    public function unsubscribeFrom($list, $email)
    {
        return $this->mailchimp->lists->unsubscribe(
            $this->list[$listName], 
            ['email' => $email],
            false,
            false,
            false
        );
    }
    
}
