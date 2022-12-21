<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function Index()
    {
        return view('mytemp.pages.welcomeuser', ['data' => User::all()]);
    }
}
