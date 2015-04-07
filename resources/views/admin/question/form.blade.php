<div class="form-group">
     {!! Form::label('question', 'Question') !!}
     {!! Form::textarea('question', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('image', 'Image') !!}
    @if ($question->image)
        <img src="{{url('files/images/100_' .$question->image)}}" />
        <hr>
    @endif
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
     {!! Form::label('answer', 'Answer') !!}
     {!! Form::textarea('answer', null, ['class' => 'form-control']) !!}
</div>

  <div class="form-group">
        {!! Form::submit($submitText, ['class' => 'btn btn-primary form-control']) !!}
  </div>