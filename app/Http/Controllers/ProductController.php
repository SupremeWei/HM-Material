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

    public function show($type_code)
    {
        $categorys = Category::all();

        $allTypes = Category::with('types')->get();

        $getType = Types::where('type_code', '=', $type_code)->first();

        $getItems = Items::where('type_code', '=', $type_code)->first();

        $getDocuments = Document::OfItem_code($getItems->item_code)->get();

        $searchDocuments = Document::search('size')->get();

        $getImages = Images::OfItem_code($getItems->item_code)->get();

        return view('productItems', compact(['categorys', 'allTypes', 'getType', 'getItems', 'getDocuments', 'getImages']));
    }
}
