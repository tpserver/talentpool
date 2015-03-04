<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
        <title>GradList - Find a Job</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="width=1170, maximum-scale=1.0" />
        <meta property="og:title" content="GradList - Let the Job Find You" />
        <meta property="og:description" content="description" />
        <meta property="og:image" content="thumbnail_image" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        {{ HTML::style('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900') }}
        {{ HTML::style('css/normalize.css') }}
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/home.css') }}
        {{ HTML::style('css/animate.css') }}
        {{ HTML::script('js/vendor/modernizr-2.6.2.min.js') }}
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-45195160-1', 'gradlist.co.uk');
            ga('send', 'pageview');

        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div id="main">
            <div id="header">
                <a href="/"><div id="gl_logo"></div></a>
                <a href="http://<?php echo Config::get('app.url'); ?>/index.php/sign_up"><div class="green_button" id="sign_up_btn">Sign Up</div></a>
                <a href="http://<?php echo Config::get('app.url'); ?>/index.php/log_in"><div id="log_in_btn"> Log In</div></a>
                <a href="http://<?php echo Config::get('app.url'); ?>/index.php/employers"><div id="employers_btn">Employers</div></a>
            </div>

            <div id="headline">
                <h1>Let the job find you</h1>
                <h2>No more mass mailing lists, just a neat way to find a job or an internship while helping others</h2>
            </div>
            <div id="four_steps_container">
                <div id="steps_container">
                    <div class="step_container">
                        <div id="first_step" class="steps_icon"></div>
                        <div class="large_number">1</div>
                        <div class="steps_banner">Tell us about yourself - and what you're looking for</div>
                    </div>

                    <div class="step_container">
                        <div id="second_step" class="steps_icon"></div>
                        <div class="large_number">2</div>
                        <div class="steps_banner">Hear from employers who want to speak to you</div>
                    </div>

                    <div class="step_container">
                        <div id="third_step" class="steps_icon"></div>
                        <div class="large_number">3</div>
                        <div class="steps_banner">Let us support the charity you choose</div>
                    </div>

                    <div class="step_container">
                        <div id="fourth_step" class="steps_icon"></div>
                        <div class="large_number">4</div>
                        <div class="steps_banner">And land a job that's right for you</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="quick_sign_up">
            <div id="quick_sign_up_container">
                <form id="quick_start_form" method="post" action="/index.php/sign_up">
                    <input id="first_name_input" type="text" name="first_name" value="" placeholder="First Name"/>
                    <input id="last_name_input" type="text" name="last_name" value="" placeholder="Last Name"/>
                    <input id="email_input" type="text" name="email" value="" placeholder="Email"/>
                    <input id="password_input" type="password" name="password" value="" placeholder="Password"/>
                    <input id="quick_sign_up_btn" type="submit" value="Get Started!">
                </form>
            </div>
        </div>

        <div id="mission_statement">
            <div id="mission_statement_container">
                <div id="gl_diagram">
                    <div id="gl_diagram_overlay"></div>
                </div>

                <div id="manifesto_container">
                    <p>GradList is all about expanding opportunities- for graduates, employers and our partner charities.</p>
                    <p>We know about the stress for job seekers of applying to countless employers. And we also know about the challenges faced by employers wanting to speak to the right graduates.</p>
                    </p>
                    <p>This is why GradList exists. So job seekers just sign up and wait to see who comes knocking. And employers use a bespoke search to identify and contact their ideal candidates. 
                    </p>
                    <p>Meanwhile, we share every pound we receive with one of our six partner charities – and it’s our users who tell us which one to support. 
                        So by using GradList to expand their own opportunities, job seekers and employers also help to expand opportunities for others.</p>
                </div>
            </div>
        </div>
        <div id="values_section">
            <h3>Our six guiding principles</h3>
            <div id="values_container_subtitle">These are the six key things you need to know about GradList. There's no small print. Just a simple way to help graduates and employers connect.</div>

            <div id="values_container">
                <div class="values_box">
                    <div id="money_icon" class="values_icon"></div>
                    <h1>Completely free</h1>
                    <p>GradList is 100% free for job seekers. We're all about expanding opportunities for as many people as possible.</p>
                </div>

                <div class="values_box">
                    <div id="clock_icon" class="values_icon"></div>
                    <h1>Minimal stress</h1>
                    <p>With drop down menus and check boxes, you don’t have to worry about saying the right thing in a cover letter – so the whole process will only take a few minutes.</p>
                </div>

                <div class="values_box">
                    <div id="padlock_icon" class="values_icon"></div>
                    <h1>Your data's safe with us</h1>
                    <p>We know how important it is to keep your personal details safe. That’s why the user controls who get to see them. </p>

                </div>

                <div class="values_box">
                    <div id="control_icon" class="values_icon"></div>
                    <h1>Handing over control</h1>
                    <p>You have total say over who gets in touch with you - and how often. Just let us know what suits you when you create your account or login.</p>
                </div>
                <div class="values_box">
                    <div id="no_spam_icon" class="values_icon"></div>
                    <h1>Absolutely no spam</h1>
                    <p>We hate spam as much as you do. So we make sure that everyone who contacts you really means it.
                    </p>
                </div>
                <div class="values_box">
                    <div id="charity_icon" class="values_icon"></div>
                    <h1>Opportunities for others</h1>
                    <p>We are delighted to share the fees we receive from recruiters with educational charities. And it’s our users who tell us which ones to give it to.
                    </p>
                </div>
            </div>
            <div id="spacer"></div>
        </div>
        <div id="logos_section">
            <div id="logos_container">
                <h3>Used by some really cool companies</h3>
                <div id="logos_container_subtitle">GradList has already been used to contact hundreds of candidates for companies across all different sectors</div>
                <div id="logos_carousel">
                    <div id="logos_fade_left"></div>
                    <div id="logo_group">
                        <a href="http://www.learntoreadwithpip.com/" onclick="window.open('http://www.learntoreadwithpip.com/', 'newwindow');
                                return false;"><div id="logo_1" class="logo"></div></a>
                        <a href="http://www.xavy.com/" onclick="window.open('http://www.xavy.com/', 'newwindow');
                                return false;"><div id="logo_2" class="logo"></div></a>
                        <a href="http://yearhere.org/" onclick="window.open('http://yearhere.org/', 'newwindow');
                                return false;"><div id="logo_3" class="logo"></div></a>
                        <a href="http://www.austique.co.uk/" onclick="window.open('http://www.austique.co.uk/', 'newwindow');
                                return false;"><div id="logo_4" class="logo"></div></a>
                        <a href="http://raconteur.net/" onclick="window.open('http://raconteur.net/', 'newwindow');
                                return false;"><div id="logo_5" class="logo"></div></a>
                        <a href="http://www.newtoneurope.com/" onclick="window.open('http://www.newtoneurope.com/', 'newwindow');
                                return false;"><div id="logo_6" class="logo"></div></a>
                        <a href="http://www.cognolink.com/" onclick="window.open('http://www.cognolink.com/', 'newwindow');
                                return false;"><div id="logo_7" class="logo"></div></a>
                        <a href="http://yearbookmachine.com/" onclick="window.open('http://yearbookmachine.com/', 'newwindow');
                                return false;"><div id="logo_8" class="logo"></div></a>
                        <a href="http://latimergroup.org/" onclick="window.open('http://latimergroup.org/', 'newwindow');
                                return false;"><div id="logo_9" class="logo"></div></a>
                        <a href="http://www.zesty.co.uk/" onclick="window.open('http://www.zesty.co.uk/', 'newwindow');
                                return false;"><div id="logo_10" class="logo"></div></a>
                        <a href="http://www.luckymetrics.com/" onclick="window.open('http://www.luckymetrics.com/', 'newwindow');
                                return false;"><div id="logo_11" class="logo"></div></a>
                        <a href="https://www.alphasights.com/" onclick="window.open('https://www.alphasights.com/', 'newwindow');
                                return false;"><div id="logo_12" class="logo"></div></a>
                        <div id="logo_13" class="logo"></div>
                        <div id="logo_14" class="logo"></div>
                    </div>
                    <div id="logos_fade_right"></div>
                </div>
                <div id="carousel_controls">
                    <div id="carousel_controls_buttons">
                        <div id="carousel_button_1" class="carousel_button carousel_active"></div>
                        <div id="carousel_button_2" class="carousel_button"></div>
                        <div id="carousel_button_3" class="carousel_button"></div>
                    </div>
                </div>
            </div>
            <div id="spacer"></div>
        </div>
        <div id="quick_sign_up">
            <div id="quick_sign_up_container">
                <form id="quick_start_form" method="post" action="/index.php/sign_up">
                    <input id="first_name_input" type="text" name="first_name" value="" placeholder="First Name">
                    <input id="last_name_input" type="text" name="last_name" value="" placeholder="Last Name">
                    <input id="email_input" type="text" name="email" value="" placeholder="Email">
                    <input id="password_input" type="password" name="password" value="" placeholder="Password">
                    <input id="quick_sign_up_btn" type="submit" value="Get Started!">
                </form>
            </div>
        </div>
    <div id="footer">
        <div id="contact_icons_container">
            <a href="https://www.facebook.com/gradlist"><div id="fb_icon"></div></a>
            <a href="http://www.twitter.com/grad_list"><div id="twitter_icon"></div></a>
            <a href="mailto:contact@gradlist.co.uk"><div id="email_icon"></div></a>
        </div>
        <div id="footer_links_container">
            &#169; GradList Ltd. 2013. All rights reserved.
            <br />
            <a id="terms_link" href="/index.php/terms_of_use/">Terms of Use</a>
            <a id="privacy_link" href="/index.php/privacy_policy/">Privacy Policy</a>
            <a href="/index.php/faqs/">FAQs</a>
        </div>
    </div>
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') }}
    <script>window.jQuery || document.write('{{ HTML::script("js/vendor/jquery-1.9.1.min.js") }}')</script>
    {{ HTML::script('js/plugins.js') }}
    {{ HTML::script('js/main.js') }}
    {{ HTML::script('js/parallax.js') }}
    {{ HTML::script('js/jquery.html5-placeholder-shim.js') }}
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
        (function(d, t) {
            var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
            g.src = '//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g, s)
        }(document, 'script'));
    </script>
</body>
</html>
