<div class="right-in">
    <h3 class="title">
              <span class="gray">
                Hỏi Đáp
              </span>
    </h3>

    <div class="box-medicine cf">
        <div class="data">
            <div class="item">
                    <div class="block-m">
                        <a href="{{url('hoi-dap')}}" class="thumb-img">
                            <img src="{{url('images/question.png')}}" alt="">
                        </a>
                    </div>
                @foreach ($mostQuestions as $question)
                    <div class="list-medicine">
                        <a href="{{url('hoi-dap')}}" class="thumb">
                            <img src="{{url('files/images/100_' . $question->image)}}" width="115" height="80" alt="">
                        </a>

                        <h3><a href="{{url('hoi-dap')}}">{{str_limit($question->question, 40)}}</a></h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>