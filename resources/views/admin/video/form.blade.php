
<div class="form-group">
     {!! Form::label('code', 'Code Video') !!}
     {!! Form::textarea('code', null, ['class' => 'form-control']) !!}
</div>

  <div class="form-group">
        {!! Form::submit($submitText, ['class' => 'btn btn-primary form-control']) !!}
  </div>