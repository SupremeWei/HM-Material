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

    <div class="container content-sm">
        <div class="row margin-bottom-30"></div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-compress service-icon fa-4x"></i>
                    <div class="desc">
                        <h4>系列搜尋</h4>
                        <p>Series</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-compress service-icon fa-4x"></i>
                    <div class="desc">
                        <h4>料號搜尋</h4>
                        <p>Part No.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-compress service-icon fa-4x"></i>
                    <div class="desc">
                        <h4>規格說明</h4>
                        <p>Description</p>
                    </div>
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
