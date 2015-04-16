@extends('frontend')

@section('content')
    @include('frontend.top_news', ['latestPost' => $latestPost])
    <div class="main-content">
        <div class="col-left">
            <div class="box-medicine cf">
                <h3 class="title">
                    <a href="{{url('chuyen-muc', $category->slug)}}"><span>{{$category->name}}</span></a>
                </h3>
                @foreach ($posts as $post)
                <div class="data">
                    <div class="item">
                        <div class="block-m">
                            <a href="{{url($post->slug.'.html')}}" class="thumb-img">
                                <img src="{{url('files/images/400_'. $post->image)}}" alt="{{$post->title}}">
                            </a>
                            <h3>
                                <a href="{{url($post->slug.'.html')}}" class="thumb">{{str_limit($post->title, 50)}}</a>
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="box-paging">
                {!! with(new \App\Pagination\AcmesPresenter($posts))->render() !!}
                <div class="clear"></div>
            </div>
            @include('frontend.adblock')
            <div class="clear"></div>
        </div><!--//col-left-->
        @include('frontend.right')
        <div class="clear"></div>
    </div><!--//main-content-->
@endsection