<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('image', 'Image') !!}
    @if ($post->image)
        <img src="{{url('files/images/100_' .$post->image)}}" />
        <hr>
    @endif
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Category') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('hot', 'Make post display in homepage') !!}
    {!! Form::checkbox('hot', null, null) !!}
</div>

<div class="form-group">
    {!! Form::label('right', 'Make post display in homepage right column') !!}
    {!! Form::checkbox('right', null, null) !!}
</div>

<div class="form-group">
    {!! Form::label('right_block', 'Make post display in "Binh chon san pham"') !!}
    {!! Form::checkbox('right_block', null, null) !!}
</div>


<div class="form-group">
     {!! Form::label('desc', 'Description') !!}
     {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
     {!! Form::label('content', 'Content') !!}
     {!! Form::textarea('content', null, ['class' => 'form-control ckeditor']) !!}
</div>

<div class="form-group">
    {!! Form::label('tag_list', 'Tags') !!}
    {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
</div>

 <div class="form-group">
        {!! Form::submit($submitText, ['class' => 'btn btn-primary form-control']) !!}
  </div>
@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder : 'Choose a tag',
            tags : true //allow to add new tag which not in list.
        });
    </script>
@endsection
