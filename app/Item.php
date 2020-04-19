<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'unit',
        'price',
        'company_id',
        'description'
    ];

    protected $casts = [
        'price' => 'integer'
    ];
}
