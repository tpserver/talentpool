$(document).ready(function() {
    $('input:text:visible:first').focus();
    $('#password_reset_email_sent').slideDown();
    $('#gl_log_in').submit(function() {
        if (!$('#email_input').val()) {
            $('#email_input').addClass('input_error');
            if (!$('#password_input').val()) {
                $('#password_input').addClass('input_error');
                $('#log_in_box').addClass('animated pulse');
            }
            return false;
        }
    });
    if ($('#password_incorrect').val()) {
        $('#password_error').fadeIn();
    }
    if ($('#username_incorrect').val()) {
        $('#username_error').fadeIn();
    }
    $('.error_overlay').click(function() {
        $(this).fadeOut();
        $(this).next().focus();
    });
    $('#recover_password_btn').click(function() {
        var email = $('#email_input').val();
        var_email = document.getElementById('email_input').value();
        if (email.trim() != '') {
            $.post('/index.php/log_in/check_for_email', {email: email}).done(function(data) {
                if (data == 'Positive') {
                    $('#gl_recover_password').submit();
                }
            });
        }
    });
    $('#reset_password_btn').click(function() {
        var resetCode = $('#reset_code_hidden').val();
        var newPassword = $('#password_input').val();
        var newPasswordRepeat = $('#password_repeat_input').val();
        if (newPassword == '') {
            return;
        }
        if (newPassword == newPasswordRepeat) {
            $.post('/index.php/sign_up/new_password_process', {password: newPassword, reset_code: resetCode}).done(function(data) {
                if (data == 'Success') {
                    $('#change_password_success').slideDown();
                }
            });
        }
        else {
            $('#new_password_error').fadeIn();
            $('#new_password_repeat_error').fadeIn();
        }
    });
});