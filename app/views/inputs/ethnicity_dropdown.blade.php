<select id="ethnicity" name="ethnicity">
    <option value="0">Ethnicity</option>
<?php $_lastGroupId = 0;  $_isOpened = false; ?>
@foreach( $ethnicities as $ethnicity )
@if( $ethnicity->group_id != $_lastGroupId && $_lastGroupId != 0 )
    </optgroup>
@endif 
@if( $ethnicity->group_id != $_lastGroupId || $_lastGroupId == 0 )
<optgroup label="{{ $ethnicity->group['name'] }}">
@endif    
    <option value="{{$ethnicity->id}}">{{ $ethnicity->name }}</option>
<?php $_lastGroupId = $ethnicity->group_id; $_isOpened = true; ?>
@endforeach
@if( $_isOpened === true )
    </optgroup>   
@endif
    <option value="other">Other</option>
    <option value="0">Prefer Not to Say</option>
</select>