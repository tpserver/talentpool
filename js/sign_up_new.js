$(document).ready(function() {

// Temporary Submit Button ***********

    $("#footer").click(function() {

        $("form").submit();

    });

// ***********


    $.bbq.removeState();

    $("#education_form").hide();
    $("#basic_form").hide();
//$("#other_form").hide();
    $("#experience_form").hide();

    $("#first_name_tooltip").hide();
    $("#last_name_tooltip").hide();
    $("#email_tooltip").hide();
    $("#password_tooltip").hide();
    $("#header_error").hide();
    $("#header_tooltip").hide();
    $("#status_message").hide();

    $("#charity_radio_buttons").hide();


    $(".charity_tick").hide();
    $(".key_skill select").hide();

    $("#charity_description_1").hide();
    $("#charity_description_2").hide();
    $("#charity_description_3").hide();
    $("#charity_description_4").hide();
    $("#charity_description_5").hide();
    $("#charity_description_6").hide();

    $("#availability_other_details").hide();

    $(".sub_skill_container").hide();

    $("input:text:visible:first").focus();

//$("input[type='text']").focus(function() { $(this).prev().fadeOut(); });

    $("input[type='password']").focus(function() {

        $(this).prev().fadeOut();

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

    $('#sector_box input[type="checkbox"]').change(function() {

        $(this).parent().parent().css();

    });

    $("select").live('change', function() {

        selectValue = $(this).val();

        if (selectValue == "other") {

            selectWidth = $(this).width() - 16;

            closeButtonMargin = selectWidth - 18;

            selectIdAltered = $(this).attr("id") + "_other";

            selectName = $(this).attr("name");

            defaultText = $(this).find("option[value='default']").text();

            otherTextBox = '<div class="other_text_container"><div class="close_other_btn" style="margin-left: ' + closeButtonMargin + 'px;"></div><input class="other_text_box" placeholder="' + defaultText + '" id="' + selectIdAltered + '" type="text" name="' + selectName + '" value="" style="width: ' + selectWidth + 'px;" /></div>';

            $(this).before(otherTextBox);

            $(this).hide();
            $(this).prev().show().children().focus();

            dropdownNameInactive = $(this).attr("name") + "_inactive";

            $(this).attr("name", dropdownNameInactive);

        }

    });

    $(".close_other_btn").live('click', function() {

        $(this).parent().next().val("default");
        $(this).parent().next().show();

        dropdownName = $(this).parent().next().attr("name");

        dropdownNameActive = dropdownName.replace("_inactive", "");

        $(this).parent().next().attr("name", dropdownNameActive);

        $(this).parent().remove();

    });

    $("input[name='sector_interest[]']").click(function() {

        if ($(this).is(":checked")) {

            switch ($(this).parent().parent().attr("id")) {

                case "creative_box":
                    var backgroundFlash = "#ffa89f";
                    break;

                case "professional_box":
                    var backgroundFlash = "#eab7ff";
                    break;

                case "industry_box":
                    var backgroundFlash = "#a9ddff";
                    break;

                case "public_sector_box":
                    var backgroundFlash = "#a6ffed";
                    break;
            }

            $(this).parent().parent().animate({backgroundColor: backgroundFlash}, 10).delay(10).animate({backgroundColor: ""}, "slow");
        }

    });


    $(".skill_divider").click(function() {

        $(this).next().slideToggle();

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

            $.post("/index.php/log_in/check_for_email", {email: emailInput})
                    .done(function(data) {

                        if (data == "Positive") {

                            $("#email_in_use").fadeIn();
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


        $(".uni_details_box select").each(function() {

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

            var degreeCount = $(".uni_details_box").length;
            var qualificationCount = $(".qualifications_box").length;
            var experienceCount = $(".work_experience_box").length;
            var societyCount = $(".society_box").length;
            var sportCount = $(".sport_box").length;
            var languageCount = $(".languages_box").length;

            $(".degree_count").attr("value", degreeCount);
            $(".qualification_count").attr("value", qualificationCount);
            $(".experience_count").attr("value", experienceCount);
            $(".society_count").attr("value", societyCount);
            $(".sport_count").attr("value", sportCount);
            $(".language_count").attr("value", languageCount);

            $("form").submit();
        }

    });

// == Add Box ==

    function add_box(box_name, box_container) {

        var box_count = parseInt($(box_name).last().attr("box-count"));

        var new_box_count = box_count + 1;

        $(box_name).last().clone().appendTo(box_container);

        $(box_name).last().attr("box-count", new_box_count);

        $(box_name).last().children("*").each(function() {

            var name = $(this).attr("name");

            if (name !== undefined) {

                var new_name = name.replace(box_count, new_box_count);

                $(this).attr("name", new_name);

            }

        });

        $(box_name).last().children("*").children("*").each(function() {

            var name = $(this).attr("name");

            if (name !== undefined) {

                var new_name = name.replace(box_count, new_box_count);

                $(this).attr("name", new_name);

            }

        });

        $(box_name).last().animate({backgroundColor: "#fff799"}, 10).delay(10).animate({backgroundColor: ""}, 900, "easeOutQuad");

    }
    ;



    $("#add_degree_button").click(function() {

        add_box(".uni_details_box", "#education_container");

    });


    $("#add_qualification_button").click(function() {

        add_box(".qualifications_box", "#qualifications_container");

    });

    $("#add_experience_button").click(function() {

        add_box(".work_experience_box", "#work_experience_container");

    });

    $("#add_society_button").click(function() {

        add_box(".society_box", "#society_container");

    });

    $("#add_sport_button").click(function() {

        add_box(".sport_box", "#sport_container");

    });

    $("#add_language_button").click(function() {

        add_box(".languages_box", "#second_language_container");

    });

// == Charity Buttons ==

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

    switch (dropDownVal) {

        case "a_level":

            $(this).next().next().next().empty().append('<option value="default">Result</option> <option value="A*">A*</option> <option value="A">A</option> <option value="B">B</option> <option value="C">C</option> <option value="D">D</option> <option value="E">E</option><option value="na">N/A</option><option value="other">Other</option>');
            break;

        case "highers":

            $(this).next().next().next().empty().append('<option value="default">Result</option> <option value="A">A</option> <option value="B">B</option> <option value="C">C</option> <option value="D">D</option><option value="na">N/A</option>option value="other">Other</option>');
            break;

        case "ib":

            $(this).next().next().next().empty().append('<option value="default">Result</option> <option value="n">N</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value=5">5</option> <option value="6">6</option>  <option value="7">7</option><option value="na">N/A</option>option value="other">Other</option>');
            break;

        case "pre_u":

            $(this).next().next().next().empty().append('<option value="default">Result</option> <option value="D1">D1</option> <option value="D2">D2</option> <option value="D3">D3</option> <option value="M1">M1</option> <option value="M2">M2</option> <option value="M3">M3</option>  <option value="P1">P1</option> <option value="P2">P2</option> <option value="P3">P3</option><option value="na">N/A</option>option value="other">Other</option>');
            break;

    }



    $(".qual_type").live("change", function() {

        var dropDownVal = $(this).val();

        switch (dropDownVal) {

            case "a_level":

                $(this).next().next().next().empty().append('<option value="default">Result</option> <option value="A*">A*</option> <option value="A">A</option> <option value="B">B</option> <option value="C">C</option> <option value="D">D</option> <option value="E">E</option><option value="other">other</option>');
                break;

            case "highers":

                $(this).next().next().next().empty().append('<option value="default">Result</option> <option value="A">A</option> <option value="B">B</option> <option value="C">C</option> <option value="D">D</option><option value="other">other</option>');
                break;

            case "ib":

                $(this).next().next().next().empty().append('<option value="default">Result</option> <option value="n">N</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value=5">5</option> <option value="6">6</option>  <option value="7">7</option><option value="other">other</option>');
                break;

            case "pre_u":

                $(this).next().next().next().empty().append('<option value="default">Result</option> <option value="D1">D1</option> <option value="D2">D2</option> <option value="D3">D3</option> <option value="M1">M1</option> <option value="M2">M2</option> <option value="M3">M3</option>  <option value="P1">P1</option> <option value="P2">P2</option> <option value="P3">P3</option><option value="other">other</option>');
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

    $("#attributes_container .checkbox_container_option").hover(function() {
        $(this).removeAttr("style");
    }, function() {

        if (!$(this).hasClass("checkbox_container_selected")) {

            $(this).animate({backgroundColor: "#dca4f3"}, 10).delay(10).animate({backgroundColor: ""}, "slow");

        }

    });

    $("#key_experience_container .checkbox_container_option").hover(function() {
        $(this).removeAttr("style");
    }, function() {

        if (!$(this).hasClass("checkbox_container_selected")) {

            $(this).animate({backgroundColor: "#93d4ff"}, 10).delay(10).animate({backgroundColor: ""}, "slow");

        }

    });

});


$(".checkbox_container_option").click(function() {

    function toggleBox(thisInstance) {

        $(thisInstance).toggleClass("checkbox_container_selected");
        $(thisInstance).children().toggleClass("checkbox_checked");
        $(thisInstance).parent(".key_skill").toggleClass("skill_selected");

        toggleCheckboxValue = !$(thisInstance).children('input').prop('checked');

        alert(toggleCheckboxValue);

        $(thisInstance).children('input').prop('checked', toggleCheckboxValue);

        if (toggleCheckboxValue) {
            $(thisInstance).next().show();
        }
        else {
            $(thisInstance).next().hide();
        }

    }

    parentId = $(this).parent().attr("id");

    if (parentId == "key_experience_container") {

        var checkedCheckboxCount = $("#key_experience_container .checkbox_container_selected").size();

        if (checkedCheckboxCount <= 4) {

            toggleBox(this);


        }
        else if ($(this).hasClass("checkbox_container_selected")) {

            toggleBox(this);

        }

    }

    else if (parentId == "capabilities_container") {

        var checkedCheckboxCount = $("#capabilities_container .checkbox_container_selected").size();

        if (checkedCheckboxCount <= 4) {

            toggleBox(this);


        }
        else if ($(this).hasClass("checkbox_container_selected")) {

            toggleBox(this);

        }

    }

    else if (parentId == "attributes_container") {

        var checkedCheckboxCount = $("#capabilities_container .checkbox_container_selected").size();

        if (checkedCheckboxCount <= 4) {

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
