<div class="form-group">
    {!! Form::label('image', 'Image') !!}
    @if ($banner->image)
        <img src="{{url('files/images/' .$banner->image)}}" />
        <hr>
    @endif
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('position', 'Vi tri banner') !!}
    {!! Form::select('position', $banners, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('link', 'Link') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

 <div class="form-group">
        {!! Form::submit($submitText, ['class' => 'btn btn-primary form-control']) !!}
  </div>
