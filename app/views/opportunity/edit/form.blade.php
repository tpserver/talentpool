 {{ Form::open(['url' => route('opportunity.editstore'), 'id' => 'new_opportunity_form'])}}
    <div class="opportunity_basic_info" id="blue_box">
        <div class="text_input_container">
            <input type="hidden" name="opportunity_code" value="{{$opprtunities_avail->id}}" />
            {{$errors->first('name', '<div class="error_overlay opportunity-name-error" id="first_name_error">:message</div>')}}
            {{Form::text('name', $opprtunities_avail->name, ['id' => 'opportunity_name_input', 'placeholder' => 'Opportunity Name'])}}
        </div>
        <div class="text_input_container" style="margin-right: 0">
            {{$errors->first('work-type', '<div class="error_overlay opportunity-work-error">:message</div>')}}
            <select id="work-type" name="work-type[]">
                <option value="0">Work Type</option>
                @foreach( $workTypes as $workType )
                    <option value="{{$workType->id}}" @if($workType->id == $opprtunities_avail->work_type_id){{'selected="selected"'}}@endif>{{ $workType->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="text_input_container">
            {{Form::text('salary', $opprtunities_avail->salary, ['id' => 'salary_input', 'placeholder' => 'Annual Salary'])}}
        </div>
        <?php
        $opportunity_date = explode("-",$opprtunities_avail->opportunity_date);
        $opportunity_date = $opportunity_date[2]."/".$opportunity_date[1]."/".$opportunity_date[0];
        $expected_hire_date = explode("-",$opprtunities_avail->hire_date);
        $expected_hire_date = $expected_hire_date[2]."/".$expected_hire_date[1]."/".$expected_hire_date[0];
        ?>
        <div class="text_input_container">
            <div class="error_overlay" id="event_date_error">Opportunity Start Date</div>
            {{$errors->first('opportunity_start_date', '<div class="error_overlay opportunity-name-error" id="opportunity_start_date_error">:message</div>')}}
            {{Form::text('opportunity_start_date', $opportunity_date, ['id' => 'opportunity_start_date', 'placeholder' => 'Opportunity Start Date'])}}
        </div>
        <div class="text_input_container" style="margin-right: 0">
            <div class="error_overlay" id="event_date_error">Expected Hire Date</div>
            {{$errors->first('expected_hire_date', '<div class="error_overlay opportunity-name-error" id="expected_hire_date_error">:message</div>')}}
            {{Form::text('expected_hire_date', $expected_hire_date, ['id' => 'expected_hire_date', 'placeholder' => 'Expected Hire Date'])}}
        </div>
        <div class="text_input_container">
            <div class="error_overlay" id="event_date_error">Employer Name</div>
            {{$errors->first('employer_name', '<div class="error_overlay opportunity-name-error" id="employer_name_error">:message</div>')}}
            {{Form::text('employer_name', $opprtunities_avail->emp_name, ['id' => 'employer_name', 'placeholder' => 'Employer Name'])}}
        </div>
        <div class="text_input_container" style="margin-right: 0">
            <div class="error_overlay" id="event_date_error">Employer Sector</div>
            {{$errors->first('employer_sector', '<div class="error_overlay opportunity-name-error" id="employer_sector_error">:message</div>')}}
            {{Form::text('employer_sector', $opprtunities_avail->emp_sector, ['id' => 'employer_sector', 'placeholder' => 'Employer Sector'])}}
        </div>
        <!--<div class="text_input_container" style="margin-right: 0">
            <div class="error_overlay" id="event_date_error">What to do next to progress the opportunity</div>
            {{$errors->first('what_to_do', '<div class="error_overlay opportunity-name-error" id="what_to_do_error">:message</div>')}}
            {{Form::text('what_to_do', $opprtunities_avail->opportunity_progress, ['id' => 'what_to_do', 'placeholder' => 'Opportunity Progress'])}}
        </div>-->
        <div id="spacer"></div>
    </div>
    <div id="blue_box">
        <div class="box_header">Location</div>
        @foreach($locations as $location)
            <?php 
            $isChecked = in_array($location->id, $opportunity_location);
            if($isChecked)
                $checked_value = 'true';
            else
                $checked_value = '';
            ?>
        <label class="location_checkbox">{{Form::checkbox('opportunity_location[]', $location->id, $checked_value)}}{{$location->name}}</label>
        @endforeach
        
        <div id="spacer"></div>
    </div>
    <div id="form_div_header">Sector</div>
    <div id="sector_box">
        <?php $_lastGroupId = 0; $_isOpened = false; ?>
        @foreach( $workOptions as $option )
            <?php
            $isChecked = in_array($option->id, $workSectors);
            if($isChecked)
                $checkd_value = 'true';
            else
                $checkd_value = '';
            //$paramSafeName = str_replace( ' ', '-', strtolower($option->group->name) );
            $paramSafeName = 'work_option';
            ?>
            @if( $option->group->id != $_lastGroupId && $_lastGroupId != 0 )
            </div>
            @endif
            @if( $option->group->id != $_lastGroupId || $_lastGroupId == 0 )
            <div class='search-filterbox-50' style="border-top: 10px solid {{ $option->group->colour }}">
            <div class="sector_grouping_header" style="color: {{ $option->group->colour }}">{{ $option->group->name }}</div>
            @endif
            <label class="checkbox">{{ Form::checkbox($paramSafeName.'[]', $option->id, $checkd_value, ['id' => $paramSafeName . '-' . $option->id]) }}
            {{ $option->name }}</label>
            <?php $_lastGroupId = $option->group->id; $_isOpened = true; ?>
        @endforeach
        @if( $_isOpened === true )
        </div>
        @endif 
    </div>
    <div class='clear'></div>
    <div id="button_holder">
                        
                    
    @if(Input::has('returnTo'))
        {{Form::hidden('returnTo', Input::get('returnTo'))}}
    @endif
    {{ Form::submit('Save', ['class' => 'red_button', 'id' => 'next_button_other']) }}
    </div>
{{ Form::close() }}