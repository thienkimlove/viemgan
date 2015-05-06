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
    <div class="right-in">
        <div class="fb-page" data-href="https://www.facebook.com/viemgan.com.vn" data-width="300" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/viemgan.com.vn"><a href="https://www.facebook.com/viemgan.com.vn">PHÒNG BỆNH GAN</a></blockquote></div></div>
    </div>
    @if (!empty($page) && $page == 'index')
        @include('frontend.most_question')
    @endif

</div><!--//col-right-->