$(document).ready(function() {

	$('body').click(function() {
	
	   $("#user_dropdown").removeClass("dropdown_focus");
	   $("#user_dropdown").addClass("dropdown_no_focus");
	   
	   $("#triangle_svg_no_focus").show();
	   $("#triangle_svg_focus").hide();
	   
	   $("#dropdown_menu").fadeOut("medium");
	   
	   
	});
	
	$("#user_dropdown").click(function(event) {
	
	event.stopPropagation();
	
	$(this).toggleClass("dropdown_focus");
	$(this).toggleClass("dropdown_no_focus");
	
	$("#triangle_svg_no_focus").toggle();
	$("#triangle_svg_focus").toggle();
	
	$("#dropdown_menu").fadeToggle("medium");
	
	});
	
    $("#first_name_input").focus();
    $("#quick_sign_up_btn").click(function() {
        $("form").submit();
    });

    $(".grey_button").mouseover(function() {
        $(this).addClass(".grey_button_over");
    });

    $(".grey_button").mouseover(function() {
        $(this).removeClass(".grey_button_over");
    });

    $(".green_button").mouseover(function() {
        $(this).removeClass("green_button");
        $(this).addClass("green_button_over");
    });

    $(".green_button").mouseout(function() {
        $(this).removeClass("green_button_over");
        $(this).addClass("green_button");
    });

    $(".dark_grey_button").mouseover(function() {
        $(this).removeClass("dark_grey_button");
        $(this).addClass("dark_grey_button_over");
    });

    $(".dark_grey_button").mouseout(function() {
        $(this).removeClass("dark_grey_button_over");
        $(this).addClass("dark_grey_button");
    });

    $("#fb_icon").mouseover(function() {
        $(this).css("background-position", "0px 0px");
    });


    $("#fb_icon").mouseout(function() {
        $(this).css("background-position", "0px -61px");
    });

    $("#twitter_icon").mouseover(function() {
        $(this).css("background-position", "122px 0px");
    });

    $("#twitter_icon").mouseout(function() {
        $(this).css("background-position", "122px -61px");
    });

    $("#email_icon").mouseover(function() {
        $(this).css("background-position", "61px 0px");
    });
    $("#email_icon").mouseout(function() {
        $(this).css("background-position", "61px -61px");
    });

    $("#carousel_button_1").click(function() {
        $("#logo_group").animate({left: "0px"}, 700);
        $("#carousel_button_1").addClass("carousel_active");
        $("#carousel_button_2").removeClass("carousel_active");
        $("#carousel_button_3").removeClass("carousel_active");
    });

    $("#carousel_button_2").click(function() {
        $("#logo_group").animate({left: "-976px"}, 700);
        $("#carousel_button_1").removeClass("carousel_active");
        $("#carousel_button_2").addClass("carousel_active");
        $("#carousel_button_3").removeClass("carousel_active");
    });

    $("#carousel_button_3").click(function() {
        $("#logo_group").animate({left: "-1951px"}, 700);
        $("#carousel_button_1").removeClass("carousel_active");
        $("#carousel_button_2").removeClass("carousel_active");
        $("#carousel_button_3").addClass("carousel_active");
    });
});

$('.error_overlay').click(function() {
    $(this).fadeOut();
    $(this).next().focus();
});

function setProgressIndicator(target) {
    var classesForCleanup = 'step-ready step-on step-first-ready step-last-ready step-first-on step-last-on';
    var _target = $('#progress-indicator-'+target);
    $('.progress_indicator').removeClass(classesForCleanup);
    _target.prevAll().addClass('step-ready');
    $('.progress_indicator:first').removeClass('step-ready').addClass('step-first-ready');
    if( _target.is('.progress_indicator:first') )
        _target.addClass('step-first-on');
    else if( _target.is('.progress_indicator:last') )
        _target.addClass('step-last-on');
    else
        _target.addClass('step-on');
}