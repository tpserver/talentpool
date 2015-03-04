<?php $paramSafeName = 'capabilities';  ?>
@foreach( $capabilities as $option )
    <label class="work_sector">{{ Form::checkbox($paramSafeName.'[]', $option->id, false, ['id' => $paramSafeName . '-' . $option->id, 'data-group-name' => 'capabilities']) }}
    {{ $option->name }}</label>
@endforeach
