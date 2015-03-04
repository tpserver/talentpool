$(document).ready(function() {

var firstName = $("#first_name_hidden").val();
var lastName = $("#last_name_hidden").val();
var email = $("#email_hidden").val();
var sectorInterest = $("#sector_interest_hidden").val();
var sectorInterestArray = sectorInterest.split("; ");
var sectorAgnostic = $("#sector_agnostic_hidden").val();

var degreeType = $("#degree_type_hidden").val();
var degreeTypeArray = degreeType.split("; ");
var degreeUni = $("#degree_uni_hidden").val();
var degreeUniArray = degreeUni.split("; ");
var degreeSubjectType = $("#degree_subject_type_hidden").val();
var degreeSubjectTypeArray = degreeSubjectType.split("; ");
var degreeSubjectName = $("#degree_subject_name_hidden").val();
var degreeSubjectNameArray = degreeSubjectName.split("; ");
var degreeResult = $("#degree_result_hidden").val();
var degreeResultArray = degreeResult.split("; ");
var degreeGraduation = $("#degree_graduation_hidden").val();
var degreeGraduationArray = degreeGraduation.split("; ");

var qualType = $("#qual_type_hidden").val();
var qualTypeArray = qualType.split("; ");
var qualSubjectType = $("#qual_subject_type_hidden").val();
var qualSubjectTypeArray = qualSubjectType.split("; ");
var qualSubjectName = $("#qual_subject_name_hidden").val();
var qualSubjectNameArray = qualSubjectName.split("; ");
var qualResult = $("#qual_result_hidden").val();
var qualResultArray = qualResult.split("; ");

var workType = $("#work_type_hidden").val();
var workTypeArray = workType.split("; ");
var workLength = $("#work_length_hidden").val();
var workLengthArray = workLength.split("; ");
var workSector = $("#work_sector_hidden").val();
var workSectorArray = workSector.split("; ");
var workOrganisation = $("#work_organisation_hidden").val();
var workOrganisationArray = workOrganisation.split("; ");

var societyCategory = $("#society_category_hidden").val();
var societyCategoryArray = societyCategory.split("; ");
var societyPosition = $("#society_position_hidden").val();
var societyPositionArray = societyPosition.split("; ");
var societyName = $("#society_name_hidden").val();
var societyNameArray = societyName.split("; ");

var sportCategory = $("#sport_category_hidden").val();
var sportCategoryArray = sportCategory.split("; ");
var sportPosition = $("#sport_position_hidden").val();
var sportPositionArray = sportPosition.split("; ");
var sportLevel = $("#sport_level_hidden").val();
var sportLevelArray = sportLevel.split("; ");

var englishLevel = $("#english_level_hidden").val();

var languages = $("#languages_hidden").val();
var languagesArray = languages.split("; ");
var languagesLevel = $("#languages_level_hidden").val();
var languagesLevelArray = languagesLevel.split("; ");

var charitySelection = $("#charity_selection_hidden").val();
var gender = $("#gender_hidden").val();
var ethnicity = $("#ethnicity_hidden").val();
var dateDob = $("#date_dob_hidden").val();
var monthDob = $("#month_dob_hidden").val();
var yearDob = $("#year_dob_hidden").val();
var emailsPerWeek = $("#emails_per_week_hidden").val();

$("#first_name_input").val(firstName);
$("#last_name_input").val(lastName);
$("#email_input").val(email);

// = Change Password = 

$("#change_password").click(function() {

$("#change_password_modal").fadeIn();
$("#modal_background").fadeIn();
$("#password_changed_success_container").hide();

$("#old_password_input").focus();

});


$("#reset_password_btn").click(function() {

var oldPassword = $("#old_password_input").val();
var newPassword = $("#new_password_input").val();
var newPasswordRepeat = $("#new_password_repeat_input").val();

var oldPasswordError;
var newPasswordError;

if (!(newPassword == newPasswordRepeat)) {
	
	$("#new_password_error").fadeIn();
	$("#new_password_repeat_error").fadeIn();
}
else {

$.post("/index.php/log_in/validate_password", { email: email, password: oldPassword})
  .done(function( data ) {

    if (data == "Incorrect") {
    	$("#old_password_error").fadeIn();
    }
    else {
    	 $.post("/index.php/log_in/change_password", { email: email, new_password: newPassword}).done(function(data) {
    	 		if(data == "Success") {
    	 		$("#change_password_modal").fadeOut();
    	 		$("#modal_background").fadeOut();
    	 		$("#password_changed_success_container").slideDown();
    	 		}
    	 	});
    	 }
  		});
  
}	

});

$("#modal_background").click(function() {

$("#change_password_modal").fadeOut();
$(this).fadeOut();

});


// = Sector Interest =

$("#sector_box input[type='checkbox']").each(function() {

checkboxValue = $(this).val();

arrayKey = jQuery.inArray(checkboxValue, sectorInterestArray);

if (!(arrayKey == -1)) {
	$(this).prop('checked', true);
}
	

});


if (sectorAgnostic == "yes") {
	$("#sector_agnostic_yes").prop('checked', true);
}
else {
	$("#sector_agnostic_no").prop('checked', true);
}

// = University =

for (var i = 0; i < (degreeTypeArray.length-1); i++) {

$("#uni_details_box").clone().appendTo('#education_container');

}

var key = 0;

$(".degree_type_input").each(function() {

$(this).val(degreeTypeArray[key]);

key++;

});

var key = 0;

$(".degree_uni_input").each(function() {

$(this).val(degreeUniArray[key]);

if ($(this).val() == "default" && !( typeof degreeUniArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + degreeUniArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});

var key = 0;

$(".degree_subject_type_input").each(function() {

$(this).val(degreeSubjectTypeArray[key]);

if ($(this).val() == "default" && !( typeof degreeSubjectTypeArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + degreeSubjectTypeArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});

var key = 0;

$(".degree_subject_name_input").each(function() {

$(this).val(degreeSubjectNameArray[key]);

if ($(this).val() == "default" && !( typeof degreeSubjectNameArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + degreeSubjectNameArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});

var key = 0;

$(".degree_result_input").each(function() {

$(this).val(degreeResultArray[key]);

if ($(this).val() == "default" && !( typeof degreeResultArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + degreeResultArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});

$(".degree_graduation_input").each(function() {

$(this).val(degreeGraduationArray[key]);

if ($(this).val() == "default" && !( typeof degreeGraduationArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + degreeGraduationArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});

// = Qualifications =

for (var i = 0; i < (qualTypeArray.length-1); i++) {

$("#qualifications_box").clone().appendTo('#qualifications_container');

}

var key = 0;

$(".qual_type_input").each(function() {

$(this).val(qualTypeArray[key]);

switch (qualTypeArray[key]) {
	
	case "a_level":
	
	$(this).next().next().next().empty().append('<option value="default">Result</option> <option value="A*">A*</option> <option value="A">A</option> <option value="B">B</option> <option value="C">C</option> <option value="D">D</option> <option value="E">E</option><option value="na">N/A</option>');
	break;
	
	case "highers":
	
	$(this).next().next().next().empty().append('<option value="default">Result</option> <option value="A">A</option> <option value="B">B</option> <option value="C">C</option> <option value="D">D</option><option value="na">N/A</option>');
	break;
	
	case "ib":
	
	$(this).next().next().next().empty().append('<option value="default">Result</option> <option value="n">N</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value=5">5</option> <option value="6">6</option>  <option value="7">7</option><option value="na">N/A</option>');
	break;
	
	case "pre_u":
	
	$(this).next().next().next().empty().append('<option value="default">Result</option> <option value="D1">D1</option> <option value="D2">D2</option> <option value="D3">D3</option> <option value="M1">M1</option> <option value="M2">M2</option> <option value="M3">M3</option>  <option value="P1">P1</option> <option value="P2">P2</option> <option value="P3">P3</option><option value="na">N/A</option>');
	break;
	
}

key++;

});

var key = 0;

$(".qual_subject_type_input").each(function() {

$(this).val(qualSubjectTypeArray[key]);

if ($(this).val() == "default" && !( typeof qualSubjectTypeArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + qualSubjectTypeArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});

var key = 0;

$(".qual_subject_name_input").each(function() {

$(this).val(qualSubjectNameArray[key]);

if ($(this).val() == "default" && !( typeof qualSubjectNameArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + qualSubjectNameArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});

var key = 0;

$(".qual_result_input").each(function() {

$(this).val(qualResultArray[key]);

if ($(this).val() == "default" && !( typeof qualResultArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + qualResultArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});


// = Work Experience =

for (var i = 0; i < (workTypeArray.length-1); i++) {

$("#work_experience_box").clone().appendTo('#work_experience_container');

}

var key = 0;

$(".work_type_input").each(function() {

$(this).val(workTypeArray[key]);

if ($(this).val() == "default" && !( typeof workTypeArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + workTypeArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});

var key = 0;

$(".work_length_input").each(function() {

$(this).val(workLengthArray[key]);

key++;

});

var key = 0;

$(".work_sector_input").each(function() {

$(this).val(workSectorArray[key]);

if ($(this).val() == "default" && !( typeof workSectorArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + workSectorArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});

var key = 0;

$(".work_organisation_input").each(function() {

$(this).val(workOrganisationArray[key]);

key++;

});

// = Extra-Curricular =

for (var i = 0; i < (societyCategoryArray.length-1); i++) {

$("#society_box").clone().appendTo('#society_container');

}

var key = 0;

$(".society_category_input").each(function() {

$(this).val(societyCategoryArray[key]);

if ($(this).val() == "default" && !( typeof societyCategoryArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + societyCategoryArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});

var key = 0;

$(".society_position_input").each(function() {

$(this).val(societyPositionArray[key]);

if ($(this).val() == "default" && !( typeof societyPositionArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + societyPositionArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});

var key = 0;

$(".society_name_input").each(function() {

$(this).val(societyNameArray[key]);

key++;

});

// = Sports =

for (var i = 0; i < (sportCategoryArray.length-1); i++) {

$("#sport_box").clone().appendTo('#sport_container');

}

var key = 0;

$(".sport_category_input").each(function() {

$(this).val(sportCategoryArray[key]);

if ($(this).val() == "default" && !( typeof sportCategoryArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + sportCategoryArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});

var key = 0;

$(".sport_level_input").each(function() {

$(this).val(sportLevelArray[key]);

if ($(this).val() == "default" && !( typeof sportLevelArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + sportLevelArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});

var key = 0;

$(".sport_position_input").each(function() {

$(this).val(sportPositionArray[key]);

if ($(this).val() == "default" && !( typeof sportPositionArray[key] == "undefined")) {

	selectWidth = $(this).width() - 16;
	
	closeButtonMargin = selectWidth - 18;
	
	selectIdAltered = $(this).attr("id") + "_other";
	
	selectName = $(this).attr("name");
	
	defaultText = $(this).find("option[value='default']").text();
	
	otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="' + sportPositionArray[key] + '" style="width: ' + selectWidth + 'px;" /></div>';
	
	$(this).before(otherTextBox);
	
	$(this).hide();
	$(this).prev().show();
	
}

key++;

});


// = Languages =

for (var i = 0; i < (languagesArray.length-1); i++) {

$("#languages_box").clone().appendTo('#language_container');

}

var key = 0;

$(".language_input").each(function() {

$(this).val(languagesArray[key]);

key++;

});

var key = 0;

$(".language_level_input").each(function() {

$(this).val(languagesLevelArray[key]);

key++;

});


$("#english_level").val(englishLevel);

$("#gender").val(gender);
$("#ethnicity").val(ethnicity);

$("#date_dob").val(dateDob);
$("#month_dob").val(monthDob);
$("#year_dob").val(yearDob);
$("#emails_per_week").val(emailsPerWeek);

// Charity ==

switch (charitySelection) {

case "charity_1":

$(".charity_description").hide();
$("#charity_description_1").fadeIn();

$(".charity_1").addClass("charity_selected");

$(".charity_1 .charity_tick").show();

$("#charity_radio_1").prop('checked', true);

$("#charity_1_button").hide();

break;

case "charity_2":

$(".charity_description").hide();
$("#charity_description_2").fadeIn();

$(".charity_2").addClass("charity_selected");

$(".charity_2 .charity_tick").show();

$("#charity_radio_2").prop('checked', true);

$("#charity_2_button").hide();

break;

case "charity_3":

$(".charity_description").hide();
$("#charity_description_3").fadeIn();

$(".charity_3").addClass("charity_selected");

$(".charity_3 .charity_tick").show();

$("#charity_radio_3").prop('checked', true);

$("#charity_3_button").hide();

break;

case "charity_4":

$(".charity_description").hide();
$("#charity_description_4").fadeIn();

$(".charity_4").addClass("charity_selected");

$(".charity_4 .charity_tick").show();

$("#charity_radio_4").prop('checked', true);

$("#charity_4_button").hide();

break;

case "charity_5":

$(".charity_description").hide();
$("#charity_description_5").fadeIn();

$(".charity_5").addClass("charity_selected");

$(".charity_5 .charity_tick").show();

$("#charity_radio_5").prop('checked', true);

$("#charity_5_button").hide();

break;
	
}


});