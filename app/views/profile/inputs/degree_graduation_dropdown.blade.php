<select name="degree_graduation[]" id="degree_graduation">
    <option value="0">Graduation Date</option>
    @for ( $i = 2000; $i <= 2019; $i++ )
    <option value="{{ $i }}" @if($i == $selectedId){{'selected=""selected"'}}@endif>{{ $i }}</option>
    @endfor
</select>