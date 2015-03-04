 <!--{{ Form::open(['url' => route('opportunity.store'), 'id' => 'new_opportunity_form'])}}-->
    <div id="opportunity_choice_box" class="opportunity_basic_info">
    <div class="box_header">Opportunity Type</div>
    <div id="opportunity_1" class="opportunity_tab left opportunity_selected">Specific Role</div>
    <div id="opportunity_2" class="opportunity_tab center">Upcoming Event</div>
    <div id="opportunity_3" class="opportunity_tab right">General Introduction</div>
    <div id="spacer"></div>
    </div>
     
    <div id="opportunity_option_1"  style="display: block;">
    {{ Form::open(['url' => route('opportunity.store'), 'id' => 'new_opportunity_form', 'onsubmit' => 'return checkFormValidation();'])}}
    <div id="blue_box_small_container">
    
    <div class="opportunity_basic_info blue_box_small_left" id="blue_box_small">
        <div class="text_input_container">
            <div class="error_overlay" id="opportunity_name_input_error">Opportunity Name required</div>
            {{$errors->first('name', '<div class="error_overlay opportunity-name-error" id="first_name_error">:message</div>')}}
            {{Form::text('name', '', ['id' => 'opportunity_name_input', 'placeholder' => 'Opportunity Name'])}}
            <!--{{$errors->first('name', '<div class="error_overlay opportunity-name-error" id="first_name_error">:message</div>')}}
            {{Form::text('name', '', ['id' => 'opportunity_name_input', 'placeholder' => 'Opportunity Name'])}}-->
        </div>
        <div id="work_type" class="text_input_container" style="margin-right: 0">
            <!--{{$errors->first('work-type', '<div class="error_overlay opportunity-work-error">:message</div>')}}
            @include('inputs.work_type_dropdown')-->
            <div class="error_overlay" id="work_type_error" style="width:190px;">Work Type required</div>
            {{$errors->first('work-type', '<div class="error_overlay opportunity-work-error">:message</div>')}}
            @include('inputs.work_type_dropdown')
        </div>
        <div id="salary" class="text_input_container">
            <!--{{Form::text('salary', '', ['id' => 'salary_input', 'placeholder' => 'Annual Salary'])}}-->
            <div class="error_overlay" id="salary_input_error" style="width:185px;">Annual Salary required</div>
            {{Form::text('salary', '', ['id' => 'salary_input', 'placeholder' => 'Annual Salary'])}}
        </div>
        <div class="text_input_container">
            <div class="error_overlay" id="employer_name_error">Employer Name required</div>
            {{$errors->first('employer_name', '<div class="error_overlay opportunity-name-error" id="employer_name_error">:message</div>')}}
            {{Form::text('employer_name', Sentry::getUser()->first_name." ".Sentry::getUser()->last_name, ['id' => 'employer_name', 'placeholder' => 'Employer Name'])}}
        </div>
        <div id="spacer"></div>
    </div>
    
    <div id="blue_box_small">
    <!--<div class="box_header">Start Date</div>-->
        <div class="text_input_container">    
            <div class="error_overlay" id="opportunity_start_date_error">Opportunity Start Date required</div>
            {{$errors->first('opportunity_start_date', '<div class="error_overlay opportunity-name-error" id="opportunity_start_date_error">:message</div>')}}
            {{Form::text('opportunity_start_date', '', ['id' => 'opportunity_start_date', 'autocomplete' => 'off', 'placeholder' => 'Opportunity Start Date'])}}
        </div>
    <!--<select name="date_dob" id="date_dob_opportunity">
    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
        </select>
        
            
        <select name="month_dob" id="month_dob_opportunity">
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
        </select>
        
        <select name="year_dob" id="year_dob_opportunity">
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>	
        </select>-->
        
        <!--<div class="box_header">Start Date</div>-->
        <div class="text_input_container">
            <div class="error_overlay" id="expected_hire_date_error">Expected Hire Date required</div>
            {{$errors->first('expected_hire_date', '<div class="error_overlay opportunity-name-error" id="expected_hire_date_error">:message</div>')}}
            {{Form::text('expected_hire_date', '', ['id' => 'expected_hire_date', 'autocomplete' => 'off', 'placeholder' => 'Expected Hire Date'])}}
        </div>
        
        <div class="text_input_container">
            <div class="error_overlay" id="employer_sector_error">Employer Sector required</div>
            {{$errors->first('employer_sector', '<div class="error_overlay opportunity-name-error" id="employer_sector_error">:message</div>')}}
            {{Form::text('employer_sector', '', ['id' => 'employer_sector', 'placeholder' => 'Employer Sector'])}}
        </div>
        <div id="spacer"></div>
    </div>
    
    </div>
    
    <div id="blue_box_opportunity">
        <!--<div class="box_header">Location</div>
        @foreach($locations as $location)
        <label class="location_checkbox">{{Form::checkbox('opportunity_location[]', $location->id)}}{{$location->name}}</label>
        @endforeach-->
        <div class="box_header">Location</div>
        @foreach($locations as $location)
        <label class="location_checkbox">{{Form::checkbox('opportunity_location[]', $location->id)}}{{$location->name}}</label>
        @endforeach
        <div id="spacer"></div>
    </div>
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
    <!--<div id="button_holder">
                        
                    
    @if(Input::has('returnTo'))
        {{Form::hidden('returnTo', Input::get('returnTo'))}}
    @endif
    {{ Form::submit('Save', ['class' => 'red_button', 'id' => 'next_button_other']) }}
    </div>-->
    {{ Form::close() }}
    </div>
    
     <div id="opportunity_option_2">
     {{ Form::open(['url' => route('opportunity.eventStore'), 'id' => 'new_opportunity_event_form', 'onsubmit' => 'return checkFormEventValidation();'])}}
     <div id="blue_box_opportunity">
     
         <div class="text_input_container">
             <div class="error_overlay" id="event_title_error" style="width: 630px;">Event name required</div>
             {{$errors->first('event_title', '<div class="error_overlay opportunity-name-error" id="event_title_error">:message</div>')}}
             {{Form::text('event_title', '', ['id' => 'event_title', 'placeholder' => 'Event Title'])}}
         <!--{{Form::text('name', '', ['id' => 'opportunity_event_name_input', 'placeholder' => 'Event Name'])}}-->
         </div>
         <div class="text_input_container" style="margin-right: 0">
                <div class="error_overlay" id="event_work_type_error" style="width: 190px;">Work Type required</div>
                {{$errors->first('work-type', '<div class="error_overlay opportunity-work-error">:message</div>')}}
                @include('inputs.work_type_dropdown')
         </div>
        <div id="spacer_blue_box"></div>
      </div>
     
     <div id="blue_box_opportunity">
        <div class="text_input_container">
     <!--<div class="box_header">Event Date</div>-->
             <div class="error_overlay" id="event_dates_error">Event start date required</div>
             {{$errors->first('event_date', '<div class="error_overlay opportunity-name-error" id="event_date_error">:message</div>')}}
             {{Form::text('event_date', '', ['id' => 'event_date', 'placeholder' => 'Event Date'])}}
         </div>
         <div class="text_input_container" style="margin-right: 0">
            <div class="error_overlay" id="close_date_error">Event close date required</div>
            {{$errors->first('close_date', '<div class="error_overlay opportunity-name-error" id="close_date_error">:message</div>')}}
            {{Form::text('close_date', '', ['id' => 'close_date', 'placeholder' => 'Close Date'])}}
         </div>
         <div class="text_input_container">
            <div class="error_overlay" id="rsvp_error">RSVP required</div>
            {{$errors->first('rsvp', '<div class="error_overlay opportunity-name-error" id="rsvp_error">:message</div>')}}
            {{Form::text('rsvp', '', ['id' => 'rsvp', 'placeholder' => 'RSVP'])}}
         </div>
     <!--<select name="date_dob" id="date_dob_opportunity">
     <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
         </select>
         
             
         <select name="month_dob" id="month_dob_opportunity">
         <option value="1">January</option>
         <option value="2">February</option>
         <option value="3">March</option>
         <option value="4">April</option>
         <option value="5">May</option>
         <option value="6">June</option>
         <option value="7">July</option>
         <option value="8">August</option>
         <option value="9">September</option>
         <option value="10">October</option>
         <option value="11">November</option>
         <option value="12">December</option>
         </select>
         
         <select name="year_dob" id="year_dob_opportunity">
         <option value="2014">2014</option>
         <option value="2015">2015</option>
         <option value="2016">2016</option>	
         </select>-->
     
     <div id="spacer_blue_box"></div>
     
     </div>
     
     <div id="blue_box_opportunity">
     
         <div class="text_input_container">
            <div class="error_overlay" id="opportunity_event_location_input_error" style="width: 830px;">Event location</div>
            {{$errors->first('event_location', '<div class="error_overlay opportunity-name-error" id="event_location_error">:message</div>')}}
            {{Form::text('event_location', '', ['id' => 'opportunity_event_location_input', 'placeholder' => 'Event Location'])}}
         <!--{{Form::text('name', '', ['id' => 'opportunity_event_location_input', 'placeholder' => 'Event Location'])}}-->
         </div>

         <div id="opportunity_event_location_map"></div>

         <div id="spacer_blue_box"></div>
     
     </div>
     
     <div id="button_holder">        
     @if(Input::has('returnTo'))
         {{Form::hidden('returnTo', Input::get('returnTo'))}}
     @endif
     {{ Form::submit('Save', ['class' => 'red_button', 'id' => 'next_button_other']) }}
     </div>
     {{ Form::close() }}
     </div>
     
     <div id="opportunity_option_3">
     {{ Form::open(['url' => route('opportunity.introStore'), 'id' => 'new_opportunity_intro_form', 'onsubmit' => 'return checkFormIntroValidation();'])}}
     <div id="blue_box_opportunity">
     
     <div class="text_input_container">
        <div class="error_overlay" id="opportunity_company_name_error" style="width: 620px;">Company Name required</div>
        {{$errors->first('company_name', '<div class="error_overlay opportunity-name-error" id="company_name_error">:message</div>')}}
        {{Form::text('company_name', Sentry::getUser()->company_name, ['id' => 'opportunity_company_name', 'placeholder' => 'Company Name'])}}
     <!--{{Form::text('name', '', ['id' => 'opportunity_event_name_input', 'placeholder' => 'Company Name'])}}-->
     </div>
     <div class="text_input_container">
        <div class="error_overlay" id="work_types_intro_error" style="width: 190px;">Work Type required</div>
        {{$errors->first('work-type', '<div class="error_overlay opportunity-work-error">:message</div>')}}
        @include('inputs.work_type_dropdown')
     </div>
     <div id="spacer_blue_box"></div>
     <!--<div id="blue_box_opportunity">
        <div class="box_header">Company Location</div>
        @foreach($locations as $location)
        <label class="location_checkbox">{{Form::checkbox('opportunity_location[]', $location->id)}}{{$location->name}}</label>
        @endforeach
     </div>-->
     </div>
     <div id="blue_box_opportunity">
        <!--<div class="box_header">Location</div>
        @foreach($locations as $location)
        <label class="location_checkbox">{{Form::checkbox('opportunity_location[]', $location->id)}}{{$location->name}}</label>
        @endforeach-->
        <div class="box_header">Location</div>
        @foreach($locations as $location)
        <label class="location_checkbox">{{Form::checkbox('opportunity_location[]', $location->id)}}{{$location->name}}</label>
        @endforeach
        <div id="spacer"></div>
     </div>
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
     </div>
    
    
    
<!--{{ Form::close() }}-->
<script>
 $(document).ready(function () {
        
        $("input:text:visible:first").focus();
        $("input[type='text']").focus(function() {
            $(this).prev().fadeOut();
        });
        $("input[type='password']").focus(function() {
            $(this).prev().fadeOut();
        });
    
    });
function checkFormIntroValidation()
{
    var checkFormError = 0;
    var company_name = $('#opportunity_company_name').val();
    var work_type = $('#new_opportunity_intro_form #work-type').val();
    if(company_name == '')
    {
        $("#opportunity_company_name_error").fadeIn();
        checkFormError++;
    }
    if(work_type < 1)
    {
        $("#work_types_intro_error").fadeIn();
        checkFormError++;
    }
    
    if(checkFormError == 0)
    {
        checkFormError = true;
    }
    else
    {
        checkFormError = false;
    }
    return checkFormError;
}
function checkFormEventValidation()
{
    var checkFormError = 0;
    var event_title = $('#event_title').val();
    var work_type = $('#new_opportunity_event_form #work-type').val();
    var event_date = $('#event_date').val();
    var event_close_date = $('#close_date').val();
    var rsvp = $('#rsvp').val();
    var opportunity_event_location = $('#opportunity_event_location_input').val();
    if(event_title == '')
    {
        $("#event_title_error").fadeIn();
        checkFormError++;
    }
    if(work_type < 1)
    {
        $("#event_work_type_error").fadeIn();
        checkFormError++;
    }
    if(event_date == '')
    {
        $("#event_dates_error").fadeIn();
        checkFormError++;
    }
    if(event_close_date == '')
    {
        $("#close_date_error").fadeIn();
        checkFormError++;
    }
    if(rsvp == '')
    {
        $("#rsvp_error").fadeIn();
        checkFormError++;
    }
    if(opportunity_event_location == '')
    {
        $("#opportunity_event_location_input_error").fadeIn();
        checkFormError++;
    }
    
    if(checkFormError == 0)
    {
        checkFormError = true;
    }
    else
    {
        checkFormError = false;
    }
    return checkFormError;
}
function checkFormValidation()
{
    var checkFormError = 0;
    var employer_sector = $('#employer_sector').val();
    var employer_name = $('#employer_name').val();
    var expected_hire_date = $('#expected_hire_date').val();
    var opportunity_start_date = $('#opportunity_start_date').val();
    var salary_input = $('#salary_input').val();
    var work_type = $('#work-type').val();
    var opportunity_name_input = $('#opportunity_name_input').val();
    if (employer_sector == "") {
            $("#employer_sector_error").fadeIn();
            checkFormError++;
    }
    if (employer_name == "") {
            $("#employer_name_error").fadeIn();
            checkFormError++;
    }
    if (expected_hire_date == "") {
        $("#expected_hire_date_error").fadeIn();
        checkFormError++;
    }
    if (opportunity_start_date == "") {
        $("#opportunity_start_date_error").fadeIn();
        checkFormError++;
    }
    if(salary_input=="")
    {
        $("#salary_input_error").fadeIn();
        checkFormError++;
    }
    if(work_type < 1)
    {
        $("#work_type_error").fadeIn();
        checkFormError++;
    }
    if(opportunity_name_input=="")
    {
        $("#opportunity_name_input_error").fadeIn();
        checkFormError++;
    }
    
    if(checkFormError == 0)
    {
        checkFormError = true;
    }
    else
    {
        checkFormError = false;
    }
    return checkFormError;
}
</script>