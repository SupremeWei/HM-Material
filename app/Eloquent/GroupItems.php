<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\File;

class GroupItems extends Model {

    protected $table = 'product_group_items';

    protected $primaryKey = 'group_items_id';

    protected $baseDir = "/hm_file/";

    public $timestamps = false;

    /**
     * @param $group_Items_id
     *
     * @return
     *
     * @author Supreme
     * @date 2015-11-02
     */
    public static function item($group_Items_id)
    {
        return static::where(compact('group_Items_id'))->first();
    }

    /**
     * 與 model Groups 的串連, 屬於一個 group
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * @author Supreme
     * @date 2015-11-19
     */
    public function group()
    {
        return $this->belongsTo('App\Eloquent\Groups', 'id');
    }

    /**
     * 修改 dir, file name
     *
     * @param UploadedFile $file
     * @param int $pdf_dir
     * @param int $group_item_id
     *
     * @return mixed
     *
     * @author Supreme 2015-11-25
     */
    public function updateItemDirAndName(UploadedFile $file, $pdf_dir, $group_item_id)
    {
        $itemData = $this->item($group_item_id);

        $itemData->spec_pdf_dir = $pdf_dir;

        $fileName = $file->getClientOriginalName();

        $itemData->spec_pdf_file_name = $group_item_id."-".$itemData->replaceSpaceToUnderLine($fileName);

        $itemData->save();

        return $itemData;
    }

    /**
     * upload pdf
     *
     * @param UploadedFile $file
     * @param int $group_id
     * @param int $group_item_id
     * @return static
     *
     * @author Supreme 2015-11-25
     */
    public static function uploadPdfFromForm(UploadedFile $file, $group_id, $group_item_id)
    {
        $item = new static;

        $destinationPath = public_path().$item->baseDir . '/' . $group_id;

        $fileName = $file->getClientOriginalName();

        $file->move($destinationPath, $group_item_id."-".$item->replaceSpaceToUnderLine($fileName));

        $item->updateItemDirAndName($file, $group_id, $group_item_id);

        return $item;
    }

    /**
     * 空白替換成 underline
     *
     * @param $filename
     *
     * @return mixed
     *
     * @author Supreme 2015-11-25
     */
    public function replaceSpaceToUnderLine($filename)
    {
        return preg_replace('/\s(?=)/', '_', trim($filename));
    }

    /**
     * 檢查是否有舊有檔案, 先行刪除節省網路上空間
     *
     * @param $group_item_id
     *
     * @author Supreme 2015-11-25
     */
    public static function deleteOldPdfIfExists($group_item_id)
    {
        $item = new static;

        $itemData = $item->item($group_item_id);

        $oldGroupId = $itemData->group_id;

        $oldPdfName = $itemData->spec_pdf_file_name;

        if ($oldPdfName != '' && File::exists(public_path().$item->baseDir."$group_item_id.-$oldGroupId/$oldPdfName")) {
            File::delete(public_path().$item->baseDir."$group_item_id.-$oldGroupId/$oldPdfName");
        }
    }
}
