<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class LedTypes extends Model {

    protected $table = 'product_led_types';

    public $timestamps = false;

    /**
     * relation
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ledInformations()
    {
        return $this->hasMany('App\Eloquent\LedInformations', 'id', 'led_types_id');
    }

    public function items()
    {
        return $this->belongsTo('App\Eloquent\Items', 'items_id', 'id');
    }

    public function scopeGetTypesId($query, $items_id)
    {
        return $query->whereItems_id($items_id);
    }
}
