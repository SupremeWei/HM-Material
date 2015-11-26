<?php namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller as BaseController;

use App\Http\Requests\LoginAdminRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends BaseController {

    public function __construct()
    {
        parent::__construct();
    }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('auth.login');
	}

	/**
	 * @return mixed
     */
	public function dologin(LoginAdminRequest $request)
	{

        $userdata = array(
            'email'     => $request->get('email'),
            'password'  => $request->get('password')
        );

        if (Auth::attempt($userdata)) {
            Session::put('loginAdmin', true);
            flash()->success('登入成功', '即將進入產品資訊頁面');

            return Redirect::to('product');
        } else {
            Session::put('loginAdmin', false);

            return Redirect::to('login');
        }
	}

    public function dologout() {

        Auth::logout();
        Session::put('loginAdmin', false);
        flash()->success('登出成功', '即將返回登入頁面');

        return Redirect::to('login');
    }
}
