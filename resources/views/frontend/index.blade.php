@extends('frontend')

@section('content')
@include('frontend.top_news', ['latestPost' => $latestPost])
<div class="main-content">
    <div class="col-left">
        <div class="box-summary cf">
            <h3 class="title">
                <span>Các bệnh gan</span>
            </h3>
            @if ($first = $rootCategoryLatest->shift())
            <article class="item-summary">
                <a href="{{url($first->slug.'.html')}}" title="" class="thumb-img">
                    <img src="{{url('files/images/400_'.$first->image)}}" alt=""/>
                </a>
                <h3>{{str_limit($first->title, 50)}}</h3>
                <p>{{str_limit($first->desc, 150)}}</p>
            </article>
            @endif
            <div class="item-list">
                @foreach($rootCategoryLatest as $post)
                <article class="block">
                    <a href="{{$post->slug.'.html'}}" class="thumb">
                        <img src="{{url('files/images/100_'.$post->image)}}" width="115" height="80" alt="">
                    </a>
                    <h3><a href="{{$post->slug.'.html'}}">{{str_limit($post->title, 50)}}</a></h3>
                </article>
                @endforeach
            </div>

        </div>
        <div class="box-ad">
            <a href="#"><img src="{{url('images/adv.jpg')}}" alt=""></a>
        </div>
        <div class="box-best-product cf">
            <h3 class="title">
                <span>Cẩm nang bệnh Gan</span>
            </h3>
            <div class="list-product">
                @foreach ($top2 as $post)
                <article class="item">
                    <a href="{{url($post->slug.'.html')}}" class="thumb-img"><img src="{{url('files/images/100_'.$post->image)}}" alt=""></a>
                    <h3><a href="{{url($post->slug.'.html')}}">{{str_limit($post->title, 50)}}</a></h3>
                </article>
                @endforeach
            </div>
        </div>
        <div class="box-medicine cf">
            <h3 class="title">
                <span>Dược liệu với bệnh gan</span>
            </h3>
            @foreach($subData as $category)
            <div class="data">
                <div class="item">
                    <?php $i = 0; ?>
                    @foreach ($category->latestThreePosts as $post)
                    @if ($i == 0)
                    <div class="block-m">
                        <a href="{{url($post->slug.'.html')}}" class="thumb-img">
                            <img src="{{url('files/images/300_'.$post->image)}}" alt="">
                        </a>
                        <h3>
                            <a href="{{url($post->slug.'.html')}}" class="thumb">{{str_limit($post->title, 50)}}</a>
                        </h3>
                        <p>
                          {{str_limit($post->desc, 100)}}
                        </p>
                    </div>
                    @else
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
                     @endif
                    <?php $i ++ ?>
                   @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <div class="box-ad">
            <a href="#"><img src="{{url('images/adv.jpg')}}" alt=""></a>
        </div>
        <div class="clear"></div>
    </div><!--//col-left-->
    @include('frontend.right')
    <div class="clear"></div>
</div><!--//main-content-->
@endsection