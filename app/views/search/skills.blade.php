<?php $_lastGroupId = 0;  $_isOpened = false; ?>
<select name="skill[]" id="skill" data-group-name="skill" data-group-delete="true">
    <option value="0">Skills</option>
@foreach( $skillOptions as $option )
@if( $option->skill_group->id != $_lastGroupId || $_lastGroupId == 0 )
  <optgroup label="{{ $option->skill_group->name}}"></optgroup>
@endif
    <option value="{{$option->id}}">{{ $option->name }}</option>

<?php $_lastGroupId = $option->skill_group->id;  ?>
@endforeach
</select>
<select name="skill-level[]" id="skill-level" data-group-name="skill" data-group-delete="false">
    <option value="0">Level</option>
    <option value="1">Basic</option>
    <option value="2">Intermediate</option>
    <option value="3">Expert</option>
</select>
