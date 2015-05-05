@extends('app')

@section('css')
    <link href="{{ 'css/product.css' }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
    <div id="wrapper">
        <div class="container">
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Column heading</th>
                    <th>Column heading</th>
                    <th>Column heading</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Column content</td>
                        <td>Column content</td>
                        <td>Column content</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Column content</td>
                        <td>Column content</td>
                        <td>Column content</td>
                    </tr>
                    <tr class="info">
                        <td>3</td>
                        <td>Column content</td>
                        <td>Column content</td>
                        <td>Column content</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ 'js/product.js' }}"></script>
@endsection