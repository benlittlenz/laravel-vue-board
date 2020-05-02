<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => '',
        ]);
        return Company::create($data);
    }
}
