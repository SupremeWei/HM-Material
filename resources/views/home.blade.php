@extends('app')

@section('css')
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">

    <link rel="stylesheet" href="css/homepage.css">
@endsection

@section('content')
    <div id="header-featured">
        <div id="owl-banner" class="owl-carousel owl-theme">
            <div class="item"><img src="images/fullimage1.jpg" alt="The Last of us"></div>
            <div class="item"><img src="images/fullimage2.jpg" alt="GTA V"></div>
            <div class="item"><img src="images/fullimage3.jpg" alt="Mirror Edge"></div>
        </div>
    </div>

    <div class="container content">
        <div class="shadow-wrapper">
            <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                <h2>翰鎂提供完善的產品</h2>
                <p>商品的選擇性上多樣性</p>
            </div>
        </div>
            <div class="row margin-bottom-20">
                <div class="col-md-3 col-sm-6">
                    <a href="{{ url('/') }}">
                        <div class="service-block service-block-default">
                            <i class="icon-custom icon-lg icon-color-blue fa fa-home"></i>
                            <h2 class="heading-md">首頁</h2>
                            <p>詳細資訊盡在首頁</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ url('/') }}" style="text-decoration:none;">
                        <div class="service-block service-block-default">
                            <i class="icon-custom icon-lg icon-color-yellow fa fa-building"></i>
                            <h2 class="heading-md">關於翰鎂</h2>
                            <p>瞭解更多翰鎂科技有限公司</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ url('/') }}" style="text-decoration:none;">
                        <div class="service-block service-block-default">
                            <i class="icon-custom icon-lg icon-color-red fa fa-server"></i>
                            <h2 class="heading-md">產品資訊</h2>
                            <p>豐富產品提供給客戶</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ url('/') }}" style="text-decoration:none;">
                        <div class="service-block service-block-default">
                            <i class="icon-custom icon-lg icon-color-green fa fa-envelope"></i>
                            <h2 class="heading-md">聯絡翰鎂</h2>
                            <p>歡迎對公司的意見與指教</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Include js plugin -->
    <script src="owl-carousel/owl.carousel.min.js"></script>

    <script src="{{ 'js/home.js' }}"></script>
@endsection
