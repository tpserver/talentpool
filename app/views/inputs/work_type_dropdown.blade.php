<select id="work-type" name="work-type[]">
    <option value="0">Work Type</option>
@foreach( $workTypes as $workType )
    <option value="{{$workType->id}}">{{ $workType->name }}</option>
@endforeach
</select>