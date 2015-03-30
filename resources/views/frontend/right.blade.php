<div class="col-right">
    <div class="right-in">
        <h3 class="title">
            <span class="red">Bài viết đọc nhiều nhất</span>
        </h3>
        <div class="box-medicine cf">
            <div class="data">
                <div class="item">
                    <?php $i = 0 ?>
                    @foreach($mostReads as $post)
                        @if ($i == 0)
                            <div class="block-m">
                                <a href="{{url($post->slug . '.html')}}" class="thumb-img">
                                    <img src="{{url('files/images/200_' . $post->image)}}" alt="">
                                </a>
                                <h3>
                                    <a href="{{url($post->slug . '.html')}}" class="thumb">{{str_limit($post->title, 25)}}</a>
                                </h3>
                                <p>
                                    {{str_limit($post->desc, 115)}}
                                </p>
                            </div>
                        @else
                            <div class="list-medicine">
                                <a href="{{url($post->slug . '.html')}}" class="thumb">
                                    <img src="{{url('files/images/100_' . $post->image)}}" width="115" height="80" alt="">
                                </a>
                                <h3><a href="{{url($post->slug . '.html')}}">{{str_limit($post->title, 25)}}</a></h3>
                            </div>
                        @endif
                        <?php $i ++ ?>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="box-ad">
        <a href="#"><img src="{{url('images/adv.jpg')}}" alt=""></a>
    </div>
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
                        <span>12 lượt thích</span>
                    </p>
                    <p>
                        <span class="des">Mô tả</span>
                  <span>
                   {{$post->desc}}
                  </span>
                    </p>
                </div>
            </article>
        @endforeach
    </div>
    <div class="right-in">
        <h3 class="title">
              <span class="gray">
                Video
              </span>
        </h3>
        <div class="box-video">
            <div class="videoBoxIn">
                <div class="videoBoxInObject">
                    <iframe width="<290></290>" height="280" src="https://www.youtube.com/embed/A21IPZteo-A?rel=0&wmode=opaque" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div><!--//col-right-->