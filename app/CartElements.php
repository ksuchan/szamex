<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CartElements extends Model
{
    use SoftDeletes;

    protected $attributes = [
        'amount', 'price'
    ];
    public function cartStatus() {
        return $this->belongsTo('App\CartStatusElement');
    }

    /*
     * Create one to many relation with CartStatus entity
     */
    public function cart() {
        return $this->belongsTo('App\Cart');
    }
}
