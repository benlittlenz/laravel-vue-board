<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserCollection;

class UserController extends Controller
{
    public function index()
    {
        $company_id = request()->user()->company->id;

        $users = User::where('company_id', $company_id)->get();

        return new UserCollection($users);
    }

    public function store(Request $request)
    {
        // $data = request()->validate([
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'email' => 'required',
        //     'password' => 'required|min:3'
        // ]);

        return User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => bcrypt(request()->password)
            
        ]);
    }
}
