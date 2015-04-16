@extends('frontend')

@section('content')
    <div class="main-content">
        <div class="col-left">
            <div class="title">
                <span>Hiển thị kết quả tìm kiếm cho từ khóa <b>{{$keyword}}</b></span>
            </div>

            @include('frontend.list', ['posts' => $posts])
            @include('frontend.adblock')
            @include('frontend.below')
            <div class="clear"></div>
        </div><!--//col-left-->
        @include('frontend.right')
        <div class="clear"></div>
    </div><!--//main-content-->
@endsection
