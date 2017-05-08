<header class="page-header slider-menu-position">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="50px" data-lg-stick-up-offset="1px" class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth"
             data-lg-layout="rd-navbar-static">
            <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand veil reveal-md-block">
                        <a href="/" class="brand-name"><img style='margin-top: -10px;' width='{{Voyager::setting('logo_width')}}' height='{{Voyager::setting('logo_height')}}' src='{{asset('storage/'.Voyager::setting('logo'))}}' alt='' /></a>
                    </div>
                    <div class="rd-navbar-brand veil-md reveal-tablet-md-inline-block">
                        <a href="/" class="brand-name"><img style='margin-top: -7px;' width='128' height='24' src='{{asset('storage/'.Voyager::setting('logo'))}}' alt='' /></a>
                    </div>
                    <!-- RD Navbar Toggle-->
                    <button data-rd-navbar-toggle=".rd-navbar-collapse-wrap" class="rd-navbar-collapse"><span></span></button>
                </div>

                <div class="rd-navbar-right-side">
                    <div class="rd-navbar-nav-wrap reveal-md-inline-block">
                        <ul class="rd-navbar-nav">
                            <!-- RD Navbar Nav-->
                            {!! Menu::display('main','menu.menu') !!}
                            {{--<li class="active"><a href="/">首页</a></li>--}}
                            {{--<li><a href="about.html">关于我们</a>--}}
                                {{--<ul class="rd-navbar-dropdown">--}}
                                    {{--<li><a href="">帆船俱乐部简介</a></li>--}}
                                    {{--<li><a href="">会员章程</a></li>--}}
                                    {{--<li><a href="http://www.noahsgroup.com/">诺莱仕集团</a></li>--}}
                                    {{--<li><a href="">合作伙伴</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="contacts.html">联系我们</a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>