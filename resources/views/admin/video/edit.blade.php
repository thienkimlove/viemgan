@extends('admin')

@section('content')
  @include('admin.video.heading')
  <div class="row">
      <div class="col-lg-12">
          <h2>Edit</h2>
          {!! Form::model($video, ['method' => 'PATCH', 'route' => ['admin.videos.update', $video->id]]) !!}
              @include('admin.video.form', ['submitText' => 'Edit Video'])
          {!! Form::close() !!}
          @include('errors.list')

      </div>
  </div>
@stop