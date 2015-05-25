<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class productCategory extends Model {

    protected $table = 'product_category';

    // 取消自動更新 update_at and create_at
    public $timestamps = false;

    public function items() {
        return $this->hasMany('App\productTypes', 'category_id', 'id');
    }

}
