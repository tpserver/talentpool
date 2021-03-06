@extends('layouts.employer')
@section('head.content')
    @include('campaign.common.head')
    {{ HTML::style('css/pricing.css') }}
    {{ HTML::script('js/payment.js') }}
@stop
@section('content')
<div id="main_container">
    <h1>Campaigns / New Campaign</h1>
    @include('common.progress_indicator')
    <div id="campaing-steps-container">
        
        <div id="campaing-step-error-container" onclick="$(this).fadeOut()"></div>
        <div id="preview-container" class="campaign-step-container">
            <div id="preview-box">
            <?php
            $userTotal = DB::table('candidates_pool_user')->where('candidates_pool_id', '=', $candidatesPool->id)->count();
            ?>
                <!--<div style="margin-bottom: 15px; font-size: 20px;">Campaign Preview</div>-->
                {{Form::open([ 'url' =>route('campaign.store'), 'id'=>'save-campaign-form', 'style' =>'display: none'])}}
                    {{Form::hidden('step', 'preview')}}
                    <label>{{Form::text('campaign-name', '', ['placeholder' => 'Campaign Name', 'id' => 'campaign_name'])}}</label>
                    <label><input id="termscond_checkbox" type="checkbox" name="payment_terms_conditions_agree" value="1" /> I confirm that I have read and agree to the Terms and Conditions of Service {{ link_to('/assets/Terms_of_Service_TalentPool.pdf', '(Click to see)', ['target' => '_blank']) }} </label>
                    {{Form::hidden('opportunity', $opportunity->id, ['id'=>'campaign-opportunity'])}}
                    {{Form::hidden('candidates_pool', $candidatesPool->id, ['id'=>'campaign-candidates-pool'])}}
                    {{Form::hidden('email_template', $emailTemplate->id, ['id'=>'campaign-email-template'])}}
                    {{Form::hidden('total_user', $userTotal, ['id'=>'total_user'])}}
                    {{Form::hidden('payment_process', 1, ['id'=>'payment_process'])}}
                    <div class="red_button campaing-next-step-btn" onclick="campaingNextButton('save-campaign-form');">Next</div>
                {{Form::close()}}
                
                <div id="pricing_options_container">
                		<div class="pricing_heading">Which payment option works best for you? Please select one of the two options below</div>
                       <div class="pricing_option">
                       <div class="pricing_title">Select Fixed Fee Option</div>
                       <div class="pricing_price">£{{($userTotal*2.5)+50}}</div>
                       <div class="pricing_description">Simply pay a fixed campaign fee and a bit more for each message you send</div>
                        <table class="table table-bordered table-striped">
                            <th></th>
                            <th>Rate</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        <tr>
                            <td>Price per email</td>
                            <td>£2.50</td>
                            <td>{{$userTotal}}</td>
                            <td>£{{$userTotal*2.5}}</td>
                        </tr>
                        <tr>
                            <td>Campaign fee</td>
                            <td>£50</td>
                            <td>1</td>
                            <td>£50</td>
                            </tr>
                        </table>
                        <div id="single_payment_checkbox_container" class="pricing_checkbox">
                        <label class="payment_label"><input class="pricing_input" type="radio" name="payment_type" id="single_payment" value="1" checked="checked" /></label> </div>
                       </div>
                       <div class="pricing_or">Or</div>
                           <div class="pricing_option">
                               <div class="pricing_title">Select Success Fee Option</div>
                               <div class="pricing_price">£350</div>
                               <div class="pricing_description">Or swap the price per message for a 100% refundable success fee</div>
                               <table class="table table-bordered table-striped">
                                <th></th>
                                <th>Rate</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <tr>
                                <td>Price per hire</td>
                                <td>£300</td>
                                <td>1</td>
                                <td>£300</td>
                                </tr>
                                <tr>
                                    <td>Campaign fee</td>
                                    <td>£50</td>
                                    <td>1</td>
                                    <td>£50</td>
                                    </tr>
                                </table>
                               <div id="guranteed_hirepayment_checkbox_container" class="pricing_checkbox">
                               <label class="payment_label"><input class="pricing_input" type="radio" name="payment_type" id="guranteed_hirepayment" value="2" /></label>
                               
                               </div>
                           </div>
                    </div>
                
            </div>
            <div class="button-holder">
                <div class="red_button campaing-back-step-btn" onclick="window.location='{{route('new-campaign.email')}}'">Back</div>
                <!--<div id="paypal_button" class="red_button campaing-next-step-btn">Pay with</div>-->
                <div id="preview-next-step-btn" class="red_button campaing-next-step-btn">Pay with</div>
            </div>
        </div>
    </div>    
    <div id="spacer"></div>
</div>
@stop
@section('bottom.content')
{{ HTML::script('js/campaign.js') }}
{{ HTML::script('js/jquery.ba-bbq.js') }}
{{ HTML::script('js/jquery.tokeninput.js') }}
{{ HTML::script('js/db_search.js') }} 
{{--print_r(Session::all())--}}
<script>
    function campaingNextButton(formId)
    {
        //alert(formId);
        errorMsg = '';
        var form = $('#'+formId);
        var campaignName = $("#campaign_name").val();
        if (campaignName.search(/\S/)==-1) {
            errorMsg += 'Please give a campaign name.';
        }
        if (document.getElementById("termscond_checkbox").checked == false) {
            errorMsg += ' Please select our payment terms and conditions.';
        }
        if(errorMsg != '')
        {
            $("#campaing-step-error-container").height( 70 );
            $("#campaing-step-error-container").html(errorMsg);
            $("#campaing-step-error-container").show();
        }
        else
        {
            form.submit();
            
        }
    }
</script>
<script>
    $(function() {
        setProgressIndicator('send');
        //var iFrame = $('#preview-email-body');
        //iFrame.contents().find('#email-body').html('{{{$emailTemplate->name}}}');
        //iFrame.css('height', iFrame.contents().find('body').height());
        @if(isset($error))
            {{'showStepError("'.$error.'");'}}
        @endif
    });
    

    $('#single_payment').click(function() {
            if ($(this).is(':checked')) {
                $('#payment_process').val(1);
          // put your code here and your alert
       }
    });
    $('#guranteed_hirepayment').click(function() {
            if ($(this).is(':checked')) {
                $('#payment_process').val(2);
          // put your code here and your alert
       }
    });



</script>
@stop