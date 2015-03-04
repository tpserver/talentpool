<select id="work_sector_select" name="work_sector[]">
    <option value="default">Job Sector</option>
<?php $_lastGroupId = 0;  $_isOpened = false; ?>
@foreach( $workOptions as $option )
@if( $option->group->id != $_lastGroupId && $_lastGroupId != 0 )
    </optgroup>
@endif 
@if( $option->group->id != $_lastGroupId || $_lastGroupId == 0 )
<optgroup label="{{ $option->group->name }}">
@endif    
    <option value="{{$option->id}}">{{ $option->name }}</option>
<?php $_lastGroupId = $option->group->id; $_isOpened = true; ?>
@endforeach
@if( $_isOpened === true )
    </optgroup>   
@endif
<option value="other">Other</option>
</select>