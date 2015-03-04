<select id="qual_type" name="qual_type[]" class="qual_type">
    <option value="default">Qualification Type</option>
@foreach( $schoolQualificationTypes as $schoolQualificationType )
    @if($schoolQualificationType->approved == 0 && $schoolQualificationType->id != $selectedId)
        @continue
    @endif
    <option value="{{$schoolQualificationType->id}}" @if($schoolQualificationType->id == $selectedId){{'selected="selected"'}}@endif>{{ $schoolQualificationType->name }}</option>
@endforeach
<option value="other">Other</option>
</select>