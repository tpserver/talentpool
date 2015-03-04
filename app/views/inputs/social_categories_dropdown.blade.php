<select id="society_category" name="society_category[]">
    <option value="0">Category</option>
@foreach( $socialCategories as $socialCategory )
    <option value="{{$socialCategory->id}}">{{ $socialCategory->name }}</option>
@endforeach
<option value="other">Other</option>
</select>