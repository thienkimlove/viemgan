<div class="right-in">
    <h3 class="title">
        <span class="red">Bài viết đọc nhiều nhất</span>
    </h3>

    <div class="box-medicine cf">
        <div class="data">
            <div class="item">

                @foreach($mostReads as $i => $post)
                    <div class="list-medicine">
                        <a href="{{url($post->slug . '.html')}}" class="thumb">
                            <img src="{{url('render/?p=' . $post->image . '&w=115&h=80')}}" />
                        </a>

                        <h3><a href="{{url($post->slug . '.html')}}">{{str_limit($post->title, 40)}}</a></h3>

                        <div class="number-post">
                            <span class="no{{$i}}">{{$i}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>