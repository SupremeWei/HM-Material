<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Images extends Model {

    protected $table = 'product_images';

    /**
     * 查出項目
     *
     * @author Supreme 2015-09-08
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeGetImages($query, $item_code)
    {
        return $query->whereItem_code($item_code);
    }
}
