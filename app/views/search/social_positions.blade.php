@foreach( $socialPositions as $socialPosition )
    <label>{{ Form::checkbox('society_position[]', $socialPosition->id, false, ['id' => 'society_position-' . $socialPosition->id]) }}{{ $socialPosition->name }}</label>
@endforeach
