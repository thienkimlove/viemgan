<!DOCTYPE html>
<html lang="vi" data-ng-app="Application">
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <link type="image/x-icon" href="favicon.ico" rel="shortcut icon"/>
    <link href="https://plus.google.com/107515763736347546999" rel="publisher"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700italic,800italic,700,800&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('css/frontend.css')}}" type="text/css"/>
    <meta content='CSVN' name='generator'/>
    <title>{{!empty($meta_title)? $meta_title : 'Viemgan.com.vn'}}</title>
    <!--[if lte IE 8]>
    <script src="{{url('js/html5.js')}}" type="text/javascript"></script>
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="{{url('css/ie.css')}}" type="text/css"/>
    <![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="description" content="{{!empty($meta_desc)? $meta_desc : 'Website về sản phẩm và bài viết liên quan tới bệnh gan'}}" />
    <meta name="keyword" content="{{!empty($meta_keywords)? $meta_keywords : 'viêm gan, virus, bài viết, hướng dẫn'}}" />
</head>
<body class="home" data-ng-controller="MainController">
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '869970546392508',
            xfbml      : true,
            version    : 'v2.3'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=697301236951060&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
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
</script>
<script type="text/javascript" src="{{url('/js/frontend.js')}}"></script>
<script type="text/javascript" src="{{url('/js/frontend-custom.js')}}"></script>
@include('frontend.outside')
@yield('footer')
</body>
</html>