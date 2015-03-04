<select name="degree_subject[]" id="degree_subject">
    <option value="0">Subject Type</option>
    @foreach ( $degreeSubjects as $degreeSubject )
    <option value="{{ $degreeSubject->id }}">{{ $degreeSubject->name }}</option>
    @endforeach
    <option value="other">Other</option>
</select>