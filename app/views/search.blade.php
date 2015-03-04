<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        @include('common.head', array('title' => 'GradList - Search') )
        {{ HTML::style('css/base_old.css') }}
        {{ HTML::style('css/search_old.css') }}
        {{ HTML::script('js/jquery.icheck.js') }}
        {{ HTML::script('js/search.js') }}
        <script>
            $(document).ready(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_minimal',
                    radioClass: 'iradio_minimal'
                });
            });
        </script>
    </head>
    <body>
        <?php // include 'search_formatting_helper.php'; ?>

        <div id="topbar">
            <a href="/"><div id="logo"></div></a>
            <div id="menu">
                <div class="menu_option">Dashboard</div>
                <div class="menu_option">Campaigns</div>
                <div class="menu_option">Candidates</div>
                <div class="menu_option menu_option_selected">Opportunities</div>
            </div>
        </div>
        <form method="post" action="../results">
        <div id="search_parameters" class="tabbable"> <!-- Only required for left/right tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Personal</a></li>
                <li><a href="#tab2" data-toggle="tab">Education</a></li>
                <li><a href="#tab3" data-toggle="tab">Extra-Curricular</a></li>
                <li><a href="#tab4" data-toggle="tab">Work Experience</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <div class="selected level_'.$level.'_cat '.$category_lowercase_underscored.'">
                        <label class="checkbox">
                            <input type="checkbox" name="" value="selected" checked="checked" />$name
                        </label>
                        <div class="more_button triangle_up">Detail</div>
                    </div>
	 
                    <div class="level_'.$level.'_container">
                    @foreach( $users as $user )
                        <div class="result-row">
                            
                        {{ $user->first_name, ' ', $user->last_name }}
                        </div>
                    @endforeach
                        <?php
//                        categoryTitle('Ethnicity', 'Personal', 1);
//                        checkboxList('ethnicities.csv', 1, 'Ethnicities');
                        ?>
                    </div>
                <?php
//                categoryTitle('Languages', 'Personal', 1);
//                checkboxList('languages.csv', 1, 'Languages');
                ?>
            </div>
            <div class="spacer"></div>
        </div>
        <div class="tab-pane" id="tab2">
            <?php
//            categoryTitle('Undergraduate Degree', 'Education', 1);
//            categoryTitle('Subject', 'Education', 2, 'Undergraduate Degree');
//            categoryTitle('Humanities', 'Education', 3, 'Undergraduate Degree', 'Subject');
//            checkboxList('humanities.csv', 3, 'Undergraduate Degree', 'Humanities');
//            echo '</div>';
//            categoryTitle('Social Sciences', 'Education', 3, 'Undergraduate Degree', 'Subject');
//            checkboxList('social_sciences.csv', 2, 'Undergraduate Degree', 'Social Sciences');
//            echo '</div>';
//            categoryTitle('Sciences', 'Education', 3, 'Undergraduate Degree', 'Subject');
//            checkboxList('sciences.csv', 3, 'Undergraduate Degree', 'Sciences');
//            echo '</div>';
//            categoryTitle('Vocational', 'Education', 3, 'Undergraduate Degree', 'Subject');
//            checkboxList('vocational.csv', 3, 'Undergraduate Degree', 'Vocational');
//            echo '</div>
//                </div>';
//            categoryTitle('University', 'Education', 2, 'Undergraduate Degree');
//            checkboxList('universities.csv', 2, 'Undergraduate Degree', 'University');
//            echo '</div>';
//            categoryTitle('Result', 'Education', 2, 'Undergraduate Degree');
//            echo '<select>
//                      <option>Any</option>
//                      <option>1st</option>
//                      <option selected="selected">2:1 or Higher</option>
//                      <option>2:2 or Higher</option>
//                  </select>';
//            echo '</div>
//                </div>';
//            
//            categoryTitle('Graduate Degree', 'Education', 1);
//            categoryTitle('Subject', 'Education', 2, 'Graduate Degree');
//            categoryTitle('Humanities', 'Education', 3, 'Graduate Degree', 'Subject');
//            checkboxList('humanities.csv', 3, 'Graduate Degree', 'Humanities');
//            echo '</div>';
//            categoryTitle('Social Sciences', 'Education', 3, 'Graduate Degree', 'Subject');
//            checkboxList('social_sciences.csv', 2, 'Graduate Degree', 'Social Sciences');
//            echo '</div>';
//            categoryTitle('Sciences', 'Education', 3, 'Graduate Degree', 'Subject');
//            checkboxList('sciences.csv', 3, 'Graduate Degree', 'Sciences');
//            echo '</div>';
//            categoryTitle('Vocational', 'Education', 3, 'Graduate Degree', 'Subject');
//            checkboxList('vocational.csv', 3, 'Graduate Degree', 'Vocational');
//            echo '</div>
//                <div class="spacer"></div></div>';
//            categoryTitle('University', 'Education', 2, 'Graduate Degree');
//            checkboxList('universities.csv', 2, 'Graduate Degree', 'University');
//            echo '<div class="spacer"></div></div>';
//            categoryTitle('Result', 'Education', 2, 'Graduate Degree');
//            echo '<select>
//                      <option>Any</option>
//                      <option>1st</option>
//                      <option selected="selected">2:1 or Higher</option>
//                      <option>2:2 or Higher</option>
//                  </select>';
//            echo '<div class="spacer"></div></div>
//             <div class="spacer"></div></div>';
//            categoryTitle('Postgraduate Degree', 'Education', 1);
//            categoryTitle('Subject', 'Education', 2, 'Postgraduate Degree');
//            categoryTitle('Humanities', 'Education', 3, 'Postgraduate Degree', 'Subject');
//            checkboxList('humanities.csv', 3, 'Postgraduate Degree', 'Humanities');
//            echo '</div>';
//            categoryTitle('Social Sciences', 'Education', 3, 'Postgraduate Degree', 'Subject');
//            checkboxList('social_sciences.csv', 2, 'Postgraduate Degree', 'Social Sciences');
//            echo '</div>';
//            categoryTitle('Sciences', 'Education', 3, 'Postgraduate Degree', 'Subject');
//            checkboxList('sciences.csv', 3, 'Postgraduate Degree', 'Sciences');
//            echo '</div>';
//            categoryTitle('Vocational', 'Education', 3, 'Postgraduate Degree', 'Subject');
//            checkboxList('vocational.csv', 3, 'Postgraduate Degree', 'Vocational');
//            echo '</div>
//                <div class="spacer"></div></div>';
//            categoryTitle('University', 'Education', 2, 'Postgraduate Degree');
//            checkboxList('universities.csv', 2, 'Postgraduate Degree', 'University');
//            echo '<div class="spacer"></div></div>';
//            categoryTitle('Result', 'Education', 2, 'Postgraduate Degree');
//            echo '<select>
//                      <option>Any</option>
//                      <option>1st</option>
//                      <option selected="selected">2:1 or Higher</option>
//                      <option>2:2 or Higher</option>
//                  </select>';
//            echo '<div class="spacer"></div></div>
//                <div class="spacer"></div></div>';
            ?>
            <div class="spacer"></div>
        </div>
        <div class="tab-pane" id="tab3">
            <?php
//            categoryTitle('Clubs and Societies', 'Extra-Curricular', 1);
//            categoryTitle('Society Type', 'Extra-Curricular', 2, 'Clubs and Societies');
//            checkboxList('societies.csv', 2);
//            echo '<div class="spacer"></div></div>';
//            categoryTitle('Society Position', 'Extra-Curricular', 2, 'Clubs and Societies');
//            checkboxList('society_position.csv', 2);
//            echo '<div class="spacer"></div></div>
//                <div class="spacer"></div></div>';
//            categoryTitle('Sports', 'Extra-Curricular', 1);
//            categoryTitle('Sport', 'Extra-Curricular', 2, 'Clubs and Societies');
//            checkboxList('sports.csv', 2);
//            echo '<div class="spacer"></div></div>';
//            categoryTitle('Standard', 'Extra-Curricular', 2, 'Clubs and Societies');
//            checkboxList('sport_level.csv', 2);
//            echo '<div class="spacer"></div></div>
//                <div class="spacer"></div></div>';
            ?> 
            <div class="spacer"></div> 
        </div>
        <div class="tab-pane" id="tab4">
            <?php
//            categoryTitle('Sector', 'Work Experience', 1);
//            checkboxList('industries_2.csv', 1, 'sectors');
//            echo '<div class="spacer"></div></div>';
//            categoryTitle('Length', 'Work Experience', 1);
            ?>
            <div class="select_box">
                <h5>Minimum</h5>
                    <select>
                        <option>No Minimum</option>
                        <option>1 Month</option>
                        <option>2 Months</option>
                        <option>3 Months</option>
                        <option>6 Months</option>
                        <option>1 Year</option>
                        <option>2 Years</option>
                    </select>
            </div>
            <div class="select_box">
                <h5>Maximum</h5>
                <select>
                    <option>No Maximum</option>
                    <option>1 Month</option>
                    <option>2 Months</option>
                    <option>3 Months</option>
                    <option>6 Months</option>
                    <option>1 Year</option>
                    <option>2 Years</option>
                </select>
            </div>
            <div class="spacer"></div>
        </div>
        <div class="spacer"></div>
        <div id="search_button_holder">
            <input type="submit" id="submit_button" name="" value="Search" />
        </div>
        </form>
        <div id="footer"></div>
        @include('common.bottom')
    </body>
</html>