<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class LedInformations extends Model {

    protected $table = 'product_led_informations';

    public $timestamps = false;

    public function scopeGetLedInformations($query, $ledTypesId)
    {
        return $query->whereLed_types_id($ledTypesId);
    }
}
