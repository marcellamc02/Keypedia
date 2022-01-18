<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function register(Request $request){
        $request -> validate([
            'username' => ['required','min: 6'],
            'email' => ['required','email:dns','unique:users,email'],
            'password' => ['required','min: 8'],
            'confirmPass' => ['required','same:password'],
            'address' => ['required', 'min: 10'],
            'gender' => ['required'],
            'dob' => ['required']
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'gender' => $request->gender,
            'dob' => $request->dob
        ]);

        $isAuth = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if($isAuth) return redirect()->route('home.list');
        return redirect()->back();
    }

}
