<?php namespace App\Http\Controllers\Login;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends BaseController {

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
	public function dologin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

        // run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email'     => Input::get('email'),
				'password'  => Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {
                Session::put('loginAdmin', true);
                return Redirect::to('/');
			} else {
                Session::put('loginAdmin', false);
				// validation not successful, send back to form
				return Redirect::to('login');

			}

		}
	}

    public function dologout() {
        Auth::logout(); // log the user out of our application
        Session::put('loginAdmin', false);
        return Redirect::to('login'); // redirect the user to the login screen
    }
}
