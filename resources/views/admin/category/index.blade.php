@extends('admin')
@section('content')
    @include('admin.category.heading')
    <div class="row" data-ng-controller="CategoryIndex">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Display categories list.
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Loai</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $cat)
                            <tr>
                                <td>{{$cat->id}}</td>
                                @if ($cat->display_homepage_0)
                                <td>{{$cat->name}}</td>
                                @else
                                    <td><a href="{{url('admin/categories/'. $cat->id)}}">{{$cat->name}}</a></td>
                                @endif
                                <td>{{ ($cat->parent_id) ? 'Con' : 'Cha'}}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-ng-click="goUrl('/categories/{{$cat->id}}/edit')" type="button">Edit</button>&nbsp;
                                    <button class="btn btn-primary btn-sm" type="button">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button data-ng-click="goUrl('/categories/create')" class="btn btn-primary" type="button">Add</button>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>
@endsection