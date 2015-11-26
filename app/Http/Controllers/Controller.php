<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	/**
	 * Controller constructor.
	 */
	public function __construct()
	{
		view()->share('signIn', Auth::check());
		view()->share('user', Auth::user());
	}
}
