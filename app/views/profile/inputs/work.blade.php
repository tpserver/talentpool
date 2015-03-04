<?php $_lastGroupId = 0; $_isOpened = false;?>

@foreach( $workOptions as $option )
    <?php $isChecked = in_array($option->id, $userOptions);
    //$paramSafeName = str_replace( ' ', '-', strtolower($option->group->name) );
    $paramSafeName = 'work_option';
    ?>
    @if( $option->group->id != $_lastGroupId && $_lastGroupId != 0 )
        </div>
    @endif
    @if( $option->group->id != $_lastGroupId || $_lastGroupId == 0 )
        <div class='search-filterbox-50' style="border-top: 10px solid {{ $option->group->colour }}">
        <div class="sector_grouping_header" style="color: {{ $option->group->colour }}">{{ $option->group->name }}</div>
    @endif
    <label class="checkbox">{{ Form::checkbox($paramSafeName.'[]', $option->id, $isChecked, ['id' => $paramSafeName . '-' . $option->id]) }}
    {{ $option->name }}</label>
    <?php $_lastGroupId = $option->group->id; $_isOpened = true; ?>
@endforeach
@if( $_isOpened === true )
</div>
@endif 