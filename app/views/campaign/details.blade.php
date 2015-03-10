@extends('layouts_new.employer')

@section('title')
Campaign / <a href="">Marketing Intern</a>
@stop

@section('body')

<div class="details_box">
<div id="dashboard_header" class="header">Dashboard</div>
<div class="panel">
<div class="number">£110</div>
<div class="label">Total Spend</div>
</div>
<div class="panel"></div>
<div class="panel"></div>
</div>


<div class="details_box">
<div id="messages_header" class="header">Messages</div>

<div id="new_message" class="button blue">New Message</div>

<div class="container">

<div class="message">
<div class="label">To</div>
<div class="recipients connected_left">Marketing Interns</div>
<div class="connector">Who</div>
<div class="recipients connected_right">Are Shortlisted</div>
<div class="date_label">Yesterday</div>
<div class="type">Hi *|FNAME|*, thanks for getting back to us</div>
<div class="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit non augue non pharetra. Donec nisl ligula, convallis in tristique nec, tempor quis enim. Proin et posuere augue, in fermentum dolor. Integer nec tempor neque, nec facilisis enim. Fusce blandit congue tempus.</div>
<div class="spacer"></div>
</div>

<div class="message">
<div class="label">To</div>
<div class="recipients connected_left">Marketing Interns</div>
<div class="connector">who</div>
<div class="recipients connected_center">have not responded</div>
<div class="connector">and</div>
<div class="recipients connected_right">opened the last message</div>
<div class="date_label">Yesterday</div>
<div class="type">Hi *|FNAME|*, just wanted to check...</div>
<div class="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit non augue non pharetra. Donec nisl ligula, convallis in tristique nec, tempor quis enim. Proin et posuere augue, in fermentum dolor. Integer nec tempor neque, nec facilisis enim. Fusce blandit congue tempus.</div>
<div class="spacer"></div>
</div>

<div class="message">
<div class="label">To</div>
<div class="recipients connected">Marketing Interns</div>
<div class="date_label">Two days ago</div>
<div class="label">Subject</div>
<div class="type">Hi *|FNAME|*, you've got a new notification...!</div>
<div class="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit non augue non pharetra. Donec nisl ligula, convallis in tristique nec, tempor quis enim. Proin et posuere augue, in fermentum dolor. Integer nec tempor neque, nec facilisis enim. Fusce blandit congue tempus.</div>
<div class="spacer"></div>
</div>

<div class="spacer"></div>
</div>

</div>

<div class="details_box">
<div id="candidates_header" class="header">Candidates</div>

<div class="candidates_subheader">Unsorted (14)</div>
<div class="container">
<div class="top_bar">
<div class="checkbox_spacing"></div>
<div class="label">Degree</div>
<div class="label">Work Experience</div>
<div class="label">Skills</div>
<div class="label">Languages</div>
</div>
<div class="candidate">
<div class="checkbox">
<div class="box_icon"></div>
</div>
<div class="module">
<div class="subject">History - 2:1</div>
<div class="result">Oxford University</div>
</div>

<div class="module">
<div class="subject">3 Months</div>
<div class="sector_tag">Retail</div>
<div class="sector_tag">Marketing</div>
</div>

<div class="module">

</div>
<div class="module"></div>
<div class="module"></div>


</div>

<div class="candidate">
<div class="checkbox">
<div class="box_icon"></div>
</div>
<div class="module">
<div class="subject">English - 1st</div>
<div class="result">Cambridge University</div>
</div>

<div class="module">
<div class="subject">3 Months</div>
<div class="sector_tag">Retail</div>
<div class="sector_tag">Marketing</div>
</div>

<div class="module">

</div>
<div class="module"></div>


</div>



</div>

</div>

</div>

</div>

@stop