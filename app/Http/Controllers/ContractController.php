<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ContractController extends BaseController {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('contract');
	}

}
