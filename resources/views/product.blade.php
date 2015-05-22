@extends('app')

@section('css')
    <link href="{{ 'css/product.css' }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
    <div class="wrapper">
        <div class="container content">
            <div class="row">
                <div class="col-md-3">
                    <ul id="sidebar-nav" class="list-group sidebar-nav-v1">
                        <li class="list-group-item list-toggle">
                            <a class="" href="#collapse-typography" data-parent="#sidebar-nav" data-toggle="collapse" aria-expanded="false">LED</a>
                            <ul id="collapse-typography" class="collapse" aria-expanded="false" style="height: 0px;">
                                <li>
                                    <a href="#">High power LED</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item list-toggle">
                            <a class="" href="#collapse-icons" data-parent="#sidebar-nav" data-toggle="collapse" aria-expanded="false">LED 1</a>
                            <ul id="collapse-icons" class="collapse" aria-expanded="false" style="height: 0px;">
                                <li>
                                    <a href="#">High power LED</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item list-toggle">
                            <a class="" href="#collapse-abc" data-parent="#sidebar-nav" data-toggle="collapse" aria-expanded="false">LED 2</a>
                            <ul id="collapse-abc" class="collapse" aria-expanded="false" style="height: 0px;">
                                <li>
                                    <a href="#">High power LED</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
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