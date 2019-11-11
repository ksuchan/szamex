<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use SoftDeletes;

    /*
     * Create one to many relation with Dish entity
     */
    public function dishes() {
        return $this->hasMany('App\Dish');
    }

    /*
     * Create one to many relation with OpeningHours entity
     */
    public function openingHours() {
        return $this->hasMany('App\OpeningHours');
    }
}
