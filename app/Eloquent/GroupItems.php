<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class GroupItems extends Model {

    protected $table = 'product_group_items';

    protected $primaryKey = 'group_items_id';

    protected $baseDir = "public_path()./hm_file/";

    public $timestamps = false;

    /**
     * @param $groupItem_id
     *
     * @author Supreme
     * @date 2015-11-02
     */
    public static function item($group_Items_id)
    {
        return static::where(compact('group_Items_id'))->first();
    }

    /**
     * 更新 pdf 的 連結檔名
     *
     * @param $groupItemsId
     * @param $pdf_dir
     * @param $pdf_file_name
     *
     * @return boolean
     *
     * @author Supreme
     * @date 2015-11-19
     */
    public static function updatePDFInFormation($groupItemsId, $pdf_dir, $pdf_file_name)
    {
        $updateResult = static::where('group_items_id', '=', $groupItemsId)
                                ->update(array('spec_pdf_dir' => $pdf_dir,
                                               'spec_pdf_file_name' => $pdf_file_name));

        return $updateResult;
    }

    /**
     * 與Groups的串連
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
     * @param UploadedFile $file
     * @param $group_id
     * @param $group_item_id
     * @return mixed
     */
    public function updateItemDirAndName(UploadedFile $file, $group_id, $group_item_id)
    {
        $itemData = $this->item($group_item_id);

        $itemData->spec_pdf_dir = $group_id;

        $fileName = $file->getClientOriginalName();

        $itemData->spec_pdf_file_name = $itemData->replaceSpaceToUnderLine($fileName);

        return $itemData;
    }

    /**
     * @param UploadedFile $file
     * @param $group_id
     * @return static
     */
    public static function uploadPdfFromForm(UploadedFile $file, $group_id, $group_item_id)
    {
        $item = new static;

        $destinationPath = $item->baseDir . '/' . $group_id;

        $fileName = $file->getClientOriginalName();

        $file->move($destinationPath, $item->replaceSpaceToUnderLine($fileName));

        $item->updateItemDirAndName($file, $group_id, $group_item_id);

        return $item;
    }

    /**
     * @param $filename
     * @return mixed
     */
    public function replaceSpaceToUnderLine($filename)
    {
        return preg_replace('/\s(?=)/', '_', trim($filename));
    }

    /**
     * @param $group_item_id
     */
    public function deleteOldPdfIfExists($group_item_id)
    {
        $itemData = $this->item($group_item_id);
        $oldGroupId = $itemData->group_id;
        $oldPdfName = $itemData->spec_pdf_file_name;

        if ($oldPdfName != '' && File::exists($this->baseDir."$oldGroupId/$oldPdfName")) {
            File::delete($this->baseDir."$oldGroupId/$oldPdfName");
        }
    }
}
