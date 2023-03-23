<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('Auth.register');
    }
    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->action([AuthController::class, 'showLogin']);
    }
    public function showLogin()
    {
        return view('Auth.login');
    }
    public function login(Request $request)
    {
        if(Auth::attempt(['name'=>$request->name,'password'=>$request->password])){
            return redirect()->action([WebController::class, 'web_index']);

        }
    }

    public function showProfile()
    {
        return view('Auth.register');
    }

}
