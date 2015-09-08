<?php namespace App\Http\Controllers;

use App\Eloquent\Category;
use App\Eloquent\LedInformations;
use App\Eloquent\LedTypes;
use App\Eloquent\Types;
use App\Eloquent\Document;
use App\Eloquent\Images;
use App\Eloquent\Items;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController {

	/**
	 * 顯示產品左側的Menu, 並提示使用者選擇產品
	 *
     * @author Supreme 2015-09-08
     * @return Response
	 */
	public function index()
	{
        $productMenu = Category::with('getMenuBarList')->ActiveCategory()->get();

		return view('productIndex', compact(['productMenu']));
	}

    /**
     * Show the product information for user
     *
     * @param string $type_code
     * @author Supreme 2015-09-08
     * @return Response
     */
    public function show($type_code)
    {
        // 查詢左側大類別
        $productMenu = Category::with('types')->get();

        $getType = Types::OfType_code($type_code)->get();

        $getItem = Items::GetItems($type_code)->first();

        $getDocuments = Document::OfItem_code($getItem->item_code)->get();

        $getImages = Images::GetImages($getItem->item_code)->get();

        return view('productItems', compact(['productMenu', 'getType', 'getItem', 'getDocuments', 'getImages']));
    }

    /**
     * Show the product information for user
     *
     * @param string $type_code
     * @author Supreme 2015-09-08
     * @return Response
     */
    public function showLedDetail($type_code)
    {
        $getItem = Items::GetItems($type_code)->first();

        $getLedTypes = LedTypes::GetTypesId($getItem->id)->get();

        $getAllTypesId = array();
        foreach ($getLedTypes as $typesName => $value)
        {
            $getAllTypesId[] = $value->led_types_id;
        }
        $getAllTypesId = array_flatten($getAllTypesId);

        $getInformations = array();
        foreach ($getAllTypesId as $key => $value) {
            $getInformations[] = LedInformations::GetLedInformations($value)->get();
        }

        return view('ledDetail', compact(['getLedTypes', 'getInformations']));
    }

    /**
     * Show the product about highpower
     *
     * @param string $type_code
     * @author Supreme 2015-09-08
     * @return Response
     */
    public function showHighpower($type_code)
    {
        $getItem = Items::GetItems($type_code)->first();

        $getDocuments = Document::OfItem_code($getItem->item_code)->get();

        $getImages = Images::GetImages($getItem->item_code)->get();

        return view('highpower.highpower', compact(['getDocuments', 'getImages']));
    }

    /**
     * Show the LED copy from goods
     *
     * @param string $type_code
     * @author Supreme 2015-09-08
     * @return Response
     */
    public function showLedProduct($type_code)
    {
        $item = Items::GetItems($type_code)->first();

        $ledGroupTitle = Items::find($item->id)->GroupsTitle()->get();

        $ledGroupItems = Items::with('GroupLinkItems')->find($item->id);

        $ledImages = Images::GetImages($item->item_code)->get();

        $ledDocuments = Document::OfItem_code($item->item_code)->get();

        return view('ledGroup.ledProduct', compact(['ledGroupTitle', 'ledGroupItems', 'ledImages', 'ledDocuments']));
    }
}
