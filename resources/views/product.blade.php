@extends('app')

@section('css')
    <link href="{{ 'css/product.css' }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                    <p class="lead">電子材料</p>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">洗牆燈1</a>
                        <a href="#" class="list-group-item">洗牆燈2</a>
                        <a href="#" class="list-group-item">洗牆燈3</a>
                        <a href="#" class="list-group-item">洗牆燈4</a>
                        <a href="#" class="list-group-item">洗牆燈5</a>
                        <a href="#" class="list-group-item">洗牆燈6</a>
                        <a href="#" class="list-group-item">洗牆燈7</a>
                        <a href="#" class="list-group-item">洗牆燈8</a>
                        <a href="#" class="list-group-item">洗牆燈9</a>
                        <a href="#" class="list-group-item">洗牆燈10</a>
                        <a href="#" class="list-group-item">洗牆燈11</a>
                        <a href="#" class="list-group-item">洗牆燈12</a>
                        <a href="#" class="list-group-item">洗牆燈13</a>
                        <a href="#" class="list-group-item">洗牆燈14</a>
                        <a href="#" class="list-group-item">洗牆燈15</a>
                        <a href="#" class="list-group-item">洗牆燈16</a>
                        <a href="#" class="list-group-item">洗牆燈17</a>
                        <a href="#" class="list-group-item">洗牆燈18</a>
                        <a href="#" class="list-group-item">洗牆燈19</a>
                        <a href="#" class="list-group-item">洗牆燈20</a>
                    </div>
                </div>
                <div class="col-md-9">

                    <div class="thumbnail">
                        <img class="img-responsive" src="{{ 'images/washlight.jpg' }}" alt="">
                    </div>

                    <div class="well">
                        <table class="table table-striped table-hover ">
                            <thead>
                            <tr>
                                <th>Series</th>
                                <th>Applications</th>
                                <th>Load Life</br>(Hours)</th>
                                <th>Spec</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>RV</td>
                                <td>Higher Capacitance Range</td>
                                <td>2000</td>
                                <td><a href="#"><i class="fa fa-file-pdf-o fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td>RV2</td>
                                <td>5.3mmL Standard</td>
                                <td>2000</td>
                                <td><a href="#"><i class="fa fa-file-pdf-o fa-2x"></i></a></td>
                            </tr>
                            <tr class="info">
                                <td>RV3</td>
                                <td>5.3mm / 7.7mmL High C/V</td>
                                <td>10000</td>
                                <td><a href="#"><i class="fa fa-file-pdf-o fa-2x"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ 'js/product.js' }}"></script>
@endsection