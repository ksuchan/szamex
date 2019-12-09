<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CartElement extends Model
{
    use SoftDeletes;

    // protected $attributes = [
    //     'amount', 'price', 'restaurant_id', 'dishes_id', 'dish'
    // ];
    public function cartElementStatus() {
        return $this->belongsTo('App\CartElementStatus');
    }

    /*
     * Create one to many relation with CartStatus entity
     */
    public function cart() {
        return $this->belongsTo('App\Cart');
    }
    public function dish() {
        return $this->belongsTo('App\Dish');
    }
    public function restaurant() {
        return $this->belongsTo('App\Restaurant');
    }
}
