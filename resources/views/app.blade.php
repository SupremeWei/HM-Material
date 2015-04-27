<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>翰鎂科技股份有限公司</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="{{ '/css/default.css' }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ '/css/fonts.css' }}" rel="stylesheet" type="text/css" media="all" />

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
                    <li class="current_page_item"><a href="#" accesskey="1" title="">首頁</a></li>
                    <li><a href="#" accesskey="2" title="">關於翰鎂</a></li>
                    <li><a href="#" accesskey="3" title="">產品資訊</a></li>
                    <li><a href="#" accesskey="4" title="">聯絡我們</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="header-featured"> </div>

    <div id="wrapper">
        <div id="featured-wrapper">
            <div id="featured" class="container">
                <div class="column1"> <span class="icon icon-play"></span>
                    <div class="title">
                        <h2>系列搜尋</h2>
                    </div>
                    <p>Series</p>
                </div>
                <div class="column2"> <span class="icon icon-search"></span>
                    <div class="title">
                        <h2>料號搜尋</h2>
                    </div>
                    <p>Part No.</p>
                </div>
                <div class="column3"> <span class="icon icon-search"></span>
                    <div class="title">
                        <h2>規格說明</h2>
                    </div>
                    <p>Description</p>
                </div>
                <div class="column4"> <span class="icon icon-search"></span>
                    <div class="title">
                        <h2>未知</h2>
                    </div>
                    <p>Don't Know put in.</p>
                </div>
            </div>
        </div>
        <div id="extra" class="container">
            <h2>三執業執照通過</h2>

            <a href="#" class="button">產品資訊</a> </div>
    </div>

    <div id="copyright" class="container">
        <p>S.C.R. Cooperation</p>
    </div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    @yield('js')
</body>
</html>
