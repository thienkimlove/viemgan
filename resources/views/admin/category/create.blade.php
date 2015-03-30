@extends('admin')

@section('content')
    @include('admin.category.heading')
    <div class="row">
        <div class="col-lg-6">
            <h2>Add New Category</h2>
            {!! Form::model(new App\Category, ['route' => ['admin.categories.store']]) !!}
            @include('admin.category.form', ['submitText' => 'Add Category', 'parents' => $parents])
            {!! Form::close() !!}
            @include('errors.list')

        </div>
    </div>
@stop