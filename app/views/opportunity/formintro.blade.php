{{ Form::open(['url' => route('opportunity.introStore'), 'id' => 'new_opportunity_form'])}}
    <div class="opportunity_basic_info" id="blue_box">
        <div class="text_input_container">
            {{$errors->first('company_name', '<div class="error_overlay opportunity-name-error" id="company_name_error">:message</div>')}}
            {{Form::text('company_name', Sentry::getUser()->company_name, ['id' => 'opportunity_company_name', 'placeholder' => 'Company Name'])}}
        </div>
        <div class="text_input_container" style="margin-right: 0">
            <div class="error_overlay" id="close_date_error">Event close date required</div>
            {{$errors->first('work-type', '<div class="error_overlay opportunity-work-error">:message</div>')}}
            @include('inputs.work_type_dropdown')
        </div>
        <!--<div class="text_input_container" style="margin-right: 0">
            {{$errors->first('work-type', '<div class="error_overlay opportunity-work-error">:message</div>')}}
            @include('inputs.work_type_dropdown')
        </div>
        <div class="text_input_container">
            {{Form::text('salary', '', ['id' => 'salary_input', 'placeholder' => 'Annual Salary'])}}
        </div>
        -->
        <div id="spacer"></div>
    </div>
    <div id="blue_box">
        <div class="box_header">Company Location</div>
        @foreach($locations as $location)
        <label class="location_checkbox">{{Form::checkbox('opportunity_location[]', $location->id)}}{{$location->name}}</label>
        @endforeach
        
        <div id="spacer"></div>
    </div>
    <div id="form_div_header">Company Sector</div>
    <div id="sector_box">
        @include('signup.inputs.work')
    </div>
    <div class='clear'></div>
    <div id="button_holder">
                        
                    
    @if(Input::has('returnTo'))
        {{Form::hidden('returnTo', Input::get('returnTo'))}}
    @endif
    {{ Form::submit('Save', ['class' => 'red_button', 'id' => 'next_button_other']) }}
    </div>
{{ Form::close() }}