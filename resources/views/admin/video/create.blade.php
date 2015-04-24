@extends('admin')

@section('content')
    @include('admin.video.heading')
    <div class="row">
        <div class="col-lg-12">
            <h2>Add New Video</h2>
            {!! Form::model($video = new App\Video, ['route' => ['admin.videos.store']]) !!}
            @include('admin.video.form', ['submitText' => 'Add Video'])
            {!! Form::close() !!}
            @include('errors.list')

        </div>
    </div>
@stop