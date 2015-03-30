<nav id="navGlobal">
    <div class="fix">
        <ul class="cf">
            <li>
                <a {{ (!empty($page) && $page == 'index') ? 'class="active"' : '' }} href="{{url('/')}}" title="">
                    <span>TRANG CHỦ</span>
                </a>
            </li>
            @foreach ($categories as $cate)
            <li>
                <a href="{{($cate->subCategories->count() == 0) ? url('chuyen-muc', $cate->slug) : ''}}" title=""><span>{{$cate->name}}</span></a>
                @if ($cate->subCategories->count() > 0)
                 <ul>
                    @foreach ($cate->subCategories as $sub)
                    <li>
                        <a href="{{url('chuyen-muc', $sub->slug)}}" title="{{$sub->name}}"><span>{{$sub->name}}</span></a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
            <li>
                <a {{ (!empty($page) && $page == 'share') ? 'class="active"' : '' }} href="{{url('chia-se')}}" title=""><span>Chia sẻ</span></a>
            </li>
            <li>
                <a {{ (!empty($page) && $page == 'faq') ? 'class="active"' : '' }} href="{{url('hoi-dap')}}" title=""><span>Hỏi đáp</span></a>
            </li>
            <li>
                <a {{ (!empty($page) && $page == 'contact') ? 'class="active"' : '' }} href="{{url('lien-he')}}" title=""><span>Liên hệ</span></a>
            </li>
        </ul>
    </div>
</nav>