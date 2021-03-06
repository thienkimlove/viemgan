<footer class="footer">
    <div class="fix">
        <div class="box-footer">
            <div class="item item-1">
                <div class="head">Mạng xã hội</div>
                <div class="area-social">
                    <ul class="social">
                        <li>
                            <a href="https://www.facebook.com/viemgan.com.vn" class="i-facebook thumb-img"></a>
                        </li>
                        <li>
                            <a href="#" class="i-tw thumb-img"></a>
                        </li>
                        <li>
                            <a href="#" class="i-youtube thumb-img"></a>
                        </li>
                        <li>
                            <a href="#" class="i-google thumb-img"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item item-2">
                <div class="head">Danh mục</div>
                <ul class="nav-footer">
                    @foreach ($categories as $cate)
                        @if ($cate->subCategories->count() == 0)
                            <li>
                                <a href="{{url('chuyen-muc', $cate->slug)}}" title="{{$cate->name}}"><span>{{$cate->name}}</span></a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="item item-3">
                <div class="head">LIÊN HỆ</div>
                <ul class="nav-footer">
                    <li> Điện thoại: 0912571190</li>
                </ul>
            </div>
            <div class="item item-4">
                <div class="head">Đăng ký nhận tin</div>
                {!! Form::open(['method' => 'POST', 'route' => ['registerEmail'], 'name' => 'registerEmail']) !!}
                    <input type="email" name="email" data-ng-model="email" class="txt txt-email" placeholder="Email">
                    <input type="submit" value="Gửi" data-ng-click="registerEmailSubmit($event)" class="btn btn-submit">
                {!! Form::close()  !!}
            </div>
            <div class="clear"></div>
        </div>
    </div>
</footer><!--//footer-->