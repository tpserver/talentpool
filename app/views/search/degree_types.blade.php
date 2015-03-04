<label>{{Form::radio('degree_type', 0, true)}}Any Degree</label>
@foreach ( $degreeTypes as $degreeType )
    <label>{{Form::radio('degree_type', $degreeType->id, false, ['id' => 'degree_type-'.$degreeType->id, 'data-group-name' => 'degree'])}}{{ $degreeType->name }}</label>
@endforeach
