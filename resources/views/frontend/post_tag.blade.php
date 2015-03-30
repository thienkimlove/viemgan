<div class="box-tags">
    <span>TAG</span>
    @foreach ($tags as $tag)
    <a href="{{url('tu-khoa', $tag->slug)}}" title="">{{$tag->name}}</a>
    @endforeach
</div><!--//box-tags-->