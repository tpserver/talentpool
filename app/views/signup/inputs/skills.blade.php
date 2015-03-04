<select id="work_sector_select" name="skills[]">
    <option value="0">Skill</option>
<?php $_lastGroupId = 0;  $_isOpened = false; ?>
@foreach( $skills as $option )
@if( $option->skill_group->id != $_lastGroupId && $_lastGroupId != 0 )
    </optgroup>
@endif 
@if( $option->skill_group->id != $_lastGroupId || $_lastGroupId == 0 )
<optgroup label="{{ $option->skill_group->name }}">
@endif    
    <option value="{{$option->id}}">{{ $option->name }}</option>
<?php $_lastGroupId = $option->skill_group->id; $_isOpened = true; ?>
@endforeach
@if( $_isOpened === true )
    </optgroup>   
@endif
</select>