<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    
    protected $attributes = array(
        'order_code', 'total_price', 'delivery_price', 'order_price', 'discount_price', 'delivery_time', 'delivery_address', 'delivery_city'
    );


}
