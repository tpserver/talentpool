<?php
namespace GradList\Campaigns;

/**
 *

 */
interface CampaignList {
    public function subscribeTo($list, $emails);
    
    public function unsubscribeFrom($list, $emails);
}
