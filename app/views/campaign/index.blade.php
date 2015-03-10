@extends('layouts_new.employer')

@section('title')
Campaign
@stop

@section('body')

<?php
if(count($campaigns)>0)
{
?>
@foreach($campaigns as $campaign)
    
<div class="campaign">

            <div class="info">
                        <div class="title">{{$campaign->name}}</div>
                        <div class="date">Sent on {{ date("l jS F",strtotime($campaign->updated_at)) }}</div>
            </div>
            
            <div class="contacted">
                        <div class="count">{{$campaign->emails_sent}}</div>
                        <div class="label">Contacted</div>
            </div>
            
            <div class="open_rate">
                        <div class="count">{{$campaign->open_rate}}%</div>
                        <div class="label">Opens</div>
            </div>
            
            <div class="click_rate">
                        <div class="count">14%</div>
                        <div class="label">Clicks</div>
            </div>

</div>

@endforeach
<?php
}
else {
?>
<tr>
    <td colspan="6">
        No Campaign created yet!
    </td>
</tr>
<?php
}
?>

<div class="button_container">
            <a href="{{ URL::route('new-campaign.opportunity') }}">
                        <div id="new_campaign_btn" class="button blue">New Campaign</div>
            </a>
</div>

</div>

</div>

@stop