@extends('frontend')

@section('content')
    <div class="main-content">
        <div class="col-left">
            <div class="title">
                <span>Hiển thị kết quả tìm kiếm cho từ khóa <b>{{$keyword}}</b></span>
            </div>

            @include('frontend.list', ['posts' => $posts])
            <div class="box-ad">
                <a href="#"><img src="{{url('images/adv.jpg')}}" alt=""></a>
            </div>
            <div class="box-medicine cf">
                <div class="data">
                    <div class="item">
                        <div class="title">
                            <span>Dược liệu với bệnh gan</span>
                        </div>
                        <div class="list-medicine">
                            <a href="#" class="thumb">
                                <img src="images/test.jpg" width="115" height="80" alt="">
                            </a>
                            <h3><a href="#">Lỗi kết hợp thuốc, thực phẩm có thể gây chết người</a></h3>
                            <p>
                                Viêm tai giữa là bệnh thường gặp ở mọi lứa tuổi, trẻ em mắc...
                            </p>
                        </div>
                        <div class="list-medicine">
                            <a href="#" class="thumb">
                                <img src="images/test.jpg" width="115" height="80" alt="">
                            </a>
                            <h3><a href="#">Lỗi kết hợp thuốc, thực phẩm có thể gây chết người</a></h3>
                            <p>
                                Viêm tai giữa là bệnh thường gặp ở mọi lứa tuổi, trẻ em mắc...
                            </p>
                        </div>
                        <div class="list-medicine">
                            <a href="#" class="thumb">
                                <img src="images/test.jpg" width="115" height="80" alt="">
                            </a>
                            <h3><a href="#">Lỗi kết hợp thuốc, thực phẩm có thể gây chết người</a></h3>
                            <p>
                                Viêm tai giữa là bệnh thường gặp ở mọi lứa tuổi, trẻ em mắc...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="data">
                    <div class="item">
                        <div class="title">
                            <span>Cẩm nang bệnh gan</span>
                        </div>
                        <div class="list-medicine">
                            <a href="#" class="thumb">
                                <img src="images/test.jpg" width="115" height="80" alt="">
                            </a>
                            <h3><a href="#">Lỗi kết hợp thuốc, thực phẩm có thể gây chết người</a></h3>
                            <p>
                                Viêm tai giữa là bệnh thường gặp ở mọi lứa tuổi, trẻ em mắc...
                            </p>
                        </div>
                        <div class="list-medicine">
                            <a href="#" class="thumb">
                                <img src="images/test.jpg" width="115" height="80" alt="">
                            </a>
                            <h3><a href="#">Lỗi kết hợp thuốc, thực phẩm có thể gây chết người</a></h3>
                            <p>
                                Viêm tai giữa là bệnh thường gặp ở mọi lứa tuổi, trẻ em mắc...
                            </p>
                        </div>
                        <div class="list-medicine">
                            <a href="#" class="thumb">
                                <img src="images/test.jpg" width="115" height="80" alt="">
                            </a>
                            <h3><a href="#">Lỗi kết hợp thuốc, thực phẩm có thể gây chết người</a></h3>
                            <p>
                                Viêm tai giữa là bệnh thường gặp ở mọi lứa tuổi, trẻ em mắc...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-ad">
                <a href="#"><img src="{{url('images/adv.jpg')}}" alt=""></a>
            </div>
            <div class="clear"></div>
        </div><!--//col-left-->
        <div class="col-right">
            <div class="right-in">
                <h3 class="title">
                    <span class="red">Bài viết đọc nhiều nhất</span>
                </h3>
                <div class="box-medicine cf">
                    <div class="data">
                        <div class="item">
                            <div class="block-m">
                                <a href="#" class="thumb-img">
                                    <img src="{{url('images/test.jpg')}}" alt="">
                                </a>
                                <h3>
                                    <a href="#" class="thumb">Lỗi kết hợp thuốc, thực phẩm có thể gây chết người</a>
                                </h3>
                                <p>
                                    Các sản phẩm sữa và thuốc kháng sinh: Một số kháng sinh, bao gồm Cipro tác dụng với canxi, sắt và các khoáng chất khác trong các thực phẩm làm từ sữa.
                                </p>
                            </div>
                            <div class="list-medicine">
                                <a href="#" class="thumb">
                                    <img src="images/test.jpg" width="115" height="80" alt="">
                                </a>
                                <h3><a href="#">Lỗi kết hợp thuốc, thực phẩm có thể gây chết người</a></h3>
                            </div>
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

                <article class="box-rate">
                    <a href="#" class="thumb">
                        <img src="{{url('images/test.jpg')}}" width="115" height="80" alt="">
                    </a>
                    <div class="intro-product">
                        <div class="title-p">Giải độc gan</div>
                        <p>
                            <span class="rate">Đánh giá</span>
                            <span>12 lượt thích</span>
                        </p>
                        <p>
                            <span class="des">Mô tả</span>
                  <span>
                    Các sản phẩm sữa và thuốc kháng sinh: Một số kháng sinh, bao gồm Cipro tác dụng với canxi, sắt và các khoáng chất khác trong các thực phẩm làm từ sữa.
                  </span>
                        </p>
                    </div>
                </article>

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
        <div class="clear"></div>
    </div><!--//main-content-->
@endsection
