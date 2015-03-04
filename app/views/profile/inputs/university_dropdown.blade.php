<select id="degree_uni" name="degree_uni[]">
    <option value="0">University</option>
    <option value="other">Other</option>
<?php $_lastGroupId = 0;  $_isOpened = false; ?>
@foreach( $universities as $university )
    @if($university->approved == 0 && $university->id != $selectedId)
        @continue
    @endif
    @if( $university->country_id != $_lastGroupId && $_lastGroupId != 0 )
        </optgroup>
    @endif
    @if( $university->country_id != $_lastGroupId || $_lastGroupId == 0 )
    <optgroup label="{{ $university->country->name }}">
    @endif
        <option value="{{$university->id}}" @if($university->id == $selectedId){{'selected=""selected"'}}@endif>{{ $university->name }}</option>
    <?php $_lastGroupId = $university->country_id; $_isOpened = true; ?>
@endforeach
@if( $_isOpened === true )
    </optgroup>   
@endif
</select>