<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;

    
    public function cartElements() {
        return $this->hasMany('App\CartElement');
    }

    public function cartStatus() {
        return $this->belongsTo('App\CartStatus');
    }
    
    
}
