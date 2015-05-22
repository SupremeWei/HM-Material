@extends('app')

@section('css')
    <link href="{{ 'css/about.css' }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
        <div class="container content-sm">
            <div class="text-center margin-bottom-50">
                <h2 class="title-v2 title-center">
                    公司簡介
                    <span class="color-blue">翰鎂</span>
                </h2>
                <p class="space-lg-hor">
                    專營
                    <span class="color-sea">LED亮化</span>
                    產品規劃製造，
                    承接
                    <span class="color-sea">LED廣告、照明、亮化</span>
                    及LED相關產品製造販售
                    <br>
                    燈具、照明、工廠自動化看板、電腦字幕機、智慧型叫號機、數字鐘、電子零件周邊產品。
                </p>
            </div>
            <div class="row news-v2">
                <div class="col-md-4 sm-margin-bottom-30">
                    <div class="news-v2-badge">
                        <img class="img-responsive" src="{{ 'images/LED-T8light.jpg' }}"></img>
                    </div>
                    <div class="news-v2-desc bg-color-light">
                        <h3>目標</h3>
                        <p>志在提升國內光電組件之應用，其中又以電子字幕機與廣告亮化及照明產品為主，商品遍佈全省北中南各區，近幾年已把行銷處點延伸至國際，提供各地產品的需求與服務，多年來，我們一直以專業、服務、品質為我們的一貫精神，提供最好的產品，以及最佳的服務，我們的努力是為產品做責任保證亦是為永續經營做準備。</p>
                    </div>
                </div>
                <div class="col-md-4 sm-margin-bottom-30">
                    <div class="news-v2-badge">
                        <img class="img-responsive" src="{{ 'images/LED-T8light.jpg' }}"></img>
                    </div>
                    <div class="news-v2-desc bg-color-light">
                        <h3>理念</h3>
                        <p>秉持一貫的態度，繼續提供顧客高品質的產品與最佳的服務。</p>
                    </div>
                </div>
                <div class="col-md-4 sm-margin-bottom-30">
                    <div class="news-v2-badge">
                        <img class="img-responsive" src="{{ 'images/washlight.jpg' }}"></img>
                    </div>
                    <div class="news-v2-desc bg-color-light">
                        <h3>服務項目</h3>
                        <p>
                            專營LED電腦動畫看板規劃製造，監控錄影機、防盜設備安裝--各式LED燈珠.二級管.電阻.電容及電子大小零件批售<br>
                            LED電視牆、字幕機、LED(軟硬)條燈、日光燈  層板燈、投光燈、球泡燈、坎燈、筒燈、LED探照燈、神明燈、軌道燈<br>
                            植物燈、叫號機、LED燈串、模組、護欄管、點光源、工礦燈、洗牆燈、訂製及專業維修
                        </p>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('js')
    <script src="{{ 'js/about.js' }}"></script>
@endsection