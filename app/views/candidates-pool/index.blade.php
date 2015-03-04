@extends('layouts.employer')
@section('content')
    <h1>Talent Pools</h1>
    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>Name</th>
            <th>Size</th>
            <th>Filters</th>
        </tr>
        @foreach( $candidatesPools as $candidatesPool )
        <tr>
          <td class="pool_name">{{ link_to_route('candidatesPool.show', $candidatesPool->name, $candidatesPool->id) }}</td>
          <td class="pool_size">{{{ $candidatesPool->users->count() }}}</td>
          <td class="pool_filters">
              
                {{--<div class="round_box skill">Graduating in 2014</div>
                <div class="round_box skill">Oxford</div>
                <div class="round_box skill">Cambridge</div>
                <div class="round_box skill">Studying Science</div>
                --}}

                @foreach($candidatesPool->language as $language)
                    <div class="round_box experience">Speaks {{$language->language->name}}
                        @if(isset($language->languageLevel->name))
                            ({{$language->languageLevel->name}})
                        @endif
                    </div>
                @endforeach
                @foreach($candidatesPool->social as $social)
                    <div class="round_box attribute">{{$social->socialPosition->name}} {{$social->socialCategory->name}}</div>
                @endforeach
                @foreach($candidatesPool->option as $option)
                    <div class="round_box attribute">{{$option->name}}</div>
                @endforeach
          </td>
        </tr>
        @endForeach
    </table>
<a href="{{route('candidatesPool.create')}}"><div class="red_button" id="new_campaign_btn">{{trans('New Talent Pool')}}</div></a>
<div id="spacer"></div>
@stop