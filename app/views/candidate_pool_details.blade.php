<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('common.head', array('title', 'GradList - Frequently Asked Questions') )
        {{ HTML::style('css/base.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/db_search.css') }}
        {{ HTML::style('css/base_extended.css') }}
    </head>
    <body>
        <div id="topbar_bg">
            <div id="topbar">
                <a href="/"><div id="logo"></div></a>
                @include('common.employeer_top_menu')

            </div>
        </div>
        
        <div id="main_container">
       
       	<h1><a href="candidates">Candidates</a> / Oxbridge Scientists</h1>
        
        <div id="box_container">
        
        <div class="color_box" id="candidate_count_box">
        <div class="box_label">Candidates</div>
        <div class="box_headline">152</div>
        </div>
        
        <div class="color_box" id="candidate_sent_box">
        <div class="box_label">Candidates Emailed</div>
        <div class="box_headline">140</div>
        </div>
        
        <div class="color_box" id="candidate_not_sent_box">
        <div class="box_label">Not Emailed</div>
        <div class="box_headline">12</div>
        </div>
        
        </div>
        
        <h2 class="candidates_header">Filters</h2>
        
        <div class="filter_margin" id="education_filter_box">
        <div class="connecter">Are at</div>
        <div class="round_box skill">Oxford</div>
        <div class="round_box skill">Cambridge</div>
        </div>
        
        <div id="education_filter_box">
        <div class="connecter">Are studying</div>
        <div class="round_box skill">Chemistry</div>
        <div class="round_box skill">Physics</div>
        </div>
        
        <div id="interested_candidates_container">
        
        <h2 class="candidates_header">Interested Candidates</h2>
        
        <table class="table table-hover table-bordered table-striped">
        <tr>
        <th><input type="checkbox" name="" value="" /></th>
        <th>Name</th>
        <th>University</th>
        <th>Degree</th>
        <th>Result</th>
        <th>A-Levels</th>
        <th>Languages</th>
        <tr>
          <td class="checkbox_column"><input type="checkbox" name="" value="" /></td>
          <td>Mark Smith</td>
          <td>Oxford</td>
          <td>Maths</td>
          <td>1st</td>
          <td>4As</td>
          <td>French, Spanish</td>
         </tr>
          
         <tr>
          <td class="checkbox_column"><input type="checkbox" name="" value="" /></td>
          <td>Tim Knights</td>
          <td>Cambridge</td>
          <td>Natural Sciences</td>
          <td>1st</td>
          <td>5As</td>
          <td>French, Italian </td>
          </tr>
          
          <tr>
          <td class="checkbox_column"><input type="checkbox" name="" value="" /></td>
          <td>Jenny Randel</td>
          <td>UCL</td>
          <td>Maths</td>
          <td>2:1</td>
          <td>4As</td>
          <td>German</td>
          </tr>
          
          <tr>
          <td class="checkbox_column"><input type="checkbox" name="" value="" /></td>
          <td>Diane Lamar</td>
          <td>Oxford</td>
          <td>Computer Science</td>
          <td>1st</td>
          <td>5As, 1B</td>
          <td>French</td>
          </tr>
          
          <tr>
          <td class="checkbox_column"><input type="checkbox" name="" value="" /></td>
          <td><a href="candidate_details">Andrew Lavelle</a></td>
          <td>Oxford</td>
          <td>History</td>
          <td>2:1</td>
          <td>4As</td>
          <td>French</td>
          </tr>
          
        </tr>
        </table>
        
        
        <h2 class="candidates_header">Shortlisted Candidates</h2>
        
        <table class="table table-hover table-bordered table-striped">
        <tr>
        <th><input type="checkbox" name="" value="" /></th>
        <th>Name</th>
        <th>University</th>
        <th>Degree</th>
        <th>Result</th>
        <th>A-Levels</th>
        <th>Languages</th>
        <tr>
          <td class="checkbox_column"><input type="checkbox" name="" value="" /></td>
          <td>Mark Smith</td>
          <td>Oxford</td>
          <td>Maths</td>
          <td>1st</td>
          <td>4As</td>
          <td>French, Spanish</td>
         </tr>
          
         <tr>
          <td class="checkbox_column"><input type="checkbox" name="" value="" /></td>
          <td>Tim Knights</td>
          <td>Cambridge</td>
          <td>Natural Sciences</td>
          <td>1st</td>
          <td>5As</td>
          <td>French, Italian </td>
          </tr>

        </table>
        
         <h2 class="candidates_header">Rejected Candidates</h2>
                
                <table class="table table-hover table-bordered table-striped">
                <tr>
                <th><input type="checkbox" name="" value="" /></th>
                <th>Name</th>
                <th>University</th>
                <th>Degree</th>
                <th>Result</th>
                <th>A-Levels</th>
                <th>Languages</th>
                                
                 <tr>
                  <td class="checkbox_column"><input type="checkbox" name="" value="" /></td>
                  <td>Tim Knights</td>
                  <td>Cambridge</td>
                  <td>Natural Sciences</td>
                  <td>1st</td>
                  <td>5As</td>
                  <td>French, Italian </td>
                  </tr>
        
                </table>
        
        </div>
        
        <div class="red_button" id="extend_campaign_btn">Extend Campaign</div>
        
                
        </div>
        
        <div id="footer">
        </div>
   
    </body>
</html>
