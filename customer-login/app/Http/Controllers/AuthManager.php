<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    //    
    /**
     * Method login
     *
     * @return void
     */
    function login(){
        return view('login');
    }
    
    /**
     * Method register
     *
     * @return void
     */
    function register(){
        return view('register');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }

        return redirect(route('login'))->with('error', 'Login detials are not valid');

    }
}
