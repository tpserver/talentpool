<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class UpdateMailchimpStatsCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'command:UpdateMailchimpStats';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Update Campaign stats with Mailchimp reports.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
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
            $this->info($campaingsUpdatedCounter.' Campaigns updated');
            return $campaingsUpdatedCounter;
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			
		);
	}

}
