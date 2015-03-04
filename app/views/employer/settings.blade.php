@include('common.head', array('title', 'GradList - Frequently Asked Questions') )
<body>
@include('common.employeer_top_menu')
<div class="centered" id="main_container">
            <h1>{{trans('Settings')}}</h1>
{{ Form::open(array('method' => 'post', 'route'=> 'employer.update', 'onsubmit' => 'return checkFormValid();')) }}
           
            <div id="blue_box">
            <div class="box_header">Personal Details</div>
                    <div class="text_input_container">
                        <div class="error_overlay" id="first_name_error">First name required</div>
                        <input id="first_name_input" placeholder="First Name" name="first_name" type="text" value="{{Sentry::getUser()->first_name}}">
                    </div>
                    
                    <div class="text_input_container">
                        <div class="error_overlay" id="last_name_error">Last name required</div>
                        <input id="last_name_input" placeholder="Last Name" name="last_name" type="text" value="{{Sentry::getUser()->last_name}}">
                    </div>
                    
                    <div class="text_input_container">
                        <div class="error_overlay" id="company_name_error">Company name required</div>
                        <input id="company_name_input" placeholder="Company Name" name="company_name" type="text" value="{{Sentry::getUser()->company_name}}">
                    </div>
                    
                    <div class="text_input_container">
                        
                        <input id="email_input" placeholder="Email" name="email" type="text" value="{{Sentry::getUser()->email}}" readonly="true">
                    </div>
                    <div id="spacer"></div>

                </div>
                
            <!--<div id="blue_box">
                        <div class="box_header">Password</div>
                                <div id="old_password_container" class="text_input_container">
                                    
                                    <input id="old_password_input" placeholder="Old Password" name="name" type="text" value="">
                                </div>
                                
                                <div id="new_password_container" class="text_input_container">
                                    
                                    <input id="new_password_input" placeholder="New Password" name="name" type="text" value="">
                                </div>
                                
                                <div class="text_input_container">
                                    
                                    <input id="repeat_new_password_input" placeholder="Repeat New Password" name="name" type="text" value="">
                                </div>
                                
                                
                                
                                <div id="spacer"></div>
            
            
                            </div>-->
                            
            <div id="button_holder">
            	{{ Form::submit('Save', ['class' => 'red_button', 'id' => 'next_button_other']) }}
            </div>
 			
            <div id="spacer"></div>
    {{ Form::close() }}
</div>
@include('common.bottom')
</body>
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
function checkFormValid()
{
    var hasError = 0;
    var first_name = $('#first_name_input').val();
    var last_name = $('#last_name_input').val();
    var company_name = $('#company_name_input').val();
    
    if(first_name.search(/\S/)==-1)
    {
        hasError++;
        $("#first_name_error").fadeIn();
    }
    if(last_name.search(/\S/)==-1)
    {
        hasError++;
        $("#second_name_error").fadeIn();
    }
    if(company_name.search(/\S/)==-1)
    {
        hasError++;
        $("#company_name_error").fadeIn();
    }
    if(hasError > 0)
    {
        return false;
    }
    else
        return true;
}
</script>
</html>