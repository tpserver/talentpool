<label class="subject_category">{{ Form::radio('degree_subject', 0, true) }}None</label>
@foreach ( $degreeSubjects as $degreeSubject )
    <label class="subject_category">{{ Form::radio('degree_subject', $degreeSubject->id, false, ['id' => 'degree_subject-'.$degreeSubject->id]) }}{{ $degreeSubject->name }}</label>
@endforeach
