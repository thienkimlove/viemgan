<div class="col-right">
    @if (!empty($category) && $category->template == 1)
        @include('frontend.most_read_special')
    @else
        @include('frontend.most_read_normal')
    @endif
    @if (empty($page) || $page != 'index')
        @include('frontend.most_rates')
    @endif

    @include('frontend.banner', ['bannerPosition' => 3])

    @if ($video)
        <div class="right-in">
            <h3 class="title">
              <span class="gray">
                Video
              </span>
            </h3>

            <div class="box-video">
                <div class="videoBoxIn">
                    <div class="videoBoxInObject">
                        {!! $video->code !!}
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (!empty($page) && $page == 'index')
        @include('frontend.most_question')
    @endif

</div><!--//col-right-->