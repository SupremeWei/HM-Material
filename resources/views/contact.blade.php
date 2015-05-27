@extends('app')

@section('css')
    <link href="{{ url('css/contact.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ url('css/sky-form.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
<div class="wrapper">
    <div class="container content">
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
                <div class="headline">
                    <h2>聯絡我們</h2>
                </div>
                <p>翰鎂科技為您服務</p>
                <p>服務</p>
                <br>

                <form id="sky-form3" class="sky-form sky-changes-3" role="form" method="POST" action="{{ url('/mail') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="row">
                            <section class="col col-6">
                                <label class="label">姓名</label>
                                <label class="input">
                                    <i class="icon-append fa fa-user"></i>
                                    <input type="text" class="form-control" name="inputName" placeholder="請輸入姓名">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="label">電子郵件</label>
                                <label class="input">
                                    <i class="icon-append fa fa-envelope-o"></i>
                                    <input type="email" class="form-control" name="inputEmail" placeholder="輸入電子郵件" required>
                                </label>
                            </section>
                        </div>

                        <section>
                            <label class="label">手機號碼</label>
                            <label class="input">
                                <i class="icon-append fa fa-phone"></i>
                                <input type="text" class="form-control" name="inputTel" placeholder="091012345678">
                            </label>
                        </section>

                        <section>
                            <label class="label">問題回應</label>
                            <label class="input">
                                <i class="icon-append fa fa-comments"></i>
                                <textarea class="form-control" rows="3" name="inputComment" placeholder="請留下您寶貴的意見..." required></textarea>
                            </label>
                        </section>
                    </fieldset>

                    <footer>
                        <button type="submit" class="btn-u">寄出</button>
                    </footer>
                </form>
            </div>
            <div class="col-md-3">
                <!-- 營業時間 -->
                <div class="headline">
                    <h2>營業時間</h2>
                </div>
                <ul class="list-unstyled margin-bottom-30">
                    <li><strong>平日:</strong> 10am to 8pm</li>
                    <li><strong>假日:</strong> 休息</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
