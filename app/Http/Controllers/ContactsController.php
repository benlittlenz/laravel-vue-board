<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
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
            'company' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'contact' => 'required',
        ]);
        Client::create($data);
    }

    public function show(Client $client)
    {
        //dd($client);
        return $client;
    }

    public function update(Client $client)
    {
        $client->update([
            'company' => request('company'),
            'email' => request('email'),
            'phone' => request('phone'),
            'contact' => request('contact'),
        ]);
    }

    public function destroy(Client $client)
    {
        $client->delete();
    }
}
