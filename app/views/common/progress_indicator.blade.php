<?php
$link_emailProgressIndicator = "Email";
if(Session::has('email-template') && Session::get('email-template')>0)
{
    $link_emailProgressIndicator = "new-campaign.email";
}
$link_opportunityProgressIndicator = "Opportunity";
if(Session::has('opportunity') && Session::get('opportunity')>0)
{
    $link_opportunityProgressIndicator = "new-campaign.opportunity";
}
$link_campaignProgressIndicator = "Candidates";
if(Session::has('candidates-pool') && Session::get('candidates-pool')>0)
{
    $link_campaignProgressIndicator = "new-campaign.candidates";
}
$link_previewProgressIndicator = "Preview";
if(Session::has('candidates-pool') && Session::has('opportunity') && Session::has('email-template'))
{
    $link_previewProgressIndicator = "new-campaign.preview";
}
?>

<div id="progress_container">
    <div id="progress-indicator-opportunity" class="progress_indicator step_1"></div>
    <div id="progress-indicator-candidates" class="progress_indicator step_2"></div>
    <div id="progress-indicator-content" class="progress_indicator step_3"></div>
    <div id="progress-indicator-preview" class="progress_indicator step_3"></div>
    <div id="progress-indicator-send" class="progress_indicator step_4"></div>
    <div class="step_text">@if(Session::has('opportunity') && Session::get('opportunity')>0){{ link_to_route($link_opportunityProgressIndicator, 'Opportunity') }} @else {{$link_opportunityProgressIndicator}} @endif </div>
    <div class="step_text">@if(Session::has('candidates-pool') && Session::get('candidates-pool')>0){{ link_to_route($link_campaignProgressIndicator, 'Candidates') }} @else {{$link_campaignProgressIndicator}} @endif </div>
    <div class="step_text">@if(Session::has('email-template') && Session::get('email-template')>0){{ link_to_route($link_emailProgressIndicator, 'Message') }} @else {{$link_emailProgressIndicator}} @endif </div>
    <div class="step_text">@if(Session::has('candidates-pool') && Session::has('opportunity') && Session::has('email-template')){{ link_to_route($link_previewProgressIndicator, 'Preview') }} @else {{$link_previewProgressIndicator}} @endif </div>
    <div class="step_text">Send</div>
</div>
<script>
    //$( document ).ready( function () {
    //    $(".email_section").click( function() {
    //        alert(1);
    //    });
    //});
</script>