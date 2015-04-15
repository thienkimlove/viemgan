<div class="menu-left" id="menu-left">
    <div class="inner">
        <a href="javascript:void(0)" title="Menu" class="btn-menu" id="btn-menu">Menu</a>
        <nav>
            <ul class="nav-mobile">
                <li>
                    <a class="{{ (!empty($page) && $page == 'index') ?  'active' : '' }}" href="{{url('/')}}" title="">
                        <span>HOME</span>
                    </a>
                    <ul>
                        @foreach ($categories as $cate)
                            @if ($cate->subCategories->count() > 0)

                            <li class="{{(!empty($page) && ($page == $cate->id | in_array($page, $cate->subCategories->lists('id')))) ? 'has-sub active' : 'has-sub'}}">
                            @else
                                <li class="{{(!empty($page) && ($page == $cate->id | in_array($page, $cate->subCategories->lists('id')))) ? 'active' : ''}}">
                            @endif
                                <a  href="{{($cate->subCategories->count() == 0) ? url('chuyen-muc', $cate->slug) : ''}}" title=""><span>{{$cate->name}}</span></a>
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
                        <li class="{{ (!empty($page) && $page == 'faq') ? 'active' : '' }} ">
                            <a  href="{{url('hoi-dap')}}" title=""><span>Hỏi đáp</span></a>
                        </li>
                        <li class="{{ (!empty($page) && $page == 'contact') ? 'active' : '' }}">
                            <a  href="{{url('lien-he')}}" title=""><span>Liên hệ</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>