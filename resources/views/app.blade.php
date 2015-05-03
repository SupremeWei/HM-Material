<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>翰鎂科技股份有限公司</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="{{ '/css/bootstrap/bootstrap.css' }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ '/css/default.css' }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ '/css/fonts.css' }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ '/css/fontawesome/font-awesome.css' }}" rel="stylesheet" type="text/css" media="all" />
    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
    @yield('css')
</head>
<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1></span><a href="#">翰鎂</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li id="home"><a href="/" accesskey="1" title="">首頁</a></li>
                    <li id="about"><a href="about" accesskey="2" title="About Hanmei">關於翰鎂</a></li>
                    <li><a href="#" accesskey="3" title="Productions Information">產品資訊</a></li>
                    <li><a href="#" accesskey="4" title="Contact us">聯絡我們</a></li>
                </ul>
            </div>
        </div>
    </div>

    @yield('content')

    <div id="footer-wrapper">
        <div id="footer">
            <div class="row">
                <div class="col-sm-3">
                    <h3>地址</h3>
                    <h6>臺中市梧棲區大村里中央路一段675號</h6>
                </div>
                <div class="col-sm-2">
                    <h3>電話</h3>
                    <h6>04-26583542</h6>
                </div>
                <div class="col-sm-2">
                    <h3>傳真</h3>
                    <h6>04-26583574</h6>
                </div>
                <div class="col-sm-3">
                    <h3>E-Mail</h3>
                    <h6>cmyew.hm@msa.hinet.net</h6>
                </div>
                <div class="col-sm-2">
                    <h3>統編</h3>
                    <h6>12797559</h6>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright" class="container">
        <p><i class="fa fa-copyright"></i>S.C.R. Cooperation</p>
    </div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    @yield('js')
</body>
</html>
