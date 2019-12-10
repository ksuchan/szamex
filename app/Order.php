<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    
    // protected $attributes = array(
    //     'order_code', 'total_price', 'delivery_price', 'order_price', 'discount_price', 'delivery_time', 'delivery_address', 'delivery_city'
    // );

    public function orderStatus() {
        return $this->belongsTo('App\OrderStatus');
    }
    public function restaurant() {
        return $this->belongsTo('App\Restaurant');
    }
    public function cart() {
        return $this->belongsTo('App\Cart');
    }
    public function supplier() {
        return $this->belongsTo('App\Supplier');
    }
}
