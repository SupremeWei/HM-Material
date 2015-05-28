<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Items extends Model {

    protected $table = 'product_items';

    public $timestamps = false;

    public function document()
    {
        return $this->hasMany('App\Eloquent\Document', 'item_code', 'item_code');
    }

    public function image()
    {
        return $this->hasMany('App\Eloquent\Images', 'item_code', 'item_code');
    }
}
