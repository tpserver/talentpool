<select id="qual_type" name="qual_type[]" class="qual_type">
    <option value="default">Qualification Type</option>
@foreach( $schoolQualificationTypes as $schoolQualificationType )
    <option value="{{$schoolQualificationType->id}}">{{ $schoolQualificationType->name }}</option>
@endforeach
<option value="other">Other</option>
</select>