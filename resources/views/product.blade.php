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
                        @foreach($allTypes as $category)
                            <li class="list-group-item list-toggle">
                                <a class="" href="#collapse-{{ $category->name }}" data-parent="#sidebar-nav" data-toggle="collapse" aria-expanded="false">{{ $category->chinese_name }}</a>
                                <ul id="collapse-{{ $category->name }}" class="collapse" aria-expanded="false">
                                    @foreach($category->types as $type_single)
                                        <li>
                                            @if ($type_single->form_type == 1)
                                                <a href="{{ action('ProductController@show', [$type_single->type_code]) }}" id="{{ $type_single->type_code }}">{{ $type_single->type_content }}</a>
                                            @else
                                                <a name="productLink" href="/" id="{{ $type_single->type_code }}">{{ $type_single->type_content }}</a>
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