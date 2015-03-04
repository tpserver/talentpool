{{ Form::open(['url' => route('opportunity.eventStore'), 'id' => 'new_opportunity_form'])}}
    <div class="opportunity_basic_info" id="blue_box">
        <div class="text_input_container">
            <div class="error_overlay" id="event_title_error">Event name required</div>
            {{$errors->first('event_title', '<div class="error_overlay opportunity-name-error" id="event_title_error">:message</div>')}}
            {{Form::text('event_title', '', ['id' => 'event_title', 'placeholder' => 'Event Title'])}}
        </div>
        <div class="text_input_container" style="margin-right: 0">
            <div class="error_overlay" id="event_date_error">Event start date required</div>
            {{$errors->first('event_date', '<div class="error_overlay opportunity-name-error" id="event_date_error">:message</div>')}}
            {{Form::text('event_date', '', ['id' => 'event_date', 'placeholder' => 'Event Date'])}}
        </div>
        <div class="text_input_container">
            <div class="error_overlay" id="rsvp_error">RSVP required</div>
            {{$errors->first('rsvp', '<div class="error_overlay opportunity-name-error" id="rsvp_error">:message</div>')}}
            {{Form::text('rsvp', '', ['id' => 'rsvp', 'placeholder' => 'RSVP'])}}
        </div>
        <div class="text_input_container" style="margin-right: 0">
            <div class="error_overlay" id="close_date_error">Event close date required</div>
            {{$errors->first('close_date', '<div class="error_overlay opportunity-name-error" id="close_date_error">:message</div>')}}
            {{Form::text('close_date', '', ['id' => 'close_date', 'placeholder' => 'Close Date'])}}
        </div>
        <div class="text_input_container">
            <div class="error_overlay" id="close_date_error">Event location</div>
            {{$errors->first('event_location', '<div class="error_overlay opportunity-name-error" id="event_location_error">:message</div>')}}
            {{Form::text('event_location', '', ['id' => 'event_location', 'placeholder' => 'Event Location'])}}
        </div>
        <div class="text_input_container" style="margin-right: 0">
            <div class="error_overlay" id="close_date_error">Event close date required</div>
            {{$errors->first('work-type', '<div class="error_overlay opportunity-work-error">:message</div>')}}
            @include('inputs.work_type_dropdown')
        </div>
        
        <div id="spacer"></div>
    </div>
    <!--<div id="blue_box">
        <div class="box_header">Event Location</div>
        @foreach($locations as $location)
        <label class="location_checkbox">{{Form::checkbox('opportunity_location[]', $location->id)}}{{$location->name}}</label>
        @endforeach
        <div id="spacer"></div>
    </div>-->
    <!--<div id="form_div_header">Sector</div>
    <div id="sector_box">
        @include('signup.inputs.work')
    </div>-->
    <div class='clear'></div>
    <div id="button_holder">
                        
                    
    @if(Input::has('returnTo'))
        {{Form::hidden('returnTo', Input::get('returnTo'))}}
    @endif
    {{ Form::submit('Save', ['class' => 'red_button', 'id' => 'next_button_other']) }}
    </div>
{{ Form::close() }}