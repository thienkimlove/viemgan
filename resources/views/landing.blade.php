<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{meta}">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Giải độc gan Tuệ Linh</title>

    <!-- Bootstrap core CSS -->
    <link href="http://giaidocgan.vn/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            padding: 0px;
            margin: 0px;
        }

        /*LANDING PAGE*/
        body.landing {
            background: #50B849;
            width: 960px;
            margin: 0 auto;
        }
        .landing_img {
            background: url(images/landing/landing.jpg) no-repeat;
            width: 960px;
            height: 9117px;
        }
        .landing_form {
            background: url(images/landing/landing_form.jpg) no-repeat;
            width: 960px;
            height: 339px;
        }
        .landing_bottom {
            background: url(images/landing/landing_bottom.jpg) no-repeat;
            width: 960px;
            height: 481px;
            display: block;
            padding-top: 120px;

        }
        .landing_bottom_btn {
            background: url(images/landing/landing_bottom_btn.jpg) no-repeat;
            display: block;
            width: 188px;
            height: 52px;
            margin: 0 auto;
        }
        .landing_form form {
            padding-top: 60px;
            padding-left: 105px;
        }
        .landing_form .f_left {
            width: 359px;
            margin-right: 27px;
            margin-top: -6px;

        }
        .landing_form .f_right {
            width: 426px;
        }
        ::-webkit-input-placeholder {
            color: #006636;
        }

        :-moz-placeholder { /* Firefox 18- */
            color: #006636;
        }

        ::-moz-placeholder {  /* Firefox 19+ */
            color: #006636;
        }

        :-ms-input-placeholder {
            color: #006636;
        }
        .landing_form form .textbox{
            width: 358px;
            height: 47px;
            background: transparent;
            margin-bottom: 17px;
            padding-left: 10px;
            border: 0;
            font-weight: bold;
            font-size: 21px;
            color: #006636;
            outline: 0;
            outline: none;
        }
        .landing_form form .textarea{
            width: 425px;
            height: 188px;
            background: transparent;
            margin-bottom: 18px;
            padding-left: 10px;
            border: 0;
            font-weight: bold;
            font-size: 21px;
            color: #006636;
            outline: 0;
            outline: none;
            resize: none;
        }
        .landing_form_btn {
            background: url(images/landing/landing_form_btn.jpg) no-repeat;
            width: 122px;
            height: 53px;
            border: 0;
            float: right;
        }
        h2.mainLine{
            text-align: center;
            margin-top: 0px;
            padding-top: 0px;
            font-size: 22px;
            color: #04451A;
            font-weight: bold;
            text-transform: uppercase;
        }
        .block-news {padding-top: 20px;}
        .news_title {margin-top: -4px;}
        .top50{padding-top: 55px;}
        .whileBackground {background-color: #ffffff; border: solid 1px #1A8237;}
        .row{margin-left: 0px; margin-right: 0px;}
    </style>

</head>

<body class="landing">
<div class="landing_img">
    <div style="width: 960px; height: 6145px;"></div>
    <div style="width: 960px; height: 100px;">
        <a href="http://www.viemgan.com.vn/chuyen-muc/nghien-cuu-lam-sang" style="display: block; height: 100px;" target="_blank" title="Xem chi tiết"></a>
    </div>
    <div style="width: 960px; height: 625px;"></div>
    <div style="width: 960px; height: 100px;">
        <a href="http://www.viemgan.com.vn/nghien-cuu-danh-gia-ket-qua-buoc-dau-cua-vien-giai-doc-gan-tue-linh-trong-ho-tro-dieu-tri-viem-gan-virus-b-man-tinh.html" style="display: block; width: 284px; float: right; height: 65px;" title="Xem chi tiết" target="_blank"></a>
    </div>
    <div style="width: 960px; height: 1198px;"></div>
    <div style="width: 960px; height: 60px;">
        <a href="http://www.viemgan.com.vn/tinh-yeu-cua-chong-da-giup-vo-thoat-khoi-benh-gan.html" style="  display: block;  width: 154px;  float: right;  height: 40px;  margin-right: 256px;" target="_blank" title="Xem chi tiết"></a>
    </div>
    <div style="width: 960px; height: 290px;"></div>
    <div style="width: 960px; height: 50px;">
        <a href="http://www.viemgan.com.vn/tinh-yeu-cua-chong-da-giup-vo-thoat-khoi-benh-gan.html" style="  display: block;  width: 154px;  float: right;  height: 35px;  margin-right: 256px;" target="_blank" title="Xem chi tiết"></a>
    </div>

    <div style="width: 960px; height: 100px;">
        <a href="http://www.viemgan.com.vn/chuyen-muc/chia-se" style="display: block; width: 960px; float: right; height: 130px;" target="_blank" title="Xem chi tiết"></a>
    </div>
</div>
<div class="landing_form">
        {!! Form::open(array('url' => 'landing', 'method' => 'POST')) !!}
        <input type="hidden" name="action" value="Action" />
        <div class="pull-left f_left">
            <input name="fullname" type="text" class="textbox" placeholder="Họ và tên" />
            <input name="address" type="text" class="textbox" placeholder="Địa chỉ"  style="margin-bottom: 25px;"/>
            <input name="phone" type="text" class="textbox" placeholder="Số điện thoại" style="margin-bottom: 31px;" />
            <input name="email" type="text" class="textbox" placeholder="Email" />
        </div>
        <div class="pull-left f_right">
            <textarea name="content" class="textarea" placeholder="Nhập nội dung câu hỏi"></textarea>
            <input type="submit" class="landing_form_btn" value="">
        </div>
     {!! Form::close() !!}
</div>
<div class="landing_bottom">
    <a href="http://tuelinh.vn/he-thong-phan-phoi-ezibo/" class="landing_bottom_btn" title="Xem chi tiết"></a>
</div>
</body>
</html>
