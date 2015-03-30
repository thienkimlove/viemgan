<div class="form-group">
     {!! Form::label('Name', 'Name') !!}
     {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
     {!! Form::label('Parent', 'Parent') !!}
     {!! Form::select('parent_id', $parents, null, ['class' => 'form-control']) !!}
</div>

  <div class="form-group">
        {!! Form::submit($submitText, ['class' => 'btn btn-primary form-control']) !!}
  </div>