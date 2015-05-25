<?php namespace App\Http\Controllers;

use App\productCategory;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $category = productCategory::find(1);
        $products = $category->items;
		return view('product', compact('products'));
	}

}
