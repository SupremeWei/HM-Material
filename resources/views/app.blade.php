<!DOCTYPE html>
<html lang="tw">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>翰鎂科技股份有限公司</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,600italic' rel='stylesheet' type='text/css'>
    <link href="{{ url('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ url('css/header.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ url('css/footer.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ url('css/fonts.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ url('css/sky-form.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ url('css/libs.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ url('css/fontawesome/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--[if IE 6]><link href="{{ url('css/default_ie6.css') }}" rel="stylesheet" type="text/css" /><![endif]-->
    @yield('css')

</head>
<body>
    <div class="wrapper">
        <div class="header-v3">
            <nav class="nav navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class='navbar-brand' href="{{ url('/') }}">
                            <img id="logo-header" alt="Logo" src="{{ url('images/logo.png') }}">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/') }}" accesskey="1" title="Home">首頁</a></li>
                            <li><a href="{{ url('/about') }}" accesskey="2" title="About Hanmei">關於翰鎂</a></li>
                            <li><a href="{{ url('/product/') }}" accesskey="3" title="Productions Information">產品資訊</a></li>
                            <li><a href="{{ url('/contact') }}" accesskey="4" title="Contact us">聯絡翰鎂</a></li>
                            @if ($user != null)
                                <li><a href="{{ url('/logout') }}" accesskey="5" title="Contact us">管理者登出</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        @yield('content')

        <div class="footer-v1">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 md-margin-bottom-40">
                            <div class="post">
                                <div class="headline">
                                    <h2>
                                        最新產品
                                    </h2>
                                </div>
                                <ul class="list-unstyled latest-list">
                                    <li>
                                        <a href="{{ url('/product') }}">發光二極體</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/product') }}">High Power LED</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/product') }}">DC-Use Film Capacitors</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 md-margin-bottom-40">
                            <div class="headline">
                                <h2>
                                   網站連結
                                </h2>
                            </div>
                            <ul class="list-unstyled link-list">
                                <li>
                                    <a href="{{ url('/about') }}">關於翰鎂</a>
                                    <i class="fa fa-angle-right"></i>
                                </li>
                                <li>
                                    <a href="{{ url('/product') }}">產品資訊</a>
                                    <i class="fa fa-angle-right"></i>
                                </li>
                                <li>
                                    <a href="{{ url('/contact') }}">聯絡翰鎂</a>
                                    <i class="fa fa-angle-right"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 map-img md-margin-bottom-40">
                            <div class="headline">
                                <h2>
                                    聯絡翰鎂
                                </h2>
                            </div>
                            <address class="md-margin-bottom-40">
                                <i class="fa fa-home"></i> 台中市梧棲區立德街55號
                                <br>
                                <i class="fa fa-phone"></i> 電話: 04-26583542
                                <br>
                                <i class="fa fa-fax"></i> 傳真: 04-26583574
                                <br>
                                <i class="fa fa-money"></i> 統編: 12797559
                                <br>
                                <i class="fa fa-mail-forward"></i> EMail:
                                <a class="" href="mailto:cmyew.hm@msa.hinet.net">
                                    cmyew.hm@msa.hinet.net
                                </a>
                            </address>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p><i class="fa fa-copyright"></i>2015 翰鎂科技股份有限公司擁有</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ url('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/back-to-top.js') }}" ></script>
    <script src="{{ url('js/smoothScroll.js') }}" ></script>
    <script src="{{ url('js/app.js') }}" ></script>
    <script src="{{ url('js/style-switcher.js') }}" ></script>
    <script src="{{ url('js/libs.js') }}" ></script>
    @include('flash')
    @yield('js')
</body>
</html>
