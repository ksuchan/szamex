<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;

    // protected $attributes = array(
    //     'name', 'street', 'number', 'city'
    // );

    /*
     * Create one to many relation with Dish entity
     */
    public function dishes() {
        return $this->hasMany('App\CartElements');
    }

    // /*
    //  * Create one to many relation with OpeningHours entity
    //  */
    // public function openingHours() {
    //     return $this->hasMany('App\OpeningHours');
    // }

    // /*
    //     Define accessor for address property
    // */
    // public function getAddressAttribute() {
    //     return $this->street . ' ' . $this->number . ', ' . $this->city;
    // }
}
