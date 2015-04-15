<div class="right-in">
    <h3 class="title">
        <span class="red">Bài viết đọc nhiều nhất</span>
    </h3>

    <div class="box-medicine cf">
        <div class="data">
            <div class="item">
                @if ($post = $mostReads->shift())
                    <div class="block-m">
                        <a href="{{url($post->slug . '.html')}}" class="thumb-img">
                            <img src="{{url('files/images/300_' . $post->image)}}" alt="">
                        </a>

                        <h3>
                            <a href="{{url($post->slug . '.html')}}" class="thumb">{{str_limit($post->title, 40)}}</a>
                        </h3>

                        <p>
                            {{str_limit($post->desc,70)}}
                        </p>
                    </div>
                @endif
                @foreach ($mostReads as $post)
                    <div class="list-medicine">
                        <a href="{{url($post->slug . '.html')}}" class="thumb">
                            <img src="{{url('files/images/100_' . $post->image)}}" width="115" height="80" alt="">
                        </a>

                        <h3><a href="{{url($post->slug . '.html')}}">{{str_limit($post->title, 40)}}</a></h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>