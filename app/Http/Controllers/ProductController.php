<?php namespace App\Http\Controllers;

use App\Eloquent\Category;
use App\Eloquent\Types;
use App\Eloquent\Document;
use App\Eloquent\Images;
use App\Eloquent\Items;

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

    /**
     * Show the product information for user
     *
     * @return Response
     */
    public function show($type_code)
    {
        $allTypes = Category::with('types')->get();

        $getType = Types::OfType_code($type_code)->get();

        $getItem = Items::OfType_code($type_code)->first();

        $getDocuments = Document::OfItem_code($getItem->item_code)->get();

        $getImages = Images::OfItem_code($getItem->item_code)->get();

        return view('productItems', compact(['allTypes', 'getType', 'getItem', 'getDocuments', 'getImages']));
    }
}
