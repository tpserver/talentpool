<select id="society_position" name="society_position[]">

    <option value="0">Position</option>
@foreach( $socialPositions as $socialPosition )
    
    @if($socialPosition->approved == 0 && $socialPosition->id != $selectedId)
        @continue
    @endif
    <option value="{{$socialPosition->id}}" @if($socialPosition->id == $selectedId){{' selected="selected" ' }}@endif>{{ $socialPosition->name }}</option>
@endforeach
<option value="other">Other</option>
</select>