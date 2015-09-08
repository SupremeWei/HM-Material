<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'product_category';

    // 取消自動更新 update_at and create_at
    public $timestamps = false;

    /**
     * 取得左側的MenuBar, 和 Types
     *
     * @author Supreme 2015-09-08
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getMenuBarList() {
        return $this->hasMany('App\Eloquent\Types', 'category_id', 'id');
    }

    /**
     * 取得生效中的Category分類
     *
     * @author Supreme 2015-09-08
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActiveCategory($query) {
        return $query->where('status', '=', 'A');
    }
}
