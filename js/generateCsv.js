$(document).ready(function() {
    $.bbq.removeState();
    $("#education_form").show();
$("#basic_form").show();
    $("#other_form").show();
   $("#experience_form").show();
   
    $("#first_name_tooltip").hide();
    $("#last_name_tooltip").hide();
    $("#email_tooltip").hide();
    $("#password_tooltip").hide();
    $("#header_error").hide();
    $("#header_tooltip").hide();
    $("#status_message").hide();
    $("#charity_radio_buttons").hide();

    $(".charity_tick").hide();
    $("input:text:visible:first").focus();
    $("input[type='text']").focus(function() {
        $(this).prev().fadeOut();
    });
    $("input[type='password']").focus(function() {
        $(this).prev().fadeOut();
    });

    $("select").live('change', function() {
        selectValue = $(this).val();
        if (selectValue == "other") {
            selectWidth = $(this).width() + 2;
            closeButtonMargin = selectWidth - 36;
            selectIdAltered = $(this).attr("id") + "_other";
            selectName = $(this).attr("name");
            defaultText = $(this).find("option[value='default']").text();
            otherTextBox = '<div class="other_text_container">'+
                    '<div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div>'+
                    '<input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="" style="width: ' + selectWidth + 'px;" />'+
                    '</div>';
            $(this).before(otherTextBox);
            $(this).hide();
            $(this).prev().show().children().focus();
            dropdownNameInactive = 'inactive_' + $(this).attr("name");
            $(this).attr("name", dropdownNameInactive);
        }
    });
    $(".close_other_btn").live('click', function() {
        $(this).parent().next().val("default");
        $(this).parent().next().show();
        dropdownName = $(this).parent().next().attr("name");
        dropdownNameActive = dropdownName.replace("inactive_", "");
        $(this).parent().next().attr("name", dropdownNameActive);
        $(this).parent().remove();
    });

// == Next Button Basic
    var industryInterestReminder = false;
    $("#next_button_basic").click(function() {
        var firstNameInput = $("#first_name_input").val();
        var lastNameInput = $("#last_name_input").val();
        var emailInput = $("#email_input").val();
        var passwordInput = $("#password_input").val();
        var formError = false;
        if (firstNameInput == "") {
            $("#first_name_error").fadeIn();
            formError = true;
        }
        if (lastNameInput == "") {
            $("#last_name_error").fadeIn();
            formError = true;
        }
        if (emailInput == "") {
            $("#email_error").fadeIn();
            formError = true;
        }
        else {
            $.post('sign-up/checkEmail', {email: emailInput})
                    .done(function(data) {
                        if (data == 'Positive') {
                            $('#email_in_use').fadeIn();
                        }
                    });
        }

        if (passwordInput == "") {
            $("#password_error").fadeIn();
            formError = true;
        }

        if ($('#sector_box input:checkbox:checked').length == 0) {
            if (!industryInterestReminder) {
                $("#industry_interest_error").fadeIn();
                formError = true;
                industryInterestReminder = true;
            }
        }

        if (!formError) {
            $.bbq.pushState("#education");
        }
        else {
            $("html, body").animate({scrollTop: 0}, "slow");
        }

    });
// == Next Button Education
    var qualReminder = false;
    $("#next_button_education").click(function() {
        var defaultError = false;
        var defaultCountUni = 0;

        $("#uni_details_box select").each(function() {
            var selectValue = $(this).val();
            if (selectValue == "default") {
                $(this).addClass("select_default_error");
                defaultError = true;
                $(this).parent().children(".error_overlay_header").fadeIn();
                defaultCountUni++;
            }
        });

        var englishLanguageSelectValue = $("#english_level").val();
        if (englishLanguageSelectValue == "default") {
            $("#english_level").addClass("select_default_error");
            defaultError = true;
            $("#english_level").parent().children(".error_overlay_header").fadeIn();
        }

        if (!defaultError) {
            $.bbq.pushState("#experience");
        }
        else {
            $("html, body").animate({scrollTop: 0}, "slow");
        }
    });
// == Next Button Experience
    $("#next_button_experience").click(function() {
        $.bbq.pushState("#other");

    });
// == Next Button Other
    $("#next_button_other").click(function() {
        var defaultError = false;
        var errorThrown = false;
        $("#dob_inputs_container select").each(function() {
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
            $("#dob_error").fadeOut();
        }
        else {
            $("#month_dob").addClass("select_default_error");
            $("#date_dob").addClass("select_default_error");
            $("#year_dob").addClass("select_default_error");
            errorThrown = true;
            $("#dob_error").fadeIn();
        }
        if ($("#terms_checkbox").attr("checked") == "checked") {
            $("#legal_error").fadeOut();
        }
        else {
            $("#legal_error").fadeIn();
            errorThrown = true;
        }

        if (!errorThrown) {
            console.log('heere');
            $("#gl_sign_up").submit();
        }
    });
// == Add Box ==
    $("#add_degree_button").click(function() {
        $("#uni_details_box").clone().appendTo('#education_container').find('input, select').val('').parent().find('input[type="hidden"]').val('0');
    });
    $("#add_qualification_button").click(function() {
        $("#qualifications_box").clone().appendTo('#qualifications_container').find('input, select').val('').parent().find('input[type="hidden"]').val('0');
    });
    $("#add_experience_button").click(function() {
        $("#work_experience_box").clone().appendTo('#work_experience_container').find('input, select').val('').parent().find('input[type="hidden"]').val('0');;
    });

    $("#add_society_button").click(function() {
        $("#society_box").clone().appendTo('#society_container').find('input, select').val('').parent().find('input[type="hidden"]').val('0');
    });
    $("#add_sport_button").click(function() {
        $("#sport_box").clone().appendTo('#sport_container').find('input, select').val('').parent().find('input[type="hidden"]').val('0');
    });
    $("#add_language_button").click(function() {
        $("#languages_box").clone().appendTo('#second_language_container').find('input, select').val('').parent().find('input[type="hidden"]').val('0');
    });
// == Charity Buttons ==

    $('.charity').mouseover(function() {
        $(this).addClass('charity-over');
    });

    $('.charity').mouseout(function() {
        $(this).removeClass('charity-over');
    });

    $('.charity').click(function() {
        $('.charity').removeClass('charity-over').removeClass('charity-on');
        $(this).removeClass('charity-over').addClass('charity-on');
        $('.charity-description').hide();
        $('#' + $(this).attr('id') + '-description').fadeIn();
    });

    $('.charity-button').click(function() {
        var _index = $('.charity-button').index(this);
        $(".charity_tick").hide();
        $('.charity-button').show();
        $(this).hide();
        $('#charity-selection').val(_index + 1);
        $('#charity-' + (_index + 1)).addClass('charity-selected').removeClass('charity-on');
        $('#charity-' + (_index + 1) + ' .charity_tick').show().addClass('animated bounceIn');
    });

    $("#large_tick").mouseover(function() {
        $(this).addClass("pulse");
    });
// == Delete Button == 

    $(document).on("mouseover", ".delete_box_btn", function() {
        $(this).addClass("delete_btn_over");
    });
    $(document).on("mouseout", ".delete_box_btn", function() {
        $(this).removeClass("delete_btn_over");
    });
    $(document).on("click", ".delete_box_btn", function() {
        $(this).parent().remove();
    });

// == Qualification Dropdown ==
    var dropDownVal = $("#qual_type").val();
    $(this).parent().find('#qual_result').empty().append( schoolQualificationResults[dropDownVal] );

    $(".qual_type").live("change", function() {
        var dropDownVal = $(this).val();
        $(this).parent().find('#qual_result').empty().append( schoolQualificationResults[dropDownVal] );
    });

    //$(".qual_type").trigger('change');
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
            $("#email_formatting_error").fadeIn();
            $("#email_formatting_error").empty();
            $("#email_formatting_error").html(statusMessage);
        }
    });
    $(".suggestion").live("click", function() {
        var correctedEmail = $(this).text();
        $("input#email_input").val(correctedEmail);
        $("#email_tooltip").fadeOut();
        $("#email_input").removeClass("input_error");
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

    $("#education_form select").live("change", function() {

        var changedValue = $(this).val();
        if (changedValue !== "default") {
            $(this).removeClass("select_default_error");
        }
    });

    $("#experience_form select").live("change", function() {

        var changedValue = $(this).val();
        if (changedValue !== "default") {
            $(this).removeClass("select_default_error");
        }
    });

    $("#other_form select").live("change", function() {
        var changedValue = $(this).val();
        if (changedValue !== "default") {
            $(this).removeClass("select_default_error");
        }
    });
    $("#back_button_education").click(function() {
        $.bbq.pushState("#");
    });
    $("#back_button_experience").click(function() {
        $.bbq.pushState("#education");

    });
    $("#back_button_other").click(function() {
        $.bbq.pushState("#experience");
    });
    $(".error_overlay").click(function() {
        $(this).fadeOut();
        $(this).next().focus();
    });
    $(".error_overlay_header").live("click", function() {
        $(this).fadeOut();
    });
    $(".red_button").mouseover(function() {
        $(this).removeClass("red_button");
        $(this).addClass("red_button_over");
    });
    $(".red_button").mouseout(function() {
        $(this).addClass("red_button");
        $(this).removeClass("red_button_over");
    });
    $("#segment_1").click(function() {
        var hashValue = window.location.hash;
        switch (hashValue) {
            case "":
                break;
            default:
                $.bbq.pushState("#");
        }
    });
    $("#segment_2").click(function() {
        var hashValue = window.location.hash;
        switch (hashValue) {
            case "":
                break;
            default:
                $.bbq.pushState("#education");
        }
    });
    $("#segment_3").click(function() {
        var hashValue = window.location.hash;
        switch (hashValue) {
            case "":
                break;
            case "education":
                break;
            default:
                $.bbq.pushState("#experience");
        }
    });
    $("#segment_3").click(function() {
        var hashValue = window.location.hash;
        switch (hashValue) {
            case "":
                break;
            case "education":
                break;
            default:
                $.bbq.pushState("#experience");
        }
    });
    $("#segment_4").click(function() {
        var hashValue = window.location.hash;
        switch (hashValue) {
            case "":
                break;
            case "experience":
                break;
            default:
                $.bbq.pushState("#other");
        }
    });
});

// == Back Button Functionality ==

$(window).bind('hashchange', function(event) {
    var hashValue = window.location.hash;
    switch (hashValue) {
        case "#education":
            $("html, body").animate({scrollTop: 0}, "slow");
            $("#segment_1").removeClass().addClass("progress_segment").addClass("pos_7");
            $("#segment_2").removeClass().addClass("progress_segment").addClass("pos_5");
            $("#segment_3").removeClass().addClass("progress_segment").addClass("pos_6");
            $("#segment_4").removeClass().addClass("progress_segment").addClass("pos_3");
            $("#basic_form").fadeOut("slow");
            $("#education_form").fadeIn("slow");
            $("#experience_form").fadeOut("slow");
            $("#other_form").fadeOut("slow");
            break;
        case "#experience":
            $("html, body").animate({scrollTop: 0}, "slow");
            $("#segment_1").removeClass().addClass("progress_segment").addClass("pos_7");
            $("#segment_2").removeClass().addClass("progress_segment").addClass("pos_1");
            $("#segment_3").removeClass().addClass("progress_segment").addClass("pos_5");
            $("#segment_4").removeClass().addClass("progress_segment").addClass("pos_3");
            $("#basic_form").fadeOut("slow");
            $("#education_form").fadeOut("slow");
            $("#experience_form").fadeIn("slow");
            $("#other_form").fadeOut("slow");
            break;
        case "#other":
            $("html, body").animate({scrollTop: 0}, "slow");
            $("#segment_1").removeClass().addClass("progress_segment").addClass("pos_7");
            $("#segment_2").removeClass().addClass("progress_segment").addClass("pos_1");
            $("#segment_3").removeClass().addClass("progress_segment").addClass("pos_1");
            $("#segment_4").removeClass().addClass("progress_segment").addClass("pos_4");
            $("#basic_form").fadeOut("slow");
            $("#education_form").fadeOut("slow");
            $("#experience_form").fadeOut("slow");
            $("#other_form").fadeIn("slow");
            break;
        case "":
            $("html, body").animate({scrollTop: 0}, "slow");
            $("#segment_1").removeClass().addClass("progress_segment").addClass("pos_8");
            $("#segment_2").removeClass().addClass("progress_segment").addClass("pos_6");
            $("#segment_3").removeClass().addClass("progress_segment").addClass("pos_6");
            $("#segment_4").removeClass().addClass("progress_segment").addClass("pos_3");
            $("#education_form").fadeOut("slow");
            $("#experience_form").fadeOut("slow");
            $("#other_form").fadeOut("slow");
            $("#basic_form").fadeIn("slow");
            break;
    }
});

$(document).ready(function() {
    var maxSelectedOptions = 4;
    $(".checkbox_container_option").click(function() {

        function toggleBox(thisInstance) {
            var input = $(thisInstance).find('input');
            $(thisInstance).toggleClass("checkbox_container_selected");
            $(thisInstance).children().toggleClass("checkbox_checked");
            $(thisInstance).parent(".key_skill").toggleClass("skill_selected");

            if(input.attr('checked') == 'checked') {
                input.removeAttr('checked');
                toggleCheckboxValue = false;
            }else{
                input.attr('checked','checked');
                toggleCheckboxValue = true;
            }
            
            if($(thisInstance).next().is('select'))
            {
                if (toggleCheckboxValue) {
                    $(thisInstance).next().show();
                }
                else {
                    $(thisInstance).next().hide();
                }
            }
        }
        var parentId = $(this).parent().attr("id");
        if (parentId == "key_experience_container") {
                toggleBox(this);
        }

        else if (parentId == "capabilities_container") {
            var checkedCheckboxCount = $("#capabilities_container .checkbox_container_selected").size();
            if (checkedCheckboxCount <= maxSelectedOptions) {
                toggleBox(this);
            }
            else if ($(this).hasClass("checkbox_container_selected")) {
                toggleBox(this);
            }
        }

        else if (parentId == "attributes_container") {
            var checkedCheckboxCount = $("#attributes_container .checkbox_container_selected").size();
            if (checkedCheckboxCount <= maxSelectedOptions) {
                toggleBox(this);
            }
            else if ($(this).hasClass("checkbox_container_selected")) {
                toggleBox(this);
            }
        }
        else if (parentId == "job_type_container") {
            var checkedCheckboxCount = $("#job_type_container .checkbox_container_selected").size();
            if (checkedCheckboxCount <= maxSelectedOptions) {
                toggleBox(this);
            }
            else if ($(this).hasClass("checkbox_container_selected")) {
                toggleBox(this);
            }
        }
        else if (parentId == "job_location_container") {
            var checkedCheckboxCount = $("#job_location_container .checkbox_container_selected").size();
            if (checkedCheckboxCount <= maxSelectedOptions) {
                toggleBox(this);
            }
            else if ($(this).hasClass("checkbox_container_selected")) {
                toggleBox(this);
            }
        }
        else {
            toggleBox(this);
        }
    });
    
    var d = new Date();
    var n = d.getMonth() + 1;

    $("#month_available").val(n);
    $(".radio_availability").change(function() {
        var radioValue = $(this).attr("value");
        if (radioValue == "other") {
            $("#availability_other_details").show();
        }
        else {
            $("#availability_other_details").hide();
        }
    });

    $('.skill_divider').click(function() {
        $(this).next().slideToggle();
    });
});
