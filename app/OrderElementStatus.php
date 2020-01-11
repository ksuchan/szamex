<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class OrderElementStatus extends Model
{
    use SoftDeletes;

    protected $attributes = [
        'name'
    ];

}
