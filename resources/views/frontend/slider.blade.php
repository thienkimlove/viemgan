<div class="box-slide-product">
    <h3 class="title">
        <span>Sản phẩm tốt cho gan</span>
    </h3>
    @foreach ($top3 as $post)
        <div class="owl-carousel" id="slide-company">
            <div class="item">
                <a href="{{url($post->slug.'.html')}}" title="" class="thumb-img">
                    <img src="{{url('image-cached/size4/' .$post->image)}}" />
                </a>
                <h3>
                    <a href="{{url($post->slug.'.html')}}" title="">{{$post->title}}</a>
                </h3>
            </div>
        </div>
    @endforeach
</div>