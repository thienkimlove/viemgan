@if ($displayBanners->count() > 0)

 @foreach ($displayBanners as $banner)
    @if ($banner->position == $bannerPosition)
        <div class="box-ad">
            <a href="{{$banner->link}}"><img src="{{url('files/images/'. $banner->image)}}" /></a>
        </div>
    @endif
 @endforeach
@endif