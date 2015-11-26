<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class AboutController extends BaseController {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('about');
	}

}
