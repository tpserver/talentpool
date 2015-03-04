@include('common.head', array('title', 'GradList - Frequently Asked Questions') )
<body>
@include('common.employeer_top_menu')
<div id="main_container">
    <h1>Campaigns / New Campaign</h1>
    @include('common.progress_indicator')
    <div id="campaing-steps-container">
        <div id="campaing-step-error-container" onclick="$(this).fadeOut()">{{trans('Please select Opportunity')}}</div>
            {{Form::open(['route'=>'new-campaign.save-step', 'id' => 'opportunity-form'])}}
            {{Form::hidden('step', 'opportunity')}}
                <div id="opportunity-container" class="campaign-step-container">
                    <div id="opportunity-select-box" class="campaing-select-container">
                        <div style="margin-bottom: 15px; font-size: 20px;">Select Opportunity</div>
                        <div id="existing-opportunity-container">
                            <table id="opportunity-table" class="new-campaing-component-table table table-hover table-bordered table-striped">
                                <col style="width:10%">
                                <col style="width:70%">
                                <col style="width:20%">
                                <tr>
                                    <th></th>
                                    <!--<th>Name</th>-->
                                    <th>Title</th>
                                    <th>Opportunity Type</th>
                                    <!--<th>Work Type</th>-->
                                    <!--<th>Location</th>-->
                                    <!--<th>Sectors</th>-->
                                </tr>
                                @if(count($opportunities)>0)
                                @foreach( $opportunities as $opportunity )
                                <?php
                                $style = '';
                                if($opportunity->id == Session::get('opportunity', 0))
                                {
                                    $style = 'bgcolor="#B3D4FC"';
                                }
                                ?>
                                <tr <?php echo $style;?>>
                                    <td class="candidate_radio" <?php echo $style;?>>{{Form::radio('opportunity', $opportunity->id, ($opportunity->id == Session::get('opportunity', 0)) )}}</td>
                                    <td class="pool_name">{{link_to_route('opportunity.show', $opportunity->name, [$opportunity->id])}}</td>
                                    <?php
                                    $opportunity_type = '';
                                    if( $opportunity->opportunity_type==1 )
                                    {
                                        $opportunity_type = 'Specific Role';
                                    }
                                    if( $opportunity->opportunity_type==2 )
                                    {
                                        $opportunity_type = 'Event Invitation';
                                    }
                                    if( $opportunity->opportunity_type==3 )
                                    {
                                        $opportunity_type = 'Employer Introduction';
                                    }
                                    ?>
                                    <td class="pool_size" <?php echo $style;?>>{{$opportunity_type}}</td>
                                    <!--<td class="pool_size" <?php echo $style;?>>{{$opportunity->workType->name}}</td>
                                    <td class="pool_size" <?php echo $style;?>>
                                        @foreach($opportunity->locations as $location)
                                        <div class="round-box" style="background: #2ecc71" >{{$location->name}}</div>
                                        @endforeach()
                                    </td>
                                   <td class="pool_filters">
                                            @foreach($opportunity->workSector as $workSector)
                                                <div class="round-box" style="background: {{$workSector->category['colour']}}" >{{$workSector->name}}</div>
                                            @endforeach
                                    </td>-->
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5">No Opportunity added yet!</td>
                                </tr>
                                @endif
                            </table>
                            <div id="new-opportunity-btn" class="new-campaing-component-btn">{{Form::radio('opportunity', 0)}}New Opportunity</div>
                        </div>
                    </div>
                    <div class="button-holder">
                        <!--<div class="red_button campaing-next-step-btn" onclick="campaingNextButton('opportunity-form', 'Please select opportunity')">Next</div>-->
                        <div class="red_button campaing-next-step-btn" onclick="campaingNextButton('opportunity-form', 'Please select opportunity')">Next</div>
                        
                    </div>
                </div>
            {{Form::close()}}
        </div>
    <div id="spacer"></div>
</div>
<!-- Modal -->
<div class="modal fade" id="show_opportunity_type" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <!--<form name="opportuityformtype" id="opportuityformtype" method="post" action="">-->
          What will you be contacting your talent pool about?
        {{Form::open(['route'=>'new-campaign.save-step-types', 'id' => 'opportuityformtype'])}}
        {{Form::hidden('step', 'opportunity')}}
          <input type="hidden" name="opportunity" value="0" />
          <input type="hidden" id="form_type_opportunity" name="form_type_opportunity" value="" >
          <button type="button" class="btn btn-primary" onclick="setOpportunityType(1);">A specific role</button>
          <button type="button" class="btn btn-primary" onclick="setOpportunityType(2);">An upcoming event</button>
          <button type="button" class="btn btn-primary" onclick="setOpportunityType(3);">General intro</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
{{ HTML::script('js/jquery-1.9.1.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
@include('campaign.common.bottom')
{{ HTML::script('js/campaign.js') }}
{{ HTML::script('js/jquery.ba-bbq.js') }}
{{ HTML::script('js/jquery.tokeninput.js') }}
{{ HTML::script('js/db_search.js') }} 
{{--print_r(Session::all())--}}
<script>
    /*function campaingNextButton(formId, errorMsg)
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
    }*/
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
                //$("#show_opportunity_type").modal('show');
                //alert('I am here!');
                form.submit();
            }
            else
            {
                form.submit();
            }
        }
    }
</script>
<script>
    setProgressIndicator('opportunity');
    function setOpportunityType(valID)
    {
    //alert(valID);
        $("#form_type_opportunity").val(valID);
        $("#opportuityformtype").submit();
    }
    
</script>
@section('bottom.content')
    
@stop