<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;

    protected $attributes = array(
        'ordinal_number', 
    );

    /*
     * Create one to many relation with Dish entity
     */
    public function cartElements() {
        return $this->hasMany('App\CartElement');
    }

    /*
     * Create one to many relation with CartStatus entity
     */
    public function cartStatus() {
        return $this->belongsTo('App\CartStatus');
    }
    
    
    // /*
    //     Define accessor for address property
    // */
    // public function getAddressAttribute() {
    //     return $this->street . ' ' . $this->number . ', ' . $this->city;
    // }
}
