@include('common.head', array('title', 'GradList - Frequently Asked Questions') )
    <body>
                @include('common.employeer_top_menu')

        <div class="centered" id="main_container">
            <h1>Opportunities / New Opportunity</h1>
            @include('opportunity.edit.formintro')
        </div>
        <div id="footer"></div>
        @include('common.bottom')
    </body>
</html>