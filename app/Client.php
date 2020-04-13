<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
        'company_id',
        'company',
        'address',
        'suburb',
        'city',
        'description',
        'email',
        'phone',
        'contact'
    ];

}
