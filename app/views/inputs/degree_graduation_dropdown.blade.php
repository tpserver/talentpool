<select name="degree_graduation[]" id="degree_graduation">
    <option value="0">Graduation Date</option>
    @for ( $i = 2000; $i <= 2019; $i++ )
    <option value="{{ $i }}">{{ $i }}</option>
    @endfor
    <option value="other">Other</option>
</select>