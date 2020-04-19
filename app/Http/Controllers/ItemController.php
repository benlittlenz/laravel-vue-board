<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
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
