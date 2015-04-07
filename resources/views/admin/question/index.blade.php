@extends('admin')
@section('content')
    @include('admin.question.heading')
    <div class="row" data-ng-controller="QuestionIndex">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Display questions list.
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questions as $question)
                                <tr>
                                    <td>{{$question->id}}</td>
                                    <td>{{str_limit($question->question, 40)}}</td>
                                    <td>{{ str_limit($question->answer, 40) }}</td>
                                    <td><img src="{{url('/files/images/100_' . $question->image)}}" /></td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" data-ng-click="goUrl('/questions/{{$question->id}}/edit')" type="button">Edit</button>
                                        <br>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.questions.destroy', $question->id]]) !!}
                                        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">

                        <div class="col-sm-6">{!! $questions->render() !!}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><button class="btn btn-primary" type="button" data-ng-click="goUrl('/questions/create')">Add</button></div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>
@endsection