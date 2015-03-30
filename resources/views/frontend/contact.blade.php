@extends('frontend')


@section('content')
    <div class="main-content">
        <div class="col-left">
            <div class="box-contact">
                <div class="col-left">
                    <h1 class="head">Viêm Gan</h1>
                    <ul>
                        <li><span class="icon-1"></span>Địa chỉ: Số xxx</li>
                        <li><span class="icon-2"></span>Điện thoại: xxx</li>
                        <li><span class="icon-3"></span>Fax: 0xxx</li>
                        <li><span class="icon-4"></span>Email: <a href="mailto:info@gmail.com" title="info@gmail.com">info@gmail.com</a> </li>
                        <li><span class="icon-5"></span>Website: <a href="" title="" target="_blank">http://xxx.xxx</a> </li>
                    </ul>
                </div>
                <div class="col-right">
                    <form action="" method="post">
                        <input type="text" name="name" class="txt txt-name" placeholder="Họ và tên">
                        <input type="email" name="email" class="txt txt-email" placeholder="Email">
                        <input type="number" name="phone" class="txt txt-phone" placeholder="Số điện thoại">
                        <textarea name="content" class="txt txt-content" placeholder="Nội dung"></textarea>
                        <input type="submit" value="gửi đi" class="btn btn-submit">
                        <input type="reset" value="xóa hết" class="btn btn-reset">
                    </form>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div><!--//col-left-->
        @include('frontend.right')
    </div>
@endsection