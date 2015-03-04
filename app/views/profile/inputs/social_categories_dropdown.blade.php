<select id="society_category" name="society_category[]">

    <option value="0">Category</option>
@foreach( $socialCategories as $socialCategory )

    @if($socialCategory->approved == 0 && $socialCategory->id != $selectedId)
        @continue
    @endif
    <option value="{{$socialCategory->id}}" @if($socialCategory->id == $selectedId){{'selected=""selected"'}}@endif>{{ $socialCategory->name }}</option>
@endforeach
<option value="other">Other</option>
</select>