<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class productTypes extends Model {

    protected $table = 'product_types';

	protected $fillable = [
        'type_code',
        'type_name',
        'type_status',
        'type_content'
    ];

}
