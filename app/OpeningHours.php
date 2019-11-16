<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class OpeningHours extends Model
{
    use SoftDeletes;

    protected $attributes = [
        'day_of_week', 'from', 'to'
    ];

    /*
     *  Accessor to properly format day of week
     */
    public function getDayAttribute() {
        return date('D', strtotime("Sunday +{$this->day_of_week} days"));
    }
}
