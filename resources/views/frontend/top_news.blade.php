<div class="box-topnews cf">
    @if ($firstPost = $latestPost->shift())
    <div class="top-news">
        <article class="item">
            <a href="{{url($firstPost->slug.'.html')}}" title="top" class="thumb-img">
                <img src="{{url('render/?p=' . $firstPost->image . '&w=500&h=330')}}" />
            </a>
            <h3>
                <a href="{{url($firstPost->slug.'.html')}}" title="{{$firstPost->title}}">{{str_limit($firstPost->title, 50)}}</a>
            </h3>
        </article>
    </div><!--//box-consult-->
    @endif
    <div class="sub-news">
        <div class="data">
            @foreach ($latestPost as $post)
            <div class="item">
                <a href="{{url($post->slug.'.html')}}" title="" class="thumb-img">                    
                    <img src="{{url('render/?p=' . $post->image . '&w=282&h=167')}}" />
                </a>
                <h3>
                    <a href="{{url($post->slug.'.html')}}"  title="{{$post->title}}">{{str_limit($post->title, 50)}}</a>
                </h3>
            </div>
            @endforeach
            <div class="clear"></div>
        </div>
    </div><!--//box-partner-->
</div>