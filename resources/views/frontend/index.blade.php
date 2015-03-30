@extends('frontend')

@section('content')
@include('frontend.top_news', ['latestPost' => $latestPost])
<div class="main-content" data-ng-controller="HomeController">
    <div class="col-left">
        <div class="box-summary cf">
            <h3 class="title">
                <span>Các bệnh gan</span>
            </h3>

            <article class="item-summary">
                <a data-ng-href="<%goPost(rootCategoryTop)%>" title="" class="thumb-img">
                    <img data-ng-src="<%goPostImage(rootCategoryTop, '400_')%>" alt=""/>
                </a>
                <h3 data-ng-bind="rootCategoryTop.title"></h3>
                <p data-ng-bind="rootCategoryTop.desc"></p>
            </article>
            <div class="item-list">
                <article class="block" data-ng-repeat="post in rootCategoryLatest" data-ng-click="changeLatest(post, $event)">
                    <a data-ng-href="<%goPost(post)%>" class="thumb"><img data-ng-src="<%goPostImage(post, '100_')%>" width="115" height="80" alt=""></a>
                    <h3><a data-ng-href="<%goPost(post)%>" data-ng-bind="post.title"></a></h3>
                </article>
            </div>
        </div>
        <div class="box-ad">
            <a href="#"><img src="images/adv.jpg" alt=""></a>
        </div>
        <div class="box-best-product cf">
            <h3 class="title">
                <span>Sản phẩm tốt cho gan</span>
            </h3>
            <div class="list-product">
                @foreach ($top2 as $post)
                <article class="item">
                    <a href="{{url($post->slug.'.html')}}" class="thumb-img"><img src="{{url('files/images/100_'.$post->image)}}" alt=""></a>
                    <h3><a href="{{url($post->slug.'.html')}}">{{$post->title}}</a></h3>
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
                            <a href="{{url($post->slug.'.html')}}" class="thumb">{{$post->title}}</a>
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
                        <h3><a href="{{url($post->slug.'.html')}}">{{$post->title}}</a></h3>
                        <div class="view fl">
                            <span class="i-view"></span>
                            <span class="view-c">45 lượt xem</span>
                        </div>
                        <div class="comment">
                            <i class="i-comment"></i>
                            <span class="comment-c">22 lượt bình luận</span>
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