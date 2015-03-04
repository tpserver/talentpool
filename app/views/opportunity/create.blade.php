
        @include('common.head', array('title', 'GradList - Frequently Asked Questions') )
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <body>
                @include('common.employeer_top_menu')

        <div class="centered" id="main_container">
            <h1>Opportunities / New Opportunity</h1>
            @include('opportunity.form')
        </div>

        <div id="footer"></div>
        @include('common.bottom')
    </body>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
        {{ HTML::script('js/new_opportunity.js') }}
        {{ HTML::script('js/jquery.geocomplete.js') }}
<script>
$(function() {
            $( "#opportunity_start_date" ).datepicker({ dateFormat: "dd/mm/yy" }).val();
            $( "#expected_hire_date" ).datepicker({ dateFormat: "dd/mm/yy" }).val();            
            $( "#event_date" ).datepicker({ dateFormat: "dd/mm/yy" }).val();
            $( "#close_date" ).datepicker({ dateFormat: "dd/mm/yy" }).val();            
});
</script>
</html>
