@extends('frontend')


@section('content')
    <div class="main-content" data-ng-controller="FaqController">
        <div class="col-left">
            <div class="box-contact">
                <div class="col-left">
                    <h1 class="head">Viêm Gan</h1>
                    <ul>
                        <li><span class="icon-1"></span>Điện thoại: 0912571190</li>
                        <li><span class="icon-2"></span>Fax: 04.62824263</li>
                        <li><span class="icon-3"></span>Fax: 0xxx</li>
                        <li><span class="icon-4"></span>Website: <a href="http://viemgan.com.vn" target="_blank">viemgan.com.vn</a></li>
                        <li><span class="icon-5"></span>Email: <a href="mailto:tuvan@giaidocgan.vn">tuvan@giaidocgan.vn</a></li>
                    </ul>
                </div>
                <div class="col-right">
                    {!! Form::open(['method' => 'POST', 'route' => ['saveContact'], 'name' => 'contactForm']) !!}
                        <input type="text" data-ng-model="contact.name" name="name" class="txt txt-name" placeholder="Họ và tên">
                        <input type="email" data-ng-model="contact.email" name="email" class="txt txt-email" placeholder="Email">
                        <input type="number" data-ng-model="contact.phone" name="phone" class="txt txt-phone" placeholder="Số điện thoại">
                        <textarea name="content" data-ng-model="contact.content" class="txt txt-content" placeholder="Nội dung"></textarea>
                        <input type="submit" value="gửi đi" data-ng-click="formSubmit($event)" class="btn btn-submit">
                        <input type="reset" value="xóa hết" data-ng-click="formReset($event)" class="btn btn-reset">
                    {!!Form::close()!!}
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div><!--//col-left-->
        @include('frontend.right')
    </div>
@endsection