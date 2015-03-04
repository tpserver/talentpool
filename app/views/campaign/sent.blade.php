@extends('layouts.employer')
@section('head.content')
    @include('campaign.common.head')
    <style>
            #new_email_box {
                background-color: #fff;
                padding-top: 40px;
                padding-left: 15px;
                width: 860px;
                margin-top: 15px;
                clear: both;
                background-image:url("../img/compose_mail_bg.png") ;
                background-repeat: no-repeat;
                width: 827px;
                margin-left: auto;
                margin-right: auto;
            }

            #email-template-name, #email-template-subject {
                width: 795px;
            }

            #email-template-text {
                width: 795px;
                margin-bottom: 0px;
            }

            #email_button_holder {
                padding-left: 15px;
                padding-right: 15px;
                width: 860px;
                margin-top: 15px;
                clear: both;
                background-repeat: no-repeat;
                width: 790px;
                margin-left: auto;
                margin-right: auto;
            }

            #new-email-template-cancel-btn {
                float: right;
            }

            button {
                font-family: "Lato", Arial,Helvetica,sans-serif;
            }
            #success_header {
                margin-top: 0;
                padding-top: 0;
            }
        </style>
@stop
@section('content')
        <div id="main_container">
            <h1>Campaigns / New Campaign</h1>
            @include('common.progress_indicator')
            <div id="campaing-steps-container">
               <div id="success_header">Congratulations! You've successfully sent a campaign</div>
                <div class="animated bounce" id="large_tick"></div>
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
    <script>
        setProgressIndicator('send');
    </script>
@stop