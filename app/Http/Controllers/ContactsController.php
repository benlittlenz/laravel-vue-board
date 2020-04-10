<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function store()
    {
        Client::create([
            'name' => request('name')
        ]);
    }
}
