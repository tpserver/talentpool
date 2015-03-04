{{ Form::open(['url' => route('opportunity.editintroStore'), 'id' => 'new_opportunity_form'])}}
    <div class="opportunity_basic_info" id="blue_box">
        <div class="text_input_container">
            <input type="hidden" name="opportunity_code" value="{{$opprtunities_avail->id}}" />
            {{$errors->first('company_name', '<div class="error_overlay opportunity-name-error" id="company_name_error">:message</div>')}}
            {{Form::text('company_name', $opprtunities_avail->name, ['id' => 'opportunity_company_name', 'placeholder' => 'Company Name'])}}
        </div>
        <div class="text_input_container" style="margin-right: 0">
            <div class="error_overlay" id="close_date_error">Event close date required</div>
            {{$errors->first('work-type', '<div class="error_overlay opportunity-work-error">:message</div>')}}
            <select id="work-type" name="work-type[]">
                <option value="0">Work Type</option>
                @foreach( $workTypes as $workType )
                    <option value="{{$workType->id}}" @if($workType->id == $opprtunities_avail->work_type_id){{'selected="selected"'}}@endif>{{ $workType->name }}</option>
                @endforeach
            </select>
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
    <div id="form_div_header">Company Sector</div>
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