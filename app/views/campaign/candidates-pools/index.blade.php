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
            {{Form::open(['route'=>'new-campaign.save-step', 'id' => 'candidates-form'])}}
            {{Form::hidden('step', 'candidates')}}
                <div id="campaign-container" class="campaign-step-container">
                    <div id="candidate_pool_select_box" class="">
                        <div style="margin-bottom: 15px; font-size: 20px;">Select Talent Pool</div>
                        <div id="existing_pool_container">
                            <table id="candidate_pool_table" class="table table-hover table-bordered table-striped">
                            	<col style="width:10%">
                            	<col style="width:70%">
                            	<col style="width:20%">
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Size</th>
                                </tr>
                                <?php
                                if(count($candidatesPools)>0)
                                {
                                ?>
                                @foreach($candidatesPools as $candidatesPool)
                                <tr>
                                    <td class="candidate_radio">{{Form::radio('candidates-pool', $candidatesPool->id, ($candidatesPool->id == Session::get('candidates-pool', 0)))}}</td>
                                    <td class="pool_name">{{link_to_route('candidatesPool.show', $candidatesPool->name, [$candidatesPool->id])}}</td>
                                    <td class="pool_size">{{$candidatesPool->users->count()}}</td>
                                    <!--<td class="pool_filters">
                                        @foreach($candidatesPool->language as $language)
                                            <div class="round_box experience">Speaks {{$language->language->name}}
                                                @if(isset($language->languageLevel->name))
                                                    ({{$language->languageLevel->name}})
                                                @endif
                                            </div>
                                        @endforeach
                                        @foreach($candidatesPool->social as $social)
                                            <div class="round_box attribute">{{$social->socialPosition->name}} {{$social->socialCategory->name}}</div>
                                        @endforeach
                                        @foreach($candidatesPool->option as $option)
                                            <div class="round_box attribute">{{$option->name}}</div>
                                        @endforeach
                                    </td>-->
                                </tr>
                                @endforeach
                                <?php
                                }
                                else
                                {
                                ?>
                                <tr>
                                    <td colspan="4">
                                        No Talent Pool created yet!
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                            <div id="new-candidate-pool-btn" class="new-campaing-component-btn">{{Form::radio('candidates-pool', 0)}}New Talent Pool</div>
                        </div>
                    </div>
                    <div class="button-holder">
                        <div class="red_button campaing-back-step-btn" onclick="window.location='{{route('new-campaign.opportunity')}}'">Back</div>
                        <div class="red_button campaing-next-step-btn" onclick="campaingNextButton('candidates-form', 'Please select candidates pool')">Next</div>   
                    </div>
                </div>
            {{Form::close()}}
        </div>    
    <div id="spacer"></div>
</div>
@stop

@section('bottom.content')
    <script>
        setProgressIndicator('candidates');
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