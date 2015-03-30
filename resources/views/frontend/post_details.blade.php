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
                    <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
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
                <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
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
            <form action="" method="post">
                <textarea required="required" class="txt txt-content" name="content" placeholder="Ý kiến của bạn"></textarea>
                <input required="required" type="text" class="txt txt-name" name="name" placeholder="Họ và tên"/>
                <input required="required" type="email" class="txt txt-email" name="email" placeholder="Email"/>
                <input type="submit" class="btn-submit" value="Gửi"/>
            </form>
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