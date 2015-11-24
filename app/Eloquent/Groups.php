<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model {

    protected $table = 'product_groups';

    public $timestamps = false;

    public function groupitmes()
    {
        return $this->hasMany('App\Eloquent\GroupItems', 'group_id', 'id');
    }
}
