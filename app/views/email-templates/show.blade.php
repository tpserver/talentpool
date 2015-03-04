@extends('layouts.employer')
@section('content')
    <h1>Email Templates</h1>
    <table class="table table-hover table-bordered table-striped">
        <!--<tr>
            <td class="pool_name">Name</td><td>{{{ $emailTemplate->name }}}</td>
        </tr>-->
        <tr>
            <td class="pool_size">Subject</td><td>{{{ $emailTemplate->subject }}}</td>
        </tr>
        <tr>
            <td class="pool_campaign_used">Body</td><td>{{ $emailTemplate->body }}</td>
        </tr>
    </table>
    {{ link_to_route('email-template.index', 'Back', [], ['id' => 'new_campaign_btn', 'class' => 'red-button small-button float-left mrg-left-5']) }}
@stop