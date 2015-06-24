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
            padding: 0;
            margin: 0;
            background: #74e26c
        }

        div.landing {
            box-shadow: #4F4C4C 0 0 10px;
            width: 960px;
            margin: 0 auto
        }

        .landing_img {
            background: url(images/landing/landing.jpg) no-repeat;
            width: 960px;
            height: 9117px;
            position: relative
        }

        .landing_form {
            background: url(images/landing/landing_form.jpg) no-repeat;
            width: 960px;
            height: 339px
        }

        .landing_bottom {
            background: url(images/landing/landing_bottom.jpg) no-repeat;
            width: 960px;
            height: 360px;
            display: block;
            padding-top: 120px
        }

        .landing_bottom_btn {
            background: url(images/landing/landing_bottom_btn.jpg) no-repeat;
            display: block;
            width: 188px;
            height: 52px;
            margin: 0 auto
        }

        .landing_form form {
            padding-top: 60px;
            padding-left: 105px
        }

        .landing_form .f_left {
            width: 359px;
            margin-right: 27px;
            margin-top: -6px
        }

        .landing_form .f_right {
            width: 426px
        }

        ::-webkit-input-placeholder {
            color: #006636
        }

        :-moz-placeholder {
            color: #006636
        }

        ::-moz-placeholder {
            color: #006636
        }

        :-ms-input-placeholder {
            color: #006636
        }

        .landing_form form .textbox {
            width: 358px;
            height: 47px;
            background: 0 0;
            margin-bottom: 17px;
            padding-left: 10px;
            border: 0;
            font-weight: 700;
            font-size: 21px;
            color: #006636;
            outline: 0
        }

        .landing_form form .textarea {
            width: 425px;
            height: 188px;
            background: 0 0;
            margin-bottom: 18px;
            padding-left: 10px;
            border: 0;
            font-weight: 700;
            font-size: 21px;
            color: #006636;
            outline: 0;
            resize: none
        }

        .landing_form_btn {
            background: url(images/landing/landing_form_btn.jpg) no-repeat;
            width: 122px;
            height: 53px;
            border: 0;
            float: right
        }

        h2.mainLine {
            text-align: center;
            margin-top: 0;
            padding-top: 0;
            font-size: 22px;
            color: #04451A;
            font-weight: 700;
            text-transform: uppercase
        }

        .block-news {
            padding-top: 20px
        }

        .news_title {
            margin-top: -4px
        }

        .top50 {
            padding-top: 55px
        }

        .whileBackground {
            background-color: #fff;
            border: 1px solid #1A8237
        }

        .row {
            margin-left: 0;
            margin-right: 0
        }

        /*Xoay tròn ảnh*/
        .morph img {
            float: left;
            margin-right: 10px;
            -moz-transition: all 1s ease;
            -webkit-transition: all 1s ease;
            -o-transition: all 1s ease;
            transition: all 1s ease;
            overflow: hidden;
            margin-bottom: 10px;
            position: relative;
            z-index: 2
        }

        .morph img:hover {
            -moz-transform: scale(1.08) rotate(20deg) translate(-11px);
            -webkit-transform: scale(1.08) rotate(20deg) translate(-11px);
            -o-transform: scale(1.08) rotate(20deg) translate(-11px);
            transform: scale(1.08) rotate(20deg) translate(-11px);
            cursor: pointer
        }

        .morph1 img:hover {
            -moz-transform: scale(1.08) rotate(20deg) translate(9px);
            -webkit-transform: scale(1.08) rotate(20deg) translate(9px);
            -o-transform: scale(1.08) rotate(20deg) translate(9px);
            transform: scale(1.08) rotate(20deg) translate(9px)
        }

        .fly {
            position: absolute;
            right: 12px;
            top: 350px;
            -moz-animation: float 2000ms infinite ease-in-out;
            -webkit-animation: float 2000ms infinite ease-in-out;
            animation: float 2000ms infinite ease-in-out
        }

        .virut {
            position: absolute;
            right: 288px;
            top: 2006px;
            z-index: 1;
            -moz-animation: float 2000ms infinite ease-in-out;
            -webkit-animation: float 2000ms infinite ease-in-out;
            animation: float 2000ms infinite ease-in-out
        }

        @-webkit-keyframes float {
            0% {
                -webkit-transform: translateY(15px) translateX(2px);
                -moz-transform: translateY(15px) translateX(2px);
                transform: translateY(15px) translateX(2px)
            }
            50% {
                -webkit-transform: translateY(-5px) translateX(-2px);
                -moz-transform: translateY(-5px) translateX(-2px);
                transform: translateY(-5px) translateX(-2px)
            }
            100% {
                -webkit-transform: translateY(15px) translateX(2px);
                -moz-transform: translateY(15px) translateX(2px);
                transform: translateY(15px) translateX(2px)
            }
        }

        @-moz-keyframes float {
            0% {
                -webkit-transform: translateY(15px) translateX(2px);
                -moz-transform: translateY(15px) translateX(2px);
                transform: translateY(15px) translateX(2px)
            }
            50% {
                -webkit-transform: translateY(-5px) translateX(-2px);
                -moz-transform: translateY(-5px) translateX(-2px);
                transform: translateY(-5px) translateX(-2px)
            }
            100% {
                -webkit-transform: translateY(15px) translateX(2px);
                -moz-transform: translateY(15px) translateX(2px);
                transform: translateY(15px) translateX(2px)
            }
        }

        @keyframes float {
            0% {
                -webkit-transform: translateY(15px) translateX(2px);
                -moz-transform: translateY(15px) translateX(2px);
                transform: translateY(15px) translateX(2px)
            }
            50% {
                -webkit-transform: translateY(-5px) translateX(-2px);
                -moz-transform: translateY(-5px) translateX(-2px);
                transform: translateY(-5px) translateX(-2px)
            }
            100% {
                -webkit-transform: translateY(15px) translateX(2px);
                -moz-transform: translateY(15px) translateX(2px);
                transform: translateY(15px) translateX(2px)
            }
        }
    </style>
</head>
<body>
<div class=landing>
    <div class=landing_img>
        <div class=fly><img src="{{url('images/landing/virut.jpg')}}" alt=""></div>
        <div style=width:960px;height:690px></div>
        <div class=morph>
            <div class=morph1 style="margin:20px 0 0 159px;float:left"><img src="{{url('images/landing/vgblg1.png')}}" alt=""></div>
            <div class=morph1 style="margin:-2px 0 0 73px;float:left"><img src="{{url('images/landing/vgblg2.png')}}" alt=""></div>
            <div class=morph1 style="margin:21px 0 0 68px;float:left"><img src="{{url('images/landing/vgblg3.png')}}" alt=""></div>
            <div class=clearfix></div>
        </div>
        <div style=width:960px;height:632px></div>
        <div class=morph>
            <div class=morph1 style="margin:0 0 0 117px;float:left"><img src="{{url('images/landing/cdln1.png')}}" alt=""></div>
            <div class=morph1 style="margin:1px 0 0 105px;float:left"><img src="{{url('images/landing/cdln2.png')}}" alt=""></div>
            <div class=morph1 style="margin:0 0 0 103px;float:left"><img src="{{url('images/landing/cdln3.png')}}" alt=""></div>
            <div class=clearfix></div>
        </div>
        <div style=width:960px;height:340px></div>
        <div class=virut><img src="{{url('images/landing/virut2.png')}}" alt=""></div>
        <div class=morph>
            <div class=morph1 style="margin:2px 0 0 626px"><img src="{{url('images/landing/bieuhien.png')}}" alt=""></div>
            <div class=clearfix></div>
        </div>
        <div style=width:960px;height:618px></div>
        <div class=morph>
            <div class=morph1 style="margin:2px 0 0 139px;float:left"><img src="{{url('images/landing/dlv1.png')}}" alt=""></div>
            <div class=morph1 style="margin:2px 0 0 224px;float:left"><img src="{{url('images/landing/dlv2.png')}}" alt=""></div>
            <div class=clearfix></div>
        </div>
        <div style=width:960px;height:684px></div>
        <div class=morph>
            <div class=morph1 style="margin:2px 90px 0 451px;float:left"><img src="{{url('images/landing/cdnb1.png')}}" alt=""></div>
            <div class=morph1 style="margin:35px 0 0 153px;float:left"><img src="{{url('images/landing/cdnb2.png')}}" alt=""></div>
            <div class=morph1 style="margin:29px 0 0 351px;float:left"><img src="{{url('images/landing/cdnb3.png')}}" alt=""></div>
            <div class=morph1 style="margin:77px 0 0 147px;float:left"><img src="{{url('images/landing/cdnb4.png')}}" alt=""></div>
            <div class=clearfix></div>
        </div>
        <div style=width:960px;height:281px></div>
        <div class=morph>
            <div class=morph1 style="margin:0 0 0 107px;float:left"><img src="{{url('images/landing/visao1.png')}}" alt=""></div>
            <div class=morph1 style="margin:0 0 0 72px;float:left"><img src="{{url('images/landing/visao2.png')}}" alt=""></div>
            <div class=morph1 style="margin:0 0 0 77px;float:left"><img src="{{url('images/landing/visao3.png')}}" alt=""></div>
            <div class=morph1 style="margin:127px 0 0 124px;float:left"><img src="{{url('images/landing/visao4.png')}}" alt=""></div>
            <div class=morph1 style="margin:127px 0 0 54px;float:left"><img src="{{url('images/landing/visao5.png')}}" alt=""></div>
            <div class=morph1 style="margin:129px 0 0 78px;float:left"><img src="{{url('images/landing/visao6.png')}}" alt=""></div>
            <div class=clearfix></div>
        </div>
        <div style=width:960px;height:831px></div>
        <div style=width:960px;height:100px><a href=http://www.viemgan.com.vn/chuyen-muc/nghien-cuu-lam-sang
                                               style=display:block;height:100px target=_blank title="Xem chi tiết"></a>
        </div>
        <div style=width:960px;height:625px></div>
        <div style=width:960px;height:100px><a
                    href=http://www.viemgan.com.vn/nghien-cuu-danh-gia-ket-qua-buoc-dau-cua-vien-giai-doc-gan-tue-linh-trong-ho-tro-dieu-tri-viem-gan-virus-b-man-tinh.html
                    style=display:block;width:284px;float:right;height:65px title="Xem chi tiết" target=_blank></a>
        </div>
        <div style=width:960px;height:1198px></div>
        <div style=width:960px;height:60px><a
                    href=http://www.viemgan.com.vn/tinh-yeu-cua-chong-da-giup-vo-thoat-khoi-benh-gan.html
                    style=display:block;width:154px;float:right;height:40px;margin-right:256px target=_blank
                    title="Xem chi tiết"></a></div>
        <div style=width:960px;height:290px></div>
        <div style=width:960px;height:50px><a
                    href=http://www.viemgan.com.vn/tinh-yeu-cua-chong-da-giup-vo-thoat-khoi-benh-gan.html
                    style=display:block;width:154px;float:right;height:35px;margin-right:256px target=_blank
                    title="Xem chi tiết"></a></div>
        <div style=width:960px;height:100px><a href=http://www.viemgan.com.vn/chuyen-muc/chia-se
                                               style=display:block;width:960px;float:right;height:130px target=_blank
                                               title="Xem chi tiết"></a></div>
    </div>
    <div class=landing_form>
        {!! Form::open(array('url' => 'landing', 'method' => 'POST')) !!}
            <input type=hidden name=action value="Action">
            <div class="pull-left f_left">
                <input name=fullname class=textbox placeholder="Họ và tên">
                <input name=address class=textbox placeholder="Địa chỉ" style="margin-bottom:25px">
                <input name=phone class=textbox placeholder="Số điện thoại" style="margin-bottom:31px">
                <input name=email class=textbox placeholder="Email">
            </div>
            <div class="pull-left f_right">
                <textarea name=content class=textarea placeholder="Nhập nội dung câu hỏi"></textarea>
                <input value="" type=submit class=landing_form_btn>
            </div>
        {!! Form::close() !!}
    </div>
    <div class=landing_bottom>
        <a href="http://tuelinh.vn/he-thong-phan-phoi-ezibo/" class=landing_bottom_btn title="Xem chi tiết"></a>
    </div>
</div>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-40782874-1', 'auto');
    ga('send', 'pageview');

</script>

<!-- Google Code dành cho Thẻ tiếp thị lại -->
<script type="text/javascript">
    var google_tag_params = {
        dynx_itemid: 'REPLACE_WITH_VALUE',
        dynx_itemid2: 'REPLACE_WITH_VALUE',
        dynx_pagetype: 'REPLACE_WITH_VALUE',
        dynx_totalvalue: 'REPLACE_WITH_VALUE',
    };
</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 964027423;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
             src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/964027423/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

</body>
</html>
