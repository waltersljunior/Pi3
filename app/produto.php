<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $fillable = [
        'name',
        'image',
        'desc',
        'price',
        'discount',
        'stock',
    ];
}
