<div class="box-article">
    @foreach ($posts as $post)
        <article class="item">
            <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">
                <img src="{{url('files/images/200_'. $post->image)}}" width="220" height="130" alt="{{$post->title}}"/>
            </a>
            <time class="time" datetime="{{$post->updated_at}}0">{{$post->updated_at}}</time>
            <h3>
                <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 50)}}</a>
            </h3>
            <p>{{$post->desc}}</p>
        </article>
    @endforeach
    <div class="clear"></div>
</div><!--//box-article-->
<div class="box-paging">
    {!! with(new \App\Pagination\AcmesPresenter($posts))->render() !!}
    <div class="clear"></div>
</div>