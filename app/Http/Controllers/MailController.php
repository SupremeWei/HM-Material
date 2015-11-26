<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
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
        $data ['mail'] = Input::get('mail');
        $data ['name']  = Input::get('name');
        $data ['tel']   = Input::get('tel');
        $data ['comment'] = Input::get('comment');
        
        $subject =  mb_substr($data['comment'], 0, 20, "utf-8");

        // 收件者資料
        $userinfo = array(
            'email'=>'my7love7@gmail.com',
            'subject'=>$subject
        );

        $rtndata ['status'] = 1;
        $rtndata ['msg']    = '';
        try {
            // 寄送郵件，使用use方法將資料從外部傳送給匿名函式使用
            // maillayout => 要寄送的view
            // $data => view的參數
            Mail::send('maillayout', $data, function($message) use ($userinfo)
            {
                $message->to($userinfo['email'])->subject($userinfo['subject']);
            });
        }
        catch (ErrorException $e) {
            $rtndata ['status'] = '0';
            $rtndata ['msg'] = $e->getMessage();
        }

        return response ()->json ( $rtndata );
    }

}