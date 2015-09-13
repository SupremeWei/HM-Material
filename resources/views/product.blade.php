@extends('app')

@section('css')
    <link href="{{ url('css/product.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="{{ url('owl-carousel/owl.carousel.css') }}">
    <!-- Default Theme -->
    <link rel="stylesheet" href="{{ url('owl-carousel/owl.theme.css') }}">
@endsection

@section('content')
    <div class="wrapper">
        <div class="container content">
            <div class="row ledInformation">
                <div class="col-md-3">
                    <ul id="sidebar-nav" class="list-group sidebar-nav-v1">
                        @foreach($productMenu as $menu)
                            <li class="list-group-item list-toggle">
                                <a class="" href="#collapse-{{ $menu->name }}" data-parent="#sidebar-nav" data-toggle="collapse" aria-expanded="false">{{ $menu->chinese_name }}</a>
                                <ul id="collapse-{{ $menu->name }}" class="collapse" aria-expanded="false">
                                    @foreach($menu->getMenuBarList as $menuItems)
                                        <li>
                                            @if ($menuItems->form_type == 'ledProductImageWithPDF')
                                                <a name="ledProduct" href="/" id="{{ $menuItems->type_code }}">{{ $menuItems->type_content }}</a>
                                            @elseif ($menuItems->form_type == 'highpower')
                                                <a name="highpower" href="/" id="{{ $menuItems->type_code }}">{{ $menuItems->type_content }}</a>
                                            @elseif ($menuItems->form_type == 'dcuseInformations')
                                                <a name="dcuse" href="/" id="{{ $menuItems->type_code }}">{{ $menuItems->type_content }}</a>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>

                @yield('itemInformation')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ url('owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('js/product.js') }}"></script>
    <script src="{{ url('js/productAjax.js') }}"></script>
@endsection