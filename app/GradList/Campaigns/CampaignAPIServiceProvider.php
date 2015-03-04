<?php
namespace GradList\Campaigns;

use Illuminate\Support\ServiceProvider; 

/**
 * Description of CampaignListServiceProvider
 *

 */
class CampaignAPIServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->bind(
                'GradList\Campaigns\CampaignAPI',
                'GradList\Campaigns\Test'
        );
    }

//put your code here
}
