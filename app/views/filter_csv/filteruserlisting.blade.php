<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    @include('common.head', ['title' => 'TalentPool - Filtered users'] )
    {{ HTML::style('css/policy.css') }}
    {{ HTML::style('css/main.css') }}
    {{ HTML::style('css/base.css') }}
    {{ HTML::style('css/base_extended.css') }}
    {{ HTML::style('css/signup.css') }}
</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <div id="topbar_bg">
        <div id="topbar">
            <a href="/"><div id="logo"></div></a>
            <div id="progress_bar">
                <!--<div id="segment_1" class="progress_segment pos_8">
                    <div class="progress_segment_text">Interests</div>
                    <div class="progress_segment_icon"></div>
                </div>
                <div id="segment_2" class="progress_segment pos_6">
                    <div class="progress_segment_text">Education</div>
                    <div class="progress_segment_icon"></div>
                </div>
                <div id="segment_3" class="progress_segment pos_6">
                    <div class="progress_segment_text">Experience</div>
                    <div class="progress_segment_icon"></div>
                </div>
                <div id="segment_4" class="progress_segment pos_3">
                    <div class="progress_segment_text">Other</div>
                    <div class="progress_segment_icon"></div>
                </div>-->
            </div>
            <div id="spacer"></div>
        </div>
    </div>
    
    <div class="outer_table">
        <div id="other_form">
            
        </div>
        <div id="other_form" class="candidate_list">
        
            <form id="gl_sign_up" method="post" action="download-csv">
            @if(isset($user_data['work_option']))
                @foreach($user_data['work_option'] as $row )
                <input type="hidden" name="work_option[]" value="{{ $row }}" />
                @endforeach
            @endif
            @if(isset($user_data['degree_type']))
                @foreach($user_data['degree_type'] as $row )
                <input type="hidden" name="degree_type[]" value="{{ $row }}" />
                @endforeach
            @endif
            @if(isset($user_data['degree_uni']))
                @foreach($user_data['degree_uni'] as $row )
                <input type="hidden" name="degree_uni[]" value="{{ $row }}" />
                @endforeach
            @endif
            @if(isset($user_data['degree_subject']))
                @foreach($user_data['degree_subject'] as $row )
                <input type="hidden" name="degree_subject[]" value="{{ $row }}" />
                @endforeach
            @endif
            @if(isset($user_data['degree_result']))
                @foreach($user_data['degree_result'] as $row )
                <input type="hidden" name="degree_result[]" value="{{ $row }}" />
                @endforeach
            @endif
            @if(isset($user_data['degree_graduation']))
                @foreach($user_data['degree_graduation'] as $row )
                <input type="hidden" name="degree_graduation[]" value="{{ $row }}" />
                @endforeach
            @endif
            @if(isset($user_data['languages']))
                @foreach($user_data['languages'] as $row )
                <input type="hidden" name="languages[]" value="{{ $row }}" />
                @endforeach
            @endif
            @if(isset($user_data['languages_level']))
                @foreach($user_data['languages_level'] as $row )
                <input type="hidden" name="languages_level[]" value="{{ $row }}" />
                @endforeach
            @endif
            @if(isset($user_data['work_type']))
                @foreach($user_data['work_type'] as $row )
                <input type="hidden" name="work_type[]" value="{{ $row }}" />
                @endforeach
            @endif
            @if(isset($user_data['work_length']))
                @foreach($user_data['work_length'] as $row )
                <input type="hidden" name="work_length[]" value="{{ $row }}" />
                @endforeach
            @endif
            @if(isset($user_data['work_length']))
                @foreach($user_data['work_sector'] as $row )
                <input type="hidden" name="work_sector[]" value="{{ $row }}" />
                @endforeach
            @endif
            @if(isset($user_data['english_level']))
                <input type="hidden" name="english_level" value="{{ $user_data['english_level'] }}" />
            @endif
            @if(!empty($result))
                <div id="basic_form" style="margin: auto;">
                    {{Form::button('Download CSV Here!', ['id' => 'profile-update-btn', 'class' => 'red_button', 'style' => 'height: 42px;width: 230px;', 'type' => 'submit'])}}
                </div>
            @else
                <div id="basic_form" style="margin: auto;">
                    No Data Available Now!
                </div>
            @endif
                
            </form>
            <!--<a class="login-header-btn" href="">Download CSV</a>-->
            <!--<table class="candidate-listings">
                <tr>
                {{Form::button('Save', ['id' => 'profile-update-btn', 'class' => 'red_button', 'style' => 'height: 42px;', 'type' => 'submit'])}}
                    <td>Candidate Number</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>University Name</td>
                    <td>Degree Name</td>
                </tr>
                @foreach($result as $user_details_list)
                <tr>
                    <td>{{ $user_details_list->Candidateid }}</td>
                    <td>{{ $user_details_list->Firstname }}</td>
                    <td>{{ $user_details_list->Lastname }}</td>
                    <td>{{ $user_details_list->Email }}</td>
                    <td>{{ $user_details_list->University }}</td>
                    <td>{{ $user_details_list->Degree }}</td>
                </tr>
                @endforeach
            </table>-->
        </div>
    </div>
    <div id="spacer"></div>
<div id="footer"></div>
@include('common.bottom')
{{ HTML::script('/js/jquery-1.8.3.min.js') }}
{{ HTML::script('js/log_in.js') }}
{{ HTML::script('/js/plugins.js') }}
{{ HTML::script('/js/verimail.jquery.js') }}
{{ HTML::script('/js/main.js') }}
{{ HTML::script('/js/date.js') }}
{{ HTML::script('/js/jquery.ba-bbq.js') }}
{{ HTML::script('/js/generateCsv.js') }}
{{ HTML::script('/js/jquery.html5-placeholder-shim.js') }}
</body>
</html>