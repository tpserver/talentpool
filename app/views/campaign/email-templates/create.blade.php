    {{ Form::open(['url' => 'email-template', 'id' => 'new-email-template-form']) }}
    <div id="new_email_box">
        <div id="template_name_box" class="text_input_container">
            <div class="error_overlay @if(($errors->first('name'))){{'visible'}}@endif" id="email-template-name-error">Template name required</div>
            {{ Form::text('name', Input::old('name'), ['placeholder' => 'Template Name', 'id' => 'email-template-name']) }}
        </div>
        <div class="text_input_container">
            <div class="error_overlay @if(($errors->first('subject'))){{'visible'}}@endif" id="email-template-subject-error">Email subject required</div>
            {{ Form::text('subject', Input::old('subject'), ['placeholder' => 'Email Subject', 'id' => 'email-template-subject']) }}
        </div>
        <div id="email-template-text" class="text_input_container">
            <div class="error_overlay @if(($errors->first('body'))){{'visible'}}@endif" id="email-template-body-error">Email body required</div>
            {{ Form::textarea('body', Input::old('body'), ['placeholder' => 'Email body', 'email-template-body' => 'body']) }}
        </div>
        <div class="create-control-buttons-container float-left"  id="email_button_holder">
            {{ Form::submit('Save', [ 'class' => 'red-button small-button float-left mrg-left-5']) }}
            {{ Form::button('Cancel', [ 'class' => 'red-button small-button float-left mrg-left-5', 'id' => 'new-email-template-cancel-btn']) }}
        </div>
        <div class="clear"></div>
    </div>
{{ Form::close() }}
