<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dish extends Model
{
    use SoftDeletes;

    /*
     * Defining the inverse of the relation between this entity and the restaurant entity
     * This is a one to may relation
     */
    public function restaurant() {
        return $this->belongsTo('App\Restaurant');
    }
}
