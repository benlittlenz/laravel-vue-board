<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'company' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'contact' => 'required',
        ]);
        Client::create($data);
    }
}
