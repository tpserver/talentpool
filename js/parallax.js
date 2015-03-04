$(document).ready(function() {
    (function($){
        $.fn.parallax = function(options){
            var $$ = $(this);
            offset = $$.offset();
            var defaults = {
                "start": 0,
                "stop": offset.top + $$.height(),
                "coeff": 0.95
            };
            var opts = $.extend(defaults, options);
            return this.each(function(){
                $(window).bind('scroll', function() {
                    windowTop = $(window).scrollTop();
                    if((windowTop >= opts.start) && (windowTop <= opts.stop)) {
                        newCoord = windowTop * opts.coeff;
                        $$.css({
                            "background-position": "330px "+ newCoord + "px"
                        });
                    }
                });
            });
        };
    })(jQuery);
    $('#gl_diagram').parallax({ "coeff":-0.15 });
});