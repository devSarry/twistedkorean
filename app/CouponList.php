<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CouponList extends Model
{
    protected $fillable = [
        'name', 'email',
    ];
}
