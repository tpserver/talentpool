<?php 

//use GradList\Campaigns\CampaignList;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;


class CampaignController extends BaseController {

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
    
    private $_api_context;
    private $mailchimp = null;
    public function __construct()
    {
        $this->beforeFilter('auth');
        if( isset(Sentry::getUser()->id) )
            $this->_user = User::find(Sentry::getUser()->id);
        
         // setup PayPal api context
            $paypal_conf = Config::get('paypal');
            $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
            $this->_api_context->setConfig($paypal_conf['settings']);
            
        $this->mailchimp = new Mailchimp();
            
    }
    
    private $_user;
    protected $campaignSteps = ['opportunity', 'candidates', 'content', 'preview', 'payment', 'send'];
    protected $campaignRoutes = ['new-campaign.opportunity', 'new-campaign.candidates', 'new-campaign.email', 'new-campaign.preview', 'new-campaign.payment', 'new-campaign.sent'];
    protected $campaignStepValues = [
        'opportunity'   => 'opportunity',
        'candidates'    => 'candidates-pool',
        'content'       => 'email-template',
        'preview'       => '',
        'payment'       => '',
        'send'          => '',
    ];
    protected $campaignStepCreateRoutes = ['opportunity.create', 'search', 'email-template.create'];


    public function index()
    {
        //$campaigns = Campaign::all();
        $campaigns = Campaign::where('user_id','=',Sentry::getUser()->id)->get();
        return View::make('campaign.index', ['campaigns' => $campaigns, 'currentPage' => 'campaign']);
    }

    public function show($id)
    {
        $campaign = Campaign::find($id);       
//        $campaignStats = $campaign->mailchimp->getCampaignStats($campaign->mailchimp->campaign_identifier);
        return View::make('campaign.show', ['campaign' => $campaign, 'currentPage' => 'campaign']);
    }   

    public function opportunity()
    {
        //$opportunities = Opportunity::with('workType')->with('locations')->with('workSector')->get();
        $opportunities = Opportunity::where('employeer_id','=',Sentry::getUser()->id)->with('workType')->with('locations')->with('workSector')->get();
        //print_r($opportunities->workType->name);die();
        $data = [
            'opportunities' => $opportunities,
        ];
        return View::make('campaign.opportunity.index', $data);
    }
    
    public function email()
    {
        //$emailTemplates = EmailTemplate::all();
        $emailTemplates = EmailTemplate::where('user_id','=',Sentry::getUser()->id)->get();
        $data = [
            'emailTemplates' => $emailTemplates,
        ];
        return View::make('campaign.email-templates.index', $data);
    }
    
    public function candidates()
    {
        //$candidatesPools = CandidatesPool::all();
        $candidatesPools = CandidatesPool::where('user_id','=',Sentry::getUser()->id)->get();
        $data = [
            'candidatesPools' => $candidatesPools,
        ];
        return View::make('campaign.candidates-pools.index', $data);
        //return View::Make('candidates-pool.index', $data);
    }
    
    public function preview()
    {
        $data = [
            'opportunity'       => Opportunity::find(Session::get('opportunity', 0)),
            'candidatesPool'    => CandidatesPool::find(Session::get('candidates-pool', 0)),
            'emailTemplate'     => EmailTemplate::find(Session::get('email-template', 0)),
        ];
        //echo $data['opportunity']->id;die();
        //print_r($data);die();
        return View::make('campaign.preview', $data);
    }
    
    public function payment()
    {
        $data = [
            'opportunity'       => Opportunity::find(Session::get('opportunity', 0)),
            'candidatesPool'    => CandidatesPool::find(Session::get('candidates-pool', 0)),
            'emailTemplate'     => EmailTemplate::find(Session::get('email-template', 0)),
        ];
        return View::make('campaign.campaign-payment', $data);
    }
    
    public function create()
    {
        $opportunities = Opportunity::lists('name', 'id');
        $candidatesPools = CandidatesPool::lists('name','id');
        return View::make('campaign.create', ['currentPage' => 'campaign', 'opportunities' => $opportunities, 'candidatesPools' => $candidatesPools]);
    }

    public function create_campaign()
    {
        //$session_campaign = Session::get('campaign_id');
        //echo $session_campaign; die();
        $campaign_details = DB::table('campaigns')->where('id', '=', Session::get('campaign_id'))->first();
        //print_r($campaign_details);die();
        //echo $campaign_details->candidates_pool_id." ".$campaign_details->opportunity_id." ".$campaign_details->email_template_id;die();
        $candidatePoolId = DB::table('candidates_pools')->where('id', '=', $campaign_details->candidates_pool_id)->first();
        $opportunity = DB::table('opportunities')->where('id', '=', $campaign_details->opportunity_id)->first();
        $emailTemplates = DB::table('email_templates')->where('id', '=', $campaign_details->email_template_id)->first();
        //$id='049fed5a79';//test-talentpool-mj list id
        $id = '7b7bf138c1';// Talentpool Subscribed Users
        
        $bodyemail = '<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0;padding: 0;background-color: #ecf2f7;height: 100% !important;width: 100% !important;"><tr><td align="center" valign="top" id="bodyCell" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0;padding: 20px;border-top: 0;height: 100% !important;width: 100% !important;"><table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;border: 0;"><tr><td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="600" id="templatePreheader" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;"><tr><td valign="top" class="preheaderContainer" style="padding-top: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table width="100%" class="mcnTextBlock" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><tbody class="mcnTextBlockOuter"><tr><td class="mcnTextBlockInner" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table width="600" align="left" class="mcnTextContentContainer" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><tbody><tr><td class="mcnTextContent" valign="top" style="padding: 9px 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 11px;line-height: 125%;text-align: left;"><p style="margin: 1em 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 11px;line-height: 125%;text-align: left;">Your profile has been selected by an employer...</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr><tr><td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;"><tr><td valign="top" class="headerContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table width="100%" class="mcnImageBlock" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><tbody class="mcnImageBlockOuter"><tr><td class="mcnImageBlockInner" valign="top" style="padding: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table width="100%" align="left" class="mcnImageContentContainer" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><tbody><tr><td class="mcnImageContent" valign="top" style="padding: 0px 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img width="560" align="left" class="mcnImage" style="padding-bottom: 0px;vertical-align: bottom;display: inline !important;max-width: 560px;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" alt="" src="https://gallery.mailchimp.com/a1c4cf90611ec3040d61caec9/images/gl_email_footer.1.png" /></td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr><tr><td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;"><tr><td valign="top" class="bodyContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table width="100%" class="mcnTextBlock" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><tbody class="mcnTextBlockOuter"><tr><td class="mcnTextBlockInner" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table width="600" align="left" class="mcnTextContentContainer" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><tbody><tr><td id="email-body" class="mcnTextContent" valign="top" style="padding: 9px 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 15px;line-height: 150%;text-align: left;">Hello *|FNAME|*,<br/><br/>';
        /*if(Sentry::getUser()->company_name!=''){
             $bodyemail .= "<b>Company Name : " . Sentry::getUser()->company_name . "</b><br/>";
        }
        $bodyemail .= "<b>Employer Name : " . Sentry::getUser()->first_name." ".Sentry::getUser()->second_name . "</b></br>";
        $location_area = '';
        $opportunity_startDate = '0000-00-00';
        $opportunity_salary = 0;
        
        if($opportunity->opportunity_type==1)
        {
            $opportunity_details = Opportunity::where('id', '=', $campaign_details->opportunity_id)->with('workType')->with('locations')->with('workSector')->get();
            foreach($opportunity_details as $opportunity_detail)
                   $oppr_detail = $opportunity_detail;
            foreach($oppr_detail['locations'] as $locations)
                   $location_area .= $locations->name.",";
            $location_area = substr($location_area, 0, -1);
            $opportunity_startDate = $opportunity->opportunity_date;
            $opportunity_salary = $opportunity->salary;
            $bodyemail .= "<b>Opportunity Type : Specific Role</b><br/>";
        }
        else if($opportunity->opportunity_type==2){
            $bodyemail .= "<b>Opportunity Type : Event Invitation</b><br/>";
        }
        else if($opportunity->opportunity_type==3){
            $bodyemail .= "<b>Opportunity Type : Employer Introduction</b><br/>";
        }
        if($location_area != ''){
            $bodyemail .= "<b>Opportunity Location : " . $location_area . "</b><br/>";
        }
        if($opportunity_startDate != '0000-00-00'){
            $bodyemail .= "<b>Opportunity Date : " . $opportunity_startDate . "</b><br/>";
        }
        if($opportunity_salary > 0){
            $bodyemail .= "<b>Salary :" . $opportunity_salary . "</b><br/>";
        }*/
        $bodyemail .= $emailTemplates->body;
        $bodyemail .= '</td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr><tr><td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="600" id="templateFooter" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;"><tr><td valign="top" class="footerContainer" style="padding-bottom: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table width="100%" class="mcnTextBlock" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><tbody class="mcnTextBlockOuter"><tr><td class="mcnTextBlockInner" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table width="599" align="left" class="mcnTextContentContainer" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><tbody><tr><td class="mcnTextContent" valign="top" style="padding: 9px 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 11px;line-height: 125%;text-align: left;"><em>Copyright © GradList Ltd 2013, All rights reserved.</em><div style="text-align: left;"><a class="utilityLink" href="*|UNSUB|*" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-weight: normal;text-decoration: underline;">Unsubscribe</a></div><img width="560" height="75" align="none" src="https://gallery.mailchimp.com/a1c4cf90611ec3040d61caec9/images/gl_email_footer.1.png" style="border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;height: auto !important;"></td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table></td></tr></table>';
        
        $name = $campaign_details->name . '-'. $campaign_details->id;//name of the segment(here use the campaign name)
       
        $segment['id'] = $candidatePoolId->mailchimp_segment_id;
        //$segment['id'] = '30477';
        
       $options=array('list_id'=>$id,
                      'subject'=>$emailTemplates->subject,
                      //'subject'=>'Hello test',
                      'from_email'=>'tom@gradlist.co.uk',
                      'from_name'=>'Talentpool',
                      'to_name'=>'Dear Candidates');
       $content=array('html'=>$bodyemail,
                      );
      
        $conditions = array();
        $conditions[] = array(
            'field' => 'email',
            'op'    => 'like',
            'value' => '%'
        );
        
        $segment_opts = array(
            'saved_segment_id'=>$segment['id'],
            'match'      => 'all',
            'conditions' => $conditions
        );
        $type="regular";
        //segmentTest($list_id, $options);
       $campaignIdmailchimp = $this->mailchimp->campaigns->create($type, $options, $content, $segment_opts, '');
       //$this->mailchimp->campaigns->send($campaignIdmailchimp['id']); //have to open later when goes live comented by SD date 23/01/2015
       
       //die();
       //sample success response :Array ( [success_count] => 1 [error_count] => 0 [errors] => Array ( ) )
       
    }
    
    public function store()
    {
        $campaign_opportunity_id       = Input::get('opportunity');
        $campaign_name                 = Input::get('campaign-name');
        $campaign_candidate_pool_id    = Input::get('candidates_pool');
        $campaign_emailtemplate_id     = Input::get('email_template');
        $campaign_payment_type         = Input::get('payment_process');
        $total_user                    = Input::get('total_user');
        $user = Sentry::findUserById(Sentry::getUser()->id);
        
        if($campaign_payment_type == 1)
        {
            $payment_amount = (($total_user*2.5)+50);
            
            $campaign                       = new Campaign(Input::all());
            $campaign->name                 = Input::get('campaign-name');
            $campaign->opportunity_id       = Input::get('opportunity');
            $campaign->candidates_pool_id   = Input::get('candidates_pool');
            $campaign->email_template_id    = Input::get('email_template');
            $campaign->user_id              = Sentry::getUser()->id;
            $campaign->payment_amount       = $payment_amount;
            $campaign->total_sent_mail      = $total_user;
            $campaign->campaign_type        = 1;
            $campaign->save();
            //echo $campaign->id;die();
            Session::set('campaign_id', $campaign->id);
            //echo Session::get('campaign_id');die();
            Session::forget('campaign-name');
            Session::forget('opportunity');
            Session::forget('candidates_pool');
            Session::forget('candidates-pool');
            Session::forget('email_template');
            Session::forget('email-template');
            
            $userTotal = DB::table('candidates_pool_user')->where('candidates_pool_id', '=', $campaign_candidate_pool_id)->count();
            $total_amount = ($userTotal*2.5)+50;
            
            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            $item = new Item();
            $item->setName('For campaign - "'.$campaign_name.'"') // item name
                ->setCurrency('GBP')
                ->setQuantity(1)
                ->setPrice($total_amount); // unit price
            
            // add item to list
            $item_list = new ItemList();
            $item_list->setItems(array($item));

            $amount = new Amount();
            $amount->setCurrency('GBP')
                ->setTotal($total_amount);

            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($item_list)
                ->setDescription('Your transaction description');

            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(URL::route('payment.status'))
                ->setCancelUrl(URL::route('payment.status'));

            $payment = new Payment();
            $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));

            try {
                $payment->create($this->_api_context);
            } catch (\PayPal\Exception\PPConnectionException $ex) {
                if (\Config::get('app.debug')) {
                    echo "Exception: " . $ex->getMessage() . PHP_EOL;
                    $err_data = json_decode($ex->getData(), true);
                    exit;
                } else {
                    die('Some error occur, sorry for inconvenient');
                }
            }

            foreach($payment->getLinks() as $link) {
                if($link->getRel() == 'approval_url') {
                    $redirect_url = $link->getHref();
                    break;
                }
            }

            // add payment ID to session
            Session::put('paypal_payment_id', $payment->getId());

            if(isset($redirect_url)) {
                // redirect to paypal
                return Redirect::away($redirect_url);
            }

           // return Redirect::route('original.route')
           //     ->with('error', 'Unknown error occurred');
            echo 'Unknown error occurred'; die();

        }
        else
        {
            $payment_amount = (300+50);
            
            $campaign                       = new Campaign(Input::all());
            $campaign->name                 = Input::get('campaign-name');
            $campaign->opportunity_id       = Input::get('opportunity');
            $campaign->candidates_pool_id   = Input::get('candidates_pool');
            $campaign->email_template_id    = Input::get('email_template');
            $campaign->user_id              = Sentry::getUser()->id;
            $campaign->payment_amount       = $payment_amount;
            $campaign->total_sent_mail      = $total_user;
            $campaign->campaign_type        = 2;
            $campaign->save();
            Session::set('campaign_id', $campaign->id);
            $this->create_campaign();
            
            $total_amount = (300+50);
            
            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            $item = new Item();
            $item->setName('For campaign - "'.$campaign_name.'"') // item name
                ->setCurrency('GBP')
                ->setQuantity(1)
                ->setPrice($total_amount); // unit price
            
            // add item to list
            $item_list = new ItemList();
            $item_list->setItems(array($item));

            $amount = new Amount();
            $amount->setCurrency('GBP')
                ->setTotal($total_amount);

            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($item_list)
                ->setDescription('Your transaction description');

            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(URL::route('payment.status'))
                ->setCancelUrl(URL::route('payment.status'));

            $payment = new Payment();
            $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));

            try {
                $payment->create($this->_api_context);
            } catch (\PayPal\Exception\PPConnectionException $ex) {
                if (\Config::get('app.debug')) {
                    echo "Exception: " . $ex->getMessage() . PHP_EOL;
                    $err_data = json_decode($ex->getData(), true);
                    exit;
                } else {
                    die('Some error occur, sorry for inconvenient');
                }
            }

            foreach($payment->getLinks() as $link) {
                if($link->getRel() == 'approval_url') {
                    $redirect_url = $link->getHref();
                    break;
                }
            }

            // add payment ID to session
            Session::put('paypal_payment_id', $payment->getId());

            if(isset($redirect_url)) {
                // redirect to paypal
                return Redirect::away($redirect_url);
            }

           // return Redirect::route('original.route')
           //     ->with('error', 'Unknown error occurred');
            echo 'Unknown error occurred'; die();
            
            Mail::send('email.send-mail-fixedcampaign', ['siteName' => 'Talentpool', 'username'=> $user->first_name, 'email' => $user->email], function($message) use($user)
            {
                $message->to($user->email)->subject('Payment For Sending Campaign');
            });
            
            //$this->add_static_segment();
        }
        
        //These code comment out by sourav. but have to open later. 26_11_2014
        
        //$mailchimp = new Mailchimp();
        //$candidatesPool = CandidatesPool::find($campaign->candidates_pool_id);
        //$emailTemplate = EmailTemplate::find($campaign->email_template_id);
        //$user_emails = $candidatesPool->users()->get(['email']);
        //
        //$listId = MailchimpCampaign::$list;
        //$userId = $this->_user->id;
        //$campaignId = $campaign->id;
        //$segmentName = 'u'.$userId.'c'.$campaignId;
        //
        //$createSegmentResult        = $mailchimp->lists->staticSegmentAdd($listId, $segmentName);
        //$addEmailsToSegmentResult   = $mailchimp->lists->staticSegmentMembersAdd($listId, $createSegmentResult['id'], $user_emails);
        //$campaignCreateResult       = $this->createCampaign($listId, $createSegmentResult['id'], $emailTemplate->subject, $emailTemplate->body);
        //
        //$mailChimpData = new MailchimpCampaign(['campaign_identifier' => $campaignCreateResult['id'], 'list_identifier' => $listId, 'segment_identifier' => $createSegmentResult['id']]);
        //if( ( isset($createSegmentResult['status']) && $createSegmentResult['status'] == 'error' )
        //        || ( isset($addEmailsToSegmentResult['status']) && $addEmailsToSegmentResult['status'] == 'error' )
        //        || ( isset($campaignCreateResult['status']) && $campaignCreateResult['status'] == 'error' )){
        //    return Redirect::back()->with('error', 'An error occurred, please try again later');
        //}
        //$campaign->mailchimp()->save($mailChimpData);
        
        Session::forget('campaign-name');
        Session::forget('opportunity');
        Session::forget('candidates_pool');
        Session::forget('candidates-pool');
        Session::forget('email_template');
        Session::forget('email-template');
        
        return Redirect::to(route('new-campaign.sent'));
    }
    
    public function getPaymentStatus()
    {
        // Get the payment ID before session clear
        $payment_id = Session::get('paypal_payment_id');
        $campaign_id = Session::get('campaign_id');
        
        // clear the session payment ID
        Session::forget('paypal_payment_id');

        if (empty($_GET['PayerID']) || empty($_GET['token'])) {
            //return Redirect::route('original.route')
            //    ->with('error', 'Payment failed');
            
            DB::table('campaigns')->where('id', $campaign_id)->update(array('payment_type' => 0));
            echo 'Payment failed 1'; die();
        }

        $payment = Payment::get($payment_id, $this->_api_context);

        // PaymentExecution object includes information necessary 
        // to execute a PayPal account payment. 
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        //Execute the payment
        $result = $payment->execute($execution, $this->_api_context);
        //echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later

        if ($result->getState() == 'approved') { // payment made
            //return Redirect::route('original.route')
            //    ->with('success', 'Payment success');
            DB::table('campaigns')->where('id', $campaign_id)->update(array('payment_type' => 1,'paypal_payer_id' => Input::get('PayerID'),'paypal_payment_id' => $payment_id));
            //echo 'hi';
            //$this->add_static_segment();
            //echo Session::get('campaign_id');die();
            $this->create_campaign(); //send mailchimp after payment successful.
            $user = Sentry::findUserById(Sentry::getUser()->id);
            Mail::send('email.send-mail', ['siteName' => 'Talentpool', 'username'=> $user->first_name, 'email' => $user->email], function($message) use($user)
            {
                $message->to($user->email)->subject('Payment For Sending Campaign');
            });
            Session::forget('campaign_id');
            return Redirect::to(route('new-campaign.sent'));
        }
        //return Redirect::route('original.route')
        //    ->with('error', 'Payment failed');
        Session::forget('campaign_id');
        DB::table('campaigns')->where('id', $campaign_id)->update(array('payment_type' => 0));
        echo 'Payment Failed';die();
    }
    
    public function saveStep()
    {
        $currentStep = Input::get('step', $this->campaignSteps[0]);
        $currentStepValue = Input::get($this->campaignStepValues[$currentStep], 0);
        //echo $currentStepValue."<br/>";
        if($currentStepValue == 0 && isset($this->campaignStepCreateRoutes[array_search($currentStep, $this->campaignSteps)]) )
        {
            //echo $this->campaignStepCreateRoutes[array_search($currentStep, $this->campaignSteps)];die();
            return Redirect::to(route($this->campaignStepCreateRoutes[array_search($currentStep, $this->campaignSteps)],
                ['returnTo' => $this->campaignRoutes[array_search($currentStep, $this->campaignSteps)+1]]))->with('campaign', 1 );
        }
        Session::set($this->campaignStepValues[$currentStep], $currentStepValue);
        //echo (array_search($currentStep, $this->campaignSteps)+1); print_r($currentStep);print_r($this->campaignSteps);
        //echo $this->campaignRoutes[array_search($currentStep, $this->campaignSteps)+1]; die();
        return Redirect::to(route($this->campaignRoutes[array_search($currentStep, $this->campaignSteps)+1]));
    }
    
    public function saveStepTypes()
    {
        $currentStep = Input::get('step', $this->campaignSteps[0]);
        $currentStepValue = Input::get($this->campaignStepValues[$currentStep], 0);
        $routingType = Input::get('form_type_opportunity');
        if($routingType == 1 || $routingType == 2 || $routingType == 3)
        {
            $routingType = $routingType;
        }
        else
        {
            $routingType = 1;
        }
        if($currentStepValue == 0 && isset($this->campaignStepCreateRoutes[array_search($currentStep, $this->campaignSteps)]) )
        {
            ////echo $this->campaignStepCreateRoutes[array_search($currentStep,$this->campaignSteps)];print_r($currentStep); print_r($this->campaignSteps); 
            ////echo "<br/>".$this->campaignRoutes[array_search($currentStep, $this->campaignSteps)+1]; die();
            //Session::set('frmopportunitytype', $routingType);
            if($routingType==2)
            {
                return Redirect::to(route('opportunity.upcomingevent',
                ['returnTo' => 'new-campaign.candidates']))->with('campaign', 1 )->with('frmopportunitytype', $routingType);
                //echo "hi";die();
            }
            if($routingType==3)
            {
                return Redirect::to(route('opportunity.generalintro',
                ['returnTo' => 'new-campaign.candidates']))->with('campaign', 1 )->with('frmopportunitytype', $routingType);
                //echo "hello";die();
            }
            else
            {
                
                return Redirect::to(route($this->campaignStepCreateRoutes[array_search($currentStep, $this->campaignSteps)],
                ['returnTo' => $this->campaignRoutes[array_search($currentStep, $this->campaignSteps)+1]]))->with('campaign', 1 )->with('frmopportunitytype', $routingType);
            }
        }
    }
    
    private function createCampaign($listId, $segmentId, $subject, $body)
    {
        $mailchimp = new Mailchimp();
        $trackingOptions =  [ 'opens' => true,  'html_clicks' => true ];
        
        $options = [
            'list_id'       => $listId, 
            'subject'       => $subject,
            'from_email'    => 'no-reply@gradlist.co.uk', 
            'from_name'     => 'GradList',
            'tracking'      => $trackingOptions,
        ];
        $segment_opts = ['saved_segment_id'=> $segmentId, 'match' => 'all'];
        
        $content = ['html' => $body];

        return $mailchimp->campaigns->create('regular', $options, $content, $segment_opts);
    }
    
    private function sendCampaign($cid)
    {
        $t = new Mailchimp();
        return $t->campaigns->send($cid);
    }
    
    //Andrew
    public function new_opportunity()
    {
        return View::make('new_opportunity');
    }
    
    public function new_campaign()
    {
        $candidatesPools = CandidatesPool::all();
        $emailTemplates = EmailTemplate::all();
        $opportunities = Opportunity::all();
        $data = [
            'candidatesPools'   => $candidatesPools, 
            'emailTemplates'    => $emailTemplates,
            'opportunities'     => $opportunities,
            'workTypes'         => WorkType::all(), 
            'workOptions'       => Option::where('category_id', '=', 1)->get(),
            ];
        return View::make('campaign.new-campaign', $data);
    }

    public function new_campaign_search()
    {
        return View::make('search');
    }
    public function details()
    {
        return View::make('campaign.details');
    }
}