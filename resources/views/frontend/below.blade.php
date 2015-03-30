<div class="box-medicine cf">
    @foreach ($staticSub as $cate)
    <div class="data">
        <div class="item">
            <div class="title">
                <span>{{$cate->name}}</span>
            </div>
            @foreach($cate->latestThreePosts as $post)
            <div class="list-medicine">
                <a href="{{url($post->slug . '.html')}}" class="thumb">
                    <img src="{{url('files/images/100_' . $post->image)}}" width="115" height="80" alt="">
                </a>
                <h3><a href="{{url($post->slug . '.html')}}">{{str_limit($post->title, 25)}}</a></h3>
                <p>
                    {{$post->desc}}
                </p>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>