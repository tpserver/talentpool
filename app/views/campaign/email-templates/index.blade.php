@extends('layouts.employer')
@section('head.content')
    @include('campaign.common.head')
@stop
@section('content')
<div id="main_container">
    <h1>Campaigns / New Campaign</h1>
    @include('common.progress_indicator')
    <div id="campaing-steps-container">
        <div id="campaing-step-error-container" onclick="$(this).fadeOut()"></div>
        {{Form::open(['route'=>'new-campaign.save-step', 'id' => 'email-templates-form'])}}
        {{Form::hidden('step', 'content')}}
        <div id="email-container" class="campaign-step-container">
            <div id="email-template-select-box">
                <div style="margin-bottom: 15px; font-size: 20px;">Select Message</div>
                <div id="existing-email-templates-container">
                    <table id="email-templates-table" class="table table-hover table-bordered table-striped">
                        <col style="width:10%">
                        <col style="width:90%; text-align: left;">
                        <tr>
                            <th></th>
                            <!--<th>Name</th>-->
                            <th>Body</th>
                        </tr>
                        @foreach( $emailTemplates as $emailTemplate )
                        <tr>
                            <td class="candidate_radio">{{Form::radio('email-template', $emailTemplate->id, ($emailTemplate->id == Session::get('email-template', 0)) )}}</td>
                            <!--<td class="pool_name">{{link_to_route('email-template.show', $emailTemplate->name, [$emailTemplate->id])}}</td>-->
                            
                            <td class="email_body_table">{{ strip_tags($emailTemplate->body) }}</td>
                        </tr>
                        @endforeach
                    </table>
                    <div id="new-email-template-btn" class="new-campaing-component-btn">{{Form::radio('email-template', 0)}}New Message</div>
                </div>
            </div>

            <div class="button-holder">
                <div class="red_button campaing-back-step-btn" onclick="window.location='{{route('new-campaign.candidates')}}'">Back</div>
                <div class="red_button campaing-next-step-btn" onclick="campaingNextButton('email-templates-form', 'Please select email template');">Next</div>   
            </div>
        </div>
        {{Form::close()}}
    </div>    
    <div id="spacer"></div>
</div>
@stop
@section('bottom.content')
    <script>
        setProgressIndicator('content');
    </script>
    
{{ HTML::script('js/campaign.js') }}
{{ HTML::script('js/jquery.ba-bbq.js') }}
{{ HTML::script('js/jquery.tokeninput.js') }}
{{ HTML::script('js/db_search.js') }} 
{{--print_r(Session::all())--}}
<script>
    function campaingNextButton(formId, errorMsg)
    {
        var form = $('#'+formId);
        if(form.find('input:radio:checked').length == 0)
        {
            $("#campaing-step-error-container").height( 70 );
            $("#campaing-step-error-container").show();
            showStepError(errorMsg);
        }
        else
        {
            //alert($('opportunity').val());
            checkdVal = $('input:radio[name=opportunity]:checked').val();
            if (checkdVal==0)
            {
                $("#show_opportunity_type").modal('show');
            }
            else
            {
                form.submit();
            }
        }
    }
</script>
    
@stop