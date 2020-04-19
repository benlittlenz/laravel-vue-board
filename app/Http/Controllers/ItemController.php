<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'unit' => 'required',
            'price' => 'required',
            'client_id' => '',
            'company_id' => '',
        ]);

        return Item::create($data);
    }
}
