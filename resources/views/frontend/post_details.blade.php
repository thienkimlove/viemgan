@extends('frontend')

@section('content')

<div class="main-content">
    <div class="col-left">
        <div class="title">
            <span>{{$post->category->name}}</span>
        </div>
        <article class="box-detail">
            <h1 class="head">{{$post->title}}</h1>
            <div class="utility">
                <div class="item">
                    <div class="fb-like"  data-href="{{url($post->slug.'.html')}}" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
                </div>
                <div class="item">
                    <div class="g-plusone" data-size="medium"></div>
                </div>
                <div class="info">
                    <time class="time" datetime="{{$post->updated_at}}">{{$post->updated_at}}</time>
                </div>
                <div class="clear"></div>
            </div>
            {!!$post->content!!}
        </article><!--//box-detail-->
        @include('frontend.banner', ['bannerPosition' => 4])
        <div class="box-share">
            <div class="item">
                <div class="fb-like" data-href="{{url($post->slug.'.html')}}" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
        </div>
            <div class="item">
                <div class="g-plusone" data-size="medium"></div>
            </div>
            <div class="clear"></div>
        </div><!--//box-share-->
      @if ($post->tags->count() > 0)
      @include('frontend.post_tag', ['tags' => $post->tags])
      @endif
        <div class="box-releated">
            <h3>Tin liên quan</h3>
            <ul class="list">
                @foreach ($related as $post)
                <li><a href="{{url($post->slug.'.html')}}">{{$post->title}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="box-form">
            <div class="fb-comments" data-href="{{url($post->slug.'.html')}}" data-numposts="5" data-colorscheme="light"></div>
            <div class="clear"></div>
        </div><!--//box-form-->
        @include('frontend.below')
        <div class="clear"></div>
    </div><!--//col-left-->
    @include('frontend.right')
    <div class="clear"></div>
</div>
@endsection