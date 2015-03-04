<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>TalentPool - Let the Job Find You</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/tp_home.css">

<script type="text/javascript" src="js/greensock/TweenMax.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.superscrollorama.js"></script>
<script type="text/javascript" src="js/jquery.hoverIntent.js"></script>
<script type="text/javascript" src="js/jquery.scrolly.js"></script>

<script type="text/javascript" src="js/home.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57414490-1', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript">
      window.heap=window.heap||[],heap.load=function(t,e){window.heap.appid=t,window.heap.config=e;var a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=("https:"===document.location.protocol?"https:":"http:")+"//cdn.heapanalytics.com/js/heap.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(t){return function(){heap.push([t].concat(Array.prototype.slice.call(arguments,0)))}},p=["identify","track"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
      heap.load("585672243");
    </script>

<!--<script src="js/cookieControl-6.2.min.js" type="text/javascript"></script>-->
<script type="text/javascript">//<![CDATA[
  cookieControl({
      t: {
          title: '<p>This site uses cookies to store information on your computer.</p>',
          intro: '<p>Some of these cookies are essential to make our site work and others help us to improve by giving us some insight into how the site is being used.</p>',
          full:'<p>These cookies are set when you submit a form, login or interact with the site by doing something that goes beyond clicking some simple links.</p><p>We also use some non-essential cookies to anonymously track visitors or enhance your experience of this site. If you\'re not happy with this, we won\'t set these cookies but some nice features on the site may be unavailable.</p><p>To control third party cookies, you can also <a class="ccc-settings" href="browser-settings" target="_blank">adjust your browser settings.</a></p><p>By using our site you accept the terms of our <a href="http://talentpool.com/index.php/privacy-policy">Privacy Policy</a>.</p>'
      },
      position:CookieControl.POS_LEFT,
      style:CookieControl.STYLE_TRIANGLE,
      theme:CookieControl.THEME_DARK, // light or dark
      startOpen:true,
      autoHide:7000,
      subdomains:true,
      protectedCookies: [], //list the cookies you do not want deleted, for example ['analytics', 'twitter']
      apiKey: '8de1432d8e699b9fe205fc8c2642da8daef60b85',
      product: CookieControl.PROD_FREE,
      consentModel: CookieControl.MODEL_IMPLICIT,
      onAccept:function(){},
      onReady:function(){},
      onCookiesAllowed:function(){},
      onCookiesNotAllowed:function(){}
      });
   //]]>
</script>


</head>
<body>

<div id="home_topbar">
<div id="home_topbar_container">
<div id="home_topbar_logo"></div>

<a href="{{ URL::to('index.php/sign-up?a=' . $origin_id) }}"><div id="home_topbar_signup_btn">Sign Up Now</div></a>
<a href="{{ URL::to('login') }}"><div id="home_topbar_login_btn">Log In</div></a>
</div>
</div>

<div data-velocity="-0.3" id="hero_container">
<div data-velocity="0.3" id="hero_polygon">

<a href="{{ URL::to('index.php/login') }}"><div id="hero_login_btn">Log In</div></a>

<div id="hero_logo"></div>
<div id="hero_logo_text">Where Opportunities Find You</div>
<div id="hero_logo_subtitle"></div>
<a href="{{ URL::to('index.php/sign-up?a=' . $origin_id) }}"><div id="hero_sign_up_btn">Sign Up Now</div></a>


</div>

</div>

<div id="section_1_container">
<div class="section_header">The simplest way to find a job, for students, graduates and young professionals</div>
<div class="section_sub_header">TalentPool is like a dating website for recruitment. Employers use us to identify the right people for them, making it simpler than ever to find a job you’ll love.</div>


<div class="step_container">
<div class="step_number">1</div>
<div id="step_icon_1" class="step_icon"></div>
<div class="step_header">Tell us about yourself and what you're looking for</div>
<ul>
<li>Simply sign up. It takes just 10 minutes, as we only ask you the stuff that employers actually care about</li>
<li>You tell us what you're interested in, putting you in complete control of the opportunities you'll hear about</li>
</ul>
</div>

<div class="step_container">
<div class="step_number">2</div>
<div id="step_icon_2" class="step_icon"></div>
<div class="step_header">Employers pick you out for jobs they think you'll suit</div>
<ul>
<li>Employers get in touch if your anonymous profile matches what they’re looking for</li>
<li>So when you get an email you'll know it really was meant for you</li>
</ul>
</div>

<div class="step_container">
<div class="step_number">3</div>
<div id="step_icon_3" class="step_icon"></div>
<div class="step_header">If you're interested, you go straight to interview or fast-track application</div>
<ul>
<li>If you like what you're hearing, you get back to the employer and reveal your name and contact details</li>
<li>By being picked out from TalentPool, you have already passed through the first round!</li>
</ul>
</div>

</div>

<div id="section_2_container">

<div class="section_header">Because finding a job shouldn't be a full time job</div>
<div class="section_sub_header">TalentPool is on a mission to fix the way recruitment works. We want to put and end to endless applications, and speculative CV sending, because there is a better way!</div>

<div id="comparison_container">
<div id="first_column" class="comparison_column">
<div class="comparison_header">The Old Way</div>
<div class="comparison_li"><div class="cross">&#10008;</div>Spending hours on applications that get rejected instantly</div>
<div class="comparison_li"><div class="cross">&#10008;</div>Emailing 100 random employers with your CV and not hearing back</div>
<div class="comparison_li"><div class="cross">&#10008;</div>Endlessly trawling through pages of jobs boards</div>
<div class="comparison_li"><div class="cross">&#10008;</div>Googling 'well paid graduate job', and just seeing what happens</div>
</div>
<div id="second_column" class="comparison_column">
<div class="comparison_header">The TalentPool Way</div>
<div class="comparison_li"><div class="tick">&#10004;</div>One simple form that takes 10 minutes to fill out</div>
<div class="comparison_li"><div class="tick">&#10004;</div>The details that matter put in front of hundreds of employers</div>
<div class="comparison_li"><div class="tick">&#10004;</div>Only hear about jobs you'll be suited for and interested in</div>
<div class="comparison_li"><div class="tick">&#10004;</div>Only interview with companies who found you in the first place!</div>
</div>
<div class="spacer"></div>
</div>


</div>

<div id="section_3_container">
<div class="section_header">TalentPool is used by employers from startups to large corporates</div>
<div class="section_sub_header">Organisations of all sizes and across every sector use TalentPool</div>

<div id="companies_container">
<div id="comp_1" class="company"><div class="info_overlay orange"><div class="info_text">Creates apps to help kids with reading and maths</div></div></div>
<div id="comp_2" class="company"><div class="info_overlay green"><div class="info_text">A video portal to find business talks</div></div></div>
<div id="comp_3" class="company"><div class="info_overlay blue"><div class="info_text">A boutique public sector consultancy</div></div></div>
<div id="comp_4" class="company"><div class="info_overlay purple"><div class="info_text">A luxury London-based female fashion store</div></div></div>
<div id="comp_5" class="company"><div class="info_overlay grey"><div class="info_text">Produces special reports for The Times</div></div></div>
<div id="comp_6" class="company"><div class="info_overlay blue"><div class="info_text">An operations and supply chain consultancy</div></div></div>
<div id="comp_7" class="company"><div class="info_overlay red"><div class="info_text">An international investment research firm</div></div></div>
<div id="comp_8" class="company"><div class="info_overlay grey"><div class="info_text">An online Yearbook creation tool</div></div></div>
<div id="comp_9" class="company"><div class="info_overlay purple"><div class="info_text">Creates charity initiatives and marketing campaigns</div></div></div>
<div id="comp_10" class="company"><div class="info_overlay red"><div class="info_text">Online healthcare professional booking</div></div></div>
<div id="comp_11" class="company"><div class="info_overlay blue"><div class="info_text">Marketing analytics start up</div></div></div>
<div id="comp_12" class="company"><div class="info_overlay red"><div class="info_text">Connects businesses with industry knowledge</div></div></div>
<div id="comp_13" class="company"><div class="info_overlay orange"><div class="info_text">Strategic marketing consultancy</div></div></div>
<div id="comp_14" class="company"><div class="info_overlay grey"><div class="info_text">Online project management tool</div></div></div>
<div id="comp_15" class="company"><div class="info_overlay green"><div class="info_text">A leadership scheme aiming to improve society</div></div></div>
<a href="http://www.onfido.com"><div id="comp_17" class="company"><div class="info_overlay blue"><div class="info_text">Provides background checks for employers</div></div></div></a>
<div class="spacer"></div>
</div>

</div>

<div id="section_4_container">

<div class="section_header">We'll always be lead by our six guiding principles</div>
<div class="section_sub_header">At TalentPool, our users come first. We're not out to catch you out, or trip you up. There's no small print. These are six principles we just won't compromise.</div>

<div id="principles_container">
<div class="principle"><div class="principle_overlay">TalentPool is 100% free for job seekers</div><div id="free_icon" class="principle_icon"></div><div class="principle_title">Free</div></div>

<div class="principle"><div class="principle_overlay">Only ask for information that employers really need</div><div id="simple_icon" class="principle_icon"></div><div class="principle_title">Simple</div></div>

<div class="principle"><div class="principle_overlay">We'll never share your data without your permission</div><div id="secure_icon" class="principle_icon"></div><div  class="principle_title">Secure</div></div>

<div class="principle"><div class="principle_overlay">You have complete control over who contacts you</div><div id="personal_icon" class="principle_icon"></div><div class="principle_title">Personal</div></div>
<div class="principle"><div class="principle_overlay">We hate spam just as much as you do</div><div id="spam_free_icon" class="principle_icon"></div><div class="principle_title">Spam Free</div></div>

<div class="principle"><div class="principle_overlay">We always strive to make things easier</div><div id="effective_icon" class="principle_icon"></div><div class="principle_title">Effective</div></div>
<div class="spacer"></div>
</div>



</div>

<div id="section_5_container">

<div class="section_header">And we're really proud to be supporting some great educational charities</div>

<div id="charities_container">
<div id="charity_1" class="charity"></div>
<div id="charity_2" class="charity"></div>
<div id="charity_3" class="charity"></div>
<div id="charity_4" class="charity"></div>
<div id="charity_6" class="charity"></div>
<div id="spacer"></div>
</div>


<div id="charity_sub_header" class="section_sub_header">At TalentPool we share every pound we receive with one of our six partner charities. And it's our users who tell us which ones to support. So by using TalentPool to expand your own opportunities, you're helping others to expand theirs as well.</div>

<img src="img/charity_bg3.jpg" alt="" />

</div>

<div id="section_6_container">

<div class="section_header">It works - and don't just take our word for it</div>
<div class="section_sub_header">We have thousands of users, and they seem to think we're on to something!</div>

<div id="quotes_container">

<div id="quote_1" class="quote"><div class="quote_sign_left">&#147;</div><div class="quote_text">It was just so easy!</div><div class="quote_sign_right">&#148;</div></div>

<div id="quote_2" class="quote"><div class="quote_sign_left">&#147;</div><div class="quote_text">I think it's great!</div><div class="quote_sign_right">&#148;</div></div>

<div id="quote_3" class="quote"><div class="quote_sign_left">&#147;</div><div class="quote_text">It's great to have the employer contact you directly</div><div class="quote_sign_right">&#148;</div></div>

<div id="quote_4" class="quote"><div class="quote_sign_left">&#147;</div><div class="quote_text">One of the best things about TalentPool is that you have been chosen for the job and so have a really good chance of getting it</div><div class="quote_sign_right">&#148;</div></div>

<div class="spacer"></div>

</div>

</div>

<div id="section_7_container">

<div class="section_header">So what are you waiting for?</div>
<div class="section_sub_header">Join TalentPool today to put your CV in front of employers across industries, and of all sizes, to find out about the opportunities that are out there, that are perfect for you.</div>

<a href="{{ URL::to('index.php/sign-up?a=' . $origin_id) }}"><div id="bottom_signup_btn">Sign Up Now</div></a>

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
<a id="terms_link" href="{{ URL::to('index.php/terms-of-use') }}">Terms of Use</a>
<a id="privacy_link" href="{{ URL::to('index.php/privacy-policy') }}">Privacy Policy</a>
<a href="{{ URL::to('index.php/faqs') }}">FAQs</a>
</div>

<div id="spacer"></div>

</div>

</div>


</div>

</body>
</html>