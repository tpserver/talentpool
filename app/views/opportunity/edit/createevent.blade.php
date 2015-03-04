@include('common.head', array('title', 'GradList - Frequently Asked Questions') )
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<body>

                @include('common.employeer_top_menu')

        <div class="centered" id="main_container">
            <h1>Opportunities / New Opportunity</h1>
            @include('opportunity.edit.formevent')
        </div>
        <div id="footer"></div>
        @include('common.bottom')
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
$(function() {
            $( "#close_date" ).datepicker({ dateFormat: "yy-mm-dd" }).val();
            $( "#event_date" ).datepicker({ dateFormat: "yy-mm-dd" }).val();
            //$( "#format" ).change(function() {
            //            $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
            //});
});
</script>
    </body>

</html>