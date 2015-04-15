@extends('frontend')

@section('content')
    <div class="main-content">
        <div class="col-left">
            <div class="title">
                <div class="i-product fl"></div>
                <span class="product"><a href="{{url('chuyen-muc', $category->slug)}}">{{$category->name}}</a></span>
            </div>
           @include('frontend.list', ['posts' => $posts])

            <div class="box-ad">
                <a href="#"><img src="{{url('images/adv.jpg')}}" alt=""></a>
            </div>
            @include('frontend.below')
            <div class="box-ad">
                <a href="#"><img src="{{url('images/adv.jpg')}}" alt=""></a>
            </div>
            <div class="clear"></div>
        </div><!--//col-left-->
        @include('frontend.right')
        <div class="clear"></div>
    </div>
@endsection
