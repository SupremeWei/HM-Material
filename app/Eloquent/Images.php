<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Images extends Model {

    protected $table = 'product_images';

    public function scopeOfItem_code($query, $item_code)
    {
        return $query->whereItem_code($item_code);
    }
}
