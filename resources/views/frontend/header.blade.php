<header class="header" data-ng-controller="HeaderController">
    <div class="header-mid">
        <div class="fix">
            <h1>
                <a href="" title="" class="logo"><img src="{{url('images/logo.png')}}" alt="Giải độc gan"></a>
            </h1>
            <div class="slogan">
                <img src="{{url('images/slogan.png')}}" alt="Slogan">
            </div>
            <div class="area-social cf">
                <ul class="social">
                    <li>
                        <a href="#" class="i-facebook thumb-img"></a>
                    </li>
                    <li>
                        <a href="#" class="i-tw thumb-img"></a>
                    </li>
                    <li>
                        <a href="#" class="i-youtube thumb-img"></a>
                    </li>
                    <li>
                        <a href="#" class="i-google thumb-img"></a>
                    </li>
                </ul>
                <div class="box-find" id="box-find">
                    <form novalidate>
                        <input type="text" data-ng-model="keyword" placeholder="Từ khóa tìm kiếm" name="keyword" class="txt"/>
                        <input type="submit" value="" name="submit" class="btn-find" data-ng-click="search()" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>