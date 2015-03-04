$(document).ready(function() {
	var controller = $.superscrollorama();
	
	controller.addTween('#section_1_container', TweenMax.to( $('#hero_logo'), .5, {css:{opacity: 0}}));
	
	controller.addTween('#step_icon_2', TweenMax.to( $('#home_topbar'), .2, {css:{"margin-top": "0px"}}));
	
$(".company").hoverIntent(fadeInfoIn, fadeInfoOut);

$(".principle").hoverIntent(fadePrincipleIn, fadePrincipleOut);

function fadePrincipleIn() {
$(this).children(".principle_overlay").fadeIn();
}

function fadePrincipleOut() {
$(this).children(".principle_overlay").fadeOut();
}

function fadeInfoIn() {
$(this).children().fadeIn();
}

function fadeInfoOut() {
$(this).children().fadeOut();
}

$("#hero_container").scrolly();

$("#hero_polygon").scrolly();

$("#hero_login_btn").click(function() {

event.stopPropagation();

$("body").removeClass("body_unshift");
$("body").addClass("body_shift");

});

$("body").click(function() {

$(this).removeClass("body_shift");
$(this).addClass("body_unshift");

});

});