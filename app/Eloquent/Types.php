<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Types extends Model {

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
        return $this->belongsTo('App\Eloquent\Category');
    }

    public function items() {
        return $this->hasMany('App\Eloquent\Items', 'type_code', 'type_code');
    }

    public function scopeOfType_code($query, $type_code)
    {
        return $query->whereType_code($type_code);
    }
}
