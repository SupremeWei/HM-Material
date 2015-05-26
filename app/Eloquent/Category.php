<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'product_category';

    // 取消自動更新 update_at and create_at
    public $timestamps = false;

    public function items() {
        return $this->hasMany('App\Eloquent\Types', 'category_id', 'id');
    }

}
