<?php namespace App\Http\Controllers;

use App\Eloquent\Category;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categorys = Category::all();

        $itemAll = Category::with('items')->get();

		return view('product', compact(['categorys', 'itemAll']));
	}

    public function show($type_code)
    {
        $categorys = Category::all();

        $itemAll = Category::with('items')->get();

        return view('productItems', compact(['categorys', 'itemAll']));
    }
}
