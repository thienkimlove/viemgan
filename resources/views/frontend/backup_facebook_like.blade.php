@section('footer')
    <script type="text/javascript">
        Config.postId = '{{$post->id}}';
        Config.token = '{{ app('Illuminate\Encryption\Encrypter')->encrypt(csrf_token()) }}';
        function increaseLikes() {

            $.ajaxSetup({
                headers: {
                    'X-XSRF-Token': Config.token
                }
            });

            $.ajax({
                type  : 'POST',
                url   : Config.url + '/increaseLikes',
                data  : { post_id : Config.postId},
                cache : false,
                beforeSend : function() {
                },
                success : function(data) {
                    console.log(data);
                },
                error : function() {
                }
            });
        }
        window.fbAsyncInit = function() {
            FB.Event.subscribe('edge.create',
                    function() {
                        increaseLikes();
                    }
            );
        };
    </script>
@endsection