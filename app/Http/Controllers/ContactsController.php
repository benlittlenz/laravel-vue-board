<?php

namespace App\Http\Controllers;

use App\Notes;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Resources\NoteCollection;
use App\Http\Resources\ClientCollection;


class ContactsController extends Controller
{

    public function index()
    {
        $clients = request()->user()->company->clients()->paginate(6);
        //dd($clients);
        return new ClientCollection($clients);
    }

    public function store()
    {
        $data = request()->validate([
            'company_id' => '',
            'company' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'contact' => '',
            'address' => '',
            'suburb' => '',
            'city' => '',
            'description' => ''
        ]);
        return Client::create($data);
    }

    public function show(Client $client)
    {
        $notes = Notes::where('client_id', $client->id)->get();
        $noteCollection = new NoteCollection($notes);

        $collection = collect($client);
        $merged     = $collection->merge($noteCollection);
        //dd($merged);
        return $merged;
    }

    public function update(Client $client)
    {
        $client->update([
            'company' => request('company'),
            'email' => request('email'),
            'phone' => request('phone'),
            'contact' => request('contact'),
            'address' => request('address'),
            'suburb' => request('suburb'),
            'city' => request('city'),
            'description' => request('description')
        ]);
    }

    public function destroy(Client $client)
    {
        $client->delete();
    }
}
