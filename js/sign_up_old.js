$(document).ready(function() {

$("#education_form").hide();
//$("#basic_form").hide();
$("#other_form").hide();
$("#experience_form").hide();

$("#first_name_tooltip").hide();
$("#last_name_tooltip").hide();
$("#email_tooltip").hide();
$("#password_tooltip").hide();
$("#header_error").hide();
$("#header_tooltip").hide();
$("#status_message").hide();

$("#charity_radio_buttons").hide();

$("#legal_error").hide();

$(".charity_tick").hide();

$("#charity_description_1").hide();
$("#charity_description_2").hide();
$("#charity_description_3").hide();
$("#charity_description_4").hide();
$("#charity_description_5").hide();
$("#charity_description_6").hide();

$("#sport_level").hide();

$("input:text:visible:first").focus();

$("#next_button_basic").click(function() {

if (!$("#first_name_input").val()) {

$("#first_name_input").addClass("input_error");
$("#first_name_tooltip").fadeIn();
$("html, body").animate({ scrollTop: 0 }, "slow");

	}
else {
	var firstNameOk = true;
}

if (!$("#last_name_input").val()) {

$("#last_name_input").addClass("input_error");
$("#last_name_tooltip").fadeIn();
$("html, body").animate({ scrollTop: 0 }, "slow");


}
else {
	var lastNameOk = true;
}

if (!$("#email_input").val()) {

$("#email_input").addClass("input_error");
$("#email_tooltip").fadeIn();
$("html, body").animate({ scrollTop: 0 }, "slow");
	
}
else {
	var emailOk = true;
}

if (!$("#password_input").val()) {

$("#password_input").addClass("input_error");
$("#password_tooltip").fadeIn();
$("html, body").animate({ scrollTop: 0 }, "slow");

}
else {
	var passwordOk = true;
}

if ($('#sector_box input:checkbox:checked').length == 0) {

$("#header_error").show();
$("#header_tooltip").show();
$("html, body").animate({ scrollTop: 0 }, "slow");

}
else {
	var sectorOk = true;
}

if (firstNameOk == true && lastNameOk == true && emailOk == true && passwordOk == true && sectorOk == true) {

$("html, body").animate({ scrollTop: 0 }, "slow");

$("#segment_1").removeClass("pos_8").addClass("pos_7");

$("#segment_2").removeClass("pos_6").addClass("pos_5");

$("#basic_form").fadeOut("slow");

$("#education_form").fadeIn("slow");

}


});




$("#add_degree_button").click(function() {

$("#uni_details_box").clone().appendTo('#education_container');

$("#uni_details_box:last").addClass("second_degree");

$('<div class="delete_box_btn"></div>').appendTo('#education_container');

});

$("#add_qualification_button").click(function() {

$("#qualifications_box").clone().appendTo('#qualifications_container');

});

$("#add_experience_button").click(function() {

$("#work_experience_box").clone().appendTo('#work_experience_container');

});

$("#add_language_button").click(function() {

$("#languages_box").clone().appendTo('#language_container');

});

$(".charity_1").mouseover(function() {

$(this).addClass("charity_over");

});

$(".charity_1").mouseout(function() {

$(this).removeClass("charity_over");

});

$(".charity_2").mouseover(function() {

$(this).addClass("charity_over");

});

$(".charity_2").mouseout(function() {

$(this).removeClass("charity_over");

});

$(".charity_3").mouseover(function() {

$(this).addClass("charity_over");

});

$(".charity_3").mouseout(function() {

$(this).removeClass("charity_over");

});

$(".charity_4").mouseover(function() {

$(this).addClass("charity_over");

});

$(".charity_4").mouseout(function() {

$(this).removeClass("charity_over");

});

$(".charity_5").mouseover(function() {

$(this).addClass("charity_over");

});

$(".charity_5").mouseout(function() {

$(this).removeClass("charity_over");

});

$(".charity_6").mouseover(function() {

$(this).addClass("charity_over");

});

$(".charity_6").mouseout(function() {

$(this).removeClass("charity_over");

});

$(".charity_1").click(function() {

$(this).removeClass("charity_over");
$(".charity_1").removeClass("charity_on");
$(".charity_2").removeClass("charity_on");
$(".charity_3").removeClass("charity_on");
$(".charity_4").removeClass("charity_on");
$(".charity_5").removeClass("charity_on");
$(".charity_6").removeClass("charity_on");
$(this).addClass("charity_on");

$(".charity_description").hide();
$("#charity_description_1").fadeIn();

});

$(".charity_2").click(function() {

$(this).removeClass("charity_over");
$(".charity_1").removeClass("charity_on");
$(".charity_2").removeClass("charity_on");
$(".charity_3").removeClass("charity_on");
$(".charity_4").removeClass("charity_on");
$(".charity_5").removeClass("charity_on");
$(".charity_6").removeClass("charity_on");
$(this).addClass("charity_on");

$(".charity_description").hide();
$("#charity_description_2").fadeIn();

});

$(".charity_3").click(function() {

$(this).removeClass("charity_over");
$(".charity_1").removeClass("charity_on");
$(".charity_2").removeClass("charity_on");
$(".charity_3").removeClass("charity_on");
$(".charity_4").removeClass("charity_on");
$(".charity_5").removeClass("charity_on");
$(".charity_6").removeClass("charity_on");
$(this).addClass("charity_on");

$(".charity_description").hide();
$("#charity_description_3").fadeIn();

});

$(".charity_4").click(function() {

$(this).removeClass("charity_over");
$(".charity_1").removeClass("charity_on");
$(".charity_2").removeClass("charity_on");
$(".charity_3").removeClass("charity_on");
$(".charity_4").removeClass("charity_on");
$(".charity_5").removeClass("charity_on");
$(".charity_6").removeClass("charity_on");
$(this).addClass("charity_on");

$(".charity_description").hide();
$("#charity_description_4").fadeIn();

});

$(".charity_5").click(function() {

$(this).removeClass("charity_over");
$(".charity_1").removeClass("charity_on");
$(".charity_2").removeClass("charity_on");
$(".charity_3").removeClass("charity_on");
$(".charity_4").removeClass("charity_on");
$(".charity_5").removeClass("charity_on");
$(".charity_6").removeClass("charity_on");
$(this).addClass("charity_on");

$(".charity_description").hide();
$("#charity_description_5").fadeIn();

});

$(".charity_6").click(function() {

$(this).removeClass("charity_over");
$(".charity_1").removeClass("charity_on");
$(".charity_2").removeClass("charity_on");
$(".charity_3").removeClass("charity_on");
$(".charity_4").removeClass("charity_on");
$(".charity_5").removeClass("charity_on");
$(".charity_6").removeClass("charity_on");
$(this).addClass("charity_on");

$(".charity_description").hide();
$("#charity_description_6").fadeIn();

});

$("#charity_1_button").click(function() {

$(".charity_1").removeClass("charity_selected");
$(".charity_2").removeClass("charity_selected");
$(".charity_3").removeClass("charity_selected");
$(".charity_4").removeClass("charity_selected");
$(".charity_5").removeClass("charity_selected");
$(".charity_6").removeClass("charity_selected");
$(".charity_tick").hide();

$(".charity_1").removeClass("charity_on");
$(".charity_1").addClass("charity_selected");

$(".charity_1 .charity_tick").show().addClass("animated bounceIn");

$(".charity_button").each(function() {

$(this).show();

});

$(this).hide();

$("#charity_radio_1").prop('checked', true);

});

$("#charity_2_button").click(function() {

$(".charity_1").removeClass("charity_selected");
$(".charity_2").removeClass("charity_selected");
$(".charity_3").removeClass("charity_selected");
$(".charity_4").removeClass("charity_selected");
$(".charity_5").removeClass("charity_selected");
$(".charity_6").removeClass("charity_selected");
$(".charity_tick").fadeOut();

$(".charity_2").removeClass("charity_on");
$(".charity_2").addClass("charity_selected");

$(".charity_tick").addClass("animated bounceIn");

$(".charity_2 .charity_tick").show().addClass("animated bounceIn");

$(".charity_button").each(function() {

$(this).show();

});

$(this).hide();

$("#charity_radio_2").prop('checked', true);

});

$("#charity_3_button").click(function() {

$(".charity_1").removeClass("charity_selected");
$(".charity_2").removeClass("charity_selected");
$(".charity_3").removeClass("charity_selected");
$(".charity_4").removeClass("charity_selected");
$(".charity_5").removeClass("charity_selected");
$(".charity_6").removeClass("charity_selected");
$(".charity_tick").fadeOut();

$(".charity_3").removeClass("charity_on");
$(".charity_3").addClass("charity_selected");

$(".charity_tick").addClass("animated bounceIn");

$(".charity_3 .charity_tick").show().addClass("animated bounceIn");

$(".charity_button").each(function() {

$(this).show();

});

$(this).hide();

$("#charity_radio_3").prop('checked', true);

});

$("#charity_4_button").click(function() {

$(".charity_1").removeClass("charity_selected");
$(".charity_2").removeClass("charity_selected");
$(".charity_3").removeClass("charity_selected");
$(".charity_4").removeClass("charity_selected");
$(".charity_5").removeClass("charity_selected");
$(".charity_6").removeClass("charity_selected");
$(".charity_tick").fadeOut();

$(".charity_4").removeClass("charity_on");
$(".charity_4").addClass("charity_selected");

$(".charity_tick").addClass("animated bounceIn");

$(".charity_4 .charity_tick").show().addClass("animated bounceIn");

$(".charity_button").each(function() {

$(this).show();

});

$(this).hide();

$("#charity_radio_4").prop('checked', true);

});

$("#charity_5_button").click(function() {

$(".charity_1").removeClass("charity_selected");
$(".charity_2").removeClass("charity_selected");
$(".charity_3").removeClass("charity_selected");
$(".charity_4").removeClass("charity_selected");
$(".charity_5").removeClass("charity_selected");
$(".charity_6").removeClass("charity_selected");
$(".charity_tick").fadeOut();

$(".charity_5").removeClass("charity_on");
$(".charity_5").addClass("charity_selected");

$(".charity_tick").addClass("animated bounceIn");

$(".charity_5 .charity_tick").show().addClass("animated bounceIn");

$(".charity_button").each(function() {

$(this).show();

});

$(this).hide();

$("#charity_radio_5").prop('checked', true);

});

$("#charity_6_button").click(function() {

$(".charity_1").removeClass("charity_selected");
$(".charity_2").removeClass("charity_selected");
$(".charity_3").removeClass("charity_selected");
$(".charity_4").removeClass("charity_selected");
$(".charity_5").removeClass("charity_selected");
$(".charity_6").removeClass("charity_selected");
$(".charity_tick").fadeOut();

$(".charity_6").removeClass("charity_on");
$(".charity_6").addClass("charity_selected");

$(".charity_tick").addClass("animated bounceIn");

$(".charity_6 .charity_tick").show().addClass("animated bounceIn");

$(".charity_button").each(function() {

$(this).show();

});

$(this).hide();

$("#charity_radio_6").prop('checked', true);

});



$(document).on("mouseover", ".delete_box_btn", function() {

$(this).addClass("delete_btn_over");

});

$(document).on("mouseout", ".delete_box_btn", function() {

$(this).removeClass("delete_btn_over");

});

$(document).on("click", ".delete_box_btn", function() {

$(this).parent().remove();

});

$("#large_tick").mouseover(function() {

$(this).addClass("pulse");

});


$("#qual_type").change(function() {

var dropDownVal = $(this).val();

switch (dropDownVal) {
	
	case "a_level":
	
	$(this).next().next().empty().append('<option value="default">Result</option> <option value="A*">A*</option> <option value="A">A</option> <option value="B">B</option> <option value="C">C</option> <option value="D">D</option> <option value="E">E</option>');
	break;
	
	case "highers":
	
	$(this).next().next().empty().append('<option value="default">Result</option> <option value="A">A</option> <option value="B">B</option> <option value="C">C</option> <option value="D">D</option>');
	break;
	
	case "ib":
	
	$(this).next().next().empty().append('<option value="default">Result</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value=5">5</option> <option value="6">6</option>  <option value="7">7</option>');
	break;
	
	case "pre_u":
	
	$(this).next().next().empty().append('<option value="default">Result</option> <option value="D1">D1</option> <option value="D2">D2</option> <option value="D3">D3</option> <option value="M1">M1</option> <option value="M2">M2</option> <option value="M3">M3</option>  <option value="P1">P1</option> <option value="P2">P2</option> <option value="P3">P3</option>');
	break;
	
}



});

$("input#email_input").verimail({
    messageElement: "#status_message"
});

$("input#email_input").blur(function() {

var statusMessage = $("#status_message span").html();

var emailOkMessage = "Email looks OK";

if (statusMessage == emailOkMessage) {

$("#email_tooltip").fadeOut();
$("#email_input").removeClass("input_error");

}
else {
	
	$("#email_input").addClass("input_error");
	$("#email_tooltip").fadeIn();
	$("#email_tooltip_text").empty();
	$("#email_tooltip_text").html(statusMessage);
}

});

$(".suggestion").live( "click", function(){

var correctedEmail = $(this).text();

$("input#email_input").val(correctedEmail);

$("#email_tooltip").fadeOut();
$("#email_input").removeClass("input_error");

});

$("#society_radio").change(function() {

if ($(this).attr('checked', 'checked')) {
	$(this).parent().next().next().empty().append('<option value="default">Category</option><option value="academic">Academic</option><option value="appreciation">Appreciation</option><option value="artistic">Artistic and Cultural</option><option value="campaigning">Campaigning</option><option value="careers">Careers and Industry</option><option value="charity">Charity</option><option value="faith">Faith and Spiritual</option><option value="hobbies">Hobbies</option><option value="international">International</option><option value="military">Military and Adventure</option><option value="music_dance_theatre">Music, Dance and Theatre</option><option value="political">Political</option><option value="social">Social</option><option value="sports">Sports</option><option value="student_media">Student Media</option><option value="travel">Travel</option><option value="volunteering">Volunteering</option>');
	
	$("#sport_level").hide();
}

});

$("#sports_radio").change(function() {

if ($(this).attr('checked', 'checked')) {
	$(this).parent().next().empty().append('<option value="default">Sport</option><option value="athletics">Athletics</option><option value="badminton">Badminton</option><option value="baseball">Baseball</option><option value="basketball">Basketball</option><option value="boxing">Boxing</option><option value="cricket">Cricket</option><option value="cross_country">Cross Country</option><option value="darts">Darts</option><option value="decathalon">Decathlon</option><option value="football">Football</option><option value="golf">Golf</option><option value="gymnastics">Gymnastics</option><option value="hockey">Hockey</option><option value="horse_riding">Horse Riding</option><option value="golf">Golf</option><option value="gymnastics">Gymnastics</option><option value="hockey">Hockey</option><option value="horse_riding">Horse Riding</option><option value="lacrosse">Lacrosse</option><option value="modern_pentathlon">Modern Pentathlon</option><option value="motor_racing">Motor Racing</option><option value="netball">Netball</option><option value="polo">Polo</option><option value="rounders">Rounders</option><option value="rowing">Rowing</option><option value="rugby_league">Rugby League</option><option value="rugby_union">Rugby Union</option><option value="sailing">Sailing</option><option value="skiing">Skiing</option><option value="snooker">Snooker</option><option value="squash">Squash</option><option value="swimming">Swimming</option><option value="tennis">Tennis</option><option value="tetrathlon">Tetrathlon</option><option value="triathlon">Triathlon</option><option value="water_polo">Water Polo</option><option value="water_sports">Water Sports</option><option value="other">Other</option>');
	
	$(this).parent().next().next().next().empty().append('<option value="default">Position</option><option value="first_captaion">First Team Captain</option><option value="captain">Captain</option><option value="first_vice_captain">First Team Vice Captain</option><option value="first_member">First Team Member</option><option value="member">Member</option>');
	
	$(this).parent().next().next().show();
}

});

$("#first_name_input").blur(function() {

if ($("#first_name_input").val()) {
	
	$("#first_name_tooltip").fadeOut();
	$("#first_name_input").removeClass("input_error");
}

});

$("#last_name_input").blur(function() {

if ($("#last_name_input").val()) {
	
	$("#last_name_tooltip").fadeOut();
	$("#last_name_input").removeClass("input_error");
}

});

$("#email_input").blur(function() {

if ($("#email_input").val()) {
	
	$("#email_tooltip").fadeOut();
	$("#email_input").removeClass("input_error");
}

});

$("#password_input").blur(function() {

if ($("#password_input").val()) {
	
	$("#password_tooltip").fadeOut();
	$("#password_input").removeClass("input_error");
}

});



$("#next_button_education").click(function() {

var defaultError = false;

$("#education_form select").each(function() {

var selectValue = $(this).val();

if (selectValue == "default") {
	
	$(this).addClass("select_default_error");
	
	defaultError = true;

}

});


if (!defaultError) {

$("html, body").animate({ scrollTop: 0 }, "slow");

$("#segment_2").removeClass("pos_5").addClass("pos_1");

$("#segment_3").removeClass("pos_6").addClass("pos_5");

$("#education_form").fadeOut("slow");

$("#experience_form").fadeIn("slow");
	
}

});


$("#education_form select").live( "change", function(){


var changedValue = $(this).val();

if(changedValue !== "default") {

$(this).removeClass("select_default_error");

}

});





$("#next_button_experience").click(function() {

var defaultError = false;

$("#experience_form select").each(function() {

var selectValue = $(this).val();

if (selectValue == "default") {
	
	$(this).addClass("select_default_error");
	
	defaultError = true;

}

});

if (defaultError) {

$("html, body").animate({ scrollTop: 0 }, "slow");

$("#segment_3").removeClass("pos_5").addClass("pos_1");

$("#segment_4").removeClass("pos_6").addClass("pos_5");

$("#experience_form").fadeOut("slow");

$("#other_form").fadeIn("slow");

	
}

});


$("#experience_form select").live( "change", function(){


var changedValue = $(this).val();

if(changedValue !== "default") {

$(this).removeClass("select_default_error");

}

});



$("#next_button_other").click(function() {

var defaultError = false;

var errorThrown = false;

$("#other_form select").each(function() {

var selectValue = $(this).val();

if (selectValue == "default") {
	
	$(this).addClass("select_default_error");
	
	defaultError = true;

	errorThrown = true;
}

});

var birthDate = $("#month_dob").val() + " " + $("#date_dob").val() + " " + $("#year_dob").val();

birthDateConverted = Date.parse(birthDate);

eighteenYearsAgo = (18).years().ago(); 

if (birthDateConverted <= eighteenYearsAgo) {

	$("#month_dob").removeClass("select_default_error");
	$("#date_dob").removeClass("select_default_error");
	$("#year_dob").removeClass("select_default_error");

}

else {
	
	$("#month_dob").addClass("select_default_error");
	$("#date_dob").addClass("select_default_error");
	$("#year_dob").addClass("select_default_error");
	
	errorThrown = true;
	
}

if ($("#terms_checkbox").attr("checked") == "checked") {

$("#legal_error").hide();

}
else {
	$("#legal_error").show();
	
	errorThrown = true;
}


if (!errorThrown) {
	$("form").submit();
}

});

$("#other_form select").live( "change", function(){


var changedValue = $(this).val();

if(changedValue !== "default") {

$(this).removeClass("select_default_error");

}

});

$("#back_button_education").click(function() {

$("html, body").animate({ scrollTop: 0 }, "slow");

$("#segment_1").removeClass("pos_7").addClass("pos_8");

$("#segment_2").removeClass("pos_5").addClass("pos_6");

$("#education_form").fadeOut("slow");

$("#basic_form").fadeIn("slow");

});

$("#back_button_experience").click(function() {

$("html, body").animate({ scrollTop: 0 }, "slow");

$("#segment_2").removeClass("pos_1").addClass("pos_5");

$("#segment_3").removeClass("pos_5").addClass("pos_6");

$("#experience_form").fadeOut("slow");

$("#education_form").fadeIn("slow");


});

$("#back_button_other").click(function() {

$("html, body").animate({ scrollTop: 0 }, "slow");

$("#segment_3").removeClass("pos_1").addClass("pos_5");

$("#segment_4").removeClass("pos_5").addClass("pos_6");

$("#other_form").fadeOut("slow");

$("#experience_form").fadeIn("slow");

});



});
