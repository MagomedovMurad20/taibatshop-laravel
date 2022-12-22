<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupPageController extends Controller
{
    public function GetSignup()
    {
        return view('mytemp.pages.signup');
    }
    public function store(Request $request)
    {
        $user = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = $request->password;
        $user->save();
        return redirect('/signup')->with('status', 'Юзер добавлен');
    }
}
