<?php 

class SuscribeUserController extends BaseController {

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
    public function subscribe_new($user_email)
    {
       
       $id='049fed5a79';//test-talentpool-mj list id
       
       $batch=array('email'=>$user_email);
       //$batch[]=array('email'=>array('email' => 'saurav.dikshit@esolzmail.com'));
      //($id, $email, $merge_vars=null, $email_type='html', $double_optin=true, $update_existing=false, $replace_interests=true, $send_welcome=false)
       
       print_r($this->mailchimp->lists->subscribe($id,$batch,'','','','',''));
    }
   
    public function add_static_segment($campaign_name,$batch)//$campaign_name,$batch
    {
       
       $id='049fed5a79';//test-talentpool-mj list id
       $batch[]=array('email'=>'saurav.dikshit@esolzmail.com');
       $name='test_camp_1';//name of the segment(here use the campaign name)
       
       //$segment=$this->mailchimp->lists-> staticSegmentAdd($id,$campaign_name);
       //sample success response :Array ( [id] => 15089 )
       $segment['id']='29005';
        
       print_r($this->mailchimp->lists->staticSegmentMembersAdd($id,$segment['id'],$batch));
        
       //sample success response :Array ( [success_count] => 1 [error_count] => 0 [errors] => Array ( ) )
       
    }
    public function create_campaign()
    {
       
       $id='049fed5a79';//test-talentpool-mj list id
     
       $name='test_camp_1';//name of the segment(here use the campaign name)
       
       
       $segment['id']='29005';
       $options=array('list_id'=>$id,
                      'subject'=>"this is test mail from talentpool",
                      'from_email'=>'tom@gradlist.co.uk',
                      'from_name'=>'testing mailchimp',
                      'to_name'=>'Dear students');
       $content=array('html'=>'test in mailchimp html meaasge',
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
       print_r($this->mailchimp->campaigns->create($type, $options, $content, $segment_opts, ''));
       //print_r($this->mailchimp->campaigns->send('db0f033c6b'));
       
       // die();
       //sample success response :Array ( [success_count] => 1 [error_count] => 0 [errors] => Array ( ) )
       
    }
    
}