@foreach( $socialCategories as $socialCategory )
    <label>{{ Form::checkbox('society_category[]', $socialCategory->id, false, ['id'=> 'society_category-' . $socialCategory->id]) }}{{ $socialCategory->name }}</label>
@endforeach
