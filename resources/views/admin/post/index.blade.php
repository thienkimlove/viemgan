@extends('admin')
@section('content')
    @include('admin.post.heading')
    <div class="row" data-ng-controller="PostIndex">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List all category links, click to view post list of this category.
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>                               
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $cate)
                            <tr>
                                <td>{{$cate->id}}</td>
                                <td><a href="{{url('admin/categories', $cate->id)}}">{{$cate->name}}</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>
@endsection