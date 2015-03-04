<select id="work_sector_select" name="work_sector[]">
    <option value="default">Job Sector</option>
<?php $_lastGroupId = 0;  $_isOpened = false; ?>
@foreach( $workOptions as $option )
    @if($option->approved == 0 && $option->id != $selectedId)
        @continue
    @endif
    @if( $option->category->id != $_lastGroupId && $_lastGroupId != 0 )
        </optgroup>
    @endif
    @if( $option->category->id != $_lastGroupId || $_lastGroupId == 0 )
    <optgroup label="{{ $option->category->name }}">
    @endif
        <option value="{{$option->id}}" @if($option->id == $selectedId){{'selected=selected"'}}@endif>{{ $option->name }}</option>
    <?php $_lastGroupId = $option->category->id; $_isOpened = true; ?>
@endforeach
@if( $_isOpened === true )
    </optgroup>   
@endif
<option value="other">Other</option>
</select>