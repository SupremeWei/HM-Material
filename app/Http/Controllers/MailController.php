<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class mailController extends BaseController {

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function contact()
    {
        $data ['email'] = Input::get('inputEmail');
        $data ['name']  = Input::get('inputName');
        $data ['tel']   = Input::get('inputTel');
        $data ['comment'] = Input::get('inputComment');

        // 收件者資料
        $userinfo = array(
            'email'=>'my7love7@gmail.com',
            'subject'=>'歡迎使用 Laravel Mail!'
        );
        // 寄送郵件，使用use方法將資料從外部傳送給匿名函式使用
        // maillayout => 要寄送的view
        // $data => view的參數
        Mail::send('maillayout', $data, function($message) use ($userinfo)
        {
            $message->to($userinfo['email'])->subject($userinfo['subject']);
        });

        return view('contact');
    }

}