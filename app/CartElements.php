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

}
