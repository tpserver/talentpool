@extends('layouts.employer')
@section('head.content')
    @include('campaign.common.head')
@stop
@section('content')
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
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Work Type</th>
                                    <th>Sectors</th>
                                </tr>
                                @foreach( $opportunities as $opportunity )
                                <tr>
                                    <td class="candidate_radio">{{Form::radio('opportunity', $opportunity->id, ($opportunity->id == Session::get('opportunity', 0)) )}}</td>
                                    <td class="pool_name">{{link_to_route('opportunity.show', $opportunity->name, [$opportunity->id])}}</td>
                                    <td class="pool_size">
                                        @foreach($opportunity->locations as $location)
                                        <div class="round-box" style="background: #2ecc71" >{{$location->name}}</div>
                                        @endforeach()
                                    </td>
                                    <td class="pool_size">{{$opportunity->workType->name}}</td>
                                    <td class="pool_filters">
                                        @foreach($opportunity->workSector as $workSector)
                                            <div class="round-box" style="background: {{$workSector->category->colour}}" >{{$workSector->name}}</div>
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            <div id="new-opportunity-btn" class="new-campaing-component-btn">{{Form::radio('opportunity', 0)}}New Opportunity</div>
                        </div>
                    </div>
                    <div class="button-holder">
                        <div class="red_button campaing-next-step-btn" onclick="campaingNextButton('opportunity-form', 'Please select opportunity')">Next</div>
                    </div>
                </div>
            {{Form::close()}}
        </div>    
    <div id="spacer"></div>
</div>
@stop
@section('bottom.content')
    @include('campaign.common.bottom')
    <script>
        setProgressIndicator('opportunity');
    </script>
@stop