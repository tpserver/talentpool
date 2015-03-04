@extends('layouts.employer')
@section('content')
    <h1>Email Templates</h1>
    <table class="table table-hover table-bordered table-striped">
        <tr>
            <!--<th>Name</th>-->
            <th>Subject</th>
            <th>Total campaigns</th>
            <th>Active campaign</th>
            <th></th>
        </tr>
        @foreach( $emailTemplates as $emailTemplate )
        <tr>
          <!--<td class="pool_name">{{ link_to_route('email-template.show', $emailTemplate->name, $emailTemplate->id) }}</td>-->
          <td class="pool_size">{{ link_to_route('email-template.show', $emailTemplate->subject, $emailTemplate->id) }}</td>
          <td class="pool_campaign_used">{{ $emailTemplate->campaign()->count() }}</td>
          <td class="pool_new_candidates">no</td>
          <td class="pool_filters">{{ link_to_route('email-template.edit', 'Edit', ['id' => $emailTemplate->id], ['id' => 'edit-template-btn', 'class' => 'small-button red-button float-left']) }}{{ Form::delete('email-template/' . $emailTemplate->id, 'Delete', [], ['class' => 'small-button red-button float-left mrg-left-5']) }}</td>
        </tr>
        @endForeach
    </table>
{{ link_to_route('email-template.create', 'New Email Template', [], ['id' => 'new_campaign_btn', 'class' => 'red_button']) }}
@stop