<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', array('title', 'GradList - Frequently Asked Questions') )
        {{ HTML::style('css/base.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/db_search.css') }}
        {{ HTML::style('css/base_extended.css') }}
        {{ HTML::script('js/vendor/tinymce/js/tinymce/tinymce.min.js') }}
        <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            menubar: false,
            toolbar: 'undo redo | bold italic | link anchor | hr',
         });
        </script>
    </head>
    <body>
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                @include('common.employeer_top_menu')
            </div>
        </div>
        
        <div id="main_container">
            <h1>Email Templates</h1>
            <h2>New Template</h2>
            {{ Form::open(['url' => 'email-template', 'id' => 'new_opportunity_form']) }}
                <div id="personal_box">
                    <div class="text_input_container">
                        <div class="error_overlay @if(($errors->first('name'))){{'visible'}}@endif" id="email-template-name-error">Template name required</div>
                        {{ Form::text('name', '', ['placeholder' => 'Template Name', 'id' => 'email-template-name', 'style' => 'width: 595px;']) }}
                    </div>
                    <div class="text_input_container">
                        <div class="error_overlay @if(($errors->first('subject'))){{'visible'}}@endif id="email-template-subject-error">Email subject required</div>
                        {{ Form::text('subject', '', ['placeholder' => 'Email Subject', 'id' => 'email-template-subject', 'style' => 'width: 595px;']) }}
                    </div>
                    <div class="text_input_container" style="width: 600px">
                        <div class="error_overlay @if(($errors->first('body'))){{'visible'}}@endif" id="email-template-body-error">Email body required</div>
                        {{ Form::textarea('body', '', ['placeholder' => 'Email body', 'email-template-body' => 'body']) }}
                    </div>
                    <div class="create-control-buttons-container float-left">
                        {{ Form::submit('Save', [ 'class' => 'red-button small-button float-left mrg-left-5']) }}
                        {{ link_to_route('email-template.index', 'Cancel', [], ['class' => 'red-button small-button float-left mrg-left-5']) }}
                    </div>
                </div>
            {{ Form::close() }}
        </div>
        <div id="footer"></div>
    </body>
</html>
