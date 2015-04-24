@extends('admin')

@section('content')
    @include('admin.banner.heading')
    <div class="row">
        <div class="col-lg-6">
            <h2>Add New Banner</h2>
            {!! Form::model($banner = new App\Banner, ['route' => ['admin.banners.store'], 'files' => true]) !!}
            @include('admin.banner.form', ['submitText' => 'Add Banner', 'banners' => $listBanners])
            {!! Form::close() !!}
            @include('errors.list')

        </div>
    </div>
@stop