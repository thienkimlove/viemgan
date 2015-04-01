@extends('frontend')

@section('content')

<div class="main-content">
    <div class="col-left">
        <div class="title">
            <span>Sản phẩm</span>
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
        <div class="box-form">
            <div class="fb-comments" data-href="{{url($post->slug.'.html')}}" data-numposts="5" data-colorscheme="light"></div>
            <div class="clear"></div>
        </div><!--//box-form-->
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
@section('footer')
    <script type="text/javascript">
        function increaseLikes(postId) {
            $.post(Config.url + '/increaseLikes', { post_id : postId}, function(data){
                console.log(data);
            });
        }
        window.fbAsyncInit = function() {
            FB.Event.subscribe('edge.create',
                    function() {
                        increaseLikes({{$post->id}});
                    }
            );
        };
    </script>
@endsection