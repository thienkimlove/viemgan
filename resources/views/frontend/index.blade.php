@extends('frontend')

@section('content')
@include('frontend.top_news', ['latestPost' => $latestPost])
<div class="main-content">
    <div class="col-left">
        <div class="box-summary cf">
            <h3 class="title">
                <span>Các bệnh về gan</span>
            </h3>
            @if ($first = $rootBlock['posts']->shift())
            <article class="item-summary">
                <a href="{{url($first->slug.'.html')}}" title="" class="thumb-img">
                    <img src="{{url('files/images/400_'.$first->image)}}" alt=""/>
                </a>
                <h3>{{str_limit($first->title, 50)}}</h3>
                <p>{{str_limit($first->desc, 150)}}</p>
            </article>
            @endif
            <div class="item-list">
                @foreach($rootBlock['posts'] as $post)
                <article class="block">
                    <a href="{{$post->slug.'.html'}}" class="thumb">
                        <img src="{{url('files/images/100_'.$post->image)}}" width="115" height="80" alt="">
                    </a>
                    <h3><a href="{{$post->slug.'.html'}}">{{str_limit($post->title, 50)}}</a></h3>
                </article>
                @endforeach
            </div>

        </div>
        @include('frontend.adblock')
        <div class="box-best-product cf">
            <h3 class="title">
                <a href="{{url('chuyen-muc', $top1Block['category']->slug)}}"><span>{{$top1Block['category']->name}}</span></a>
            </h3>
            <div class="list-product">
                @foreach ($top1Block['posts'] as $post)
                <article class="item">
                    <a href="{{url($post->slug.'.html')}}" class="thumb-img"><img src="{{url('files/images/200_'.$post->image)}}" alt="" width="235" height="156"></a>
                    <h3><a href="{{url($post->slug.'.html')}}">{{str_limit($post->title, 50)}}</a></h3>
                </article>
                @endforeach
            </div>
        </div>
        <div class="box-medicine cf">
            <h3 class="title">
                <a href="{{url('chuyen-muc', $top2Block['category']->slug)}}"><span>{{$top2Block['category']->name}}</span></a>
            </h3>

            <div class="data">
                <div class="item">
                    @if ($column = $top2Block['posts']->slice(0, 3))
                        @if ($first = $column->shift())
                            <div class="block-m">
                                <a href="{{url($first->slug.'.html')}}" class="thumb-img">
                                    <img src="{{url('files/images/400_'.$first->image)}}" alt="">
                                </a>
                                <h3>
                                    <a href="{{url($first->slug.'.html')}}" class="thumb">{{str_limit($first->title, 50)}}</a>
                                </h3>
                                <p>
                                  {{str_limit($first->desc, 100)}}
                                </p>
                            </div>
                        @endif
                        @foreach ($column as $post)
                                <div class="list-medicine">
                                    <a href="{{url($post->slug.'.html')}}" class="thumb">
                                        <img src="{{url('files/images/100_'.$post->image)}}" width="115" height="80" alt="">
                                    </a>
                                    <h3><a href="{{url($post->slug.'.html')}}">{{str_limit($post->title, 50)}}</a></h3>
                                    <div class="view fl">
                                        <span class="i-view"></span>
                                        <span class="view-c">{{$post->views}} lượt xem</span>
                                    </div>
                                    <div class="comment">
                                        <i class="i-comment"></i>
                                        <span class="comment-c">{{$post->likes}} lượt thích</span>
                                    </div>
                                </div>
                        @endforeach
                    @endif

                </div>
            </div>

            <div class="data">
                <div class="item">
                    @if ($column = $top2Block['posts']->slice(3, 3))
                        @if ($first = $column->shift())
                            <div class="block-m">
                                <a href="{{url($first->slug.'.html')}}" class="thumb-img">
                                    <img src="{{url('files/images/400_'.$first->image)}}" alt="">
                                </a>
                                <h3>
                                    <a href="{{url($first->slug.'.html')}}" class="thumb">{{str_limit($first->title, 50)}}</a>
                                </h3>
                                <p>
                                    {{str_limit($first->desc, 100)}}
                                </p>
                            </div>
                        @endif
                        @foreach ($column as $post)
                            <div class="list-medicine">
                                <a href="{{url($post->slug.'.html')}}" class="thumb">
                                    <img src="{{url('files/images/100_'.$post->image)}}" width="115" height="80" alt="">
                                </a>
                                <h3><a href="{{url($post->slug.'.html')}}">{{str_limit($post->title, 50)}}</a></h3>
                                <div class="view fl">
                                    <span class="i-view"></span>
                                    <span class="view-c">{{$post->views}} lượt xem</span>
                                </div>
                                <div class="comment">
                                    <i class="i-comment"></i>
                                    <span class="comment-c">{{$post->likes}} lượt thích</span>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>

        </div>
        <div class="clear"></div>
    </div><!--//col-left-->
    @include('frontend.right')
    <div class="clear"></div>
</div><!--//main-content-->
@endsection