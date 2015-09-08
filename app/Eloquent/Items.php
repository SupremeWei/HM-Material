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

    public function scopeGetItems($query, $type_code)
    {
        return $query->whereType_code($type_code);
    }

    public function GroupLinkItems() {
        return $this->hasManyThrough('App\Eloquent\GroupItems', 'App\Eloquent\Groups', 'items_id', 'group_id');
    }

    /**
     * 藉由 items_id 取得 Groups資料
     *
     * @author Supreme 2015-09-08
     * @return Response
     */
    public function GroupsTitle() {
        return $this->hasMany('App\Eloquent\Groups', 'items_id', 'id');
    }
}
