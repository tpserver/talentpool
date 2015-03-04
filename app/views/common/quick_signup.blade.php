<div id="quick_sign_up">
    <div id="quick_sign_up_container">
        {{ Form::open( ['url' => 'sign-up', 'id' => 'quick_start_form', 'method' => 'post'] ) }}
            {{ Form::text('first_name', '', ['id'=> 'first_name_input', 'placeholder' => 'First Name']) }}
            {{ Form::text('last_name', '', ['id'=> 'last_name_input', 'placeholder' => 'Last Name']) }}
            {{ Form::text('email', '', ['id'=> 'email_input', 'placeholder' => 'Email']) }}
            <input id="password_input" type="password" name="password" value="" placeholder="Password"/>
            {{ Form::submit('Get Started!', ['id' => 'quick_sign_up_btn']) }}
        {{ Form::close() }}
    </div>
</div>