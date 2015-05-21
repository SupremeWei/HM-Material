<!DOCTYPE html>
<html lang="tw">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>翰鎂科技股份有限公司</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,600italic' rel='stylesheet' type='text/css'>
    <link href="{{ 'css/bootstrap/bootstrap.min.css' }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ 'css/style.css' }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ 'css/header.css' }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ 'css/footer.css' }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ 'css/fonts.css' }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ 'css/fontawesome/font-awesome.css' }}" rel="stylesheet" type="text/css" media="all" />
    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
    @yield('css')
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="header-v3">
            <div class="navbar navbar-default mega-menu" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <a class='navbar-brand' href="{{ url('/') }}">
                            <img id="logo-header" alt="Logo" src="{{ url('images/logo.png') }}">
                            </img>
                        </a>
                    </div>

                    <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
                        <div class="container">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/') }}" accesskey="1" title="">首頁</a></li>
                                <li><a href="{{ url('/about') }}" accesskey="2" title="About Hanmei">關於翰鎂</a></li>
                                <li><a href="{{ url('/product') }}" accesskey="3" title="Productions Information">產品資訊</a></li>
                                <li><a href="#" accesskey="4" title="Contact us">聯絡翰鎂</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <a href="#">LED</a>
                                    </li>
                                    <li>
                                        <a href="#">High power</a>
                                    </li>
                                    <li>
                                        <a href="#">LED</a>
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
                                    <a href="#">
                                       關於翰鎂
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                </li>
                                <li>
                                    <a href="#">
                                       產品資訊
                                    </a>
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
                                臺中市梧棲區大村里中央路一段675號
                                <br>
                                電話: 04-26583542
                                <br>
                                傳真: 04-26583574
                                <br>
                                統編: 12797559
                                <br>
                                EMail:
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
                            <p><i class="fa fa-copyright"></i>S.C.R. Cooperation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @yield('js')
</body>
</html>
