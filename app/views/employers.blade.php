<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', array('title', 'GradList - Employers') )
        {{ HTML::style('css/base.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/log_in.css') }}
    </head>
    <body>
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                <div id="spacer"></div>
            </div>
        </div>
        <div id="four_steps_container">
            <div id="steps_container">
                <div id="megaphone_icon"></div>
            </div>
            <div id="headline">
                <h1>Find the right candidates for your organisation</h1>
            </div>
        </div>
        <div id="employer_body_container">
            <h1>What GradList can do for you</h1>
            <p>GradList enables businesses and charities to identify and engage students and graduates which precisely match their employment criteria. As such, we offer the most bespoke search and contact capabilities in the UK graduate recruitment market – at staggeringly low cost.</p>
            <h1>How it works</h1>
            <div id="employer_quote">
                <div id="employer_quote_text">"We found the right candidates, quickly, with no fuss. It really was incredibly easy. We are delighted with the people we hired through GradList - they are a great fit for our business"</div>
                <div id="employer_name">Lucy - <a href="http://www.learntoreadwithpip.com/">Learn to Read with Pip</a></div>
            </div>
            <p>
                It is essentially very simple: approved employers are given access to the anonymised GradList database of candidates, where they can use an extensive range of filters to identify the individuals that are right for them. This could be one or two people for a very specific opportunity, or many more to launch a new graduate scheme.
            </p>
            <h1>Our database of candidates</h1>
            <p>The GradList database is extensive and continues to grow by as much as 170 candidates per day. We have digitised CVs for thousands of students from each of the top universities in the UK, as well a large number of students who study or have studied overseas.</p>
            <p>Our database features candidates of all conceivable stripes; from art historians to computer scientists, linguists to chemists, with work experience everywhere from top tier investment banks, consultancies, prestigious publications and non-profit organisations.</p>
            <h1>Who can you find?</h1>
            <p>What this means is that employers can find precisely the people they are looking for. Here are some of the metrics by which you can find the ideal candidates for your organisation:</p>
            <div id="metrics_container">
                <div class="gl_criteria uni">University</div>
                <div class="gl_criteria uni ">Degree Subject</div>
                <div class="gl_criteria uni">Degree Type</div>
                <div class="gl_criteria uni">Degree Grade</div>
                <div class="gl_criteria uni ">Graduation Year</div>
                <div class="gl_criteria school">School Subjects</div>
                <div class="gl_criteria school">School Grades</div>
                <div class="gl_criteria work">Sector Interest</div>
                <div class="gl_criteria work">Work Experience</div>
                <div class="gl_criteria work">Work Experience Length</div>
                <div class="gl_criteria extra">Society Positions</div>
                <div class="gl_criteria extra">Sports Positions</div>
                <div class="gl_criteria extra">Language Proficiency</div>
            </div>
            <p>Other metrics include gender and ethnicity to support your diversity initiatives.</p>
            <h1>What it costs</h1>
            <p>We are all about keeping our pricing simple and low. So here it is:</p>
            <p>Our basic package is £100 to contact 100 people, with larger campaigns even more competitively priced. That's it, no hidden charges, and no small print.</p>
            <h1>Getting Started</h1>
            <p>Just send us an email at <a href="mailto:contact@gradlist.co.uk">contact@gradlist.co.uk</a> letting us know your organisation name. We’ll get back to you to begin shaping your targeted campaign.</p>
            <p>The whole process from initial contact to ‘ready-to-launch’ takes around 24 hours.</p>
        </div>
        <div id="spacer"></div>
        <div id="footer"></div>
        @include('common.bottom')
        {{ HTML::script('js/log_in.js') }}
        </script>
    </body>
</html>
