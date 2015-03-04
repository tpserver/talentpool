 <select name="degree_type[]" id="degree_type">
    <option value="0">Degree Type</option>
    @foreach ( $degreeTypes as $degreeType )
    @if($degreeType->approved == 0 && $degreeType->id != $selectedId)
        @continue
    @endif
    <option value="{{ $degreeType->id }}" @if($degreeType->id == $selectedId){{'selected=""selected"'}}@endif>{{ $degreeType->name }}</option>
    @endforeach
    <option value="other">Other</option>
</select>