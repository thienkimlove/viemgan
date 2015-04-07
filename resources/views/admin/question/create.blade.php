@extends('admin')

@section('content')
    @include('admin.question.heading')
    <div class="row">
        <div class="col-lg-6">
            <h2>Add New Question</h2>
            {!! Form::model($question = new App\Question, ['route' => ['admin.questions.store'], 'files' => true]) !!}
            @include('admin.question.form', ['submitText' => 'Add Question'])
            {!! Form::close() !!}
            @include('errors.list')

        </div>
    </div>
@stop