<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderElement extends Model
{
    use SoftDeletes;

    
    protected $attributes = array(
         'price', 'amount', 'discount_price', 'delivery_time', 'delivery_address', 'delivery_city'
    );

    public function orderElementStatus() {
        return $this->belongsTo('App\OrderElementStatus');
    }
    public function restaurant() {
        return $this->belongsTo('App\Restaurant');
    }
    public function dish() {
        return $this->belongsTo('App\Dish');
    }
    public function cartElement() {
        return $this->belongsTo('App\CartElement');
    }
}
