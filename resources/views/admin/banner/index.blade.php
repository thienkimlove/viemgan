@extends('admin')
@section('content')
    @include('admin.banner.heading')
    <div class="row" data-ng-controller="PostIndex">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Link</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($banners as $banner)
                                <tr>
                                    <td>{{$banner->id}}</td>
                                    <td><img src="{{url('files/images/'. $banner->image)}}"  /></td>
                                    <td>{{$banner->link}}</td>
                                    <td>{{$listBanners[$banner->position]}}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" data-ng-click="goUrl('/banners/{{$banner->id}}/edit')" type="button">Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="row">

                        <div class="col-sm-6">{!!$banners->render()!!}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><button class="btn btn-primary" type="button" data-ng-click="goUrl('/banners/create')">Add</button></div>
                    </div>


                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>
@endsection