@extends('admin')

@section('content')
  @include('admin.banner.heading')
  <div class="row">
      <div class="col-lg-6">
          <h2>Edit Banner</h2>
          {!! Form::model($banner, ['method' => 'PATCH', 'route' => ['admin.banners.update', $banner->id], 'files' => true]) !!}
              @include('admin.banner.form', ['submitText' => 'Edit Banner', 'banners' => $listBanners])
          {!! Form::close() !!}
          @include('errors.list')

      </div>
  </div>
@stop