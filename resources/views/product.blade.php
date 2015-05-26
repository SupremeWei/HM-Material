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
            <div class="row">
                <div class="col-md-3">
                    <ul id="sidebar-nav" class="list-group sidebar-nav-v1">
                        @foreach($categorys as $category)
                            <li class="list-group-item list-toggle">
                                <a class="" href="#collapse-{{ $category->name }}" data-parent="#sidebar-nav" data-toggle="collapse" aria-expanded="false">{{ $category->chinese_name }}</a>
                                <ul id="collapse-{{ $category->name }}" class="collapse" aria-expanded="false">
                                    @foreach($category->items as $item_single)
                                        <li>
                                            <a href="{{ action('ProductController@show', [$category->type_code]) }}">{{ $item_single->type_content }}</a>
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
@endsection