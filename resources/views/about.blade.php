@extends('app')

@section('css')
    <link href="{{ 'css/about.css' }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
    <div id="wrapper">
        <div class="container">
            <div id="wrapper">
                <div class="row">
                    <div class="col-sm-8">
                        <h2><i class="fa fa-life-ring fa-2x"></i> 公司簡介</h2>
                        <p>專營LED亮化產品規劃製造，承接LED廣告、照明、亮化及LED相關產品製造販售，燈具.照明.工廠自動化看板、電腦字幕機、智慧型叫號機、數字鐘、電子零件周邊產品。</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{ 'images/6W-light1.jpg' }} " class="img-rounded" alt="Cinque Terre" width="304" height="236">
                    </div>
                </div>
            </div>
            <div id="wrapper">
                <div class="row">
                    <div class="col-sm-4">
                        <img src=" {{ 'images/20Wlight.jpg' }} " class="img-rounded" alt="Cinque Terre" width="304" height="236">
                    </div>
                    <div class="col-sm-8">
                        <h2><i class="fa fa-fighter-jet fa-2x"></i> 目標</h2>
                        <p>志在提升國內光電組件之應用，其中又以電子字幕機與廣告亮化及照明產品為主，商品遍佈全省北中南各區，近幾年已把行銷處點延伸至國際，提供各地產品的需求與服務，多年來，我們一直以專業、服務、品質為我們的一貫精神，提供最好的產品，以及最佳的服務，我們的努力是為產品做責任保證亦是為永續經營做準備。</p>
                    </div>
                </div>
            </div>
            <div id="wrapper">
                <div class="row">
                    <div class="col-sm-8">
                        <h2><i class="fa fa-smile-o fa-2x"></i> 理念</h2>
                        <p>我們仍將秉持一貫的態度，繼續提供顧客高品質的產品與最佳的服務。</p>
                    </div>
                    <div class="col-sm-4">
                        <img src=" {{ 'images/LED-T8light.jpg' }} " class="img-rounded" alt="Cinque Terre" width="304" height="236">
                    </div>
                </div>
            </div>
            <div id="wrapper">
                <div class="row">
                    <div class="col-sm-4">
                        <img src=" {{ 'images/SClight.jpg' }} " class="img-rounded" alt="Cinque Terre" width="304" height="236">
                    </div>
                    <div class="col-sm-8">
                        <h2><i class="fa fa-star-half-full fa-2x"></i> 服務項目</h2>
                        <p>專營LED電腦動畫看板規劃製造，監控錄影機、防盜設備安裝--各式LED燈珠.二級管.電阻.電容及電子大小零件批售.</p>
                        <p>LED電視牆、字幕機、LED(軟硬)條燈、日光燈  層板燈、投光燈、球泡燈、坎燈、筒燈、LED探照燈、神明燈、軌道燈、植物燈、叫號機、LED燈串、模組、護欄管、點光源、工礦燈、洗牆燈、訂製及專業維修</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ 'js/about.js' }}"></script>
@endsection