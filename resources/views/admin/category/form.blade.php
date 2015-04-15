<div class="form-group">
     {!! Form::label('Name', 'Name') !!}
     {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
     {!! Form::label('Parent', 'Parent') !!}
     {!! Form::select('parent_id', $parents, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('display_homepage_0', 'Is Root?') !!}
    {!! Form::checkbox('display_homepage_0', null, null) !!}
</div>

<div class="form-group">
    {!! Form::label('display_homepage_1', '1st block at homepage') !!}
    {!! Form::checkbox('display_homepage_1', null, null) !!}
</div>

<div class="form-group">
    {!! Form::label('display_homepage_2', '2nd block at homepage') !!}
    {!! Form::checkbox('display_homepage_2', null, null) !!}
</div>

<div class="form-group">
    {!! Form::label('display_below', 'Bottom Block') !!}
    {!! Form::checkbox('display_below', null, null) !!}
</div>


<div class="form-group">
    {!! Form::label('template', 'Choose layout template') !!}
    {!! Form::select('template', $layout, null, ['class' => 'form-control']) !!}
</div>

  <div class="form-group">
        {!! Form::submit($submitText, ['class' => 'btn btn-primary form-control']) !!}
  </div>