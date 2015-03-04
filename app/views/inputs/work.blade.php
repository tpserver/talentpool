<?php $_lastGroupId = 0;  $_isOpened = false; ?>
@foreach( $workOptions as $option )
<?php 
//$paramSafeName = str_replace( ' ', '-', strtolower($option->group->name) ); 
$paramSafeName = 'work_option'; 
?>

@if( $option->group->id != $_lastGroupId || $_lastGroupId == 0 )
    <div class="sub_option_divider">{{ $option->group->name }}</div>
@endif    
    <label class="work_sector">{{ Form::checkbox($paramSafeName.'[]', $option->id, false, ['id' => $paramSafeName . '-' . $option->id, 'data-group-name' => 'sector']) }}
    {{ $option->name }}</label>
<?php $_lastGroupId = $option->group->id; $_isOpened = true; ?>
@endforeach
