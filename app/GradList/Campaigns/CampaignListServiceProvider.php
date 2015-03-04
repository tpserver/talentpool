<?php
use Illuminate\Support\ServiceProvider; 

/**
 * Description of CampaignListServiceProvider
 *

 */
class CampaignListServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->bind(
                'GradList\Campaigns\CampaignList',
                'GradList\Campaigns\Mailchimp\CampaignList',
        );
    }

//put your code here
}
