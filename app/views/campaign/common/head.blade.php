{{ HTML::style('css/db_search_new.css') }}
{{ HTML::style('css/token-input.css') }}
{{ HTML::style('css/token-input-facebook.css') }}
{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') }}
<script>window.jQuery || document.write('<script src="http://gradlist.laravel.dev/js/vendor/jquery-1.9.1.min.js">')</script>
<style>
    #new_email_box {
        background-color: #fff;
        padding-top: 40px;
        padding-left: 15px;
        width: 860px;
        margin-top: 15px;
        clear: both;
        background-image:url("../img/compose_mail_bg.png") ;
        background-repeat: no-repeat;
        width: 827px;
        margin-left: auto;
        margin-right: auto;
    }

    #email-template-name, #email-template-subject {
        width: 795px;
    }

    #email-template-text {
        width: 795px;
        margin-bottom: 0px;
    }

    #email_button_holder {
        padding-left: 15px;
        padding-right: 15px;
        width: 860px;
        margin-top: 15px;
        clear: both;
        background-repeat: no-repeat;
        width: 790px;
        margin-left: auto;
        margin-right: auto;
    }

    #new-email-template-cancel-btn {
        float: right;
    }

    button {
        font-family: "Lato", Arial,Helvetica,sans-serif;
    }
    #main_container {
        padding-top: 50px;
    }
</style>