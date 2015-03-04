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
            <h1>Campaigns</h1>
            <h2>New Campaign</h2>
            {{ Form::open(['url' => 'campaign', 'id' => 'new-campaign-form']) }}
                <div id="personal_box">
                    <div class="text_input_container">
                        <div class="error_overlay @if(($errors->first('name'))){{'visible'}}@endif" id="email-template-name-error">Campaign name required</div>
                        {{ Form::text('name', '', ['placeholder' => 'Campaign Name', 'id' => 'email-template-name', 'style' => 'width: 595px;']) }}
                    </div>
                    <div class="text_input_container">
                        <div class="error_overlay @if(($errors->first('opportunity'))){{'visible'}}@endif id="email-template-subject-error">Opportunity required</div>
                        {{ Form::select('opportunity',  $opportunities) }}
                    </div>
                    <div class="text_input_container">
                        <div class="error_overlay @if(($errors->first('candidates_pool'))){{'visible'}}@endif" id="email-template-body-error">Candidates pool required</div>
                        {{ Form::select('candidates_pool',  $candidatesPools) }}
                    </div>
                    <div class="text_input_container">
                        <div class="error_overlay @if(($errors->first('start_date'))){{'visible'}}@endif" id="email-template-body-error">Start date required</div>
                        {{ Form::text('start_date',  '', ['placeholder' => 'Start Date', 'id' => 'email-template-subject', 'style' => 'width: 595px;']) }}
                    </div>
                    {{ Form::submit('Save', ['id' => 'new_campaign_btn', 'class' => 'red-button small-button float-left mrg-left-5']) }}
                    {{ link_to_route('campaign.index', 'Cancel', [], ['id' => 'new_campaign_btn', 'class' => 'red-button small-button float-left mrg-left-5']) }}
                </div>
            {{ Form::close() }}
        </div>
        <div id="footer"></div>
    </body>
</html>
