<div class="right-in">
    <h3 class="title">
              <span class="gray">
                Câu hỏi thường gặp
              </span>
    </h3>

    <div class="box-medicine cf">
        <div class="data">
            <div class="item">
                <?php $i = 0; ?>
                @foreach ($mostQuestions  as $question)
                    @if($i==0)
                    <div class="block-m">
                        <a href="{{url('hoi-dap')}}"><img src="{{url('images/img_hoidap.png')}}" alt="Title"></a>
                        <h3><a href="{{url('hoi-dap')}}">{{str_limit($question->question, 15)}}</a></h3>
                        <p>{{str_limit($question->answer, 40)}}</p>
                    </div>
                    @else
                    <div class="list-medicine">
                        <h3><a href="{{url('hoi-dap')}}">{{str_limit($question->question, 15)}}</a></h3>
                    </div>
                    @endif
                    <?php $i ++ ?>
                @endforeach
            </div>
        </div>
    </div>
</div>