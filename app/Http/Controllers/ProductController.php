<?php namespace App\Http\Controllers;

use App\Eloquent\Category;
use App\Eloquent\Types;
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

        $getItems = Types::where('type_code', '=', $type_code)->get();

        return view('productItems', compact(['categorys', 'itemAll', 'getItems']));
    }
}
