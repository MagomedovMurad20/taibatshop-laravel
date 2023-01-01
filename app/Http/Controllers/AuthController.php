<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function GetSignUp()
    {
        return view('mytemp.pages.signup');
    }
    public function PostSignUp(Request $request)
    {
        $user = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('/')->with('info', 'Юзер добавлен');
    }
    public function GetSignIn()
    {
        return view('mytemp.pages.signin');
    }
    public function PostSignIn(Request $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
            return redirect()->back()->with('info', 'Юзер не найден');
        }
        //     $cho = Auth::attempt($request->only(['email', 'password']));
        //    return var_dump($cho);
        return redirect()->route('admin')->with('info', 'Добро пожаловать');
    }
    public function GetSignOut()
    {
        Auth::logout();
        return redirect('/')->with('info', 'Вы вшли из аккаунта');
    }
}
