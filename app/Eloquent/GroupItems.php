<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class GroupItems extends Model {

    protected $table = 'product_group_items';

    public $timestamps = false;

    /*
     * @param $query
     * @param $groupItem_id
     *
     * @author Supreme
     * @date 2015-11-02
     */
    public function scopeGroupItemsId($query, $groupItem_id)
    {
        return $query->whereGroup_items_id($groupItem_id)->get();
    }

    /*
     * 更新 pdf 的 連結檔名
     *
     * @param $groupItemsId 產品項目_id
     * @param $query 查詢元件
     * @param $groupItem_id
     *
     * @author Supreme
     * @date 2015-11-02
     */
    public function updatePDFInFormation($groupItemsId, $pdf_dir, $pdf_file_name)
    {
        $updateResult = $this::where('group_items_id', '=',
                                     $groupItemsId)->update(array('spec_pdf_dir' => $pdf_dir,
                                                                  'spec_pdf_file_name' => $pdf_file_name));

        return $updateResult;
    }
}
