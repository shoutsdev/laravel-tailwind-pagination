<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'users' => User::latest()->paginate(10)
        ];
        return view('welcome',$data);
    }
}
