<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', array('title', 'GradList - Find a Job') )
        {{ HTML::style('css/policy.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/base.css') }}
        <style>
            input[type="text"], input[type="password"], input[type="email"] {
                height: 45px;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                <div id="spacer"></div>
            </div>
        </div>
        <form id="gl_sign_up" method="post" action="register" onsubmit="return CheckEMPRegister();">
            <div id="basic_form">
                <div id="form_div_header">Just a few basic details</div>
                <div id="personal_box">
                    <div class="text_input_container">
                        <div class="error_overlay" id="first_name_error">First name required</div>
                        {{Form::text('first_name', Input::old('first_name'), ['id' => 'first_name_input', 'placeholder' => 'First Name'])}}
                        <!--<input id="first_name_input" type="text" name="first_name" value="" placeholder="First Name"/>-->
                    </div>
                    <div class="text_input_container">
                        <div class="error_overlay" id="last_name_error">Last name required</div>
                        {{Form::text('last_name', Input::old('last_name'), ['id' => 'last_name_input', 'placeholder' => 'Last Name'])}}
                        <!--<input id="last_name_input" type="text" name="last_name" value="" placeholder="Last Name"/>-->
                    </div>
                    <div class="text_input_container">
                        <div class="error_overlay" id="email_formatting_error"></div>
                        <div class="error_overlay" id="email_in_use">Email in use</div>    
                        <div class="error_overlay" id="email_error">Email required</div>
                        <!--<input id="email_input" type="email" name="email" value="" placeholder="Email"/>-->
                        {{Form::email('email', Input::old('email'), ['id' => 'email_input', 'placeholder' => 'Email'])}}
                        <div id="status_message"></div>
                    </div>
                    <div class="text_input_container">
                        <div class="error_overlay" id="password_error">Password required</div>
                        <div class="error_overlay" id="password_valid_error">Password atleast 6 characters</div>
                        <input id="password_input" type="password" name="password" value="" placeholder="Password"/>
                    </div>
                    <div class="text_input_container">
                        <div class="error_overlay" id="company_in_use">Company Already Exist</div>    
                        <div class="error_overlay" id="company_error">Company name required</div>
                        <input id="company_name_input" type="text" name="company_name" value="" placeholder="Company Name"/>
                    </div>
                </div>
            </div>
            <div id="basic_form" style="margin: auto;">
                <div id="button_holder">
                    {{ Form::submit('Sign Up', ['class'=> 'red_button', 'id' => 'next_button_other', 'style' => 'height: 42px;']) }}
                </div>
            </div>
        </form>
    <div id="spacer"></div>
    <div id="footer"></div>
@include('common.bottom')
{{ HTML::script('/js/jquery-1.8.3.min.js') }}
{{ HTML::script('js/log_in.js') }}
{{ HTML::script('/js/plugins.js') }}
{{ HTML::script('/js/verimail.jquery.js') }}
{{ HTML::script('/js/main.js') }}
{{ HTML::script('/js/date.js') }}
{{ HTML::script('/js/jquery.ba-bbq.js') }}
{{ HTML::script('/js/jquery.html5-placeholder-shim.js') }}
<script>
    $(document).ready(function () {
        
        $("input:text:visible:first").focus();
        $("input[type='text']").focus(function() {
            $(this).prev().fadeOut();
        });
        $("input[type='password']").focus(function() {
            $(this).prev().fadeOut();
        });
    
    })
    function CheckEMPRegister()
    {
        var checkFormError = 0;
        var first_name = $("#first_name_input").val();
        var last_name = $("#last_name_input").val();
        var email_input = $("#email_input").val();
        var password = $('#password_input').val();
        var company_name = $('#company_name_input').val();
        if (first_name == "") {
            $("#first_name_error").fadeIn();
            checkFormError++;
        }
        if (last_name == "") {
            $("#last_name_error").fadeIn();
            checkFormError++;
        }
        if (email_input == "") {
            $("#email_error").fadeIn();
            checkFormError++;
        }
        else if(email_input != ""){
                $.post('checkEmail', {email: email_input})
                    .done(function(data) {
                        if (data == 'Positive') {
                           // alert(data);
                            checkFormError++;
                            $('#email_in_use').fadeIn();
                        }
                    });
        }
        if (password == "") {
            $("#password_error").fadeIn();
            checkFormError++;
        }
        else if(password != ""){
            var n = password.length;
            if(n < 6)
            {
                $("#password_valid_error").fadeIn();
                checkFormError++;
            }
        }
        if(company_name=="")
        {
            $("#company_error").fadeIn();
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
</body>
</html>