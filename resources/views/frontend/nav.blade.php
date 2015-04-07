<nav id="navGlobal">
    <div class="fix">
        <ul class="cf">
            <li>
                <a class="{{ (!empty($page) && $page == 'index') ?  'active' : '' }}" href="{{url('/')}}" title="">
                    <span>HOME</span>
                </a>
            </li>
            @foreach ($categories as $cate)
            <li>
                <a class="{{(!empty($page) && ($page == $cate->id | in_array($page, $cate->subCategories->lists('id')))) ? 'active' : ''}}" href="{{($cate->subCategories->count() == 0) ? url('chuyen-muc', $cate->slug) : ''}}" title=""><span>{{$cate->name}}</span></a>
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
                <a class="{{ (!empty($page) && $page == 'faq') ? 'active' : '' }} " href="{{url('hoi-dap')}}" title=""><span>Hỏi đáp</span></a>
            </li>
            <li>
                <a class="{{ (!empty($page) && $page == 'contact') ? 'active' : '' }}" href="{{url('lien-he')}}" title=""><span>Liên hệ</span></a>
            </li>
        </ul>
    </div>
</nav>