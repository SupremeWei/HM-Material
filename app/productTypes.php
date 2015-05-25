<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class productTypes extends Model {

    protected $table = 'product_types';

    public $timestamps = false;


	protected $fillable = [
        'type_code',
        'type_name',
        'type_status',
        'type_content'
    ];

    public function types()
    {
        return $this->belongsTo('App\productCategory', 'category_id');
    }
}
