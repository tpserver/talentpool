 <select name="degree_type[]" id="degree_type">
    <option value="0">Degree Type</option>
    @foreach ( $degreeTypes as $degreeType )
    <option value="{{ $degreeType->id }}">{{ $degreeType->name }}</option>
    @endforeach
    <option value="other">Other</option>
</select>