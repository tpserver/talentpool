@extends('layouts_new.employer')

@section('title')
Talent Pools
@stop

@section('body')

@foreach($candidatesPools as $candidatesPool)

<div class="talentpool">

<div class="size">
<div class="label">Size</div>
<div class="count">{{$candidatesPool->users->count()}}</div>
</div>

<div class="name">{{$candidatesPool->name}}</div>

<div class="edit_button">Edit</div>

<div id="filter_1" class="filter">
<div class="text">Has work experience of at least</div> <div class="filter_element green no_shadow">2-4 weeks</div>
</div>

<div id="filter_2" class="filter">
<div class="text">Has a degree from</div> <div class="filter_element purple no_shadow">Oxford University</div> <div class="connector">or</div> <div class="filter_element purple no_shadow">Cambridge University</div>
</div>

<div id="filter_3" class="filter">
<div class="text">Has a degree result of at least</div> <div class="filter_element purple no_shadow">2:1</div> <div class="connector">or above</div></div>

<div class="more_or_less more">
<div class="container"><div class="text">More</div>
<svg class="more_triangle" id="down" height="12" width="12"><polygon class="more_triangle_polygon" points="5.5,11 0,0 11,0"/></svg>
<svg class="more_triangle" id="up" height="12" width="12"><polygon class="more_triangle_polygon" points="5.5,0 0,11 11,11"/></svg>
</div>
</div>

</div>

@endforeach

<div class="button_container">
<div id="new_campaign_btn" class="button blue">New Talent Pool</div>
</div>

@stop
