<!DOCTYPE html>
<html lang="vi" data-ng-app="Application">
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <link type="image/x-icon" href="favicon.ico" rel="shortcut icon"/>
    <link href="https://plus.google.com/107515763736347546999" rel="publisher"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700italic,800italic,700,800&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('css/frontend.css')}}" type="text/css"/>
    <meta content='CSVN' name='generator'/>
    <title>Trang chủ | Giải độc gan</title>
    <!--[if lte IE 8]>
    <script src="{{url('js/html5.js')}}" type="text/javascript"></script>
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="{{url('css/ie.css')}}" type="text/css"/>
    <![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
</head>
<body class="home">
<div class="wrapper" id="wrapper">
    @include('frontend.header')
    @include('frontend.nav')
    <section class="section fix">
       @yield('content')
    </section><!--//section-->
    @include('frontend.footer')
    <div class="overlay" id="overlay"></div>
    @include('frontend.left_menu')
</div>
<script>
    var Config = {};
    Config.url = '{{ url('/') }}';
    Config.latestPost = {!! !empty($latestPost)? $latestPost->toJson() : "{}" !!};
    Config.rootCategoryLatest = {!! !empty($rootCategoryLatest)? $rootCategoryLatest->toJson() : "{}" !!};
</script>
<script type="text/javascript" src="{{url('/js/frontend.js')}}"></script>
<script type="text/javascript" src="{{url('/js/frontend-custom.js')}}"></script>
</body>
</html>