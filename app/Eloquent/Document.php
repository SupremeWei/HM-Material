<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Document extends Model {

    protected $table = 'product_documents';

    public $timestamps = false;

    public function scopeOfItem_code($query, $item_code)
    {
        return $query->whereItem_code($item_code);
    }

    public function scopeSearch($query, $keyWord)
    {
        return $query->where('document_description', 'like', "%$keyWord%");
    }
}
