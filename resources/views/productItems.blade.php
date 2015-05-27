@extends('product')

@section('itemInformation')
    <div class="col-md-9">
        <div class="nav-block">
            <!-- Tab Content -->
            <div class="tab-content">
                <!-- Tab Pane -->
                <div class="tab-pane fade active in" id="tab-1">
                    <!-- Tab Pane Image -->
                    <div class="tab-pane-img">
                        <!-- Image -->
                        <a href="#"><img src="{{ url('images/LED/CXXLT1.gif') }}" alt="" class="img-responsive"></a>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <div class="content">
                        <h4>Accusamus</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti corrupti quos dolores.</p>
                    </div>
                    <div class="tab-pane-img">
                        <a href="#" class="bg-img"><img src="{{ 'images/LED-T8light.jpg' }}" alt="" class="img-responsive"></a>
                        <div class="bg-raster"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <div class="tab-pane-img">
                        <a href="#" class="bg-img"><img src="{{ 'images/LED-T8light.jpg' }}" alt="" class="img-responsive"></a>
                        <div class="bg-raster"></div>
                    </div>
                    <div class="content">
                        <h4>Dignissimos</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti corrupti quos dolores.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-4">
                    <div class="tab-pane-img">
                        <a href="#" class="bg-img"><img src="{{ 'images/LED-T8light.jpg' }}" alt="" class="img-responsive"></a>
                        <div class="bg-raster"></div>
                    </div>
                    <div class="content">
                        <h4>Ducimusqui</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti corrupti quos dolores.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-5">
                    <div class="tab-pane-img">
                        <a href="#" class="bg-img"><img src="{{ 'images/LED-T8light.jpg' }}" alt="" class="img-responsive"></a>
                        <div class="bg-raster"></div>
                    </div>
                    <div class="content">
                        <h4>Blanditiis</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti corrupti quos dolores.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-6">
                    <div class="content">
                        <h4>Praesentium</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti corrupti quos dolores.</p>
                    </div>
                    <div class="tab-pane-img">
                        <a href="#" class="bg-img"><img src="{{ 'images/LED-T8light.jpg' }}" alt="" class="img-responsive"></a>
                        <div class="bg-raster"></div>
                    </div>

                </div>
                <div class="tab-pane fade" id="tab-7">
                    <div class="tab-pane-img">
                        <a href="#" class="bg-img"><img src="{{ 'images/LED-T8light.jpg' }}" alt="" class="img-responsive"></a>
                        <div class="bg-raster"></div>
                    </div>
                    <div class="content">
                        <h4>Voluptatum</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti corrupti quos dolores.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-8">
                    <div class="tab-pane-img">
                        <a href="#" class="bg-img"><img src="{{ 'images/LED-T8light.jpg' }}" alt="" class="img-responsive"></a>
                        <div class="bg-raster"></div>
                    </div>
                    <div class="content">
                        <h4>Deleniti</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti corrupti quos dolores.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-9">
                    <div class="tab-pane-img">
                        <a href="#" class="bg-img"><img src="img/ui-270/9.jpg" alt="" class="img-responsive"></a>
                        <div class="bg-raster"></div>
                    </div>
                    <div class="content">
                        <h4>Atquected</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti corrupti quos dolores.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-10">
                    <div class="tab-pane-img">
                        <a href="#" class="bg-img"><img src="img/ui-270/10.jpg" alt="" class="img-responsive"></a>
                        <div class="bg-raster"></div>
                    </div>
                    <div class="content">
                        <h4>Pleasure</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti corrupti quos dolores.</p>
                    </div>
                </div>
            </div>
            <div id="owl-product" class="owl-carousel owl-theme" >
                <div class="item"><img src="{{ 'images/LED/CXXLT1.gif' }}" alt="Owl Image"></div>
                <div class="item"><img src="{{ 'images/LED/GNCNC1.gif' }}" alt="Owl Image"></div>
                <div class="item"><img src="{{ 'images/LED/Led-Red.gif' }}" alt="Owl Image"></div>
                <div class="item"><img src="{{ 'images/LED/LEF-Yellow.gif' }}" alt="Owl Image"></div>
                <div class="item"><img src="{{ 'images/LED/NV3JX1.gif' }}" alt="Owl Image"></div>
                <div class="item"><img src="{{ 'images/LED/TORYB1.gif' }}" alt="Owl Image"></div>
                <div class="item"><img src="{{ 'images/LED/UJOM1.gif' }}" alt="Owl Image"></div>
            </div>
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
                    @foreach($getItems as $items)
                        <tr class="info">
                            <td>{{ $items->type_name }}</td>
                            <td>{{ $items->type_content }}</td>
                            <td>2000</td>
                            <td><a href="{{ url('pdf/HPL-1Wand3W.pdf') }}" target="_blank"><i class="fa fa-file-pdf-o fa-2x" ></i></a></td>
                        </tr>
                    @endforeach
                    <tr class="info">
                        <td>Reflector Type</td>
                        <td>1W High Power LED with Reflector</td>
                        <td>6000</td>
                        <td><a href="{{ url('pdf/HPL-ReflectorType.pdf') }}" target="_blank"><i class="fa fa-file-pdf-o fa-2x"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection