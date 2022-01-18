<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required','email:dns'],
            'password' => ['required']
        ]);

        $remember = $request->has('rm');
        $isAuth = Auth::attempt($credentials, $remember);

        if($isAuth) return redirect()->route('home.list');
        return redirect()->back()->with('fail','Invalid Login Information!');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.list');
    }
}
