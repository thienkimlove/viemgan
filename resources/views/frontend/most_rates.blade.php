<div class="right-in">
    <h3 class="title">
        <span class="gray">Bình chọn sản phẩm dành cho viêm gan</span>
    </h3>
    @foreach ($bestRates  as $post)
        <article class="box-rate">
            <a href="{{url($post->slug . '.html')}}" class="thumb">
                <img src="{{url('files/images/100_' . $post->image)}}" width="115" height="80" alt="">
            </a>
            <div class="intro-product">
                <div class="title-p">{{str_limit($post->title, 25)}}</div>
                <p>
                    <span class="rate">Đánh giá</span>
                    <span>{{$post->likes}} lượt thích</span>
                </p>
                <p>
                    <span class="des">Mô tả</span>
                  <span>
                   {{str_limit($post->desc, 70)}}
                  </span>
                </p>
            </div>
        </article>
    @endforeach
</div>