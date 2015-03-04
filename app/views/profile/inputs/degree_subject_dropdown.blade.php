<select name="degree_subject[]" id="degree_subject">
    <option value="0">Subject Type</option>
    @foreach ( $degreeSubjects as $degreeSubject )
    @if($degreeSubject->approved == 0 && $degreeSubject->id != $selectedId)
        @continue
    @endif
    <option value="{{ $degreeSubject->id }}" @if($degreeSubject->id == $selectedId){{'selected=""selected"'}}@endif>{{ $degreeSubject->name }}</option>
    @endforeach
    <option value="other">Other</option>
</select>