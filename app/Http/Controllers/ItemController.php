<?php

namespace App\Http\Controllers;


use App\Item;
use Illuminate\Http\Request;
use App\Http\Resources\ItemCollection;

class ItemController extends Controller
{

    public function index()
    {
        $items = request()->user()->company->items()->paginate(6);

        return new ItemCollection($items);
    }

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

    public function update(Item $item)
    {
        $item->update([
            'name' => request('name'),
            'description' => request('description'),
            'unit' => request('unit'),
            'price' => request('price'),
        ]);
    }

    public function destroy(Item $item)
    {
        $item->delete();
    }
}
