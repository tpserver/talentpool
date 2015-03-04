<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        @include('common.head', array('title', 'GradList - Search') )
        {{ HTML::style('css/base_old.css') }}
        {{ HTML::style('css/results.css') }}
        {{ HTML::script('js/jquery.icheck.js') }}
        {{ HTML::script('js/results.js') }}
    </head>
    <body>
        <div id="topbar">
            <div id="logo"></div>
        </div>
        <div id="results_container">
            <div id="filter_container">
                <div class="filter_summary personal">
                    <div class="title">Personal</div>
                    <div class="more_arrow"></div>
                    <div class="filter_category_detail">
                        <ul>
                            <li>Ethnicity
                                <ul>
                                    <li>Bangladeshi</li>
                                    <li>Black African</li>
                                    <li>Black Other</li>
                                </ul>
                            </li>
                            <li>Languages (All)</li>
                        </ul>
                    </div>
                </div>

                <div class="filter_summary education">
                    <div class="title">Education</div>
                    <div class="more_arrow"></div>
                </div>
                <div class="filter_summary extra-curricular">
                    <div class="title">Extra-Curricular</div>
                    <div class="more_arrow"></div>
                </div>
                <div class="filter_summary experience">
                    <div class="title">Work Experience</div>
                    <div class="more_arrow"></div>
                </div>
            </div>

            <table id="results_table" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Score</th>
                        <th>Subject</th>
                        <th>University</th>
                        <th>Result</th>
                        <th>Interests</th>
                        <th>Experience</th>
                        <th>Extra-Curricular</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="student_select"><input type="checkbox" name="" value="" /></td>
                        <td>7.8</td>
                        <td>History</td>
                        <td>Durham</td>
                        <td>2:1</td>
                        <td>Law</td>
                        <td>Consulting</td>
                        <td>President of Subject Society</td>
                    </tr>
                    <tr>
                        <td class="student_select"><input type="checkbox" name="" value="" /></td>
                        <td>6.9</td>
                        <td>Geography</td>
                        <td>LSE</td>
                        <td>2:1</td>
                        <td>Non-Profit</td>
                        <td>Non-Profit</td>
                        <td>Captain of Sport's Team</td>
                    </tr>
                    <tr>
                        <td class="student_select"><input type="checkbox" name="" value="" /></td>
                        <td>6.5</td>
                        <td>Law</td>
                        <td>Cambridge</td>
                        <td>1st</td>
                        <td>Accounting</td>
                        <td>Non-Profit</td>
                        <td>Secretary for Cultural Society</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div id="footer"></div>
    </body>
</html>