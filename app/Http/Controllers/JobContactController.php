<?php

namespace App\Http\Controllers;

use App\JobContacts;
use Illuminate\Http\Request;
use App\Http\Resources\JobContactsCollection;

class JobContactController extends Controller
{
    public function index()
    {
        $items = request()->user()->company->jobContacts;

        return new JobContactsCollection($items);
    }

}
