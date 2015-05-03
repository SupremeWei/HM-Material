@extends('app')

@section('content')
    <div id="header-featured"> </div>

    <div id="wrapper">
        <div id="featured-wrapper">
            <div id="featured" class="container">
                <div class="column1"><i class="fa fa-search-minus fa-4x"></i>
                    <div class="title">
                        <h2>系列搜尋</h2>
                    </div>
                    <p>Series</p>
                </div>
                <div class="column2"><i class="fa fa-search-plus fa-4x"></i>
                    <div class="title">
                        <h2>料號搜尋</h2>
                    </div>
                    <p>Part No.</p>
                </div>
                <div class="column3"><i class="fa fa-sellsy fa-4x"></i>
                    <div class="title">
                        <h2>規格說明</h2>
                    </div>
                    <p>Description</p>
                </div>
                <div class="column4"><i class="fa fa-diamond fa-4x"></i>
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
@endsection

@section('js')
    <script src="{{ '/js/home.js' }}"></script>
@endsection
