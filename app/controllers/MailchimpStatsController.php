<?php 

//use GradList\Campaigns\CampaingList;

class MailchimpStatsController extends BaseController {

/*
|--------------------------------------------------------------------------
| Default Home Controller
|--------------------------------------------------------------------------
|
| You may wish to use controllers instead of, or in addition to, Closure
| based routes. That's great! Here is an example controller method to
| get you started. To route to this controller, just add the route:
|
| Route::get('/', 'HomeController@showWelcome');
|
*/
    private $mailchimp = null;
    
    public function __construct()
    {
        $this->mailchimp = new Mailchimp();
    }
    
    public function getStats($campaignId)
    {
        
    }
    
    public function updateAllStats()
    {
        $mailchimpCampaigns = MailchimpCampaign::all();
        $campaingsUpdatedCounter = 0;
        foreach($mailchimpCampaigns as $mailchimpCampaign)
        {
            if($mailchimpCampaign->campaign_identifier == '')
                continue;
            $stats = $mailchimpCampaign->getCampaignStats($mailchimpCampaign->campaign_identifier);
            $campaign = Campaign::find($mailchimpCampaign->campaign_id);
            $campaign->open_rate = $stats['openRate'];
            $campaign->emails_sent = $stats['emailsSent'];
            $campaign->save();
            $campaingsUpdatedCounter++;
        }
        
        return $campaingsUpdatedCounter;
    }
}