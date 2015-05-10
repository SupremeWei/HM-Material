@extends('app')

@section('css')
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">

    <link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
    <div id="header-featured">
        <div id="owl-banner" class="owl-carousel owl-theme">
            <div class="item"><img src="images/fullimage1.jpg" alt="The Last of us"></div>
            <div class="item"><img src="images/fullimage2.jpg" alt="GTA V"></div>
            <div class="item"><img src="images/fullimage3.jpg" alt="Mirror Edge"></div>
        </div>
    </div>

    <div id="wrapper">
        <div id="featured-wrapper" class="feature-box">
            <div id="featured" class="container">
                <div class="column1 feature-item"><i class="fa fa-search-minus fa-4x"></i>
                    <div class="title">
                        <h2>系列搜尋</h2>
                    </div>
                    <p>Series</p>
                </div>
                <div class="column2 feature-item"><i class="fa fa-search-plus fa-4x"></i>
                    <div class="title">
                        <h2>料號搜尋</h2>
                    </div>
                    <p>Part No.</p>
                </div>
                <div class="column3 feature-item-r"><i class="fa fa-sellsy fa-4x"></i>
                    <div class="title">
                        <h2>規格說明</h2>
                    </div>
                    <p>Description</p>
                </div>
                <div class="column4 feature-item-r"><i class="fa fa-diamond fa-4x"></i>
                    <div class="title">
                        <h2>未知</h2>
                    </div>
                    <p>Don't Know put in.</p>
                </div>
            </div>
        </div>
        <div id="extra" class="container">
            <h2>三執業執照通過</h2>

            <a href="#" class="button">產品資訊</a>
        </div>
    </div>
@endsection

@section('js')
    <!-- Include js plugin -->
    <script src="owl-carousel/owl.carousel.min.js"></script>

    <script src="{{ 'js/home.js' }}"></script>
@endsection
