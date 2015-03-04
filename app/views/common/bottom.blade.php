<div id="footer">

<div id="footer_container">

<div id="tp_logo_footer"></div>

<div id="footer_icon_container">
<div id="facebook" class="footer_icon"></div>
<div id="twitter" class="footer_icon"></div>
<div id="linkedin" class="footer_icon"></div>
</div>

<div id="copyright_container">&#169; TalentPool Ltd. 2014. All rights reserved.</div>

<div id="links_container">
{{ link_to_route('terms', 'Terms of Use', [], ['id'=>'terms_link']) }}
{{ link_to_route('policy', 'Privacy Policy', [], ['id'=>'privacy_link']) }}
{{ link_to_route('faq', 'FAQ') }}
</div>

<div id="spacer"></div>

</div>

</div>

{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
<script>window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><\/script>')</script>
{{ HTML::script('js/plugins.js') }}
{{ HTML::script('js/main.js') }}
{{ HTML::script('js/jquery.html5-placeholder-shim.js') }}
{{ HTML::script('js/jquery.matchHeight.js') }}
<script>
    var _gaq = [['_setAccount', 'UA-45195160-1'], ['_trackPageview']];
    (function(d, t) {
        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
        g.src = '//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));
</script>
<script>
    $(document).on('submit', '.delete-form', function(){
        return confirm('Are you sure?');
    });
    jQuery( document ).ready(function( $ ) {
       $('.search-filterbox-50').matchHeight();
       $('.search-filterbox-50 .checkbox').matchHeight();
    });

    @if(isset($schoolQualificationTypes))
        var schoolQualificationResults =
            {
            @foreach($schoolQualificationTypes as $schoolQualificationType)
            '{{$schoolQualificationType->id}}': ''+
                @foreach($schoolQualificationType->results as $result)
                    '<option value="{{$result->id}}">{{$result->name}}</option>'+
                @endforeach
                    '<option value="other">Other</option>',
            @endforeach
            }
    @endif
</script>
