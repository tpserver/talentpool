<select id="society_position" name="society_position[]">
    <option value="0">Position</option>
@foreach( $socialPositions as $socialPosition )
    <option value="{{$socialPosition->id}}">{{ $socialPosition->name }}</option>
@endforeach
<option value="other">Other</option>
</select>