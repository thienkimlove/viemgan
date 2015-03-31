<!DOCTYPE html>
<html lang="en" data-ng-app="Admin">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Viem gan Admin</title>

    <!-- Custom Fonts -->
    <link href="{{ url('/css/admin.css') }}" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/css/select2.min.css" rel="stylesheet" />


</head>

<body data-ng-controller="RootController">

<div id="wrapper">

    @include('admin.nav')

    <div id="page-wrapper">
        @include('flash::message')
        @yield('content')
    </div>


</div>
<script>
    var Config = {};
    Config.baseUrl = '{{url('/')}}';
</script>

<script src="{{url('/js/admin.js')}}"></script>
<script src="{{url('/js/libs/ckeditor/ckeditor.js')}}"></script>
<script src="{{url('/js/custom.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/js/select2.min.js"></script>
@yield('footer')
</body>

</html>
