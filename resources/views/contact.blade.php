@extends('app')

@section('css')
@endsection

@section('content')
<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/mail') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">電子郵件</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="inputEmail" placeholder="輸入電子郵件" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">姓名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="inputName" placeholder="輸入姓名">
            </div>
        </div>
        <div class="form-group">
            <label for="inputTel" class="col-sm-2 control-label">電話</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="inputTel" placeholder="09XX">
            </div>
        </div>
        <div class="form-group">
            <label for="inputComment" class="col-sm-2 control-label">意見</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="3" name="inputComment" placeholder="請留下您寶貴的意見..." required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Send Mail</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('js')
@endsection
