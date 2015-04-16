<div class="col-right">
    @if (!empty($category) && $category->template == 1)
     @include('frontend.most_read_special')
    @else
     @include('frontend.most_read_normal')
    @endif
    @if (empty($page) || $page != 'index')
        @include('frontend.most_rates')
    @endif

    <div class="right-in">
        <h3 class="title">
              <span class="gray">
                Video
              </span>
        </h3>
        <div class="box-video">
            <div class="videoBoxIn">
                <div class="videoBoxInObject">
                    <iframe width="290" height="280" src="https://www.youtube.com/embed/yij-LYgFhuQ" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    @if (!empty($page) && $page == 'index')
        @include('frontend.most_question')
    @endif

</div><!--//col-right-->