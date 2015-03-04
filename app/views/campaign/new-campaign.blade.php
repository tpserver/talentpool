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
        {{ HTML::style('css/db_search_new.css') }}
        {{ HTML::style('css/token-input.css') }}
        {{ HTML::style('css/token-input-facebook.css') }}
        {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') }}
        <script>window.jQuery || document.write('<script src="http://gradlist.laravel.dev/public/js/vendor/jquery-1.9.1.min.js">')</script>
        <style>
            #new_email_box {
                background-color: #fff;
                padding-top: 40px;
                padding-left: 15px;
                width: 860px;
                margin-top: 15px;
                clear: both;
                background-image:url("../img/compose_mail_bg.png") ;
                background-repeat: no-repeat;
                width: 827px;
                margin-left: auto;
                margin-right: auto;
            }

            #email-template-name, #email-template-subject {
                width: 795px;
            }

            #email-template-text {
                width: 795px;
                margin-bottom: 0px;
            }

            #email_button_holder {
                padding-left: 15px;
                padding-right: 15px;
                width: 860px;
                margin-top: 15px;
                clear: both;
                background-repeat: no-repeat;
                width: 790px;
                margin-left: auto;
                margin-right: auto;
            }

            #new-email-template-cancel-btn {
                float: right;
            }

            button {
                font-family: "Lato", Arial,Helvetica,sans-serif;
            }
            
        </style>
    </head>
    <body>
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                <div id="menu">
                    <div class="menu_option">Dashboard</div>
                    <div class="menu_option menu_option_selected">Campaigns</div>
                    <div class="menu_option">Candidates</div>
                    <div class="menu_option">Opportunities</div>
                </div>
            </div>
        </div>

        <div id="main_container">
            <h1>Campaigns / New Campaign</h1>
            @include('common.progress_indicator')
            <div id="campaing-steps-container">
                <div id="campaing-step-error-container" onclick="$(this).fadeOut()"></div>
                @include('campaign.opportunity.index', ['emailTemplates' => $emailTemplates])
                @include('campaign.candidates-pools.index', ['candidatesPools' => $candidatesPools])
                @include('campaign.email-templates.index', ['emailTemplates' => $emailTemplates])
                @include('campaign.preview')
            </div>    
            <div id="spacer"></div>
        </div>
    <div id="footer"></div>
    {{ HTML::script('js/plugins.js') }}
    {{ HTML::script('js/main.js') }}
    {{ HTML::script('js/jquery.html5-placeholder-shim.js') }}
    {{ HTML::script('js/vendor/tinymce/js/tinymce/tinymce.min.js') }}
    <script>
        var _gaq = [['_setAccount', 'UA-45195160-1'], ['_trackPageview']];
        (function(d, t) {
            var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
            g.src = '//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g, s)
        }(document, 'script'));
    </script>
    <script>
        tinymce.init({
            selector: 'textarea',
            menubar: false,
            plugins: ['anchor link code table contextmenu'],
            toolbar: 'undo redo | bold italic | hr | alignleft aligncenter alignright alignjustify | bullist numlist | link ',
            height: '200',
            theme: 'modern',
            skin: 'light',
            statusbar: false,
        });
        $(document).on('submit', '.delete-form', function(){
            return confirm('Are you sure?');
        });
        $(function() {
            @if(Session::get('candidates-pool', 0) > 0)
                {{"currentStep = 1;setProgressIndicator('content');$('#email-container').show();"}}
            @else    
                {{"$('.campaign-step-container:hidden:first').show();"}}
            @endif
            $('.campaing-back-step-btn:first').remove();
        });
        function loadCampaingPreview()
        {
            $.ajax({
                type: 'GET',
                url : '{{route("email-template.index")}}/'+$('[name="email-template"]:checked').val(),
                success : function(data){
                    
                    $('#preview-email-name').text(data.name);
                    $('#preview-email-subject').text(data.subject);
                    var iFrame = $('#preview-email-body');
                    iFrame.contents().find('#email-body').html(data.body);
                    iFrame.css('height', iFrame.contents().find('body').height());
                }
            }, 'json');
            $.ajax({
                type: 'GET',
                url : '{{route("candidatesPool.index")}}/'+$('[name="candidates-pool"]:checked').val(),
                success : function(data){
                    $('#campaign-candidates-pool').val($('[name="email-template"]:checked').val());
                    $('#preview-candidates-pool-name').text(data.name);
                    $('#preview-candidates-pool-size').text(data.userCount);
                }
            }, 'json');
            $.ajax({
                type: 'GET',
                url : '{{route("opportunity.index")}}/'+$('[name="opportunity"]:checked').val(),
                success : function(data){
                    $('#campaign-opportunity').val($('[name="opportunity"]:checked').val());
                    $('#preview-opportunity-name').text(data.name);
                    $('#preview-opportunity-work-type').text(data.work_type.name);
                    $('#preview-opportunity-work-location').text(data.location_id);
                    $('#preview-opportunity-work-salary').text(data.salary);
                }
            }, 'json');
        }
    </script>
    {{ HTML::script('js/campaign.js') }}
    {{ HTML::script('js/jquery.ba-bbq.js') }}
    {{ HTML::script('js/jquery.tokeninput.js') }}
    {{ HTML::script('js/db_search.js') }} 
    </body>
</html>
