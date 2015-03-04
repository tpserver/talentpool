<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', array('title', 'GradList - Frequently Asked Questions') )
        {{ HTML::style('css/policy.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/base.css') }}
    </head>
    <body>
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
            </div>
        </div>
        <div id="policy_container_container">
            <div id="policy_container">
                <h1>Frequently Asked Questions</h1>
                <h3>How can I be sure that I control who sees my details?</h3>
                <p>We don’t share your name, age or email address with anyone at all. Employers are able to look for people whose credentials match what they are looking for – but they don’t get to find out who those people actually are. They can then request to contact people on the basis of their experience and achievements through the GradList email system - which is still anonymous.</p> 
                <p>So the only way they can find out who you are is if you decide to reply to the email they send you – and we hope that you will want to!</p>
                <h3>How much will this service cost me to use?</h3>
                <p>We charge a total of £0000.0000 per user per year. Yup, that’s right: its 100% free. </p>
                <h3>Which charities can I choose to support?</h3>
                <p>We give you a selection of five or six options when you sign up. They might change occasionally but, because we are all about expanding opportunities, they all work with young people, helping them to fulfil their potential.</p>
                <h3>How can I be sure that employers will not use GradList as a spam service?</h3>
                <p>We have lots of measures in place to make sure our users don’t get spammed; it’s really important to us. So we personally vet every email that employers ask us to send and we also take a look at how many people it is going to. If it seems like too many then we might ask the employer to be more specific.</p>
                <p>Besides this, we charge employers to get in touch with you – that’s how we are able to support our partner charities. So its not worthwhile an employer to sending a message to people who aren’t suited to working with them.</p>
                <h3>What if there is some information I don’t want to disclose?</h3>
                <p>That’s totally fine. There are some basic details (like name, email address, university) that we really do need – but besides these, it's really up to you. Clearly, we hope that you will want to give us all the information that you can; the more there is to go on, the higher the chance that you will be sought out by the job that is right for you!</p>  
            </div> 
        </div>
	<div id="footer">
	
	<div id="footer_container">
	
	<div id="tp_logo_footer"></div>
	
	<div id="footer_icon_container">
	<div id="facebook" class="footer_icon"></div>
	<div id="twitter" class="footer_icon"></div>
	<div id="linkedin" class="footer_icon"></div>
	</div>
	
	<div id="copyright_container">&#169; GradList Ltd. 2014. All rights reserved.</div>
	
	<div id="links_container">
	{{ link_to_route('terms', 'Terms of Use', [], ['id'=>'terms_link']) }}
	{{ link_to_route('policy', 'Privacy Policy', [], ['id'=>'privacy_link']) }}
	{{ link_to_route('faq', 'FAQ') }}
	</div>
	
	<div id="spacer"></div>
	
	</div>
	
	</div>
	<!--@include('common.bottom')-->
        {{ HTML::script('js/log_in.js') }}
    </body>
</html>
