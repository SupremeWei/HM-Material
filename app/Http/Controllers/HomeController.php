<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class HomeController extends Controller {
	/**
	 * HomeController constructor.
	 */
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
		return view('home');
	}

}
